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

<div class="grid grid-cols-3 p-5">


@foreach ($posts as $item)

<div class="max-w-fit mb-5 bg-white border border-gray-200 rounded-lg shadow">
    <a href="#">
        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$item->title}}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700">{{$item->body}}</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>

@endforeach

<div class="max-w-fit mb-5 bg-white border border-gray-200 rounded-lg shadow">
    <a href="#">
        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
    </a>

    <div class="p-5">
        <a href="{{ route('posts.create') }}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Nuevo Post</h5>
            <p class="mb-3 font-normal text-gray-700">¿Tienes una idea?, ¡COmpartela!</p>
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
   
