<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('user.welcome');
    }
    
    public function posts()
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
