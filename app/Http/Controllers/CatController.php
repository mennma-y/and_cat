<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Image;
use App\Like;

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
     *  ホーム表示
     *
     *  @param Request $request
     *  @return Response
     */
    public function getHome(Request $request)
    {
        $user = Auth::user();
        $cats = Cat::orderBy('created_at', 'desc')->simplePaginate(50);

        return view('main.home', [
            'user' => $user,
            'cats' => $cats,
        ]);
    }

    /**
     *  保護猫検索表示
     *
     *  @param Request $request
     *  @return Response
     */
    public function getSearch(Request $request)
    {
        $area = null;
        $gender = null;
        $age_more = null;
        $age_less = null;
        $type = null;

        $area = $request->area;
        $gender = $request->gender;
        $age_more = $request->age_more;
        $age_less = $request->age_less;
        $type = $request->type;

        $query = Cat::query();

        if(isset($area) || isset($gender) || isset($age_more) || isset($age_less) || isset($type)){
            $cats = $query->Area($area)->Gender($gender)->AgeMore($age_more)->AgeLess($age_less)->Type($type)->orderBy('created_at', 'desc')->simplePaginate(50);


            return view('main.search', [
                'cats' => $cats,
                'area' => $area,
                'gender' => $gender,
                'age_more' => $age_more,
                'age_less' => $age_less,
                'type' => $type,
            ]);
        }else{
            $cats = $query->orderBy('created_at', 'desc')->simplePaginate(50);

            return view('main.search', [
                'cats' => $cats,
            ]);
        }
    }

    /**
     *  保護猫プロフィール表示
     *
     *  @param Request $request
     *  @return Response
     */
    public function getCatProfile(Request $request)
    {
        $user = Auth::user();
        $cat = Cat::find($request->id);

        return view('main.cat_profile', [
            'user' => $user,
            'cat' => $cat,
        ]);
    }

    /**
     *  保護猫いいね！済表示
     *
     *  @param Request $request
     *  @return Response
     */
    public function getCatLike(Request $request)
    {
        $user = Auth::user();
        $like_cat_ids = Like::where('status', 'active')->where('user_id', $user->id)->pluck('cat_id');
        $cats = Cat::whereIn('id', $like_cat_ids)->orderBy('created_at', 'desc')->simplePaginate(50);
        $like_count = $cats->count();

        return view('main.like', [
            'cats' => $cats,
            'like_count' => $like_count,
        ]);
    }



    // 保護猫団体ページ

    /**
     *  保護猫登録
     *
     *  @param Request $request
     *  @return Response
     */
    public function catRegister(Request $request)
    {

        //ファイルの保存
        if(isset($request->cat_image_main)){
            $this->validate($request, Cat::$rules);
            $cat = new Cat;
            $cat->user_id = Auth::id();
            $cat->name = $request->name;
            $cat->type = $request->type;
            $cat->gender = $request->gender;
            $cat->age = $request->age;
            $cat->area = $request->area;
            $cat->slogan = $request->slogan;
            $cat->introduction = $request->introduction;

            if(isset($request->age_about)){
                $cat->age_about = 1;
            }

            $cat->save();

            $cat_image_main = $request->file('cat_image_main');
            $image_name = Str::random(20).'.'.$cat_image_main->getClientOriginalExtension();
            \Image::make($cat_image_main)->resize(400, null, function ($constraint) {$constraint->aspectRatio();})->save(public_path('storage/cat_images/' . $image_name));

            $image = new Image;
            $image->image_path = 'cat_images/' . $image_name;
            $image->cat_id = $cat->id;
            $image->save();

            if(isset($request->cat_image)){
                $cat_images = $request->file('cat_image');
                foreach($cat_images as $cat_image){
                    $image_name = Str::random(20).'.'.$cat_image->getClientOriginalExtension();
                    \Image::make($cat_image)->resize(400, null, function ($constraint) {$constraint->aspectRatio();})->save(public_path('storage/cat_images/' . $image_name));

                    $image = new Image;
                    $image->image_path = 'cat_images/' . $image_name;
                    $image->cat_id = $cat->id;
                    $image->status = 'sub';
                    $image->save();
                }
            }

        }

        return redirect('/admin/cat/register');
    }

    /**
     *  保護猫編集ページ表示
     *
     *  @param Request $request
     *  @return Response
     */
    public function getCatEdit(Request $request)
    {
        $cat = Cat::find($request->id);

        return view('admin.cat_edit', [
            'cat' => $cat,
        ]);
    }

    /**
     *  保護猫編集
     *
     *  @param Request $request
     *  @return Response
     */
    public function catEdit(Request $request)
    {

        $this->validate($request, Cat::$rules);
        $cat = Cat::find($request->id);
        $cat->type = $request->type;
        $cat->gender = $request->gender;
        $cat->age = $request->age;
        $cat->area = $request->area;
        $cat->slogan = $request->slogan;
        $cat->introduction = $request->introduction;

        if(isset($request->age_about)){
            $cat->age_about = 1;
        }

        $cat->save();

        return redirect()->route('/admin/cat/edit', [$cat]);
        // return redirect()->route('admin.cat.edit', [$cat]);
    }

    /**
     *  保護猫削除
     *
     *  @param Request $request
     *  @return Response
     */
    public function catDelete(Request $request)
    {
        Cat::find($request->id)->delete();
        return redirect('/home');
    }
}
