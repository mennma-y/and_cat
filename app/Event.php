<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable=[
        'organize','category','place','detail','event_date','address','parttime','user_id',
    ];

    public function eventUser()
    {
        return $this ->hasMany('App\Models\User');
    }

}
