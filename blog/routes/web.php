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
  //用户管理
    Route::get('/', 'admin\indexController@index');
    Route::get('/user_list', 'admin\userController@userlist');
    Route::get('/user_add', 'admin\userController@add');
  //管理员管理
    Route::get('/user_vip', 'admin\userController@listvip');
    Route::get('/user_manager', 'admin\userController@manageradd');
    Route::get('/user_manlist', 'admin\userController@managerlist');

  //基本设置
    Route::get('/setting', 'admin\systemController@index');
    Route::get('/nav', 'admin\systemController@navadd');
    Route::get('/navlist', 'admin\systemController@navlist');

  //分类管理
   Route::get('/pageadd', 'admin\pageController@pageadd');
   Route::get('/pagelist', 'admin\pageController@pagelist');

  //文章管理
  Route::get('/artadd', 'admin\articleController@artadd');
  Route::get('/artlist', 'admin\articleController@artlist');
});
