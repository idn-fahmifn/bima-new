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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tempat')->constrained('tempat')->cascadeOnDelete();
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('merk');
            $table->enum('status',['normal','perbaikan','report'])->default('normal');
            $table->date('tanggal_pengadaan');
            $table->string('gambar')->nullable();
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
