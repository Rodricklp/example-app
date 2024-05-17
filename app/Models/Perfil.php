<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = "perfiles";

    public $guarded = [
    ];

    public function persona() {
        return $this->belongsTo(Persona::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }
}
