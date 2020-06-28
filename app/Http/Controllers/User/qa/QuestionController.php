<?php

namespace App\Http\Controllers\User\qa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function qa()
    {
        $qas = Question::orderBy('created_at', 'desc')->paginate(10);

        return view('user.qa.qa', ['qas' => $qas]);
    }

    public function create()
    {
        return view('user.qa.create');
    }

    public function store(Request $request)
    {
        $params = $request->validate([
            'question' => 'required|max: 1000',
        ]);

        Question::create($params);

        return redirect()->route('user.qa');
    }
}
