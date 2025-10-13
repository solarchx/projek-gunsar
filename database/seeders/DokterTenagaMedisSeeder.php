<?php
// database/seeders/DokterTenagaMedisSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TenagaMedis;
use Illuminate\Support\Facades\Hash;

class DokterTenagaMedisSeeder extends Seeder
{
    public function run(): void
    {
        TenagaMedis::create([
            'NIP' => 'D001',
            'nama' => 'Nurhayati',
            'role' => 'dokter',
            'password' => Hash::make('123'),
            'jabatan' => 'Dokter Senior',
        ]);

        TenagaMedis::create([
            'NIP' => 'B001',
            'nama' => 'Budi Santoso',
            'role' => 'farmasi',
            'password' => Hash::make('123'),
            'jabatan' => 'Apoteker',
        ]);
    }
}
