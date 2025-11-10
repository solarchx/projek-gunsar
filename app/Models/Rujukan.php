<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rujukan extends Model
{
    protected $table = [
        'no_rujukan',
        'tanggal',
        'pasien_id',
        'dokter_id',
        'instansi',
        'alasan',
        'diagnosa',
        'status',
        'keterangan', 
    ];

    // Cast untuk tipe data
    protected $casts = [
        'tanggal' => 'datetime',
    ];

    // Relasi contoh — sesuaikan nama model/foreign key dengan project Anda.
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }

    public function dokter()
    {
        return $this->belongsTo(User::class, 'dokter_id');
    }

    // Aturan validasi yang bisa dipanggil dari controller
    public static function rules($id = null)
    {
        $uniqueNo = 'unique:rujukans,no_rujukan';
        if ($id) {
            $uniqueNo .= ',' . $id;
        }

        return [
            'no_rujukan' => ['required', 'string', 'max:50', $uniqueNo],
            'tanggal'     => ['required', 'date'],
            'pasien_id'   => ['required', 'integer', 'exists:pasiens,id'],
            'dokter_id'   => ['nullable', 'integer', 'exists:users,id'],
            'instansi'    => ['nullable', 'string', 'max:255'],
            'alasan'      => ['nullable', 'string'],
            'diagnosa'    => ['nullable', 'string'],
            'status'      => ['nullable', 'string', 'max:50'],
            'keterangan'  => ['nullable', 'string'],
        ];
    }
}
