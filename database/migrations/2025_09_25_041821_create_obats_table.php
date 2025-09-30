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
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat');
            $table->enum('kategori', ['tablet', 'kapsul', 'sirup', 'salep', 'injeksi', 'cairan']);
            $table->integer('stok');
            $table->enum('satuan', ['strip', 'botol', 'tube', 'vial', 'sachet', 'blister', 'box']);
            $table->date('exp');
            $table->string('dosis');
            $table->string('kandungan');
            $table->enum('kemasan', ['plastik', 'dus', 'botol', 'kaleng', 'tube']);
            $table->enum('aturan_pemakaian', ['sebelum makan', 'sesudah makan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obats');
    }
};
