<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    protected $table = 'obats';

    protected $fillable = [
        'nama_obat',
        'kategori',
        'stok',
        'tanggal_kadaluarsa',
        'harga_beli',
        'harga_jual',
        'deskripsi',
        'waktu_minum',
        'frekuensi',
        'dosis',
        'catatan_penting'
    ];

}
