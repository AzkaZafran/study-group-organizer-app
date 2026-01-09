<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    protected $table = 'catatan';

    protected $primaryKey = 'idcatatan';

    protected $fillable = [
        'catatan',
        'idpengguna',
        'idagenda'
    ];

    public function author(){
        $this->belongsTo(User::class, 'idpengguna');
    }
}
