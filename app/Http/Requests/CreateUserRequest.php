<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nama_perusahaan' => 'required',
            'email_pengguna' => 'required|email|unique:users,email_pengguna',
            'alamat_perusahaan' => 'required',
            'telepon_perusahaan' => 'required',
            'password_pengguna' => 'required|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Kolom :attribute harus diisi.',
            'email' => 'Format email tidak valid.',
            'unique' => 'Email sudah digunakan.',
            'confirmed' => 'Konfirmasi password tidak cocok.',
        ];
    }
}
