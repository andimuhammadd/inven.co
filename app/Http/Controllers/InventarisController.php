<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class InventarisController extends Controller
{
    public function pagedatabarang()
    {
        $pageTitle = 'Data Barang';
        $cardHeader = 'Inventaris';
        $cardTitle = 'Data Barang';
        $content = view('pages.databarang');

        return view('main', compact('pageTitle', 'cardHeader', 'cardTitle', 'content'));
    }

    public function pagejenisbarang()
    {
        $pageTitle = 'Jenis Barang';
        $cardHeader = 'Inventaris';
        $cardTitle = 'Jenis Barang';
        $content = view('pages.databarang');

        return view('main', compact('pageTitle', 'cardHeader', 'cardTitle', 'content'));
    }

    public function pagesatuanbarang()
    {
        $pageTitle = 'Satuan Barang';
        $cardHeader = 'Inventaris';
        $cardTitle = 'Satuan Barang';
        $content = view('pages.satuanbarang');

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
