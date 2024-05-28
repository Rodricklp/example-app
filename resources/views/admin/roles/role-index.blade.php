@extends('components.plantilla')

@section('title')
    Módulo Roles
@endsection

@section('contenido')
<div class="flex">
    <h1 class="flex-1 h-2">Módulo Roles</h1>
    <a href="{{ route('roles.create') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
        Crear
    </a>
</div>
    <table>
        <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($roles as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <div class="flex gap-2">
                            <a href="{{ route('roles.edit', $item->id) }}">
                                <span class="fa fa-edit"></span>
                            </a>
                            <form action="{{ route('roles.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <span class="fa fa-trash"></span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>    
            @endforeach
            
        </tbody>
    </table>
@endsection