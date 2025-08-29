<?php

namespace App\Http\Controllers\Farmasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $dataObat = [
            [
                'no' => 1,
                'nama' => 'Paracetamol',
                'kategori' => 'Analgesik',
                'stok' => 50,
                'satuan' => 'Tablet',
                'exp' => '2026-05-01',
                'dosis' => '3x1',
                'kandungan' => '500mg Paracetamol',
                'kemasan' => 'Strip',
            ],
            [
                'no' => 2,
                'nama' => 'Amoxicillin',
                'kategori' => 'Antibiotik',
                'stok' => 30,
                'satuan' => 'Kapsul',
                'exp' => '2025-11-10',
                'dosis' => '3x1',
                'kandungan' => '500mg Amoxicillin',
                'kemasan' => 'Botol',
            ],
        ];

        return view('farmasi.obat', compact('dataObat'));
    }
}
