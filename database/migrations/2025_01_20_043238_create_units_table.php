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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('nama_unit');
            $table->integer('kamar_tidur');
            $table->integer('kamar_mandi');
            $table->integer('carport');
            $table->float('luas_tanah');
            $table->float('luas_bangunan');
            $table->text('spesifikasi');
            $table->string('kode_unit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
