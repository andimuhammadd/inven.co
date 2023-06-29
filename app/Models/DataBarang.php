<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    use HasFactory;

    protected $table = 'data_barang';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'id_supplier',
        'id_jenis',
        'jumlah',
        'id_satuan',
        'id_perusahaan',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier');
    }

    public function jenis()
    {
        return $this->belongsTo(JenisBarang::class, 'id_jenis');
    }

    public function satuan()
    {
        return $this->belongsTo(SatuanBarang::class, 'id_satuan');
    }

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan');
    }

    public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'id_data_barang');
    }

    public function barangKeluar()
    {
        return $this->hasMany(BarangKeluar::class, 'id_data_barang');
    }
}
