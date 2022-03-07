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


<<<<<<< HEAD
Route::get('home1', function () {
    return view('home1');
});

Route::get('/head', function () {
    return view('/head');
});

Route::get('/head1', function () {
    return view('/head1');
});

Route::get('/andcat', function () {
    return view('/andcat');
});

=======
Route::get('home2', function () {
    return view('home2');
});

Route::get('/head', function () {
    return view('/head');
});

Route::get('/head1', function () {
    return view('/head1');
});

Route::get('/andcat', function () {
    return view('/andcat');
});

>>>>>>> 798f5accd1bc30775d53b8d2bc3d54474a245b98

// Route::get('/info',[App\Http\ControllersInfoController::class, 'index'])->name('info');

Auth::routes();

Route::group(['middleware'=>'auth'],function(){
    Route::get('/user','UserController@show')->name('user.show');
    Route::post('/user/update/','UserController@update')->name('user.update');
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
