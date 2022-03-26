<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;

class DantaiController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $user=Auth::user();
    //     //dd($user);
    //     if ($user->admin_confirmation !== 1){
    //       return redirect('home');
    //     }
    // }

    public function index()
    {
        $user=Auth::user();
        // dd($user);
        return view("dantai",['user'=>$user]);
    }

    public function andcat()
    {
        $user=Auth::user();
        // dd($user);
        return view("andcat",['user'=>$user]);
    }

}
