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

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signin', function () {
    return view('login');
});

Route::get('/test', function () {
    return view('test');
});

Route::resource('users' , 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events', function (){
    $user = \App\User::find(1);
    \Illuminate\Support\Facades\Auth::login($user);
    return view('events.index');
});

Route::get('/users/me/show', function (){
    return view('users.show');
});

Route::get('/users/{user}', 'UserController@show');
Route::get('/users', 'UserController@index');

