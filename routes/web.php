<?php

use App\Http\Controllers\Post\GestionPosts;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/bienvenido', 'prueba');

Route::resource('/posts', PostController::class);
