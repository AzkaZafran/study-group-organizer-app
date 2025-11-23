<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarPermintaanTeman extends Model
{
    protected $table = "daftarpermintaanteman";

    protected $fillable = [
        'idpeminta',
        'idtarget',
        'status'
    ];
}
