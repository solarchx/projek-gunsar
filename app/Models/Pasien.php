<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens'; // nama tabel

    protected $fillable = [
        'nama',
        'usia',
        'gender',
        'alamat',
        'no_hp',
        'keluhan',
        'status', // contoh: Menunggu, Sedang Ditangani, Sudah Ditangani
    ];
}