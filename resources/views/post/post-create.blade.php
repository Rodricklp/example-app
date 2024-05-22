@extends('components.plantilla')

@section('contenido')

<form class="max-w-sm mx-auto" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" novalidate >
    @include('post.form')
</form>
    
@endsection