@extends('components.plantilla')

@section('title')
    Post Index
@endsection

@push('css')
    <style>
        body {
            color: white;
        }
    </style>
@endpush

@section('contenido')

@if (session('create'))
    <x-alert2 type="success">
        <x-slot name="title">Create</x-slot>
        Se ha creado un registro post.
    </x-alert2>
@endif

@if (session('edit'))
    <x-alert2 type="warning">
        <x-slot name="title">Edit</x-slot>
        Se ha editado un registro post.
    </x-alert2>
@endif

@if (session('delete'))
    <x-alert2 type="danger">
        <x-slot name="title">Delete</x-slot>
        Se ha eliminado un registro post.
    </x-alert2>
@endif

<div class="grid grid-cols-3 gap-5 p-5">


@foreach ($posts as $item)

    <div class="max-w-fit mb-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        
        <img class="rounded-t-lg" src="{{ asset('storage') . '/' . $item->image }}" alt="" />
        
        <div class="p-5">
            <div class="flex gap-2">
                <h5 class="flex-1 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$item->title}}</h5>
                
                <a class="text-yellow-700" href="{{ route('posts.edit', $item) }}">
                    <span class="fa fa-pencil"></span>
                </a>
                <form action="{{ route('posts.destroy', $item->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="text-red-700" type="submit">
                        <span class="fa fa-trash"></span>
                    </button>
                </form>
            </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$item->body}}</p>
        </div>
    </div>

@endforeach

<div class="max-w-fit mb-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
    </a>

    <div class="p-5">
        <a href="{{ route('posts.create') }}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nuevo Post</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">¿Tienes una idea?, ¡COmpartela!</p>
        </a>
    </div>

</div>

</div>
    


@endsection

@push('css')
<style>
    body {
        background-color: chocolate;
    }
</style>    
@endpush
   
