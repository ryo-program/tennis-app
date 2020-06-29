<?php

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Question::class, 15)
            ->create()
            ->each(function($question) {
                $answer = factory(App\Models\Answer::class)->make();

                $question->answers()->save($answer);
            });
    }
}
