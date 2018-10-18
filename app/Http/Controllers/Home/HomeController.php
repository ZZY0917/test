<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class HomeController extends Controller
{
    public function albumlist($id)
    {
        $res = DB::table('album')->where('aid',$id)->first();
        $rs = DB::table('music')->where('aname',$res->aname)->get();
              
        return view('home.album.list',['res'=>$res,'rs'=>$rs]);      
    }
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
    	$rsz = DB::table('album')->orderBy('status')->limit('10')->get();
    	return view('home.index',['rs'=>$rs,'rsz'=>$rsz]);
    }
}
