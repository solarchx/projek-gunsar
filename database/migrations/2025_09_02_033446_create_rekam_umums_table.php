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
        Schema::create('rekam_umums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rekam');
            $table->unsignedBigInteger('penyakit_id')->nullable();
            $table->string('penyakit_manual', 100)->nullable();
            $table->text('keluhan');
            $table->integer('hari_sakit')->nullable();
            $table->string('obat_sebelumnya')->nullable();
            $table->json('detail')->nullable();
            $table->timestamps();

            $table->foreign('id_rekam')->references('id')->on('rekam_medis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_umums');
    }
};
