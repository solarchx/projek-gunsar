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
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('NIK_pasien');
            $table->unsignedBigInteger('NIP_dokter');
            $table->string('keluhan');
            $table->string('riwayat_penyakit');
            $table->foreignId('id_penyakit')->constrained('penyakits');
            $table->string('catatan');
            $table->string('terapi_tindakan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_medis');
    }
};
