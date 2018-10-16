<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



use App\Model\Admin\Rooter;
use Hash;
use Config;
class LoginController extends Controller
{


    public function login(Request $request)
    {
    	return view('admin/login/login');
    }



     public function dologin(Request $request)
    {

        // dd(123);
    	// echo 123;
    	//表单验证

    	//检测验证码
        // $code = session('code');

        // if($code != $request->code){

        //     return back()->with('error','验证码错误!');
        // }

    	//检测用户名
        $users = Rooter::where('username',$request->username)->first();
        // dd($users);
        if(!$users){

            return back()->with('error','用户名或密码错误!');
        }

        
    	//检测密码  hash   
        if (!Hash::check($request->password, $users->password)) {
            
            return back()->with('error','用户名或密码错误!');

        }

        //检测密码   加密解密
        // if (decrypt($users->password) != $request->password) {
            
            // return back()->with('error','用户名或密码错误!');

        // }

        //存储用户id
        session(['rid'=>$users->rid]);

        // dd(session('rid'));

    	// //提示信息
        return redirect('/admin')->with('success','登录成功');


    }

    public function outlogin()
    {
    	session()->flush();
    	// echo 123;

    	return view('admin/login/login');
    }
    
}
