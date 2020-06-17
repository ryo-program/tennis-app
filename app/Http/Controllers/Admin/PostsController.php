<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('admin.posts', ['posts' => $posts]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max: 50',
            'body' => 'required|max: 2000',
        ]);

        Post::create($params);

        return redirect()->route('admin.posts');
    }

    public function show($post_id)
    {
        $post = Post::findOrFail($post_id);
        return view('admin.show', ['post' => $post]);
    }

    public function edit($post_id)
    {
        $post = Post::findOrFail($post_id);
        return view('admin.edit', ['post' => $post]);
    }

    public function update()
    {

    }

    public function destroy($post_id)
    {
        $post = Post::findOrFail($post_id);
        \DB::transaction(function() use ($post) {
            $post->comments()->delete();
            $post->delete();
        });

        return redirect()->route('admin.posts');
    }
}
