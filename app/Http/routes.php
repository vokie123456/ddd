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
    // return view('welcome');
    $data = ['name'=>'wuyutao', 'age'=>18];
    return view('test', $data);
});

Route::get('login', 'TestController@login');

// // 访问首页用匿名函数去响应，同样的路由以最后一个来响应
// Route::get('/', function () {
//     return 'hello world';
// });

// // 基础路由 http://ddd.com/test
// // 用匿名函数去响应
// Route::get('test', function () {
// 	return 'test';
// });

// Route::post('admin/test', function() {
// 	return 'post';
// });

// // 多请求路由，请求同一个action，需要写两条路由，麻烦
// Route::get('admin/login', function() {

// });

// Route::post('admin/login', function() {
	
// });

// // 多请求路由
// // match
// Route::match(['get','post'], 'admin/login', function() {
// 	return 'login';
// });

// // any
// Route::any('admin/register', function() {
// 	return 'register';
// });

//---------

// // 怎样在路由中传参 http://ddd.com/user/2
// Route::get('user/{id}', function($id) {
// 	return 'user_'.$id;
// });

// // http://ddd.com/user/2/wuyutao
// Route::get('user/{id}/{name}', function($id, $name) {
// 	return 'user_'.$id.$name;
// });

// // 路由可选参数?，分页默认为1，http://ddd.com/user
// Route::get('user/{name?}', function($name = null) {
// 	return 'user_'.$name;
// });

//---------

// 路由中参数限制
// where(字段，规则)
// Route::get('user/{name}', function($name) {
// 	return 'user_'.$name;
// })->where('name', '[A-Za-z]+');

// 多参数限制
// Route::get('user/{name}/{id}', function($name, $id) {
// 	return 'user_'.$name.$id;
// })->where(['name'=>'[A-Za-z]+', 'id'=>'[0-9]+']);

//---------

// 控制器路由方式
// 用get请求方式，去请求test，TestController的test方法去响应
// // http://ddd.com/test
// Route::get('test', 'TestController@test');
// // http://ddd.com/admin/test
// Route::get('admin/test', 'TestController@test');

// Route::get('add', 'Home\UserController@add');










