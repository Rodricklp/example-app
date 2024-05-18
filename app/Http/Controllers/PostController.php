<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('post.post-index', compact('posts'));
    }

    public function create() {
        $users = User::all();
        return view('post.post-create', compact('users'));
    }

    public function store(Request $request) {
        /* $post = new Post;

        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save(); */

        /* $post = Post::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'body' => $request->body,
        ]); */

        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    public function edit(Post $post) {
        $users = User::all();

        return view('post.post-edit', compact('users', 'post'));
    }

    public function update(Request $request, Post $post) {
        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function show($post) {
        return view('prueba', ["post" => $post]);
    }
}
