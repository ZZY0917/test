@extends('layout.home')

<script src="/home/js/mv.lib.min.js"></script>
<script src="/home/js/playMvPage.js"></script>
<script type="text/javascript" src="/home/js/common_header.min.js"> </script>
@section('content')

	@if(session('success'))  
            <div class="mws-form-message info">
                {{session('success')}}  

            </div>
            @endif
	<div class="frame mv_page">
                <div class="radiowrap">
            <h2 style="font-size:12px;"><span><a href="index.html" style="color:#878787;">MV首页</a></span> <span>></span> <span>正在播放</span>                <span>></span> 马天宇 - 该死的温柔</h2>
            <div class="player">
                                <script>
                    Kg.flash.write("webmvplayer", "http://static.kgimg.com/common/swf/video/videoPlayer.swf?20141014061415", 1000, 494,{
                        flashvars: "skinurl=http://static.kgimg.com/common/swf/video/skin.swf&amp;aspect=true&amp;url=&amp;autoplay=true&amp;fullscreen=true&amp;initfun=flashinit&amp;apmfun=apmtjfun",
                        wmode: "Transparent",
                        allowFullScreen: "true"
                    })
                </script>
            </div>
            <div class="toobar clearfix">
                <div class="mvTitle">马天宇 - 该死的温柔</div>
                <div class="mvAction clearfix">
                    <div class="mobileShareQrcode">
                        <div class="qrcodeForMobile"></div>
                    </div>
                    <a href="" class="mobileShare">手机看</a>
                    <a class="shareBtn">分享</a>
                    <a class="downloadBtn" onclick="_hmt.push(['_trackEvent', 'mvdown1', 'mvdownclick1', 'kgmv']);">下载</a>
                </div>
            </div>
            <div class="ClearBoth"></div>
            <div class="guess">
                <h2>猜你喜欢</h2>
                <h4></h4>
                <div class="mvlist listbox clearfix guesslist">
                    <ul class="clearfix">
                    </ul>
                </div>
            </div>
        </div>
@stop

@section('js')
<script>
	$('.mws-form-message').delay(3000).fadeOut(2000);
</script>

@stop