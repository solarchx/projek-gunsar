<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    // protected $table = 'resep';

    protected $fillable = [
        'id_rekam_medis',
        'NIK_pasien',
        'NIP_dokter',
        'tanggal',
        'obat_racikan',
        'obat_rekomendasi',
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->tanggal)) {
                $model->tanggal = now()->toDateString();
            }
        });
    }

    public function rekamMedis()
    {
        return $this->belongsTo(RekamMedis::class, 'id_rekam_medis');
    }

    public function detailReseps()
    {
        return $this->hasMany(DetailResep::class, 'id_resep');
    }
}
