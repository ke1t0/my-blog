<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $today = date('Y-m-d');

        $post = Post::find($id);

        return view('posts.post', ['post' => $post, 'today' => $today]);
    }
}
