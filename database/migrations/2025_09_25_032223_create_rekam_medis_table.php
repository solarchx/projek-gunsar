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
            $table->string('NIK_pasien', 20);  
            $table->foreignId('id_screening')
                ->constrained('screenings')
                ->onDelete('cascade'); 
            $table->string('NIP_dokter', 20);  
            $table->string('keluhan');
            $table->string('riwayat_penyakit');
            $table->foreignId('id_penyakit')->constrained('penyakits'); 
            $table->string('catatan')->nullable();
            $table->string('terapi_tindakan')->nullable();

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
