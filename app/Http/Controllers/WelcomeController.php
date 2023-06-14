<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $content = view('pages.welcome');

        return view('main', compact('content'));
    }
}
