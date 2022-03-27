<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;
use CreateQuestionsTable;
use Validator;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class QuestionController extends Controller
{

    public function index()
    {
  
        return view('main.cat_profile', compact('questions'));
    }
    public function store(Request $request)
    {
        $rules = [
            'question' => 'required|string|max:255',

        ];
        $message = [
            'question.required' => '質問を入力してください',
            'question.max:255'=>'メッセージは:max文字以内で入力してください。',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect('/que')
                ->withErrors($validator);
        }
        $questions = new Question;
        $questions->user_id = Auth::user()->id;
        $questions->cat_id = 4;
        $questions->question = $request->input('question');
        $questions->save();
        $request->session()->regenerateToken();
        return redirect('/que');
    }
    
 
}
