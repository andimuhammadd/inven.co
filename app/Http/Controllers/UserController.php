<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\perusahaan;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Mengambil semua data user dari tabel "users"
        $pageTitle = 'Data User';
        $cardHeader = 'Data User';
        $cardTitle = 'Detail data user';
        $content = view('pages.datauser', compact('users'));

        return view('main', compact('pageTitle', 'cardHeader', 'cardTitle', 'content'));
    }

    public function store(CreateUserRequest $request)
    {
        // Validasi form telah dilakukan oleh CreateUserRequest

        // Buat instance model User
        $user = new User();
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');

        // Simpan user ke database
        $user->save();

        // Buat instance model Perusahaan
        $perusahaan = new perusahaan();
        $perusahaan->nama = $request->input('perusahaan');
        $perusahaan->alamat = $request->input('alamat');
        $perusahaan->telepon = $request->input('telepon');

        // Simpan perusahaan ke database
        $perusahaan->save();

        // Hubungkan user dengan perusahaan
        $user->perusahaan()->associate($perusahaan);
        $user->save();

        // Redirect ke halaman login atau halaman lain yang diinginkan
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }
}
