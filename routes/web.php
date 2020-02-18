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

Route::get('/session/{name}' , 'SessionController@sayHello');

Route::get('/usersMVC' , 'UsersMVCController@UsersList');
Route::get('/usersMVC/{id}' , 'UsersMVCController@show');

Route::get('contact', 'ContactsController@create')->name('contact.create');
Route::post('contact', 'ContactsController@store')->name('contact.store');
Route::get('/contactlist' , 'ContactsController@List');
Route::get('/contactlist/{id}' , 'ContactsController@show');

