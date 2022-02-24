<?php

namespace App\Http\Controllers;

use App\Cat;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
    * コンストラクタ
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *  保護猫登録
     * 
     *  @param Request $request
     *  @return Response
     */
    public function catRegister(Request $request)
    {

        //ファイルの保存
        if(isset($request->cat_image)){
            $this->validate($request, Cat::$rules);
            $cat = new Cat;
            $cat->user_id = Auth::id();
            $cat->type = $request->type;
            $cat->gender = $request->gender;
            $cat->age = $request->age;
            $cat->area = $request->area;
            $cat->slogan = $request->slogan;
            $cat->introduction = $request->introduction;
            $cat->save();

            $cat_images = $request->file('cat_image');
            foreach($cat_images as $cat_image){
                $image_name = Str::random(20).'.'.$cat_image->getClientOriginalExtension();
                \Image::make($cat_image)->resize(500, null, function ($constraint) {$constraint->aspectRatio();})->save(public_path('storage/images/' . $image_name));
                
                $image = new Image;
                $image->image_path = 'images/' . $image_name;
                $image->cat_id = $cat->id;
                $image->save();
            }

        }

        return back();
    }
}
