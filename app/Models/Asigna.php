<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asigna extends Model
{
    use HasFactory;

    protected $table = "asignaciones";

    public $guarded = [];

    public function etiqueta() {
        return $this->belongsTo(Etiqueta::class);
    }

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
