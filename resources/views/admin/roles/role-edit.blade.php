@extends('components.plantilla')

@section('title')
    Editar Role
@endsection

@section('contenido')
<div class="flex">
    <h1 class="flex-1 h-2">Editar Role</h1>
    <a href="{{ route('roles.index') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
        Cancel
    </a>
</div>
    
<form action="{{ route('roles.update', $role->id) }}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $role->name }}">
        @error('name')
            {{ $message }}
        @enderror
    </div>

    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
        Save
    </button>
</form>
@endsection