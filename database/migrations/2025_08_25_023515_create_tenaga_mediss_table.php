<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tenaga_mediss', function (Blueprint $table) {
             $table->id();
            $table->string('nip', 16)->unique();
            $table->string('nama');
            $table->string('jabatan');
            $table->string('password');
            $table->enum('role', ['dokter','perawat','farmasi','staff']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenaga_mediss');
    }
};