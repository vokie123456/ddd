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
    return view('welcome');
});

Route::get('add', 'TestController@add');
Route::get('up', 'TestController@up');
Route::get('del', 'TestController@del');
Route::get('show', 'TestController@show');

// 留言路由
Route::match(['get', 'post'], 'msg/add', 'MsgController@add'); //增
Route::get('msg/del/{id}', 'MsgController@del'); //删
Route::get('msg/index', 'MsgController@index'); //查
Route::match(['get', 'post'], 'msg/up/{id}', 'MsgController@up'); //改








