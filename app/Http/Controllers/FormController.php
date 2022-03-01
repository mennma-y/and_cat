<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use Dotenv\Validator as DotenvValidator;
use Validator;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return view('admin', compact('forms'));
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
            'telehone.numeric' => '数字でお願いします',
            'telephone.digits_between:10,11' => '入力に問題があります',
            'memo.max:255' => '文字数に制限があります',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect('/form')
                ->withErrors($validator)
                ->withInput();
        }
        $forms = new Form;
        // ログイン機能出来次第ユーザーid変更
        $forms->user_id = 1;
        $forms->name = $request->input('name');
        $forms->telephone = $request->input('telephone');
        $forms->memo = $request->input('memo');
        $forms->save();
        return redirect('/form');
    }

}
