<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        // --- Data dummy untuk contoh ---
        $totalPasien = 1280;
        $pasienHariIni = 27;
        $totalRekamMedis = 3250;

        $antrianPasien = [
            ['nama' => 'Budi Santoso', 'keluhan' => 'Demam', 'jam' => '10:30', 'status' => 'Sudah Ditangani'],
            ['nama' => 'Siti Aminah', 'keluhan' => 'Batuk & Pilek', 'jam' => '11:00', 'status' => 'Menunggu'],
            ['nama' => 'Ahmad Fauzi', 'keluhan' => 'Sakit Kepala', 'jam' => '11:15', 'status' => 'Sedang Ditangani'],
        ];

        $topKeluhan = [
            ['nama' => 'Demam', 'jumlah' => 35],
            ['nama' => 'Batuk & Pilek', 'jumlah' => 28],
            ['nama' => 'Hipertensi', 'jumlah' => 19],
            ['nama' => 'Asam Urat', 'jumlah' => 14],
        ];

        $pasienTerakhir = [
            ['nama' => 'Budi Santoso', 'keluhan' => 'Demam', 'jam' => '10:30'],
            ['nama' => 'Siti Aminah', 'keluhan' => 'Batuk & Pilek', 'jam' => '10:45'],
            ['nama' => 'Ahmad Fauzi', 'keluhan' => 'Demam', 'jam' => '11:00'],
        ];

        $statistikBulanan = [
            'labels' => ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'],
            'pasienBaru' => [120,150,180,160,200,220,210,250,270,300,320,350],
            'pasienLama' => [100,120,140,130,170,180,190,200,220,240,260,280]
        ];

        $distribusiUsiaGender = [
            'labels' => ['Anak (6-12)', 'Remaja (13-17)', 'Dewasa (18-59)', 'Lansia (60+)'],
            'laki' => [12, 20, 15, 40],
            'perempuan' => [10, 18, 17, 35],
        ];

        return view('dashboard.index', compact(
            'totalPasien',
            'pasienHariIni',
            'totalRekamMedis',
            'antrianPasien',
            'topKeluhan',
            'pasienTerakhir',
            'statistikBulanan',
            'distribusiUsiaGender'
        ));
    }
}