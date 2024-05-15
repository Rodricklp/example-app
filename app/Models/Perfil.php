<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    public $guarded = [
    ];

    public function persona() {
        $this->belongsTo(Persona::class);
    }

    public function user() {
        $this->hasOne(User::class);
    }
}
