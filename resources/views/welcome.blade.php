@extends('components.plantilla')

@push('title')
    Welcome
@endpush

@section('contenido')
Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae magni quis tempore commodi nisi ducimus recusandae accusantium pariatur atque! Officiis libero non, minima culpa dicta sunt ratione sed inventore ipsam?
<x-alert2 type="warning">
    <x-slot name="title">Titulo de Welcome</x-slot>
    Alerta para Welcome
</x-alert2>
@endsection
    

