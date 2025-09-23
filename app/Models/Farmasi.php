<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_obat',
        'jenis_obat',
        'no_obat',
        'stok_obat'
    ];
}
