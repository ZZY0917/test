@extends('layout.home')

@section('title',$title)

        <link rel="stylesheet" type="text/css" href="/home/css/special.css">

@section('content')

    <div class="navWrap">
            <div class="nav">
                <ul class="homeNav">
                    <li><a class="normal active" href="/">首页</a></li>
                    <li><a class="normal"  href="yy/html/rank.html">榜单</a></li>
                    <li><a class="normal"  href="yy/html/rank.html">歌手</a></li>
                    <li><a class="normal"  href="/home/music">音乐</a></li>
                    <li><a class="normal"  href="/home/specialshow">歌单</a></li>
                    <li><a class="normal"  href="yy/html/rank.html">专辑</a></li>
                    <li><a class="normal"  href="/home/personal">我的音乐</a></li>
                </ul>
            </div>
        </div>

        

<div class="wrap alm2 clear_fix specialPage">
     
  <div class="mbx">我的位置 &gt; <a title="乐库" href="">我的音乐</a> &gt; <span>我的歌单</span></div>
    <div id="segmentedControl" class="mui-segmented-control mui-segmented-control-inverted mui-segmented-control-primary sheet-box">
              <a class="mui-control-item mui-active" href="/home/addspecial">创建歌单</a>
              <a class="mui-control-item" href="/home/special/myspecial">我的歌单</a>
    </div>

  <div class="l">
      <div class="pic">
          <img alt="亲子合唱儿歌精选" src="{{$res->photo}}" height="148" width="148" />
      </div>
      
      <p class="detail">
          
          <span>用户名:{{$res->uname}}</span><br />
          <span>账号：</span>{{$res->username}}<br />
          
          <span>心情：</span>开心<br />
      </p>

           

  </div>    

  <div class="r">
      <div id="songs" class="list1">
          <strong>&lt;我的音乐&gt; - 歌曲列表</strong>
          <form action="/home/special/create" method='post'>
          <ul>
              @foreach($rs as $k=>$v)               
              <li><a  hidefocus="true" href="javascript:;" ><span class="num1">@if($k+1>=10) {{$k+1}} @else 0{{$k+1}} @endif</span><span class="text"><i> {{$v->mname}}- {{$v->sname}}</i><span style="margin-left: 200px;">{{'<'.$v->aname.'>'}}</span></span></a></li>
          @endforeach
                      
          </ul>
          
           
               {{csrf_field()}}
               
           
       </form>
    </div>
    <div class="clear"></div>
  </div>

</div>
@stop

@section('js')
  <!-- 音乐列表配置 -->



@stop