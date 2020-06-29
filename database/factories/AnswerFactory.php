<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Answer;
use Faker\Generator as Faker;

$factory->define(App\Models\Answer::class, function (Faker $faker) {
    return [
        'answer' => '答えです。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。'
    ];
});
