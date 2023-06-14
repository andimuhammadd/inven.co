<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perusahaan;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['nama_pengguna', 'email_pengguna', 'password_pengguna', 'perusahaan_id', 'role_pengguna'];

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'perusahaan_id');
    }
}
