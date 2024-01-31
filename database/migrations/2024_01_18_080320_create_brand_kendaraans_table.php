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
        Schema::create('Brand_Kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string("nama_brand");
            $table->string("nama_merek");
            $table->string('tahun_mobil');
            $table->string('bahan_bakar');
            $table->integer('harga_sewa');
            $table->string("foto_kendaraan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Brand_Kendaraan');
    }
};