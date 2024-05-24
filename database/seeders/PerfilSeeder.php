<?php

namespace Database\Seeders;

use App\Models\Perfil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* Perfil::create([
            'persona_id' => 1,
            'facebook' => 'pperez',
            'x' => 'pperezx',
        ]); */

        Perfil::factory(9)->create();

        Perfil::create([
            'persona_id' => 10,
            'facebook' => 'fb.com',
            'x' => 'x.com'
        ]);
    }
}
