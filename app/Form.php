<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Form extends Model
{

    protected $fillable = [
        'telephone',
        'memo',
        'name',
        'user_id'
    ];
    // forms.user_id -> users.id (*:1)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
