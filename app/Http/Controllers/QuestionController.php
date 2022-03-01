<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{

    public function index()
    {
        $questions = Question::all();
        return view('question', compact('questions'));
    }
    public function store(Request $request)
    {
        $rules = [
            'question' => 'required|max255',

        ];
        $message = [
            'question.required' => '質問を入力してください',
          'question.max255' =>'文字数に制限があります',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect('/question')
                ->withErrors($validator);
        }
        $questions = new Question;
        $questions->quetion = $request->input('question');
        $questions->save();
        return redirect('/form');
    }
}
