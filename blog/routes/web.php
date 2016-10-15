<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['domain' => 'www.cms.com'], function(){
    Route::get('/', 'home\indexController@index');
});

Route::group(['domain' => 'admin.cms.com'], function(){
    Route::get('/', 'admin\indexController@index');
    Route::get('/user_list', 'admin\userController@userlist');
    Route::get('/user_add', 'admin\userController@add');
});
