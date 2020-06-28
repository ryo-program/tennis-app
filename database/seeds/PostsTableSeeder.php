<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Post::class, 50)
            ->create()
            ->each(function ($post) {
                $comments = factory(App\Models\Comment::class, 2)->make();

                $post->comments()->saveMany($comments);
            });
    }
}
