<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Arr;
class Form extends Model
{

    protected $fillable = [
        'telephone',
        'memo',
        'name',
        'user_id',
        'cat_id',
    ];
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
        return Arr::get($prefs, $this->cage);
    }
    public function user()
    {

        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
