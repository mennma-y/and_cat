<?php

namespace App;

use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [
        'type', 'gender', 'age', 'area', 'slogan', 'introduction'
    ];

    public static $rules = [
        'type' => 'required|max:50',
        'gender' => 'required|in:0,1',
        'age' => 'required|max:20',
        'area' => 'required|max:10',
        'slogan' => 'required|max:200',
        'introduction' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function scopeArea($query, $str)
    {
        return $query->where('area', $str);
    }

    public function scopeGender($query, $str)
    {
        return $query->where('gender', $str);
    }

    public function scopeAge($query, $str)
    {
        return $query->where('age', $str);

    }

    public function catImageMain()
    {
        $cat_main = $this->images()->where('status', 'main')->first();

        return $cat_main;
    }

    public function catImageSub()
    {
        $cats_sub = $this->images()->where('status', 'sub')->get();

        return $cats_sub;
    }

    // data-like-idの値
    public function cat_like_id() 
    {
        $user_id = Auth::id();
        $cat_like = Like::where('status', 'active')->where('user_id', $user_id)->where('cat_id', $this->id)->first();

        if(!empty($cat_like)){
            //レコードが存在するなら
            return $cat_like->id;
        }   
            //レコードが存在しなければnull
            return null;
    }
}
