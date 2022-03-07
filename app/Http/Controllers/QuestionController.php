<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Validator;
use Dotenv\Validator as DotenvValidator;

class QuestionController extends Controller
{

    public function index()
    {
        $questions = Question::all();
      
        return view('main.cat_profile', compact('questions'));
    }
    public function store(Request $request)
    {
        $rules = [
            'question' => 'required|string|max:255',

        ];
        $message = [
            'question.required' => '質問を入力してください',
          'question.max:255' =>'文字数に制限があります',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect('/cat_profile')
                ->withErrors($validator);
        }
        $questions = new Question;
        $questions->user_id = 4;
        $questions->cat_id =1;
        $questions->question = $request->input('question');
        $questions->save();
        return redirect('/cat_profile');
    }
}
