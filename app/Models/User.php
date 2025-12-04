<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function userFriendList(){
        return $this->belongsToMany(User::class, 'daftarpermintaanteman', 'idpeminta', 'idtarget')
                    ->wherePivot('status', 1);
    }

    public function pendingRequest(){
        return $this->belongsToMany(User::class, 'daftarpermintaanteman', 'idtarget', 'idpeminta')
                    ->wherePivot('status', 2);
    }

    public function friendRequestByUsername($username){
        return $this->belongsToMany(User::class, 'daftarpermintaanteman', 'idpeminta', 'idtarget')
                    ->withPivot('status')
                    ->where('users.name', $username);
    }

    public function incomingFriendRequestFrom($username){
        return $this->belongsToMany(User::class, 'daftarpermintaanteman', 'idtarget', 'idpeminta')
                    ->wherePivot('status', 2)
                    ->where('users.name', $username);
    }

    public function konfirmasiPartisipan()
    {
        return $this->hasMany(KonfirmasiPartisipan::class, 'idpengguna', 'id');
    }

    public function agenda()
    {
        return $this->belongsToMany(Agenda::class, 'konfirmasipartisipan', 'idpengguna', 'idagenda');
    }
}
