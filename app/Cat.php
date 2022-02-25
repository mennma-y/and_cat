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
        'age' => 'required|max:10',
        'area' => 'required|max:10',
        'slogan' => 'required|max:100',
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
}
