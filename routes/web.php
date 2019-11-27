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
Route::group(['prefix'=> 'admin','namespace'=> 'Admin'],function (){
    Route::get('/login','UserController@loginForm'); //登陆
    Route::get('/index','IndexController@index'); //首页
    Route::get('/cate','CateController@cate'); //分类
    Route::get('/video','VideoController@video'); //视频管理
});

//auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
