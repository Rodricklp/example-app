<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    // Nombre de tabla
    // protected $table = 'personas';
    // Nombre de llave primaria
    // protected $primarykey = 'codigo';
    // Indicar si PK es autoincrementable
    // protected $incrementing = false;
    // Indica el tipo de dato del PK
    // protected $keytype = 'string';
    // Indicamos si el modelo tiene marcas de tiempo
    // protected $timestamps = false;

    // Para asignacion masiva
    /* public $fillable = [
        'nombres',
        'paterno',
        'materno',
        'telefono',
        'direccion',
        'fnac',
        '',
        '',
        '....',
    ]; */

    // Proteger
    public $guarded = [
    ];

    public function perfil() {
        $this->hasOne(Perfil::class);
    }

    public function user() {
        $this->hasOneThrough(User::class, Perfil::class);
    }
}
