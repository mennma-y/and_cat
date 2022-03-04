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


Auth::routes();

Route::group(['middleware'=>'auth'],function(){
    Route::get('/user','UserController@show')->name('user.show');
    Route::post('/user/update/','UserController@update')->name('user.update');
    Route::get('/event','EventController@index')->name('event.index');
    Route::get('/event/show/{id}','EventController@show')->name('event.show');
    Route::get('/event/create','EventController@create')->name('event.create');
    Route::post('/event/store','EventController@store')->name('event.store');
    Route::get('/event/edit/{id}','EventController@edit')->name('event.edit');
    Route::post('/event/update/{id}','EventController@update')->name('event.update');
    Route::post('/event/delete/{id}','EventController@delete')->name('event.delete');


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

Route::get('/form', function () {
    return view('form');
});
Route::get('/application', function () {
    return view('application');
});


