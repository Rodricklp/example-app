<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index() {
        $roles = Role::all();
        return view('admin.roles.role-index', compact('roles'));
    }

    public function create() {
        return view('admin.roles.role-create');
    }

    public function store(Request $request) {
        Role::create($request->all());
        return redirect()->route('roles.index');
    }

    public function edit(Role $role) {
        return view('admin.roles.role-edit', compact('role'));
    }

    public function update(Request $request, Role $role) {
        $role->update($request->all());
        return redirect()->route('roles.index');
    }

    public function destroy(Role $role) {
        $role->delete();
    }
}
