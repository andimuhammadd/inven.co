<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $fillable = ['nama_perusahaan', 'alamat_perusahaan', 'telepon_perusahaan'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
