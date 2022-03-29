<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'organize'=>'required|max:15',
            'category'=>'required|max:10',
            'place'=>'required|max:5',
            'detail'=>'required|min:10',
            'event_date'=>'required',
            'address'=>'required',
            'parttime'=>'required',  
        ];

        
    }

    public function messages()
    {
        return[
            'organize.required'=>'団体名を入力してください',
            'organize.max'=>'団体名は15文字以内で入力してください',
            'category.required'=>'内容を入力して下さい',
            'category.max'=>'内容は10文字以内で入力してください',
            'place.required'=>'場所を入力して下さい',
            'place.max'=>'場所は5文字以内で入力してください',
            'detail.required'=>'イベントの詳細を入力して下さい',
            'detail.min'=>'イベントの詳細は10文字以上入力してください',
            'event_date.required'=>'日時を入力してください',
            'address.required'=>'イベント会場の住所を入力してください',
            'parttime.required'=>'イベントの時間を入力してください',  
            

        ];


    }
}
