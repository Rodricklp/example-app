<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $guarded = [];

    public function opiniones() {
        $this->hasMany(Opinion::class);
    }

    public function etiquetas() {
        $this->belongsToMany(Etiqueta::class);
    }
}
