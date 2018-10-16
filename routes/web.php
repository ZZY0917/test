<?php



Route::get('/','Home\HomeController@index');


//后台登录
Route::any('/admin/login','Admin\LoginController@login');
Route::post('/admin/dologin','Admin\LoginController@dologin');
// ,'roleper'权限中间件
Route::group(['middleware'=>['adminlogin']],function(){
	Route::any('admin','Admin\IndexController@index');
	//后台退出登录
	Route::any('/admin/outlogin','Admin\LoginController@outlogin');	
	Route::any('/admin/photo','Admin\RooterController@photo');

	//音乐管理
	Route::resource('admin/music', 'Admin\MusicController');

	//后台管理员
	Route::resource('admin/rooter','Admin\RooterController');
	Route::any('admin/user_role/{id}', 'Admin\RooterController@user_role');
	Route::any('admin/do_user_role', 'Admin\RooterController@do_user_role');

	//用户管理
	Route::resource('/admin/user/user','Admin\UserController');

	//用户收藏
	Route::any('admin/collect/{uid}/index', 'Admin\CollectController@index');
	Route::any('admin/collect/index/{uid}', 'Admin\CollectController@search');

	
	// 修改图片
	Route::any('admin/upload','Admin\AlbumController@upload');
	// Route::any('admin/upload',function (){return 1;});
	//专辑搜索歌曲
	Route::any('admin/album/album_music/{aid}','Admin\AlbumController@search');

	//专辑歌曲
	Route::any('admin/al/{aname}','Admin\AlbumController@music');

	//专辑管理
	Route::resource('admin/album','Admin\AlbumController');

	//歌单管理
	Route::resource('admin/gedan','Admin\GedanController');

	//权限管理
	Route::resource('/admin/permission','Admin\PermissionController');

	//角色管理
	Route::resource('/admin/role','Admin\RoleController');
	Route::any('/admin/role_per/{id}','Admin\RoleController@role_per');
	Route::any('/admin/do_role_per','Admin\RoleController@do_role_per');

	//修改头像
	Route::any('admin/profile','Admin\LoginController@profile');
	Route::any('admin/doprofile','Admin\LoginController@doprofile');

	//修改密码
	Route::any('admin/pass','Admin\LoginController@pass');
	Route::any('admin/dopass','Admin\LoginController@dopass');
	//后台歌单管理
	Route::resource('/admin/special','Admin\SpecialController');
	Route::any('/admin/special/{gdid}/shezhi','Admin\SpecialController@shezhi');
	Route::any('/admin/special/speview','Admin\SpecialController@speview');
});


//前台页面
Route::group([],function(){
	//前台歌单页面
	Route::any('/home/specialshow','Home\HomeController@specialshow');


	//用户编辑歌单
	//先添加歌曲	
	// Route::resource('/home/special','Home\SpecialController');
	Route::any('/home/addspecial','Home\SpecialController@addspecial');
	Route::any('/home/special/create','Home\SpecialController@create');
	Route::any('/home/special/store','Home\SpecialController@store');
	Route::get('/home/special/listspecial/{gdid}','Home\SpecialController@listspecial');
	Route::get('/home/special/edit/{gdid}','Home\SpecialController@edit');
	Route::any('/home/special/myspecial','Home\SpecialController@myspecial');
	Route::any('/home/special/edits/{gdid}','Home\SpecialController@edits');
	Route::any('/home/special/update/{gdid}','Home\SpecialController@update');
	Route::any('/home/special/destroy/{gdid}','Home\SpecialController@destroy');
	Route::any('/home/special/list/{gdid}','Home\SpecialController@list');
	//前台注册
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
	
});



