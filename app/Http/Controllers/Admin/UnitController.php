<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unit;
use App\Models\Image;
use App\Models\Brochure;
use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class UnitController extends Controller
{
    public function index()
    {
        // Mengambil daftar unit properti dengan pagination
        $units = Unit::with('images')->orderBy('updated_at', 'desc')->paginate(10);

        // Counting Unit Property
        $totalUnits = Unit::count();

        // Counting Visitor
        $totalVisitors = Visitor::where('month', Carbon::now()->month)
            ->where('year', Carbon::now()->year)
            ->sum('total');
        $visitorData = Visitor::orderBy('year', 'desc')->orderBy('month', 'desc')->get();

        // Brochure
        $brochure = Brochure::where('is_active', true)->first() ?? null;

        // dd($units);

        return view('admin.units.index', compact('units', 'totalUnits', 'totalVisitors', 'visitorData', 'brochure'));
    }

    public function unit()
    {
        // Mengambil daftar unit properti dengan pagination
        $units = Unit::with('images')->orderBy('updated_at', 'desc')->paginate(10);
        return view('admin.units.unit', compact('units'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'nama_unit' => 'required',
            'harga' => 'required|numeric|min:0',
            'kamar_tidur' => 'required|integer',
            'kamar_mandi' => 'required|integer',
            'carport' => 'required|integer',
            'luas_tanah' => 'required|integer',
            'luas_bangunan' => 'required|integer',
            'spesifikasi' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg'
        ]);

        // dd($request->all());

        // **Generate kode unit otomatis**
        $latestUnit = Unit::latest()->first();
        $newKodeUnit = 'UNIT-' . str_pad(optional($latestUnit)->id + 1, 3, '0', STR_PAD_LEFT);


        // Simpan data unit
        $unit = Unit::create([


            'nama_unit' => $request->nama_unit,
            'kode_unit' => $newKodeUnit,
            'harga' => $request->harga,
            'kamar_tidur' => $request->kamar_tidur,
            'kamar_mandi' => $request->kamar_mandi,
            'carport' => $request->carport,
            'luas_tanah' => $request->luas_tanah,
            'luas_bangunan' => $request->luas_bangunan,
            'spesifikasi' => $request->spesifikasi,
        ]);

        // dd($unit);

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
        return view('modals.unit-edit-modal', compact('unit'));
    }

    public function update(Request $request, $id)
    {
        $selectedUnit = Unit::findOrFail($id);

        $request->validate([
            'nama_unit' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'kamar_tidur' => 'required|integer',
            'kamar_mandi' => 'required|integer',
            'carport' => 'required|integer',
            'luas_tanah' => 'required|numeric',
            'luas_bangunan' => 'required|numeric',
            'spesifikasi' => 'nullable|string',
            'images.*' => 'image|mimes:jpeg,png,jpg'
        ]);


        // Cek apakah ada gambar yang diunggah
        if ($request->hasFile('images')) {

            // delete image lama
            $oldImage = Image::where('unit_id', $id)->get();
            foreach ($oldImage as $old) {
                Storage::delete('public/' . $old->image_path);
                $old->delete();
            }

            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('unit_images', 'public'); // Simpan ke storage

                // Simpan data gambar ke database
                Image::create([
                    'unit_id' => $selectedUnit->id,
                    'image_path' => $imagePath
                ]);
            }
        }

        // Simpan data unit
        $selectedUnit->update([
            'nama_unit' => $request->nama_unit,
            'harga' => $request->harga,
            'kamar_tidur' => $request->kamar_tidur,
            'kamar_mandi' => $request->kamar_mandi,
            'carport' => $request->carport,
            'luas_tanah' => $request->luas_tanah,
            'luas_bangunan' => $request->luas_bangunan,
            'spesifikasi' => $request->spesifikasi,
        ]);

        return redirect()->route('admin.units.unit')->with('success', 'Unit berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $unit = Unit::findOrFail($id);

        // Hapus semua gambar terkait sebelum menghapus unit
        $images = Image::where('unit_id', $unit->id)->get();

        // Check apabila images tidak kosong maka, delete image
        if ($images->count() > 0) {
            foreach ($images as $image) {
                Storage::delete('public/' . $image->image_path);
                $image->delete();
            }
        }

        $unit->delete();

        return redirect()->route('admin.units.unit')->with('success', 'Unit berhasil dihapus.');
    }
}
