<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function validar($request) {
        Validator::make($request->all(),[
            'user_id' => 'required',
            'title' => 'required|max:15',
            'body' => 'required',
        ],[
        ],[
            'user_id' => 'usuario',
        ])->validate();
        /* $request->validate([
            'user_id' => 'required',
            'title' => 'required|max:15',
            'body' => 'required',
        ]); */
    }
    public function index() {
        $posts = Post::all();
        return view('post.post-index', compact('posts'));
    }

    public function create() {
        $users = User::all();
        return view('post.post-create', compact('users'));
    }

    public function store(Request $request) {
        $this->validar($request);
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('uploads', 'public');
        }
        /* $post = new Post;

        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save(); */

        $post = Post::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image,
        ]);

        /* Post::create($request->all()); */

        return redirect()->route('posts.index')->with('create', true);
    }

    public function edit(Post $post) {
        $users = User::all();

        return view('post.post-edit', compact('users', 'post'));
    }

    public function update(Request $request, Post $post) {
        $this->validar($request);
        if ($request->hasFile('image')) {
            Storage::delete('public/' . $post->image);
            $post->image = $request->file('image')->store('uploads', 'public');
        }

        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        return redirect()->route('posts.index')->with('edit', true);
    }

    public function destroy(Post $post) {
        Storage::delete('public/' . $post->image);
        $post->delete();
        return redirect()->route('posts.index')->with('delete', true);
    }

    public function show($post) {
        return view('prueba', ["post" => $post]);
    }
}
