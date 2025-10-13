<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        return view('dashboard.pasien');
    }
    public function riwayat()
    {
        $riwayats = [
            ['tanggal' => '2025-09-01', 'poli' => 'Umum', 'dokter' => 'dr. Andi', 'diagnosa' => 'Flu'],
        ];

        return view('dashboard.riwayat', compact('riwayats'));
    }

    public function profil()
    {
        return view('dashboard.profile');
    }

    public function jadwal()
    {
        $jadwals = [
            ['tanggal' => '2025-09-25', 'poli' => 'Umum', 'dokter' => 'dr. Andi', 'status' => 'Menunggu'],
            ['tanggal' => '2025-09-28', 'poli' => 'Anak', 'dokter' => 'dr. Citra', 'status' => 'Terkonfirmasi'],
        ];

        return view('dashboard.jadwal', compact('jadwals'));
    }

    public function pendaftaran()
    {
        return view('dashboard.daftar');
    }
}
