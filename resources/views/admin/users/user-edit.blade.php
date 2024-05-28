@extends('components.plantilla')

@section('title')
    Editar Ususario
@endsection

@section('contenido')
    <div class="flex">
        <h1 class="flex-1 h-2">Editar Ususario</h1>
        <a href="{{ route('users.index') }}"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
            Cancel
        </a>
    </div>

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="">Nombres</label>
            <input type="text" name="nombres" value="{{ $user->persona->nombres }}">
            @error('nombres')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Paterno</label>
            <input type="text" name="paterno" value="{{ $user->persona->paterno }}">
            @error('paterno')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Materno</label>
            <input type="text" name="materno" value="{{ $user->persona->materno }}">
            @error('materno')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Dirección</label>
            <input type="text" name="direccion" value="{{ $user->persona->direccion }}">
            @error('direccion')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Telefono</label>
            <input type="text" name="telefono" value="{{ $user->persona->telefono }}">
            @error('nombres')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fnac" value="{{ $user->persona->fnac }}">
            @error('fnac')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Facebook</label>
            <input type="text" name="facebook" value="{{ $user->perfil->facebook }}">
            @error('facebook')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">X</label>
            <input type="text" name="x" value="{{ $user->perfil->x }}">
            @error('x')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Username</label>
            <input type="text" name="name"  value="{{ $user->name }}">
            @error('name')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Email</label>
            <input type="email" name="email" value="{{ $user->email }}">
            @error('email')
                {{ $message }}
            @enderror
        </div>

        <div>
            <label for="">Role</label>
            <select name="role" id="">
                <option value="">Seleccione un rol...</option>
                @foreach ($roles as $item)
                    <option value="{{$item->name}}" {{$user->hasRole($item->name)}}>{{$item->name}}</option>
                @endforeach
            </select>
            @error('role')
                {{ $message }}
            @enderror
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
            Save
        </button>
    </form>
@endsection
