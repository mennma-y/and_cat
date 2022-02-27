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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('main.home');
});

Route::get('/cat/profile', function () {
    return view('main.cat_profile');
});

Route::get('/like', function () {
    return view('main.like');
});

Route::get('/search', function () {
    return view('main.search');
});




Route::get('/admin/cat/register', function () {
    return view('admin.cat_register');
});

Route::post('/admin/cat/register', 'CatController@catRegister');
