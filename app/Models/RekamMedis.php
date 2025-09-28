<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $fillable = [
        'NIK_pasien',
        'NIP_dokter',
        'keluhan',
        'riwayat_penyakit',
        'id_penyakit',
        'catatan',
        'terapi_tindakan'
    ];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'id_penyakit');
    }

    public function resep()
    {
        return $this->hasOne(Resep::class, 'id_rekam_medis');
    }
}
