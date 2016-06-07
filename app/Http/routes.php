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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/blog', 'PostsController@blog');
Route::get('/blog/leo', 'PostsController@index');
Route::get('/blog/duda', 'PostsController@duda');
Route::get('/relaxe','PostsController@relaxe');
Route::get('/blog/animal','PostsController@animal');
Route::get('/leonan','PostsController@leonan');
Route::get('/admin','PostsAdminController@index');