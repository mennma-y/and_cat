<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('form');
});

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/admin', 'FormController@index');
Route::post('/send', 'FormController@store');
Route::get('/question', 'QuestionController@index');
Route::post('/send_question', 'QuestionController@store');
Route::get('/cat',function(){
    return view('cat_profile');
});
