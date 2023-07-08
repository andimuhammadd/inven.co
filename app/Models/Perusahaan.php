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

    public function satuanbarangs()
    {
        return $this->hasMany(Satuanbarang::class, 'id_perusahaan');
    }

    public function jenisbarangs()
    {
        return $this->hasMany(JenisBarang::class, 'id_perusahaan');
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class, 'id_perusahaan');
    }

    public function dataBarangs()
    {
        return $this->hasMany(DataBarang::class, 'id_perusahaan');
    }

    public function barangmasuks()
    {
        return $this->hasMany(BarangMasuk::class, 'id_perusahaan');
    }

    public function barangkeluars()
    {
        return $this->hasMany(BarangKeluar::class, 'id_perusahaan');
    }
}
