<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('polis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_poli', 50);
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });

        // Insert data default poli
        DB::table('polis')->insert([
            ['nama_poli' => 'Umum', 'deskripsi' => 'Pelayanan kesehatan umum'],
            ['nama_poli' => 'Anak', 'deskripsi' => 'Pelayanan kesehatan anak'],
            ['nama_poli' => 'Gigi', 'deskripsi' => 'Pelayanan kesehatan gigi dan mulut'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('polis');
    }
};