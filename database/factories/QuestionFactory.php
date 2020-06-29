<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Question;
use Faker\Generator as Faker;

$factory->define(App\Models\Question::class, function (Faker $faker) {
    return [
        'question' => '質問です。'
    ];
});
