<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perusahaan;


class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $fillable = ['id_perusahaan', 'nama', 'alamat', 'telepon'];

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan');
    }

    public function dataBarangs()
    {
        return $this->hasMany(DataBarang::class, 'id_supplier');
    }
}
