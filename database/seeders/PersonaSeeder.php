<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* Persona::create([
            'nombres' => 'Pepito',
            'paterno' => 'Perez',
            'materno' => 'Lopez',
            'telefono' => '77778888',
            'direccion' => 'Av. de prueba, Nro. 3',
            'fnac' => '1999-04-11'
        ]); */

        Persona::factory(9)->create();

        Persona::create([
            'nombres' => 'rodrick',
            'paterno' => 'perez',
            'materno' => 'lopez',
            'telefono' => '77889944',
            'direccion' => 'Avenida de Prueba NO. 78',
            'fnac' => '1999-05-10',
        ]);
    }
}
