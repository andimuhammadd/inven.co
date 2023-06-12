<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateUserController extends Controller
{
    public function create(Request $request)
    {
        // Mendapatkan nilai-nilai dari form
        $nama_pengguna = $request->input('nama_pengguna');
        $nama_perusahaan = $request->input('nama_perusahaan');
        $email_pengguna = $request->input('email_pengguna');
        $alamat_perusahaan = $request->input('alamat_perusahaan');
        $telepon_perusahaan = $request->input('telepon_perusahaan');
        $password_pengguna = $request->input('password_pengguna');
        $role_pengguna = $request->input('role_pengguna');

        // Memulai transaksi
        DB::beginTransaction();

        try {
            // Menyimpan data perusahaan ke tabel 'perusahaan'
            $perusahaan = Perusahaan::create([
                'nama_perusahaan' => $nama_perusahaan,
                'alamat_perusahaan' => $alamat_perusahaan,
                'telepon_perusahaan' => $telepon_perusahaan,
            ]);

            // Menyimpan data user ke tabel 'users' dengan menghubungkan ke perusahaan yang sesuai
            $user = new User([
                'nama_pengguna' => $nama_pengguna,
                'email_pengguna' => $email_pengguna,
                'password_pengguna' => $password_pengguna,
                'role_pengguna' => $role_pengguna,
            ]);
            $user->perusahaan()->associate($perusahaan);
            $user->save();

            // Commit transaksi jika semua query berhasil
            DB::commit();

            // Kembalikan response atau redirect ke halaman lain
            return redirect('/success');
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi kesalahan
            DB::rollback();

            // Handle kesalahan sesuai kebutuhan Anda
            return redirect('/error')->with('message', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }
}
