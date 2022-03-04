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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home1', function () {
    return view('home1');
});

// Route::get('/info',[App\Http\ControllersInfoController::class, 'index'])->name('info');

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

// 個人閲覧ページ
Route::get('/home', 'CatController@getHome');

Route::get('/cat/profile', 'CatController@getCatProfile');

Route::get('/like', function () {
    return view('main.like');
});

Route::get('/search', 'CatController@getSearch');



// 保護猫団体閲覧ページ
Route::get('/admin/cat/register', function () {
    return view('admin.cat_register');
});

Route::post('/admin/cat/register', 'CatController@catRegister');

Route::get('/admin/cat/edit/{id}', function () {
    return view('admin.cat_edit');
});

Route::post('/admin/cat/edit', 'CatController@catEdit');



Route::get('/form', function () {
    return view('form');
});
Route::get('/application', function () {
    return view('application');
});
