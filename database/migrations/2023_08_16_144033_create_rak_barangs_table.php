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
        Schema::create('rak_barangs', function (Blueprint $table) {
            $table->id();
            // create string(nama,kode_barang,kode_rak,status,keterangan,jumlah) nullable
            $table->string('nama')->nullable();
            $table->string('kode_barang')->nullable();
            $table->string('kode_rak')->nullable();
            $table->string('status')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('jumlah')->nullable();

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
        Schema::dropIfExists('rak_barangs');
    }
};
