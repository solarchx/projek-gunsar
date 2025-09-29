<?php
// app/Models/Screening.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    use HasFactory;

    protected $table = 'screenings';
    
    protected $fillable = [
        'NIK_pasien',
        'tinggi_badan',
        'berat_badan',
        'suhu_badan',
        'tekanan_darah',
        'tanggal_screening'
    ];

    protected $casts = [
        'tanggal_screening' => 'date',
        'suhu_badan' => 'decimal:1'
    ];
}