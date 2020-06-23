<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('user.posts', ['posts' => $posts]);
    }

    public function show($post_id)
    {
        $post = Post::findOrFail($post_id);
        return view('user.show', ['post' => $post]);
    }
}
