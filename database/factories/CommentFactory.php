<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'body' => 'コメント。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。'
    ];
});
