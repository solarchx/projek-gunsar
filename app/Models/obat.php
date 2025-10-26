<?php
// filepath: [Obat.php](http://_vscodecontentref_/0)


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obats';

    protected $fillable = [
        'nama_obat',
        'kategori',
        'stok',
        'satuan',
        'dosis',
        'kandungan',
        'kemasan',
        'aturan_pemakaian',
        'tanggal_kadaluarsa',
        'harga_beli',
        'harga_jual',
        'deskripsi',
        'waktu_minum',
        'frekuensi',
        'catatan_penting'
    ];
}