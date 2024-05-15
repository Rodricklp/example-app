<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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

    public function perfil() {
        $this->belongsTo(Perfil::class);
    }

    // Opiones realizadas por el usuario
    public function opiniones() {
        $this->hasMany(Opinion::class);
    }

    public function persona() {
        $this->hasOneThrough(Persona::class, Perfil::class);
    }

    // Opiones que tiene un post del Usuario
    public function getOpiniones() {
        $this->hasManyThrough(Opinion::class, Post::class);
    }
}
