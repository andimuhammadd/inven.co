<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Perusahaan;

class SatuanBarang extends Model
{
    protected $table = 'satuan_barang'; // Nama tabel yang sesuai

    protected $fillable = [
        'nama_satuan',
        'id_perusahaan'
    ];

    // Relasi dengan model Perusahaan
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan');
    }
}
