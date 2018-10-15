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
    return view('home/index');
});



// 后台管理
Route::group([],function(){
	// 后台首页
	Route::any('admin','Admin\IndexController@index');
	
	Route::resource('admin/user/user','Admin\UserController');

	Route::any('admin/collect/{uid}/index', 'Admin\CollectController@index');
	Route::any('admin/collect/index/{uid}', 'Admin\CollectController@search');
	//专辑管理
	// Route::any('admin/album/{aid}','Admin\AlbumController@search');
	// 修改图片
	Route::any('admin/upload','Admin\AlbumController@upload');
	// Route::any('admin/upload',function (){return 1;});
	Route::any('admin/album/album_music/{aid}','Admin\AlbumController@search');
	Route::resource('admin/album','Admin\AlbumController');
	
});

// 前台管理
Route::group([],function(){
	// 前台注册
	Route::any('home/reg','Home\RegController@register');
	Route::any('home/doreg','Home\RegController@doregister');
	Route::any('home/jihuo','Home\RegController@jihuo');
	// Route::any('home/cap','Home\RegController@cap');
	// 前台登录
	Route::any('home/login','Home\LoginController@login');
	Route::any('home/dologin','Home\LoginController@dologin');
	Route::any('home/logout','Home\LoginController@dologout');
	// 个人中心
	Route::any('home/person','Home\PersonController@editprofile');

	// 修改头像
	Route::any('/home/person/upload','Home\PersonController@upload');
	Route::any('/home/person/updatepro','Home\PersonController@update');
	// 修改个人信息
	Route::any('/home/person/edit','Home\PersonController@edit');
	Route::any('/home/person/editperson','Home\PersonController@editPerson');
	// 修改密码
	Route::any('/home/person/pass','Home\PersonController@pass');
	Route::any('/home/person/editpass','Home\PersonController@editpass');
	// Route::any('/home/person/editpass',function(){return 1;});
	
});

// 验证码
// Route::any('home/cap',function(){return 1;});
	// Route::any('home/cap','Home\RegController@cap');

// Route::any('admin/collect/{uid}/index', function(){
// 	return 1;
// });

