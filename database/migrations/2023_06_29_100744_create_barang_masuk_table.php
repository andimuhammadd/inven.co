<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangMasukTable extends Migration
{
    public function up()
    {
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_data_barang');
            $table->Integer('id_perusahaan');
            $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('id_perusahaan')->references('id')->on('perusahaan')->onDelete('cascade');
            $table->foreign('id_data_barang')->references('id')->on('data_barang')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang_masuk');
    }
}
