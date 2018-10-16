<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

class LoginController extends Controller
{
    //
    public function login()
    {
    	return view('home/user/login');
    }

    public function dologin(Request $request)
    {
    	// dd($request);
    	//获取信息
    	$res = $request->except('_token');

    	// 判断验证码
    	if(!captcha_check($request->input('code'))){
		    return back()->withErrors("验证码有误");
		}

    	//判断用户名
    	$data = DB::table('users')->where('username',$res['username'])->first();

    	if(!$data){

    		return back()->with('error','用户名或者密码错误');
    	}

    	

    	//判断status
    	if($data->status == '0'){

    		return back()->with('error','请到注册时的邮箱进行激活账号,否则不能进行登录');

    		
    	}
    	//判断密码
    	if(!Hash::check($res['password'], $data->password)){

    		return back()->with('error','用户名或者密码错误');

    	}

    	session(['uid'=>$data->uid,'username'=>$data->username]);
        // dd(session('username'));
    	return redirect('/');
    }

    public function dologout()
    {
        session(['uid'=>'']);
        return redirect('/');
    }
}
