<?php

use Illuminate\Http\Request;

/*
Route::get('/contacts' , 'ApiController@contacts');
Route::get('/contacts/{id}' , 'ApiController@contact');
*/

/*
Route::apiResource('contacts', 'ApiController');
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
