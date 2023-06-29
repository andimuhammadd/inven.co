<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    protected $table = 'barang_keluar';
    protected $fillable = [
        'jumlah',
    ];

    public function dataBarang()
    {
        return $this->belongsTo(DataBarang::class, 'id_data_barang');
    }
}
