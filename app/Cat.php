<?php

namespace App;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Arr;

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
        if($str != ''){
            return $query->where('area', $str);
        }
    }

    public function scopeGender($query, $str)
    {
        if($str != ''){
            return $query->where('gender', $str);
        }
    }

    public function scopeAgeMore($query, $str)
    {
        if($str != ''){
            return $query->where('age', '>=', $str);
        }

    }

    public function scopeAgeLess($query, $str)
    {
        if($str != ''){
            return $query->where('age', '<=', $str);
        }

    }

    public function scopeType($query, $str)
    {
        if($str != ''){
            return $query->where('type', 'LIKE', "%{$str}%");
        }

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

    public function getCatAgeAttribute()
    {
        $prefs = [
            '1' => '0ヶ月',
            '2' => '1ヶ月',
            '3' => '2ヶ月',
            '4' => '3ヶ月',
            '5' => '4ヶ月',
            '6' => '5ヶ月',
            '7' => '6ヶ月',
            '8' => '7ヶ月',
            '9' => '8ヶ月',
            '10' => '9ヶ月',
            '11' => '10ヶ月',
            '12' => '11ヶ月',
            '13' => '1歳',
            '14' => '2歳',
            '15' => '3歳',
            '16' => '4歳',
            '17' => '5歳',
            '18' => '6歳',
            '19' => '7歳',
            '20' => '8歳',
            '21' => '9歳',
            '22' => '10歳',
            '23' => '11歳',
            '24' => '12歳',
            '25' => '13歳',
            '26' => '14歳',
            '27' => '15歳',
            '28' => '16歳',
            '29' => '17歳',
            '30' => '18歳',
            '31' => '19歳',
            '32' => '20歳',
        ];
        return Arr::get($prefs, $this->age);
    }
}
