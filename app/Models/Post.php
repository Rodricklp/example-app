<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $guarded = [];

    public function opiniones() {
        return $this->hasMany(Opinion::class);
    }

    public function etiquetas() {
        return $this->belongsToMany(Etiqueta::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function asignaciones() {
        return $this->hasMany(Asigna::class);
    }
}
