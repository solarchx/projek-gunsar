<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailResep extends Model
{
    protected $table = 'detail_reseps';

    protected $fillable = [
        'id_resep',
        'id_obat',
        'jumlah',
    ];

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }

    public function resep()
    {
        return $this->belongsTo(Resep::class, 'id_resep');
    }
}
