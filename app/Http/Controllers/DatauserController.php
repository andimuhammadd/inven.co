<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatauserController extends Controller
{
    public function index()
    {
        $pageTitle = 'Data User';
        $cardHeader = 'Data User';
        $cardTitle = 'Detail data user';
        $content = view('pages.datauser');

        return view('main', compact('pageTitle', 'cardHeader', 'cardTitle', 'content'));
    }
}
