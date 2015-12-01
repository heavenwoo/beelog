<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ArticleController@index');

Route::get('post/{id}', 'ArticleController@show')->where('id', '[0-9]+');

Route::get('user/{id}', 'UserController@show')->where('id', '[0-9]+');

Route::get('test/{id?}', 'ArticleController@test');

Route::get('post/create', 'ArticleController@create');

Route::post('post/store', 'ArticleController@store');

Route::get('admin', function()
{
    return view('admin.login');
});