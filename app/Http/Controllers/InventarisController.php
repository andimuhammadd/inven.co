<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Support\Facades\Auth;
use App\Models\Satuanbarang;
use App\Models\User;
use App\Models\Perusahaan;

class InventarisController extends Controller
{
    public function pagedatabarang()
    {
        $user = Auth::user();
        $id_perusahaan = $user->perusahaan_id;
        $perusahaan = Perusahaan::find($id_perusahaan);
        $databarangs = $perusahaan->databarangs()->get();
        $pageTitle = 'Data Barang';
        $cardHeader = 'Inventaris';
        $cardTitle = 'Data Barang';
        $content = view('pages.databarang', compact('databarangs'));

        return view('main', compact('pageTitle', 'cardHeader', 'cardTitle', 'content'));
    }

    public function pagejenisbarang()
    {
        $user = Auth::user();
        $id_perusahaan = $user->perusahaan_id;
        $perusahaan = Perusahaan::find($id_perusahaan);
        $jenisbarang = $perusahaan->jenisbarangs()->get();
        $pageTitle = 'Jenis Barang';
        $cardHeader = 'Inventaris';
        $cardTitle = 'Jenis Barang';
        $content = view('pages.jenisbarang', compact('jenisbarang'));

        return view('main', compact('pageTitle', 'cardHeader', 'cardTitle', 'content'));
    }

    public function pagesatuanbarang()
    {
        $user = Auth::user();
        $id_perusahaan = $user->perusahaan_id;
        $perusahaan = Perusahaan::find($id_perusahaan);
        $satuanbarang = $perusahaan->satuanbarangs()->get();
        $pageTitle = 'Satuan Barang';
        $cardHeader = 'Inventaris';
        $cardTitle = 'Satuan Barang';
        $content = view('pages.satuanbarang', compact('satuanbarang'));

        return view('main', compact('pageTitle', 'cardHeader', 'cardTitle', 'content'));
    }

    public function pagedatasupplier()
    {
        $user = Auth::user();
        $id_perusahaan = $user->perusahaan_id;
        $suppliers = Supplier::where('id_perusahaan', $id_perusahaan)->get();
        $pageTitle = 'Data Supplier';
        $cardHeader = 'Inventaris';
        $cardTitle = 'Data Supplier';
        $content = view('pages.datasupplier', compact('suppliers'));

        return view('main', compact('pageTitle', 'cardHeader', 'cardTitle', 'content'));
    }
}
