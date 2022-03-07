<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    //
    public function show(){

        $id = Auth::user()->id;
        $user=User::where('id',$id)->first();

        return view('profile',compact('user'));
    }

    public function update(Request $request){
        $data = $request->all();

        if(isset($data['image'])){
            $fileName = $request->file('image')->getClientOriginalName();
            Storage::putFileAs('public/images',$request->file('image'),$fileName);       //リクエストされたファイルを$fileNameという名でpublic/imagesに保存する
            $fullFilePath = '/storage/images/'.$fileName; 
        }else{
            $fullFilePath = '/storage/images/defaultImage.png';
        }  
        
        if(isset($data['password'])){
            User::where('id',Auth::user()->id)->update([
                'name'=>$data['nickname'],
                'email'=>$data['email'], 
                'password'=>Hash::make($data['password']),
                'img_url'=>$fullFilePath,
                
    
            ]);
        }else{
            User::where('id',Auth::user()->id)->update([
                'name'=>$data['nickname'],
                'email'=>$data['email'], 
                'img_url'=>$fullFilePath,
                
    
            ]);
        }

        
        return redirect()->route('user.show');
    }
}
