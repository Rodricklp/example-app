<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('prueba');
    }

    public function create() {
        return "Formulario para crear post.";
    }

    public function cifras() {
        return "Sumando";
    }

    public function show($post) {
        return view('prueba', ["post" => $post]);
    }
}
