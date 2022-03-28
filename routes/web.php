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
    return view('auth.login');
});


//作成用
Route::get('/home1', function () {
    return view('/home1');
});

Route::get('/head', function () {
    return view('/head');
});


//ホーム画面→ アンドキャットとは（説明）のページ
Route::get('/andcat','DantaiController@andcat')->name('andcat.andcat');

//ホーム画面→ 保護猫団体のページ
Route::get('/dantai','DantaiController@index')->name('dantai.index');


Auth::routes();

Route::group(['middleware'=>'auth'],function(){
    //自分のプロフィールページ
    Route::get('/user','UserController@show')->name('user.show');
    Route::post('/user/update/','UserController@update')->name('user.update');
    //イベントページ
    Route::get('/event','EventController@index')->name('event.index');
    Route::get('/event/show/{id}','EventController@show')->name('event.show');
    Route::get('/event/create','EventController@create')->name('event.create');
    Route::post('/event/store','EventController@store')->name('event.store');
    Route::get('/event/edit/{id}','EventController@edit')->name('event.edit');
    Route::post('/event/update/{id}','EventController@update')->name('event.update');
    Route::post('/event/delete/{id}','EventController@delete')->name('event.delete');
    Route::get('/event/form/{id}','EventController@form')->name('event.form');
});

// 個人閲覧ページ
Route::get('/home', 'CatController@getHome');

Route::get('/like', 'LikeController@like');
Route::post('/like', 'LikeController@like');

Route::get('/cat/profile/{id}', 'CatController@getCatProfile');

Route::get('/cat/like', 'CatController@getCatLike');

Route::get('/search', 'CatController@getSearch');

// 保護猫団体閲覧ページ
Route::get('/admin/cat/register', 'CatController@getCatRegister');

Route::post('/admin/cat/register', 'CatController@catRegister');

Route::get('/admin/cat/edit/{id}', 'CatController@getCatEdit');
// Route::get('/admin/cat/edit/{id}', 'CatController@getCatEdit')->name('admin.cat.edit');

// Route::get('/admin/cat/edit', 'CatController@catEdit');
Route::post('/admin/cat/edit', 'CatController@catEdit');

Route::post('/admin/cat/delete', 'CatController@catDelete');


//保護猫応募機能
Route::get('/form/{id}', 'FormController@form')->middleware('auth');
Route::post('/send', 'FormController@store');

//保護猫応募者一覧ページ
Route::get('/admin', 'FormController@index')->middleware('auth');

//保護猫質問機能
Route::post('/question_send', 'CatController@store');
Route::post('/reply', 'CatController@replystore');
Route::post('/delete','CatController@delete');
