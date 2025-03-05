<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brochure;
use Illuminate\Support\Facades\Storage;

class BrochureController extends Controller
{
    public function index()
    { // Ambil semua brosur yang pernah diunggah
        $brochure = Brochure::orderBy('created_at', 'desc')->get();

        // Ambil brosur terbaru yang aktif
        $activeBrochure = Brochure::where('is_active', true)->latest()->first();

        return view('admin.units.brochure', compact('brochure', 'activeBrochure'));
    }

    public function updateBrochure(Request $request)
    {
        $request->validate([
            'pdf_file' => 'required|mimes:pdf',
        ]);

        $file = $request->file('pdf_file');
        $path = $file->store('brochure', 'public'); // Simpan ke storage/app/public/brochure/

        // Hapus brosur lama jika ada
        Brochure::where('is_active', true)->update(['is_active' => false]);

        Brochure::create([
            'file_path' => $path,
            'is_active' => true,
            'download_count' => 0 // Reset jumlah unduhan untuk brosur baru
        ]);

        return back()->with('success', 'Brosur berhasil diperbarui!');
    }

    public function downloadBrochure($id)
    {
        $brochure = Brochure::findOrFail($id);

        if (!$brochure) {
            return redirect()->back()->with('error', 'Brosur tidak ditemukan.');
        }

        $filePath = storage_path("app/public/{$brochure->file_path}");

        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'File brosur tidak ditemukan di penyimpanan.');
        }

        // Tambah jumlah unduhan
        $brochure->increment('download_count');

        return response()->download($filePath, "GrahaSamawa_Brosur.pdf");
    }
}
