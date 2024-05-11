@extends('components.plantilla')

@section('title')
    Post
@endsection

@push('css')
    <style>
        body {
            color: white;
        }
    </style>
@endpush

@section('contenido')
    <p>Aqui se ve el post</p>
    <x-alert2 type="danger">
        <x-slot name="title">
            Titulo Post
        </x-slot>
        Alerta para post
    </x-alert2>
@endsection

@push('css')
<style>
    body {
        background-color: chocolate;
    }
</style>    
@endpush
   
