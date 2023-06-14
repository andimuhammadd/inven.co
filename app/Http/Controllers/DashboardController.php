<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pageTitle = 'Dashboard';
        $cardHeader = 'Dashboard';
        $cardTitle = 'Selamat datang di inven.co pengelola Inventaris barang';
        $content = view('pages.dashboard');

        return view('main', compact('pageTitle', 'cardHeader', 'cardTitle', 'content'));
    }
}
