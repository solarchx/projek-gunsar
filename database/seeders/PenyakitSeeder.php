<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penyakit::insert([
            ['nama' => 'demam'],
            ['nama' => 'flu'],
            ['nama' => 'batuk'],
            ['nama' => 'sakit kepala'],
            ['nama' => 'sakit gigi'],
            ['nama' => 'sakit perut'],
            ['nama' => 'diare'],
            ['nama' => 'mual'],
            ['nama' => 'muntah'],
            ['nama' => 'sesak nafas'],
            ['nama' => 'nyeri otot'],
            ['nama' => 'nyeri sendi'],
            ['nama' => 'ruam kulit'],
            ['nama' => 'gatal-gatal'],
            ['nama' => 'pusing'],
            ['nama' => 'lemas'],
            ['nama' => 'dehidrasi'],
            ['nama' => 'konstipasi'],
            ['nama' => 'insomnia'],
            ['nama' => 'anemia'],
        ]);
    }
}
