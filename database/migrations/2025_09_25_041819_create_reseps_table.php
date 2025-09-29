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
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rekam_medis')
                ->constrained('rekam_medis')
                ->onDelete('cascade');
            $table->unsignedBigInteger('NIK_pasien');
            $table->unsignedBigInteger('NIP_dokter');
            $table->datetime('tanggal')->useCurrent();
            $table->text('obat_racikan');
            $table->text('obat_rekomendasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseps');
    }
};
