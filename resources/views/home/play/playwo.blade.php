@extends('layout.homes')


    <link type="text/css" rel="stylesheet" href="/home/css/singles.css" />
    <script type="text/javascript" src="/home/js/jquery1.js"></script>
    <script type="text/javascript" src="/home/js/avalon.js"></script>
    <script type="text/javascript" src="/home/js/common.js"></script>
    <script src="/home/js/commentModel.js" type="text/javascript"></script>
    <script type="text/javascript" src="/home/js/singles.js"></script>
    <style>
        
        #box{width:300px; height:300px; border:1px solid #000; margin:100px auto; overflow:hidden; border-radius:10px;position: relative;}
        #bar_box{ position:absolute; top:0; right:0; width:6px;height:100%; border-radius:5px; }
        #bar{ position:absolute; top:0; left:0; width:6px; height:100px; background:#ccc;border-radius:5px; cursor:pointer;}
    </style>

<!-- <link rel="stylesheet" href="/home/css/play-201505211743.css"> -->
@section('content')

	<div class="navWrap">
            <div class="nav">
                <ul class="homeNav">
                    <li><a class="normal" href="/">首页</a></li>
                    <li><a class="normal"  href="home/paihang">榜单</a></li>
                    <li><a class="normal"  href="/home/list">歌手</a></li>
                    <li><a class="normal  active"  href="/home/music">歌曲</a></li>
                    <li><a class="normal"  href="/home/specialshow">歌单</a></li>
                  
                    <li><a class="normal"  href="/home/personal">我的音乐</a></li>                   
               </ul>
                              
            </div>
        </div>
   <div id="musicCon">
    <div class="music">
        <!--musicLeft begin-->
        <div id="musiclrc">
            <p id="lrcName">呵护</p>
            <div class="info">
                <p class="album">专辑：<span><a target="_blank" href="http://www.kuwo.cn/album/1353908/">呵护</a></span></p>
                <p class="artist">歌手：<span><a target="_blank" href="http://www.kuwo.cn/artist/content?name=%E6%A2%81%E9%9D%99%E8%8C%B9" data-id="317">梁静茹</a></span></p>
                <div class="singleShareBox">
                    <a href="javascript:;" class="share">分享</a>
                    <div class="singleSharecontent">
                        <a href="javascript:;" class="quickShare new_sina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a href="javascript:;" class="quickShare new_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        <a href="javascript:;" class="quickShare new_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                        <a href="javascript:;" class="quickShare new_douban" data-cmd="douban" title="分享到豆瓣网"></a>
                        <a href="javascript:;" class="quickShare new_renren" data-cmd="renren" title="分享到人人网"></a>
                    </div>
                </div>
                <a href="javascript:;" class="goComment">评论</a>
            </div>
            <div id="lrcContent" class="scrollbar" style="position: relative;">
                
                    
                    
                        <div id="llrcArea">
                            <div id="llrcId" style="overflow-x: hidden;overflow-y: hidden;">
                                
                                    <p id="lId1" class="lrcItem">作词：黄婷</p>
                                
                                    <p id="lId2" class="lrcItem">作曲：Aleksander Rynkowskl&Andre Sudradjat&Matthlas Rewlg&Mlchael Vltzthum</p>
                                
                                    <p id="lId3" class="lrcItem">从你来到我生命的 那一天</p>
                                
                                    <p id="lId4" class="lrcItem">从你第一次看我的 那一眼</p>
                                
                                    <p id="lId5" class="lrcItem">我决定 这一生 呵护你</p>
                                
                                    <p id="lId6" class="lrcItem">让快乐都围绕着你</p>
                                
                                    <p id="lId7" class="lrcItem">这世界啊 虽然不容易</p>
                                
                                    <p id="lId8" class="lrcItem">别害怕一步 一步的 走下去</p>
                                
                                    <p id="lId9" class="lrcItem">蓝色的爱 无处不在 呵护着你</p>
                                
                                    <p id="lId10" class="lrcItem">I'll take care of you.</p>
                                
                                    <p id="lId11" class="lrcItem">当你小小的手贴着 我的手</p>
                                
                                    <p id="lId12" class="lrcItem">当我别无所求给你 全宇宙</p>
                                
                                    <p id="lId13" class="lrcItem">有一天 你要追属于你的梦</p>
                                
                                    <p id="lId14" class="lrcItem">我只想让你知道</p>
                                
                                    <p id="lId15" class="lrcItem">这世界啊 虽然不容易</p>
                                
                                    <p id="lId16" class="lrcItem">别害怕一步 一步的 走下去</p>
                                
                                    <p id="lId17" class="lrcItem">蓝色的爱 无处不在 呵护着你</p>
                                
                                    <p id="lId18" class="lrcItem">I'll take care of you.</p>
                                
                                    <p id="lId19" class="lrcItem">挫折悲伤 你都会经历</p>
                                
                                    <p id="lId20" class="lrcItem">别害怕一步 一步的 走下去</p>
                                
                                    <p id="lId21" class="lrcItem">蓝色的爱 无处不在 呵护着你</p>
                                
                                    <p id="lId22" class="lrcItem">I'll take care of you.</p>
                                
                                    <p id="lId23" class="lrcItem">Oh~蓝色暖暖的爱</p>
                                
                                    <p id="lId24" class="lrcItem">Oh~呵护你的爱</p>
                                
                                    <p id="lId25" class="lrcItem">这世界啊 虽然不容易</p>
                                
                                    <p id="lId26" class="lrcItem">别害怕一步 一步的 走下去</p>
                                
                                    <p id="lId27" class="lrcItem">蓝色的爱 无处不在 呵护着你</p>
                                
                                    <p id="lId28" class="lrcItem">I'll take care of you.</p>
                                
                                    <p id="lId29" class="lrcItem">挫折悲伤 你都会经历</p>
                                
                                    <p id="lId30" class="lrcItem">别害怕一步 一步的 走下去</p>
                                
                                    <p id="lId31" class="lrcItem">蓝色的爱 无处不在 呵护着你</p>
                                
                                    <p id="lId32" class="lrcItem">I'll take care of you.</p>
                                
                                    <p id="lId33" class="lrcItem">I'll take care of you.</p>
                                
                                    <p id="lId34" class="lrcItem">有我在这里</p>
                                
                            </div>
                        </div>
                    
                
            </div>
        </div>
        <!--musicLeft end-->
        <!--musicRight begin-->
        <div id="playerBox">
            <!-- 歌手图片 begin -->
            <div class="musiciPic" data-musicId="9878760" data-pay="0">
                <a target="_blank" href="#">
                    <img class="photopic" src="http://image.kuwo.cn/www/default/240-240-person.jpg" />
                    <span class="splice"></span>
                </a>
            </div>
            <!-- 歌手图片 end -->
            <!-- 播放器  begin -->
            <div class="play" id="wp_playBtn" title="暂停/播放"></div>
            <div class="playerMid">
                <div id="prograssBar" class="borderRadius">
                    <div id="wp_bufBar" class="borderRadius">
                        <div class="prograssBar borderRadius" id="wp_processBar"></div>
                        <a href="javascript:;" class="schedule_btn" id="wp_processBtn" style="left: 0"></a>
                    </div>
                </div>
            </div>
            <p id="wp_playTime" class="wp_playTime_singles" class="opacity">00:00</p>
            <div class="sound" id="wp_mute"></div>
            <div id="soundBox">
                <div class="soundBox">
                    <div id="soundPro">
                        <div class="soundPro" id="wp_volBar"></div>
                        <a href="javascript:;" id="wp_volBtn"></a>
                    </div>
                </div>
            </div>
            <!-- 播放器 end -->
           

@stop