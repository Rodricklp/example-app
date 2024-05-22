@extends('components.plantilla')

@section('contenido')
    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data" novalidate>
        @method('PATCH')
        @include('post.form')
    </form>
@endsection