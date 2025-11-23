<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    /** @use HasFactory<\Database\Factories\AgendaFactory> */
    use HasFactory;

    protected $table = 'agenda';

    protected $primaryKey = 'ID_agenda';
    protected $fillable = [
        'nama_agenda',
        'id_penyelenggara',
        'lokasi',
        'waktu',
        'status'
    ];

    protected $casts = [
        "waktu"=> "datetime"
    ];

    public function konfirmasiPartisipan()
    {
        return $this->hasMany(KonfirmasiPartisipan::class, 'idagenda', 'ID_agenda');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'konfirmasipartisipan', 'idagenda', 'idpengguna');
    }
}
