<?php

// database/migrations/{timestamp}_create_perusahaan_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaanTable extends Migration
{
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('telepon_perusahaan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perusahaan');
    }
}
