<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_1 = Role::create(['name' => 'Administrador']);
        $role_2 = Role::create(['name' => 'Autor']);
        $role_3 = Role::create(['name' => 'Colaborador']);

        Permission::create(['name' => 'roles.index', 'category' => 'Role', 'description' => 'Módulo de Role'])->assignRole([$role_1]);
        Permission::create(['name' => 'roles.create', 'category' => 'Role', 'description' => 'Crear Role'])->assignRole([$role_1]);
        Permission::create(['name' => 'roles.edit', 'category' => 'Role', 'description' => 'Editar Role'])->assignRole([$role_1]);
        Permission::create(['name' => 'roles.show', 'category' => 'Role', 'description' => 'Ver Role'])->assignRole([$role_1]);
        Permission::create(['name' => 'roles.delete', 'category' => 'Role', 'description' => 'Eliminar Role'])->assignRole([$role_1]);

        Permission::create(['name' => 'users.index', 'category' => 'User', 'description' => 'Módulo de User'])->assignRole([$role_1]);
        Permission::create(['name' => 'users.create', 'category' => 'User', 'description' => 'Crear User'])->assignRole([$role_1]);
        Permission::create(['name' => 'users.edit', 'category' => 'User', 'description' => 'Editar User'])->assignRole([$role_1]);
        Permission::create(['name' => 'users.show', 'category' => 'User', 'description' => 'Ver User'])->assignRole([$role_1]);
        Permission::create(['name' => 'users.delete', 'category' => 'User', 'description' => 'Eliminar User'])->assignRole([$role_1]);

        Permission::create(['name' => 'posts.index', 'category' => 'Post', 'description' => 'Módulo de Post'])->assignRole([$role_1, $role_2, $role_3]);
        Permission::create(['name' => 'posts.create', 'category' => 'Post', 'description' => 'Crear Post'])->assignRole([$role_1, $role_2]);
        Permission::create(['name' => 'posts.edit', 'category' => 'Post', 'description' => 'Editar Post'])->assignRole([$role_1, $role_2, $role_3]);
        Permission::create(['name' => 'posts.show', 'category' => 'Post', 'description' => 'Ver Post'])->assignRole([$role_1, $role_2, $role_3]);
        Permission::create(['name' => 'posts.delete', 'category' => 'Post', 'description' => 'Eliminar Post'])->assignRole([$role_1, $role_2]);
    }
}
