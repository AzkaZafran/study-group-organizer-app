<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarPermintaanTeman extends Model
{
    protected $table = "daftarpermintaanteman";

    protected $primaryKey = 'id_permintaan';

    protected $fillable = [
        'idpeminta',
        'idtarget',
        'status'
    ];
}
