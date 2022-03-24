<?php

namespace App;
use App\Models\User;
use App\Cat;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
       'question',
       'reply'
    ];
    public function user()
    {

        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function cat()
    {

        return $this->belongsTo(Cat::class, 'cat_id', 'id');
    }
}
