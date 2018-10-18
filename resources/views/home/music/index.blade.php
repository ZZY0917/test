@extends('layout.home')

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
        <div class="content" id="content">

<div class="itemM newSongList" >
            <div class="subContentM" id="secoundContent" style="margin-bottom: 20px;">

                    <div class="itemTitle hasBorder">
                        <h3><b>新歌</b>首发</h3>
                        <div class="tabT" id="SongtabMenu">
                            <span class="MenuItem" data="0">华语</span>
                            <span class="MenuItem" data="1">欧美</span>
                            <span class="MenuItem active" data="2">韩国</span>
                            <span class="MenuItem" data="3">日本</span>
                        </div>
                        <button class="playAll"><span class="icon icon-play"></span><em>全部播放</em></button>
                    </div>
                    <div class="itemContent">
                        <div class="tabC" id="SongtabContent" style="margin-top: 0px;">
                        	{{--csrf_field()--}}
                            <ul id="music" style="display: none; z-index: 1;">
                            	
                            </ul>
                            
                        </div>
                    </div>
                    <div class="pages p">
                        <a class="prev disable">上一页</a>
                        <div class="page"><span class="currentPage">1</span>/<span class="allPage">3</span></div>
                        <a class="next">下一页</a>
                    </div>   
                </div>
            </div>
        </div>
@stop

@section('js')
<script type="text/javascript" src=""></script>
	<script type="text/javascript">
		
		// var menu = document.getElementsByClassName('MenuItem');
		// console.log($('.menu'));
		$('.MenuItem').mouseover(function(){
			$('.MenuItem').removeClass('active')
			$(this).addClass('active');
			var a = $(this).attr('data');
			$('#SongtabContent').children().eq(a).attr('style','display: block; z-index: 2;');
			$('#SongtabContent').children().eq(a).siblings().attr('style','display: none;z-index:1');
			// console.log($('#SongtabContent').children().eq(a))
			$.get("/home/music/show",{szone : a},function(data){
			  	$("#music").html('');
                    // console.log(data);
                    // 1. 循环遍历ajax放回的数组
                    for (var i = 0; i < data.length; i++) {
                        if(i<=1) {
                            setSingerHtml(data[i], true);
                        } else {
                            setSingerHtml(data[i], false);                            
                        }
                        // console.log(data[i])
                    }

                    // 2. 创建节点

                    // 3. 将组合好的节点和数据插入到html中
                });
			  	
		});
		// 设置html
            function setSingerHtml(data, addClass) {
                // var str = addClass ? "cptMid": 'cptSmall';

                var music = `<li>
                                <a href="http://www.kugou.com/song/qvqxne9.html">
                                <span class="songName" >${data.sname} - KOC</span>
                                
                                    <span class="songTips"></span>
                                
                                <span class="songTime">03:14</span>
                                    <span class="icon playBtn icon-play" style="display: none;"></span>
                                    <span class="icon downloadBtn icon-download" onclick="_hmt.push(['_trackEvent', 'hidedown', 'hidecilick', 'hidepc']);" style="display: none;"></span>
                                    <span class="icon shareBtn icon-share"></span>
                                </a>
                            </li>`;
                $(music).appendTo($("#music"));
            }
		// .mouseout(function(){
		// 	$('.MenuItem').removeClass('active')
		// });
	</script>
@stop