<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.users.user-index', compact('users'));
    }

    public function create() {
        $roles = Role::all();
        return view('admin.users.user-create', compact('roles'));
    }

    public function store(Request $request) {
        $persona = Persona::create([
            'nombres' => $request->nombres,
            'paterno' => $request->paterno,
            'materno' => $request->materno,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'fnac' => $request->fnac,
        ]);

        $perfil = Perfil::create([
            'persona_id' => $persona->id,
            'facebook' => $request->facebook,
            'x' => $request->x,
        ]);

        User::create([
            'perfil_id' => $perfil->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->assingRole($request->role);

        return redirect()->route('users.index');
    }

    public function edit(User $user) {
        $roles = Role::all();
        return view('admin.users.user-edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user) {
        $user->persona->update([
            'nombres' => $request->nombres,
            'paterno' => $request->paterno,
            'materno' => $request->materno,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'fnac' => $request->fnac,
        ]);

        $user->perfil->update([
            'facebook' => $request->facebook,
            'x' => $request->x,
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $user->syncRoles([$request->role]);

        return redirect()->route('users.index');
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect()->route('users.index');
    }
}
