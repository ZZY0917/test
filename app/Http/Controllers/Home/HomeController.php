<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class HomeController extends Controller
{
	//前台歌单列表
    public function specialshow()
    {   
        $rs = DB::table('special')->get();
        
    	return view('home/special',['rs'=>$rs]);
    }

    //前台首页歌单显示
    public function index()
    {
    	$rs = DB::table('special')->orderBy('status')->limit('5')->get();
    	return view('home.index',['rs'=>$rs]);
    }
}
