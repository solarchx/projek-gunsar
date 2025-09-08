<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekamUmum extends Model
{
    public function rekamMedis()
    {
        return $this->belongsTo(RekamMedis::class, 'id_rekam');
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'penyakit_id');
    }

    // public function resep()
    // {
    //     return $this->belongsTo(Resep::class, 'id_resep');
    // }

    // public function screening()
    // {
    //     return $this->belongsTo(Screening::class, 'id_screening');
    // }
}
