<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_barang', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->unsignedBigInteger('id_supplier');
            $table->unsignedBigInteger('id_jenis');
            $table->unsignedBigInteger('id_satuan');
            $table->integer('id_perusahaan');
            $table->timestamps();

            $table->foreign('id_supplier')->references('id')->on('suppliers')->onDelete('cascade');
            $table->foreign('id_jenis')->references('id')->on('jenis_barang')->onDelete('cascade');
            $table->foreign('id_satuan')->references('id')->on('satuan_barang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_barang');
    }
}
