<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBarang;

class JenisBarangController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'id_perusahaan' => 'required'
        ]);

        $JenisBarang = JenisBarang::create($data);

        if (!$JenisBarang) {
            return redirect()->back()->withErrors(['error' => 'Gagal menyimpan data.'])->withInput();
        }

        return redirect()->back()->with('success', 'Jenis Barang berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $JenisBarang = JenisBarang::findOrFail($id);

        // Hapus satuan barang
        $JenisBarang->delete();

        return redirect()->back()->with('success', 'Jenis Barang berhasil dihapus');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama' => 'required'
        ]);

        $JenisBarang = JenisBarang::findOrFail($id);

        // Update data satuan barang
        $JenisBarang->update($data);

        return redirect()->back()->with('success', 'Jenis Barang berhasil diperbarui');
    }
}
