<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\SatuanBarang;
use App\Models\JenisBarang;
use App\Models\DataBarang;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DataBarangController extends Controller
{
    public function generateUniqueCode()
    {
        $prefix = 'BRG'; // Prefix untuk kode barang
        $date = now()->format('YmdHis'); // Format tanggal dan waktu saat ini

        return $prefix . $date;
    }

    public function create()
    {
        $user = Auth::user();
        $id_perusahaan = $user->perusahaan_id;
        $perusahaan = Perusahaan::find($id_perusahaan);
        $jenisbarangs = $perusahaan->jenisbarangs()->get();
        $satuanbarangs = $perusahaan->satuanbarangs()->get();
        $suppliers = $perusahaan->suppliers()->get();
        $kode_barang = $this->generateUniqueCode();

        $modalContent = view('component.databarang.modal_tambah_barang', compact('jenisbarangs', 'satuanbarangs', 'suppliers', 'kode_barang'))->render();

        return $modalContent;
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'kode_barang' => 'required|unique:data_barang',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'satuan_barang' => 'required',
            'supplier' => 'required',
            'id_perusahaan' => 'required',
        ]);

        // Buat instance DataBarang baru
        $dataBarang = new DataBarang;
        $dataBarang->kode_barang = $validatedData['kode_barang'];
        $dataBarang->nama_barang = $validatedData['nama_barang'];
        $dataBarang->id_jenis = $validatedData['jenis_barang'];
        $dataBarang->id_satuan = $validatedData['satuan_barang'];
        $dataBarang->id_supplier = $validatedData['supplier'];
        $dataBarang->id_perusahaan = $validatedData['id_perusahaan'];

        // Simpan data barang
        $dataBarang->save();

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('databarang.index')->with('success', 'Data barang berhasil disimpan.');
    }

    public function destroy($id)
    {
        // Cari data barang berdasarkan ID
        $dataBarang = DataBarang::findOrFail($id);

        // Hapus data barang
        $dataBarang->delete();

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('databarang.index')->with('success', 'Data barang berhasil dihapus.');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'satuan_barang' => 'required',
            'supplier' => 'required',
        ]);

        // Cari data barang berdasarkan ID
        $dataBarang = DataBarang::findOrFail($id);

        // Perbarui data barang
        $dataBarang->nama_barang = $validatedData['nama_barang'];
        $dataBarang->id_jenis = $validatedData['jenis_barang'];
        $dataBarang->id_satuan = $validatedData['satuan_barang'];
        $dataBarang->id_supplier = $validatedData['supplier'];

        // Simpan perubahan data barang
        $dataBarang->save();

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('databarang.index')->with('success', 'Data barang berhasil diperbarui.');
    }
}
