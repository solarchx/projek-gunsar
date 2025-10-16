<?php
// database/migrations/xxxx_xx_xx_create_screenings_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('screenings', function (Blueprint $table) {
            $table->id();
            $table->string('NIK_pasien', 16);
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->decimal('suhu_badan', 4, 1);
            $table->string('tekanan_darah', 10);
            $table->date('tanggal_screening');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('screenings');
    }
};