<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        try {
            // Mulai transaksi
            DB::beginTransaction();

            // Validasi data form jika diperlukan
            $validatedData = $request->validate([
                'nama' => 'required',
                'namaPerusahaan' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'perusahaan_id' => 'required|integer',
                'role' => 'required'
            ]);

            // Simpan data ke tabel Perusahaan
            $perusahaan = new Perusahaan;
            $perusahaan->id = $validatedData['perusahaan_id'];
            $perusahaan->nama_perusahaan = $validatedData['namaPerusahaan'];
            $perusahaan->save();

            // Simpan data ke tabel User
            $user = new User;
            $user->nama = $validatedData['nama'];
            $user->email = $validatedData['email'];
            $user->password = bcrypt($validatedData['password']);
            $user->role = $validatedData['role'];
            $user->perusahaan_id =  $validatedData['perusahaan_id']; // Menggunakan id perusahaan baru yang didapatkan
            $user->save();

            // Commit transaksi jika semua operasi berhasil
            DB::commit();

            // Set session 'success' dengan pesan yang diinginkan
            Session::flash('success', 'User berhasil dibuat, Silahkan Login');
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi kesalahan
            DB::rollback();

            // Set session 'error' dengan pesan yang diinginkan
            Session::flash('error', 'Gagal membuat user, coba lagi nanti');
        }

        // Redirect ke halaman signup
        return redirect()->route('signup');
    }

    public function loginpage()
    {
        return view('pages.login');
    }

    public function signuppage()
    {
        return view('pages.signup');
    }
}
