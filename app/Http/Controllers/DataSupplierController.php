<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class DataSupplierController extends Controller
{
    public function store(Request $request)
    {
        // Validasi inputan
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'id_perusahaan' => 'required',
        ]);

        // Simpan data supplier ke dalam database
        $supplier = Supplier::create($validatedData);

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('datasupplier')->with('success', 'Supplier berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);

        $supplier->delete();

        return redirect()->back()->with('success', 'Supplier berhasil dihapus');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required'
        ]);

        $supplier = Supplier::findOrFail($id);

        // Update data satuan barang
        $supplier->update($data);

        return redirect()->back()->with('success', 'Data Supplier berhasil diperbarui');
    }
}
