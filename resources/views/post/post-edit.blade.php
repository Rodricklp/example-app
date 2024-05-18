@extends('components.plantilla')

@section('contenido')
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @method('PATCH')
        @include('post.form')
    </form>
@endsection