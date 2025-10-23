<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasien;

class PasienSeeder extends Seeder
{
    public function run(): void
    {
        Pasien::create([
            'nama' => 'John Doe',
            'jenis_kelamin' => 'Laki-laki',
            'nik' => '1234567890123456',
            'tanggal_lahir' => '1990-01-01',
            'alamat' => 'Sample Address, City',
        ]);

        // Add more if needed
    }
}
