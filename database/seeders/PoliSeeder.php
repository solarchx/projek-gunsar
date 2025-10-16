<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Poli;

class PoliSeeder extends Seeder
{
    public function run()
    {
        $polis = [
            ['nama_poli' => 'Poli Umum'],
            ['nama_poli' => 'Poli Anak'],
            ['nama_poli' => 'Poli Gigi'],
        ];

        foreach ($polis as $poli) {
            Poli::create($poli);
        }
    }
}