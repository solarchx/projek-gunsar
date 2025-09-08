<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    public function rekamUmum()
    {
        return $this->hasOne(RekamUmum::class, 'id_rekam');
    }
    // public function pasien()
    // {
    //     return $this->belongsTo(Pasien::class, 'id_pasien');
    // }

    // public function dokter()
    // {
    //     return $this->belongsTo(Dokter::class, 'id_dokter');
    // }

    // public function rekamGigi()
    // {
    //     return $this->hasOne(RekamGigi::class, 'id_rekam');
    // }
}
