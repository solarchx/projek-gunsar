<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat');
            $table->string('kategori');
            $table->integer('stok');
            $table->date('tanggal_kadaluarsa');
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->text('deskripsi')->nullable();
            $table->string('waktu_minum');
            $table->string('frekuensi');
            $table->string('dosis');
            $table->text('catatan_penting')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('obats');
    }
};