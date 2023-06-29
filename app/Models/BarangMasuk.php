<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $table = 'barang_masuk';
    protected $fillable = [
        'jumlah',
    ];

    public function dataBarang()
    {
        return $this->belongsTo(DataBarang::class, 'id_data_barang');
    }
}
