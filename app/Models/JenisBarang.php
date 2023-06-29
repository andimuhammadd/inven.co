<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perusahaan;

class JenisBarang extends Model
{
    protected $table = 'jenis_barang';
    protected $fillable = [
        'nama',
        'id_perusahaan',
    ];

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan');
    }

    public function dataBarangs()
    {
        return $this->hasMany(DataBarang::class, 'id_jenis');
    }
}
