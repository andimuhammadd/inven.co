<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaan';
    protected $fillable = [
        'nama_perusahaan'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'perusahaan_id');
    }

    public function satuanbarang()
    {
        return $this->hasMany(Satuanbarang::class, 'id_perusahaan');
    }

    public function jenisbarang()
    {
        return $this->hasMany(JenisBarang::class, 'id_perusahaan');
    }
}
