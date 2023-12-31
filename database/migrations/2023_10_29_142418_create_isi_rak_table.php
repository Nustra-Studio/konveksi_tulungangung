<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('isi_rak', function (Blueprint $table) {
            $table->id();
            $table->string("id_rak");
            $table->string("nama_barang");
            $table->string("kuantitas");
            $table->string("satuan");
            $table->string("created_by");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('isi_rak');
    }
};
