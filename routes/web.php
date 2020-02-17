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

Route::get('/hello', function () {
    return view('hello',['name'=> 'DTA','msg' => 'Bienvenu à la']);
});


Route::get('/hello/{name}', function ($name) {
    return view('hello',['name'=>$name, 'msg' => 'Hello']);
});


Route::get('/hello_array', function () {
    return view('hello_array',['names'=>['Franck', 'Vincent' , 'Thibaut']]);
});


Route::get('/student/{firstName}/{lastName}' , 'StudentController@index');

Route::get('/name_url' , 'NameURLController@sayHello');

Route::get('users', 'UsersController@create');
Route::post('users', 'UsersController@store')->name('PostCreateUser');

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');