<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            // create string (nama, kategori, harga, jumlah , status , suplier , keterangan) da nullable
            $table->string('nama')->nullable();
            $table->string('kode_barang')->nullable();
            $table->string('kategori')->nullable();
            $table->string('harga_jual')->nullable();
            $table->string('harga')->nullable();
            $table->string('harga_pokok')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('status')->nullable();
            $table->string('suplier')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};
