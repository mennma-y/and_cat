<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Form;
use Illuminate\Support\Facades\Validator;
use App\Cat;
use Dotenv\Validator as DotenvValidator;


class FormController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $forms = Form::Join('cats', 'forms.cat_id', '=',  'cats.id')
            ->join('users', 'forms.user_id', '=', 'users.id')
            ->where('cats.user_id',  Auth::id())
            ->select('users.email', 'forms.id', 'forms.name', 'cats.user_id', 'forms.memo', 
            'forms.telephone','cats.name as cname','cats.age as cage','cats.type as ctype','cats.area as carea', 'forms.created_at')
            ->orderby('forms.created_at', 'desc')
            ->simplepaginate(5);

        return view('admin', [
            'user' => $user,
            'forms' => $forms,
        ]);
    }

    public function form(Request $request)
    {
        $user = Auth::user();
        $cat = Cat::find($request->id);
        return view('form',[
            'id'=>$request->id,
            'cat' => $cat,
            'user' =>$user,
        ]);
    }
    public function store(Request $request)
    {
     
        $rules = [
            'name' => 'required',
            'telephone' => ['required', 'numeric', 'digits_between:10,11'],
            'memo' =>  'nullable|string|max:255',
        ];
        $message = [
            'name.required' => '名前を入力してください',
            'telephone.required' => '電話番号を入力してください',
            'telephone.numeric' => '数字でお願いします',
            'telephone.digits_between' => '携帯番号は10桁から11桁でお願いします',
            'memo.max' => '備考の文字数に制限があります',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect('/form/'.$request->forid)
                ->withErrors($validator)
                ->withInput();
        }
        $forms = new Form;
        $forms->user_id = Auth::user()->id;
        $forms->name = $request->input('name');
        $forms->telephone = $request->input('telephone');
        $forms->memo = $request->input('memo');
        $forms->cat_id = $request->forid;
        $forms->save();
      
        
        return redirect('/cat/profile/'.$request->id);
    }
}
