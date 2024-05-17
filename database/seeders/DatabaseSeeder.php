<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PersonaSeeder::class,
        ]);

        /* $this->call([
            PerfilSeeder::class,
        ]);
        
        User::factory()->create([
            'perfil_id' => 1,
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        //User::factory(9)->create();
    }
}
