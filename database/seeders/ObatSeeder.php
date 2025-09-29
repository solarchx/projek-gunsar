<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Obat;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Obat::insert([
            [
                'nama_obat' => 'Paracetamol',
                'kategori' => 'tablet',
                'stok' => 120,
                'satuan' => 'strip',
                'exp' => '2026-05-10',
                'dosis' => '3x sehari 1 tablet',
                'kandungan' => 'Paracetamol 500mg',
                'kemasan' => 'dus',
            ],
            [
                'nama_obat' => 'Amoxicillin',
                'kategori' => 'kapsul',
                'stok' => 80,
                'satuan' => 'strip',
                'exp' => '2025-11-20',
                'dosis' => '3x sehari 1 kapsul',
                'kandungan' => 'Amoxicillin 500mg',
                'kemasan' => 'plastik',
            ],
            [
                'nama_obat' => 'Ibuprofen',
                'kategori' => 'tablet',
                'stok' => 60,
                'satuan' => 'strip',
                'exp' => '2026-01-15',
                'dosis' => '2x sehari 1 tablet',
                'kandungan' => 'Ibuprofen 400mg',
                'kemasan' => 'dus',
            ],
            [
                'nama_obat' => 'Cetirizine',
                'kategori' => 'tablet',
                'stok' => 50,
                'satuan' => 'strip',
                'exp' => '2027-03-01',
                'dosis' => '1x sehari 1 tablet',
                'kandungan' => 'Cetirizine 10mg',
                'kemasan' => 'dus',
            ],
            [
                'nama_obat' => 'Metformin',
                'kategori' => 'tablet',
                'stok' => 70,
                'satuan' => 'strip',
                'exp' => '2026-07-12',
                'dosis' => '2x sehari 1 tablet',
                'kandungan' => 'Metformin 500mg',
                'kemasan' => 'plastik',
            ],
            [
                'nama_obat' => 'Omeprazole',
                'kategori' => 'kapsul',
                'stok' => 90,
                'satuan' => 'strip',
                'exp' => '2025-09-25',
                'dosis' => '1x sehari 1 kapsul',
                'kandungan' => 'Omeprazole 20mg',
                'kemasan' => 'dus',
            ],
            [
                'nama_obat' => 'Salbutamol',
                'kategori' => 'sirup',
                'stok' => 40,
                'satuan' => 'botol',
                'exp' => '2026-04-30',
                'dosis' => '3x sehari 5ml',
                'kandungan' => 'Salbutamol 2mg/5ml',
                'kemasan' => 'botol',
            ],
            [
                'nama_obat' => 'Vitamin C',
                'kategori' => 'tablet',
                'stok' => 200,
                'satuan' => 'strip',
                'exp' => '2027-08-05',
                'dosis' => '1x sehari 1 tablet',
                'kandungan' => 'Vitamin C 500mg',
                'kemasan' => 'plastik',
            ],
            [
                'nama_obat' => 'Hydrocortisone',
                'kategori' => 'salep',
                'stok' => 30,
                'satuan' => 'tube',
                'exp' => '2025-12-18',
                'dosis' => 'Oles tipis pada area yang sakit',
                'kandungan' => 'Hydrocortisone 1%',
                'kemasan' => 'tube',
            ],
            [
                'nama_obat' => 'Diazepam',
                'kategori' => 'tablet',
                'stok' => 25,
                'satuan' => 'strip',
                'exp' => '2026-06-22',
                'dosis' => '1x sehari 1 tablet',
                'kandungan' => 'Diazepam 5mg',
                'kemasan' => 'dus',
            ],
        ]);
    }
}
