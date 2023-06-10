<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatabarangController extends Controller
{
    public function index()
    {
        $pageTitle = 'Data Barang';
        $cardHeader = 'Inventaris';
        $cardTitle = 'Data Barang';
        $content = view('pages.databarang');

        return view('main', compact('pageTitle', 'cardHeader', 'cardTitle', 'content'));
    }
}
