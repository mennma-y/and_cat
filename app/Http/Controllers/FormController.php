<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Form;
use Dotenv\Validator as DotenvValidator;
use Validator;

class FormController extends Controller
{
    public function index()
    {

        $forms = Form::Join('cats', 'forms.cat_id', '=',  'cats.id')
            ->join('users', 'forms.user_id', '=', 'users.id')
            // ->join('cats','cats.user_id','=','users.id')
            ->where('cats.user_id',  Auth::id())
            ->select('users.email', 'forms.id', 'forms.name', 'cats.user_id', 'forms.memo', 
            'forms.telephone','cats.name as cname','cats.age as cage','cats.type as ctype','cats.area as carea', 'forms.created_at')
            ->orderby('forms.created_at', 'desc')
            ->paginate(5);
      
        return view('admin', compact('forms'));
    }
    public function form(Request $request)
    {
        
        return view('form',[
            'id'=>$request->id
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
            'telehone.numeric' => '数字でお願いします',
            'telephone.digits_between:10,11' => '入力に問題があります',
            'memo.max:255' => '文字数に制限があります',
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
      
        $request->session()->regenerateToken();
        return redirect('/form/'.$request->forid);
    }
}
