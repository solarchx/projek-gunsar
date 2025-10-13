<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class TenagaMedis extends Authenticatable
{
    use Notifiable;

    protected $table = 'tenaga_mediss';

    protected $fillable = [
        'nip',
        'nama',
        'jabatan',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
    ];
}
