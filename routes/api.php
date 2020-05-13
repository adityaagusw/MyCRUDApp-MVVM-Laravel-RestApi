<?php

use Illuminate\Http\Request;

Route::get('/users','AuthController@show');
Route::post('/register','AuthController@register');
Route::post('/login','AuthController@login');

Route::get('/post','PostController@show')->middleware('auth:api');
Route::post('/post','PostController@store')->middleware('auth:api');
Route::post('post/update/{id}','PostController@update')->middleware('auth:api');
Route::post('post/{id}','PostController@destroy')->middleware('auth:api');
Route::get('post/user','PostController@getPostUser')->middleware('auth:api');
Route::get('post/{id}','PostController@postDetails')->middleware('auth:api');
