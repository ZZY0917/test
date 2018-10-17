@extends('layout.home')



@section('content')
    
    <div class="banner" >
           <ul id='bxslider'>
                <li><img src="/home/images/20180604115326765470.jpg"></li>
                <li><img src="/home/images/20170929134028425664.jpg"></li>
                <li><img src="/home/images/20180817192011491298.jpg"></li>
                <li><img src="/home/images/20180927233454582652.jpg"></li>
                <li><img src="/home/images/20180928104529276586.jpg"></li>
            </ul>
        </div>
  



        <style type="text/css">
            .banner,.banner li, .banner img {
                 height:300px;
            }
        </style>

        <script type="text/javascript">
            $(function(){
                $('#bxslider').bxSlider({
                    auto: true,
                    controls: true,
                    pager: true
                });
            });
        </script>
                
        <div class="content" id="content">
            <div class="subContentM" id="secoundContent">
                <!-- 精选歌单 -->
                <div class="itemM selectSongList">
                    <div class="itemTitle">
                    <img src="/home/images/selectlist.jpg"></div>
                    <div class="itemContent">
                    

                        
                            @foreach($rs as $k=>$v)
                                @if($v->status == 0)
                                <div class="cpt cptBig">
                                @else
                                 <div class="cpt cptMid">   
                                @endif
                                        <p class="cptT"><span class="icon icon-select_icon"></span><span class="num"><?php echo rand(111,999);?>万</span></p>
                                            @if($v->status == 0)
                                            <img src="{{$v->photo}}" width="325" height="325" >
                                            @else
                                             <img  src="{{$v->photo}}" width="160" height="160">
                                            @endif 
                                        <div class="Cover" >
                                            <a  href="/home/special/list/{{$v->gdid}}">
                                            </a>
                                           
                                        </div>
                                        <p class="cptBg"></p>
                                        <div class="cptB">
                                            <p class="songListName">{{$v->title}}</p>
                                            <p class="songListSinger">{{$v->zhizuo}}</p>
                                        </div>
                                </div>
                            @endforeach
                            
                                
                        
                    
                    </div>
                </div>
                <!-- 精选歌单 -->
                <!-- 热门歌单 -->
                <div class="itemM HotSongList">
                    <div class="itemTitle">
                    <img src="/home/images/hotlist.jpg"></div>
                    
                        
                    <div class="itemContent">
                    
                        
                            <div class="listItem">
                                 <a href="yy/rank/home/1-6666-from=homepage.html">
                                    <div class="Cover">
                                        <div class="playBtn icon icon-play_s" data-id="6666">播放</div>
                                    </div>
                                    <span class="arrow icon-big_arrow_right"></span>
                                    <img  _src="http://imge.kugou.com/v2/rank_cover/T1M4h4BKKj1RCvBVdK.jpg_240x240.jpg" src="yy/static/images/blank.gif" width="98" height="98" _def="http://static.kgimg.com/public/root/images/rankdefalut.jpg">
                                    <div class="list">
                                        <dl>
                                            <dt>酷狗飙升榜</dt>
                                            
                                                
                                                    <dd>1 . 马良、孙茜茹 - 往后余生</dd>
                                                
                                            
                                                
                                                    <dd>2 . 鹿晗 - 时间停了</dd>
                                                
                                            
                                        </dl>
                                    </div>
                                </a>
                            </div>
                        
                            <div class="listItem">
                                 <a href="yy/rank/home/1-8888-from=homepage.html">
                                    <div class="Cover">
                                        <div class="playBtn icon icon-play_s" data-id="8888">播放</div>
                                    </div>
                                    <span class="arrow icon-big_arrow_right"></span>
                                    <img  _src="http://imge.kugou.com/v2/rank_cover/T1fHd4BXd_1RCvBVdK.jpg_240x240.jpg" src="yy/static/images/blank.gif" width="98" height="98" _def="http://static.kgimg.com/public/root/images/rankdefalut.jpg">
                                    <div class="list">
                                        <dl>
                                            <dt>酷狗TOP500</dt>
                                            
                                                
                                                    <dd>1 . 张紫豪 - 可不可以</dd>
                                                
                                            
                                                
                                                    <dd>2 . 黑龙 - 38度6</dd>
                                                
                                            
                                        </dl>
                                    </div>
                                </a>
                            </div>
                        
                            <div class="listItem">
                                 <a href="yy/rank/home/1-23784-from=homepage.html">
                                    <div class="Cover">
                                        <div class="playBtn icon icon-play_s" data-id="23784">播放</div>
                                    </div>
                                    <span class="arrow icon-big_arrow_right"></span>
                                    <img  _src="http://imge.kugou.com/v2/rank_cover/T1Fpd4BKbg1RCvBVdK.jpg_240x240.jpg" src="yy/static/images/blank.gif" width="98" height="98" _def="http://static.kgimg.com/public/root/images/rankdefalut.jpg">
                                    <div class="list">
                                        <dl>
                                            <dt>网络红歌榜</dt>
                                            
                                                
                                                    <dd>1 . 金南玲 - 逆流成河【我在锡林郭勒等你电视剧插曲】</dd>
                                                
                                            
                                                
                                                    <dd>2 . 胡66 - 读者</dd>
                                                
                                            
                                        </dl>
                                    </div>
                                </a>
                            </div>
                        
                    
                    </div>
                <!-- 热门歌单 -->
                </div>
            </div>
            <!-- <div class="hardWare"> <iframe scrolling="no" frameborder="0" width="1000" height="80" src="about:blank" _isrc="http://ads.service.kugou.com/v1/random?id=290&userid=32738873" width="100%" height="100%"></iframe></div> -->
            <div class="subContentM">
                <!-- 新歌首发 -->
                <div class="itemM newSongList">
                    <div class="itemTitle hasBorder">
                        <h3><b>新歌</b>首发</h3>
                        <div class="tabT" id="SongtabMenu">
                            <span class="MenuItem active" data="0">华语</span>
                            <span class="MenuItem " data="1">欧美</span>
                            <span class="MenuItem " data="2">韩国</span>
                            <span class="MenuItem " data="3">日本</span>
                        </div>
                        <button class="playAll"><span class="icon icon-play"></span><em>全部播放</em></button>
                    </div>
                
                    <div class="itemContent">
                        <div class="tabC" id="SongtabContent">
                            <ul>
                            
                               
                                    <li  data='{"first":1,"Hash":"025CF1E4EB9187D5C5EF656FD0880298","time":"03:47","timeLen":227059,"FileName":"鹿晗 - 时间停了","Filename":"鹿晗 - 时间停了","albumId":10773504,"privilege":8,"size":3642015,"songLink":"q75bz3b"}'>
                                        <a href="song/q75bz3b.html">
                                        <span class="songName">鹿晗 - 时间停了</span>
                                        
                                            <span class="songTips"></span>
                                        
                                        <span class="songTime">03:47</span>
                                            <span class="icon playBtn icon-play"></span>
                                            <span class="icon downloadBtn icon-download" onclick="_hmt.push(['_trackEvent', 'hidedown', 'hidecilick', 'hidepc']);"></span>
                                            <span class="icon shareBtn icon-share"></span>
                                        </a>
                                    </li>
                                 
                            
                            </ul>
                            <ul style="display: none">
                            
                          
                            </ul>
                            <ul style="display: none">
                            
                            
                            </ul>
                            <ul style="display: none">
                           
                            </ul>
                        </div>
                    </div>
                    <div class="pages p">
                      
                    </div>   
                </div>
                <!-- 新歌首发 -->
                <!-- 推荐Mv -->
                <div class="itemM albumList">
                    <img src="/home/images/albumlist.jpg">
                    <div class="itemTitle">
                        </div>
                    <div class="itemContent">
                        
                        
                            
                                <div class="cpt cptBigL">
                            
                                    <a target="_blank" href="/home/mvplay">
                                        
                                              <img   width="320" height="175" src="/images/18.jpg" >
                                        
                                        <div class="Cover">
                                            <div class="playBtn icon icon-play_b">播放</div>
                                        </div>
                                        <p class="cptBg"></p>
                                        <div class="cptB">
                                            <p class="songListName">不及雨</p>
                                            <p class="songListSinger">张碧晨</p>
                                        </div>
                                    </a>
                                </div>
                        
                            
                                 <div class="cpt cptMidL">
                            
                                    <a target="_blank" href="mvweb/html/mv_850754.html">
                                        
                                               <img  _src="http://imge.kugou.com/commendpic/20180925/20180925215554929011.jpg" width="154" height="84" src="yy/static/images/blank.gif" _def="http://static.kgimg.com/public/root/images/mv_defalut.jpg">
                                        
                                        <div class="Cover">
                                            <div class="playBtn icon icon-play_b">播放</div>
                                        </div>
                                        <p class="cptBg"></p>
                                        <div class="cptB">
                                            <p class="songListName">高贵与卑微</p>
                                            <p class="songListSinger">胡彦斌</p>
                                        </div>
                                    </a>
                                </div>
                        
                            
                                 <div class="cpt cptMidL">
                            
                                    <a target="_blank" href="mvweb/html/mv_850934.html">
                                        
                                               <img  _src="http://imge.kugou.com/commendpic/20180927/20180927165901814451.jpg" width="154" height="84" src="yy/static/images/blank.gif" _def="http://static.kgimg.com/public/root/images/mv_defalut.jpg">
                                        
                                        <div class="Cover">
                                            <div class="playBtn icon icon-play_b">播放</div>
                                        </div>
                                        <p class="cptBg"></p>
                                        <div class="cptB">
                                            <p class="songListName">Stay Open</p>
                                            <p class="songListSinger">黄子韬、Diplo、MØ</p>
                                        </div>
                                    </a>
                                </div>
                        
                        
                    </div>
                </div>
                <!-- 推荐Mv -->
            </div>
            
            <div class="subContentM limitHeight">
                <!-- 新歌首发 -->
                <div class="itemM HotRadio">
                    <div class="itemTitle">
                    <img src="/home/images/hotredio.jpg"></div>
                    
                    <div class="itemContent">
                        <ul>
                            <li>
                                <a target="_blank" href="fmweb/html/index-chanelId=73.html">
                                    <div class="Cover">
                                        <div class="playBtn icon icon-radio_play"></div>
                                    </div>
                                    <div class="radioLogo">
                                        <img width="100" height="100" _src="http://static.kgimg.com/public/root//images/radio_1.jpg" src="yy/static/images/blank.gif"  class=" ">
                                    </div>
                                    <div class="radioKind">KTV必点曲</div>
                                    <div class="radioName">陈奕迅 - 婚礼的祝福</div>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="fmweb/html/index-chanelId=3.html">
                                    <div class="Cover">
                                        <div class="playBtn icon icon-radio_play" style="display: none;"></div>
                                    </div>
                                    <div class="radioLogo">
                                        <img width="100" height="100" _src="http://static.kgimg.com/public/root//images/radio_2.jpg" src="yy/static/images/blank.gif"  class=" ">
                                    </div>
                                    <div class="radioKind">中文DJ</div>
                                    <div class="radioName">李佩玲 - 心有独钟(Live)</div>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="fmweb/html/index-chanelId=1.html">
                                    <div class="Cover">
                                        <div class="playBtn icon icon-radio_play" style="display: none;"></div>
                                    </div>
                                    <div class="radioLogo">
                                        <img width="100" height="100" _src="http://static.kgimg.com/public/root//images/radio_3.jpg" src="yy/static/images/blank.gif"  class=" ">
                                    </div>
                                    <div class="radioKind">酷狗热歌</div>
                                    <div class="radioName">那英 - 放爱一条生路</div>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="fmweb/html/index-chanelId=2.html">
                                    <div class="Cover">
                                        <div class="playBtn icon icon-radio_play" style="display: none;"></div>
                                    </div>
                                    <div class="radioLogo">
                                        <img width="100" height="100" _src="http://static.kgimg.com/public/root//images/radio_4.jpg" src="yy/static/images/blank.gif" class=" ">
                                    </div>
                                    <div class="radioKind">网络红歌</div>
                                    <div class="radioName">斯琴高丽 - 情如花</div>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="fmweb/html/index-chanelId=5.html">
                                    <div class="Cover">
                                        <div class="playBtn icon icon-radio_play" style="display: none;"></div>
                                    </div>
                                    <div class="radioLogo">
                                        <img width="100" height="100" _src="http://static.kgimg.com/public/root//images/radio_5.jpg" src="yy/static/images/blank.gif"  class=" ">
                                    </div>
                                    <div class="radioKind">经典</div>
                                    <div class="radioName">G.E.M.邓紫棋 - 泡沫 - DJ版</div>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="fmweb/html/index-chanelId=276.html">
                                    <div class="Cover">
                                        <div class="playBtn icon icon-radio_play"></div>
                                    </div>
                                    <div class="radioLogo">
                                        <img width="100" height="100" _src="http://static.kgimg.com/public/root//images/radio_6.jpg" src="yy/static/images/blank.gif"  class=" ">
                                    </div>
                                    <div class="radioKind">老情歌</div>
                                    <div class="radioName">索朗扎西 - 郎啊郎</div>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="fmweb/html/index-chanelId=4.html">
                                    <div class="Cover">
                                        <div class="playBtn icon icon-radio_play"></div>
                                    </div>
                                    <div class="radioLogo">
                                        <img width="100" height="100" _src="http://static.kgimg.com/public/root//images/radio_7.jpg" src="yy/static/images/blank.gif"  class=" ">
                                    </div>
                                    <div class="radioKind">新歌</div>
                                    <div class="radioName">Owl City - Wolf Bite</div>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="fmweb/html/index-chanelId=8.html">
                                    <div class="Cover">
                                        <div class="playBtn icon icon-radio_play" style="display: none;"></div>
                                    </div>
                                    <div class="radioLogo">
                                        <img width="100" height="100" _src="http://static.kgimg.com/public/root//images/radio_8.jpg" src="yy/static/images/blank.gif"  class=" ">
                                    </div>
                                    <div class="radioKind">动漫</div>
                                    <div class="radioName">刘若英、黄立行 - 分开旅行</div>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="fmweb/html/index-chanelId=11.html">
                                    <div class="Cover">
                                        <div class="playBtn icon icon-radio_play" style="display: none;"></div>
                                    </div>
                                    <div class="radioLogo">
                                        <img width="100" height="100" _src="http://static.kgimg.com/public/root//images/radio_9.jpg" src="yy/static/images/blank.gif"  class=" ">
                                    </div>
                                    <div class="radioKind">轻音乐</div>
                                    <div class="radioName">GALA - 点豆豆</div>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="fmweb/html/index-chanelId=63.html">
                                    <div class="Cover">
                                        <div class="playBtn icon icon-radio_play" style="display: none;"></div>
                                    </div>
                                    <div class="radioLogo">
                                        <img width="100" height="100" _src="http://static.kgimg.com/public/root//images/radio_10.jpg" src="yy/static/images/blank.gif"  class=" ">
                                    </div>
                                    <div class="radioKind">最爱成名曲</div>
                                    <div class="radioName">Alicia Keys - 28 Thousand Days</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 新歌首发 -->
                <!--热门歌手 -->
                <div class="itemM HotSinger">
                    
                    <div class="itemTitle">
                        <h3><b>热门</b>歌手</h3>
                        <div class="tabT" id="tabMenu"><span class="active" data="0">华语</span><span data="1">欧美</span><span data="2">日韩</span></div>
                    </div>
                    <div class="itemContent">
                        <div>
                            <ul class="firstUl clearFix" id="SingertabContent">
                                <li class="item">
                                    <ul class="chinaSinger secondUl clearFix" id="chinaSingerContent">
                                        <li>
                                        

                                            
                                                
                                                    <div class="cpt cptMid">
                                                
                                                        <a target="_blank" class="singerLink" href="yy/singer/home/3520.html">
                                                            <img class="singerImg" src="http://static.kgimg.com/public/root/images/singdefalut.jpg" _src="http://singerimg.kugou.com/uploadpic/pass/softhead/240/20180515/20180515002522714.jpg" _def="http://static.kgimg.com/public/root/images/singdefalut.jpg">
                                                            <div class="Cover">
                                                                <div class="playBtn icon">播放</div> 
                                                            </div>
                                                            <p class="cptBg"></p>
                                                            <div class="cptB">
                                                                <p class="songListSinger">周杰伦</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                            
                                                
                                                    <div class="cpt cptMid">
                                                
                                                        <a target="_blank" class="singerLink" href="yy/singer/home/3060.html">
                                                            <img class="singerImg" src="http://static.kgimg.com/public/root/images/singdefalut.jpg" _src="http://singerimg.kugou.com/uploadpic/pass/softhead/240/20180615/20180615165608155.jpg" _def="http://static.kgimg.com/public/root/images/singdefalut.jpg">
                                                            <div class="Cover">
                                                                <div class="playBtn icon">播放</div> 
                                                            </div>
                                                            <p class="cptBg"></p>
                                                            <div class="cptB">
                                                                <p class="songListSinger">薛之谦</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                            
                                                
                                                     <div class="cpt cptSmall">
                                                
                                                        <a target="_blank" class="singerLink" href="yy/singer/home/722869.html">
                                                            <img class="singerImg" src="http://static.kgimg.com/public/root/images/singdefalut.jpg" _src="http://singerimg.kugou.com/uploadpic/pass/softhead/240/20180611/20180611160019456.jpg" _def="http://static.kgimg.com/public/root/images/singdefalut.jpg">
                                                            <div class="Cover">
                                                                <div class="playBtn icon">播放</div> 
                                                            </div>
                                                            <p class="cptBg"></p>
                                                            <div class="cptB">
                                                                <p class="songListSinger">毛不易</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                            
                                                
                                                     <div class="cpt cptSmall">
                                                
                                                        <a target="_blank" class="singerLink" href="yy/singer/home/3539.html">
                                                            <img class="singerImg" src="http://static.kgimg.com/public/root/images/singdefalut.jpg" _src="http://singerimg.kugou.com/uploadpic/pass/softhead/240/20180122/20180122113125103.jpg" _def="http://static.kgimg.com/public/root/images/singdefalut.jpg">
                                                            <div class="Cover">
                                                                <div class="playBtn icon">播放</div> 
                                                            </div>
                                                            <p class="cptBg"></p>
                                                            <div class="cptB">
                                                                <p class="songListSinger">张杰</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                            
                                                
                                                     <div class="cpt cptSmall">
                                                
                                                        <a target="_blank" class="singerLink" href="yy/singer/home/192923.html">
                                                            <img class="singerImg" src="http://static.kgimg.com/public/root/images/singdefalut.jpg" _src="http://singerimg.kugou.com/uploadpic/pass/softhead/240/20180613/20180613183831916.jpg" _def="http://static.kgimg.com/public/root/images/singdefalut.jpg">
                                                            <div class="Cover">
                                                                <div class="playBtn icon">播放</div> 
                                                            </div>
                                                            <p class="cptBg"></p>
                                                            <div class="cptB">
                                                                <p class="songListSinger">摩登兄弟</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                            
                                        
                                        </li>
                                    </ul>
                                    <div class="tabC" id="subMenu">
                                        <a class="icon icon-s-dot icon-s_dot_hover" data="0"></a>
                                        <a class="icon icon-s-dot" data="1"></a>
                                        <a class="icon icon-s-dot" data="2"></a>
                                    </div>    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- 推荐Mv -->
            </div>
         
            <div class="partner itemM ">
                <div class="itemTitle">
                    <img src="/home/images/partner.jpg"></div>
                
                
                <div class="itemContent">

                    <div class="hz_logo clear_fix">
                        <a href="javascript:;" hidefocus="true" title="" rel="nofollow"><img title="" width="130" height="58"  src="yy/static/images/blank.gif" _src="http://static.kgimg.com/public/root//images/logo/partner01.jpg" alt=""></a><a href="javascript:;" hidefocus="true" title="" rel="nofollow"><img title="EMI" width="130" height="58"  src="yy/static/images/blank.gif" _src="http://static.kgimg.com/public/root//images/logo/partner02.jpg" alt=""></a><a href="javascript:;" hidefocus="true" title="" rel="nofollow"><img title="SONY" width="130" height="58"  src="yy/static/images/blank.gif" _src="http://static.kgimg.com/public/root//images/logo/partner03.jpg" alt=""></a><a href="javascript:;" hidefocus="true" title="" rel="nofollow"><img title="海蝶" width="130" height="58"  src="yy/static/images/blank.gif" _src="http://static.kgimg.com/public/root//images/logo/partner04.jpg" alt=""></a><a href="javascript:;" hidefocus="true" title="" rel="nofollow"><img title="丰华唱片" width="130" height="58"  src="yy/static/images/blank.gif" _src="http://static.kgimg.com/public/root//images/logo/partner05.jpg" alt=""></a><a href="javascript:;" hidefocus="true" title="" rel="nofollow"><img title="喜欢音乐" width="130" height="58"  src="yy/static/images/blank.gif" _src="http://static.kgimg.com/public/root//images/logo/partner06.jpg" alt=""></a><a href="javascript:;" hidefocus="true" title="" rel="nofollow"><img title="种子音乐" width="130" height="58"  src="yy/static/images/blank.gif" _src="http://static.kgimg.com/public/root//images/logo/partner07.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="friendLink itemM ">
                <div class="itemTitle">
                    <img src="/home/images/friendLink.jpg"></div>
              
                <div class="itemContent">
                    
                     
                        <a target="_blank" href="http://www.lady8844.com/" title="爱美网">爱美网</a>
                    
                        <a target="_blank" href="http://ent.cntv.cn/" title="央视网综艺频道">央视网综艺频道</a>
                    
                        <a target="_blank" href="http://baa.bitauto.com/" title="汽车论坛">汽车论坛</a>
                    
                        <a target="_blank" href="http://www.ithome.com/" title="IT之家">IT之家</a>
                    
                        <a target="_blank" href="http://www.25pp.com" title="iPhone游戏">iPhone游戏</a>
                    
                        <a target="_blank" href="http://you.ctrip.com/" title="旅游攻略">旅游攻略</a>
                    
                        <a target="_blank" href="http://www.yswxcn.com/" title="悦声无限">悦声无限</a>
                    
                        <a target="_blank" href="http://www.vmall.com/" title="华为商城">华为商城</a>
                    
                       
                    
                    
                   
                </div>
            </div>
        </div>
    
@stop

@section('js')


@stop