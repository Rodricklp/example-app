@extends('components.plantilla')

@section('title')
    Módulo Users
@endsection

@section('contenido')
<div class="flex">
    <h1 class="flex-1 h-2">Módulo Users</h1>
    <a href="{{ route('users.create') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
        Crear
    </a>
</div>
    <table id="example">
        <thead>
            <th>ID</th>
            <th>USER</th>
            <th>NOMBRE</th>
            <th>ROL</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->persona->nombreCompleto()}}</td>
                    <td>{{$item->getRoleNames()->first()}}</td>
                    <td>
                        <div class="flex gap-2">
                            <a href="{{ route('users.edit', $item->id) }}">
                                <span class="fa fa-edit"></span>
                            </a>
                            <form action="{{ route('users.destroy', $item->id) }}" method="post">
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

    <script>
        new DataTable('#example');
    </script>
@endsection