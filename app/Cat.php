<?php

namespace App;

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
        if($str = '0～3ヶ月'){
            return $query->whereIn('age', ['0ヶ月', '1ヶ月', '2ヶ月', '3ヶ月']);
        }elseif($str = '4～7ヶ月'){
            return $query->whereIn('age', ['4ヶ月', '5ヶ月', '6ヶ月', '7ヶ月']);
        }elseif($str = '8～11ヶ月'){
            return $query->whereIn('age', ['8ヶ月', '9ヶ月', '10ヶ月', '11ヶ月']);
        }else{
            return $query->where('age', $str);
        }
    }

    public function catImageMain()
    {
        $cat_main = $this->images()->where('status', 'main')->first();
        $cat_image_main = $cat_main->image_path;

        return $cat_image_main;
    }
}
