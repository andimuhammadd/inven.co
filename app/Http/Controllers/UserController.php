<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

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
                'role' => 'required',
                'foto_profile' => 'required'
            ]);

            //cek gmail duplikat
            $existingUser = User::where('email', $validatedData['email'])->first();

            if ($existingUser) {
                // Email sudah terdaftar
                return redirect()->back()->with('error', 'Gmail telah terdaftar, silahkan login');
            }

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
            $user->foto_profile =  $validatedData['foto_profile'];
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

    public function tambahuser(Request $request)
    {
        // Validasi data yang dikirim dari formulir
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'role' => 'required',
            'perusahaan_id' => 'required',
            'foto_profile' => 'required',
        ]);

        // Buat instance user baru
        $user = new User;
        $user->nama = $validatedData['nama'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt('admin123'); // Default password admin123
        $user->role = $validatedData['role'];
        $user->perusahaan_id = $validatedData['perusahaan_id'];
        $user->foto_profile = $validatedData['foto_profile'];

        // Simpan user ke dalam database
        $user->save();

        return redirect()->back()->with('success', 'User added successfully');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            return redirect()->intended('/dashboard');
        } else {
            // Autentikasi gagal
            return redirect()->back()->with('error', 'Email atau password salah'); // Menampilkan pesan error
        }
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim dari formulir
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'foto_profile' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk foto (opsional)
        ]);

        // Dapatkan pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Update field nama dan email pengguna
        $user->nama = $validatedData['nama'];
        $user->email = $validatedData['email'];


        // Cek apakah ada file foto yang diunggah
        if ($request->hasFile('foto_profile')) {
            $foto_file = $request->file('foto_profile');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('images'), $foto_nama);

            //update field foto_profile
            $data_foto = User::where('id', $id)->first();
            File::delete(public_path('images') . '/' . $data_foto->foto_profile);
            $user->foto_profile = $foto_nama;
        }

        // Simpan perubahan pada model pengguna
        $user->save();

        // Redirect ke halaman yang diinginkan setelah berhasil mengupdate pengguna
        return redirect()->route('dashboard')->with('success', 'User berhasil di update');
    }

    public function updatePassword(Request $request, $id)
    {
        // Validasi data yang dikirim dari formulir
        $validatedData = $request->validate([
            'password_sekarang' => 'required',
            'password_baru' => 'required',
        ]);

        // Dapatkan pengguna berdasarkan ID
        $user = User::find($id);

        // Cek apakah pengguna ditemukan
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        // Verifikasi password sekarang
        if (!Hash::check($validatedData['password_sekarang'], $user->password)) {
            return redirect()->back()->with('error', 'Incorrect current password');
        }

        // Update password baru
        $user->password = bcrypt($validatedData['password_baru']);
        $user->save();

        // Redirect back to the form or any desired page
        return redirect()->back()->with('success', 'password successfully updated');
    }

    public function destroy($id)
    {
        // Cari user berdasarkan ID
        $user = User::find($id);

        if ($user) {
            // Hapus user
            $user->delete();

            return redirect()->back()->with('success', 'User berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'User tidak ditemukan');
        }
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
