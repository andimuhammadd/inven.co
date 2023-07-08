<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Perusahaan;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\DataBarang;

class TransaksiController extends Controller
{
    public function pagebarangmasuk()
    {
        $user = Auth::user();
        $id_perusahaan = $user->perusahaan_id;
        $perusahaan = Perusahaan::find($id_perusahaan);
        $barangMasuks = $perusahaan->barangmasuks()->get();
        $pageTitle = 'Barang Masuk';
        $cardHeader = 'Transaksi';
        $cardTitle = 'Barang Masuk';
        $content = view('pages.barangmasuk', compact('barangMasuks'));

        return view('main', compact('pageTitle', 'cardHeader', 'cardTitle', 'content'));
    }

    public function pagebarangkeluar()
    {
        $user = Auth::user();
        $id_perusahaan = $user->perusahaan_id;
        $perusahaan = Perusahaan::find($id_perusahaan);
        $barangKeluars = $perusahaan->barangkeluars()->get();
        $pageTitle = 'Barang Keluar';
        $cardHeader = 'Transaksi';
        $cardTitle = 'Barang Keluar';
        $content = view('pages.barangkeluar', compact('barangKeluars'));

        return view('main', compact('pageTitle', 'cardHeader', 'cardTitle', 'content'));
    }

    public function create()
    {
        $user = Auth::user();
        $id_perusahaan = $user->perusahaan_id;
        $perusahaan = Perusahaan::find($id_perusahaan);
        $databarangs = $perusahaan->dataBarangs()->get();

        $modalContent = view('component.barangmasuk.modal_tambah_barangmasuk', compact('databarangs'))->render();

        return $modalContent;
    }

    public function keluarcreate()
    {
        $user = Auth::user();
        $id_perusahaan = $user->perusahaan_id;
        $perusahaan = Perusahaan::find($id_perusahaan);
        $databarangs = $perusahaan->dataBarangs()->get();

        $modalContent = view('component.barangkeluar.modal_tambah_barangkeluar', compact('databarangs'))->render();

        return $modalContent;
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'id_data_barang' => 'required',
            'jumlah' => 'required',
            'id_perusahaan' => 'required',
        ]);

        // Buat instance DataBarang baru
        $barangMasuk = new BarangMasuk();
        $barangMasuk->id_data_barang = $validatedData['id_data_barang'];
        $barangMasuk->id_perusahaan = $validatedData['id_perusahaan'];
        $barangMasuk->jumlah = $validatedData['jumlah'];

        // Simpan data barang
        $barangMasuk->save();

        // Update nilai jumlah di tabel DataBarang
        $dataBarang = DataBarang::find($validatedData['id_data_barang']);
        $dataBarang->jumlah += $validatedData['jumlah'];
        $dataBarang->save();

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('barangmasuk.index')->with('success', 'Transaksi berhasil disimpan.');
    }

    public function barangkeluarstore(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'id_data_barang' => 'required',
            'jumlah' => 'required',
            'id_perusahaan' => 'required',
            'deskripsi' => 'required',
        ]);

        // Buat instance DataBarang baru
        $barangKeluar = new BarangKeluar();
        $barangKeluar->id_data_barang = $validatedData['id_data_barang'];
        $barangKeluar->id_perusahaan = $validatedData['id_perusahaan'];
        $barangKeluar->jumlah = $validatedData['jumlah'];
        $barangKeluar->keterangan = $validatedData['deskripsi'];

        // Simpan data barang
        $barangKeluar->save();

        // Update nilai jumlah di tabel DataBarang
        $id_data_barang = $validatedData['id_data_barang'];
        $dataBarang = DataBarang::where('id', $id_data_barang)->first();
        $dataBarang->jumlah -= $validatedData['jumlah'];
        $dataBarang->save();

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('barangkeluar.index')->with('success', 'Transaksi berhasil disimpan.');
    }

    public function barangkeluardestroy($id)
    {
        // Cari transaksi barang masuk berdasarkan ID
        $barangKeluar = Barangkeluar::findOrFail($id);

        // Hapus transaksi barang masuk
        $barangKeluar->delete();

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('barangkeluar.index')->with('success', 'Transaksi berhasil dihapus.');
    }

    public function barangmasukdestroy($id)
    {
        // Cari transaksi barang masuk berdasarkan ID
        $barangMasuk = BarangMasuk::findOrFail($id);

        // Hapus transaksi barang masuk
        $barangMasuk->delete();

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('barangmasuk.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
