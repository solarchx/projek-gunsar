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
        ];

        foreach ($polis as $poli) {
            Poli::create($poli);
        }
    }
}