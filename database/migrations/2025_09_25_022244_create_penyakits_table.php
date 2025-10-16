<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('penyakits', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2025_08_26_061711_create_obats_table.php
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
=======
            $table->string('nama');
>>>>>>> ebdc1064a7031eb8f01c5cc955429a1653f87c85:database/migrations/2025_09_25_022244_create_penyakits_table.php
            $table->timestamps();
        });
    }

    public function down()
    {
<<<<<<< HEAD:database/migrations/2025_08_26_061711_create_obats_table.php
        Schema::dropIfExists('obat');
=======
        Schema::dropIfExists('penyakits');
>>>>>>> ebdc1064a7031eb8f01c5cc955429a1653f87c85:database/migrations/2025_09_25_022244_create_penyakits_table.php
    }
};