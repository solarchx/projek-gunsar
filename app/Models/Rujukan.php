<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rujukan extends Model
{
    protected $table = 'rujukan';
    
    protected $fillable = [
    'nama_lengkap',
    'umur',
    'jenis_kelamin',
    'no_rekam_medis',
    'alamat',
    'diagnosa_awal',
    'dirujuk_ke',
    'alasan_rujukan',
    'nama_dokter',
    'tanggal_rujukan',
    'instansi_pengirim',
    ];

    protected $casts = [
    'tanggal_rujukan' => 'date',
    ];
    


}
