<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('question_id');
            $table->text('answer');
            $table->timestamps();

            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
