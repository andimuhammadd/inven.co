<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SatuanBarang;

class SatuanBarangController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_satuan' => 'required',
            'id_perusahaan' => 'required'
        ]);

        $satuanBarang = SatuanBarang::create($data);

        if (!$satuanBarang) {
            return redirect()->back()->withErrors(['error' => 'Gagal menyimpan data.'])->withInput();
        }

        return redirect()->back()->with('success', 'Satuan Barang berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $satuanBarang = SatuanBarang::findOrFail($id);

        // Hapus satuan barang
        $satuanBarang->delete();

        return redirect()->back()->with('success', 'Satuan Barang berhasil dihapus');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama_satuan' => 'required'
        ]);

        $satuanBarang = SatuanBarang::findOrFail($id);

        // Update data satuan barang
        $satuanBarang->update($data);

        return redirect()->back()->with('success', 'Satuan Barang berhasil diperbarui');
    }
}
