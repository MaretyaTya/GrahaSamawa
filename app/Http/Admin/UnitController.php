<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unit;
use App\Models\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();
        return view('admin.units.index', compact('units'));

        // Counting Unit Property
        $totalUnits = Unit::count();

        // Counting Visitor
        $totalVisitors = Cache::get('total_visitors', 0); // saved cache

        // Pagination
        $units = Unit::orderBy('updated_at', 'desc')->paginate(10);

        dd($totalVisitors);

        return view('admin.index', compact('totalUnits', 'totalVisitors', 'units'));
    }

    public function create()
    {
        return view('admin.units.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_unit' => 'required',
            'kamar_tidur' => 'required|integer',
            'kamar_mandi' => 'required|integer',
            'carport' => 'required|integer',
            'luas_tanah' => 'required|integer',
            'luas_bangunan' => 'required|integer',
            'spesifikasi' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Simpan data unit
        $unit = Unit::create([
            'nama_unit' => $request->nama_unit,
            'kamar_tidur' => $request->kamar_tidur,
            'kamar_mandi' => $request->kamar_mandi,
            'carport' => $request->carport,
            'luas_tanah' => $request->luas_tanah,
            'luas_bangunan' => $request->luas_bangunan,
            'spesifikasi' => $request->spesifikasi,
        ]);

        // Cek apakah ada gambar yang diunggah
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('unit_images', 'public'); // Simpan ke storage

                // Simpan data gambar ke database
                Image::create([
                    'unit_id' => $unit->id,
                    'image_path' => $imagePath
                ]);
            }
        }

        return redirect()->back()->with('success', 'Unit berhasil disimpan!');
    }

    public function edit(Unit $units, Unit $id)
    {
        $unit = Unit::findOrFail($id);
        return view('admin.units.edit', compact('edit'));
    }

    public function update(Request $request, Unit $unit)
    {
        $unit->update($request->all());
        return redirect()->route('admin.units.index');

        $request->validate([
            'nama_unit' => 'required|string|max:255',
            'kamar_tidur' => 'required|integer',
            'kamar_mandi' => 'required|integer',
            'carport' => 'required|integer',
            'luas_tanah' => 'required|numeric',
            'luas_bangunan' => 'required|numeric',
            'spesifikasi' => 'nullable|string',
        ]);

        $unit = Unit::findOrFail($id);
        $unit->update($request->all());

        return redirect()->route('admin.units.index')->with('success', 'Unit berhasil diperbarui.');
    }

    public function destroy(Unit $id)
    {
        // $unit->images()->delete();
        // $unit->delete();

        // return redirect()->route('admin.units.index');

        $unit = Unit::findOrFail($id);
        $unit->delete();

        return redirect()->route('admin.units.index')->with('success', 'Unit berhasil dihapus.');
    }
}
