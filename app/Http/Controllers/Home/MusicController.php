<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class MusicController extends Controller
{
    //
    public function index()
    {
    	$rs = DB::table('music')->get();
    	// dd($rs);
    	return view('/home/music/index',['rs'=>$rs]);
    }

    public function show(Request $request)
    {
    	// dd($request->szone);
    	$rs = DB::table('singer')->where('szone',$request->szone)->limit(10)->get();
    	// dd($rs);
    	return response()->json($rs);
    	// return json($rs);
    }
}
