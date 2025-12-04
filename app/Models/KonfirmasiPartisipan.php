<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KonfirmasiPartisipan extends Model
{
    protected $table = 'konfirmasipartisipan';

    protected $primaryKey = 'id_konfirmasipartisipan';

    protected $fillable = [
        'idagenda',
        'idpengguna',
        'status'
    ];

    public function agenda()
    {
        return $this->belongsTo(Agenda::class, 'idagenda', 'ID_agenda');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'idpengguna', 'id');
    }
}
