<?php

namespace App\Http\Controllers\Admin\qa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function qa()
    {
        $qas = Question::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.qa.qa', ['qas' => $qas]);
    }

    public function show($question_id)
    {
        $question = Question::findOrFail($question_id);
        return view('admin.qa.answer', ['question' => $question]);
    }

    public function store(Request $request)
    {
        $answer = $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer' => 'required|max: 1000',
        ]);

        $question = Question::findOrFail($answer['question_id']);
        $question->answers()->create($answer);
        return redirect()->route('admin.qa');
    }

    public function destroy($question_id)
    {
        $question = Question::findOrFail($question_id);
        \DB::transaction(function() use ($question){
            $question->answers()->delete();
            $question->delete();
        }); 

        return redirect()->route('admin.qa');
    }
}
