<?php

namespace App\Http\Controllers;

use App\Like;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LikeController extends Controller
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
     *  いいね！する、いいね！外す
     * 
     *  @param Request $request
     *  @return Response
     */
    public function like(Request $request)
    {
        $user_id = Auth::id();
        $cat_id = $request->cat_id;
        $like_id = null;

        // cat_idがPOSTされた場合（いいね！する）
        if(isset($cat_id)){
            $like = new Like;
            $like->user_id = $user_id;
            $like->cat_id = $cat_id;
            $like->save();
            $like_id = $like->id;
        }
        // like_idがPOSTされた場合（いいね！外す）
        if(isset($request->like_id)){
            $like = Like::find($request->like_id);
            $like->status = 'deleted';
            $like->save();
        }

        $param = [
            'message' => 'successful',
            'like_id' => $like_id,
        ];
        return response()->json($param); // JSONデータをjQueryに返す
    }
}
