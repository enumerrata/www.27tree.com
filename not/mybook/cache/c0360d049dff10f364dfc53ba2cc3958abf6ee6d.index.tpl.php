<?php /*%%SmartyHeaderCode:9351103495169e7f3043633-61756844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1368870575,
      2 => 'file',
    ),
    'cec4ef372ad8d063f1d2bb2b72393f7000fdd977' => 
    array (
      0 => '/www/users/itsrcs.com/templates/nav_v3.php',
      1 => 1369445944,
      2 => 'file',
    ),
    'f1605efc8fe691f5c5246b4e56305bc8b169ae46' => 
    array (
      0 => '/www/users/itsrcs.com/not/mybook/templates/share_prom.html',
      1 => 1357283889,
      2 => 'file',
    ),
    '22d1643e793a2fe27cb30c1ecff58342c4f8febd' => 
    array (
      0 => '/www/users/itsrcs.com/templates/stat_code.php',
      1 => 1360988927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9351103495169e7f3043633-61756844',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d63c13a17ec4_73147087',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d63c13a17ec4_73147087')) {function content_52d63c13a17ec4_73147087($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>程序员必备好书推荐 | 精选好书 | 编程学习好书 | IT技术好书推荐 | PDF下载</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="IT技术,编程好书,PDF下载,电子书下载,Java电子书,数据库电子书,Web开发电子书,C/C++编程电子书" />
        <meta name="description" content="二叉树社区电子书库,各种编程学习图书分享平台,各种Java电子书,数据库电子书,Web开发电子书,C/C++编程电子书资源分享。" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/static/css/book_single.css" />
    </head>
    <body>
        <div class="Shadow" id="navWapper">
    <div class="sdCenter nav-v3">
        <div style="float:left;">
            <a class="logo-v3" href="/" title="返回首页"></a>
            <div id="nav">
                <ul>
                    <li><a href="/">首页</a></li>
                    <li><a href="/blog/index.html">博客广场</a></li>
                    <li><a href="/bookLib/">好书分享</a></li>
                    <li><a href="/minbbs/tech/">技术分享</a></li>
                    <li style="border:none;"><a href="/minbbs/ques/">技术问答</a></li>
                </ul>
            </div>
        </div>
        <div id="nav-right">
            <div class="borderR15 tsearch-wapp">
                <input type="text" class="borderR15" value="" id="search-inp"
                       onfocus="$(this).css('width','105px').attr('placeholder','&#35831;&#36755;&#20837;&#25628;&#32034;&#20869;&#23481;');"
                       onblur="$(this).css('width','35px').attr('placeholder','&#25628;&#32034;');"
                       placeholder="&#25628;&#32034;"
                       onkeydown="search_enter(event);"/>
                <a class="tsearch-btn borderR10" href="javascript:;" onclick="Search($('#search-inp').val())"></a>
            </div>
            <div id="top-menu-wapp">
                <a class="next-cp top-bm" id="gb-reg" href="/account/register/" style="color:green;">&#27880;&#20876;</a>&nbsp;
                <a class="next-cp top-bm" id="gb-log" href="/account/login/">登录</a>&nbsp;
                <div id="top-menu-bar">
                    <div id="top-menu">
                        <div class="top-menu-in">
                            <a class="top-menu-btn" id="gb-ucc">个人中心</a>
                            <a class="top-menu-btn" id="gb-usm">发表文章</a>
                            <a class="top-menu-btn" id="gb-usa">修改头像</a>
                            <a class="top-menu-btn" id="gb-ext" href="javascript:;">退出账号</a>
                        </div>
                    </div>
                    <span style="display:inline-block;cursor:pointer;color:#444;" id="gb-usn"><a style="width:19px;height:13px;background:url('/img/loading_19_13.gif') bottom center no-repeat;display:inline-block;"></a></span>
                    <span style="display:inline-block;width:10px;height:10px;background:url('/img/arrd-1.png') center no-repeat;" id="gb-arr"></span>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--<div id="usr-bar">
    <div id="usr-bar-i">
        <div class="ms-l"></div>
        <div>
            <a class="ms-btn" id="ms-btn-top" href="javascript:;" onclick="javascript:goTop();" title="页面顶部"></a>
            <a class="ms-btn" id="ms-btn-ush"></a>
            <a class="ms-btn" id="ms-btn-log" href="/account/login/" title="登录你的帐号">登陆</a>
            <a class="ms-btn" id="ms-btn-reg" href="/account/register/" title="注册一个帐号"><b>注册</b></a>
            <a class="ms-btn" id="ms-btn-dy" href="javascript:;" title="动态"><b id="ms-btn-dym">9+</b></a>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--[if lt IE 7]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
        <div class="sdCenter">
            <div id="index-left">
                <!--左边栏-->
                <div style="margin-right:-1px;margin-top:20px;">
                    <a class="BookTypesItem" href="/bookLib/java/1.html">JAVA开发技术</a><a class="BookTypesItem" href="/bookLib/php/1.html">PHP开发技术</a><a class="BookTypesItem" href="/bookLib/cocpp/1.html">C / C++</a><a class="BookTypesItem" href="/bookLib/csharp/1.html">C# / .NET</a><a class="BookTypesItem" href="/bookLib/algo/1.html">算法技巧</a><a class="BookTypesItem" href="/bookLib/android/1.html">Android</a><a class="BookTypesItem" href="/bookLib/py/1.html">Python</a><a class="BookTypesItem" href="/bookLib/web/1.html">Web开发</a><a class="BookTypesItem" href="/bookLib/ios/1.html">IOS开发</a><a class="BookTypesItem" href="/bookLib/nosql/1.html">NoSQL</a><a class="BookTypesItem" href="/bookLib/perl/1.html">Perl</a><a class="BookTypesItem" href="/bookLib/game/1.html">游戏开发</a><a class="BookTypesItem" href="/bookLib/database/1.html">数据库技术</a><a class="BookTypesItem" href="/bookLib/system/1.html">操作系统</a><a class="BookTypesItem" href="/bookLib/hp/1.html">汇编语言</a><a class="BookTypesItem" href="/bookLib/other/1.html">其他</a>
                </div>
                <!--<div style="height:400px;background:url('/img/br_l.png') repeat-y right center #fff;">
                </div>-->
                <!--左边栏-->
            </div>
            <div id="index-right">
                <div id="index-right-in-l" class="borderR5">
                    <!--中-->

                    <div class="ct-wapper"><!--一周好书推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">一周好书推荐</span>
                        </span>
                        <div>
                            <a href="/bookLib/339" title="" class="Bookwapper clearMarginL"><img src="/not/mybook/data/book_image_lib/a9f6353bf2f2135b6255a7ed9c718d29.png" width="110px" height="145px" alt="Go语言·云动力(云计算时代的新型编程语言)"/></a><a href="/bookLib/334" title="" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/79ee36e47c909a3e14b71ae93531f5f3.png" width="110px" height="145px" alt="Git权威指南"/></a><a href="/bookLib/304" title="" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/35090943bbfa665e5da3d332d2561395.jpg" width="110px" height="145px" alt="Node.js for PHP Developers: Porting PHP to Node.js"/></a><a href="/bookLib/337" title="" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/153fd31341dbbde2b134036409be0f0c.png" width="110px" height="145px" alt="社交网站界面设计"/></a><a href="/bookLib/186" title="" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/15fcc808657d046043e6d7358a19e38d.png" width="110px" height="145px" alt="【Hacks系列】LINUX SERVER HACKS"/></a>                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--JAVA推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">Web开发 - 最新分享</span>
                        </span>
                        <div>
                            <a href="/bookLib/352" title="HTTP权威指南" class="Bookwapper clearMarginL"><img src="/not/mybook/data/book_image_lib/2f6d4ce1bbb83dcea410bdd8f6ba1ae3.jpg" width="110px" height="145px" alt="HTTP权威指南"/></a><a href="/bookLib/351" title="悟透javascript" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/19c8744eb60b116f0790150aeabb8b3a.jpg" width="110px" height="145px" alt="悟透javascript"/></a><a href="/bookLib/344" title="瞬间之美 WEB界面设计如何让用户心动" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/688cc62bf25e796bbe599c56c710678d.png" width="110px" height="145px" alt="瞬间之美 WEB界面设计如何让用户心动"/></a><a href="/bookLib/343" title="JavaScript宝典（第7版）" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/c023c6b452183587b228e9c0fe6fa8a7.png" width="110px" height="145px" alt="JavaScript宝典（第7版）"/></a><a href="/bookLib/342" title="HTML 5开发精要与实例详解" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/07f4ff0ec58cb63c5c683778542c8496.png" width="110px" height="145px" alt="HTML 5开发精要与实例详解"/></a>                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--JAVA推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">JAVA - 最新分享</span>
                        </span>
                        <div>
                            <a href="/bookLib/326" title="Java EE设计模式——Spring企业级开发最佳实践" class="Bookwapper clearMarginL"><img src="/not/mybook/data/book_image_lib/b3eace69ceed0837e206efa28cb7b9ed.png" width="110px" height="145px" alt="Java EE设计模式——Spring企业级开发最佳实践"/></a><a href="/bookLib/315" title="JAVA优化编程" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/01d8316e6bf28165be4060f44debb79a.png" width="110px" height="145px" alt="JAVA优化编程"/></a><a href="/bookLib/307" title="Java Web Services: Up and Running" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/54fceeedf364d13ad5ca8d70a0cbc455.jpg" width="110px" height="145px" alt="Java Web Services: Up and Running"/></a><a href="/bookLib/305" title="Spring技术内幕-深入解析 Spring架构与设计原理" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/65fe046cc980ecab12ac5f6b8d4ec1aa.png" width="110px" height="145px" alt="Spring技术内幕-深入解析 Spring架构与设计原理"/></a><a href="/bookLib/294" title="OSGi in Depth" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/f22bfa9e889aab809f34538a56e4a50f.jpg" width="110px" height="145px" alt="OSGi in Depth"/></a>                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--NoSQL推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">NoSQL  - 最新分享</span>
                        </span>
                        <div>
                            <a href="/bookLib/245" title="深入学习MongoDB" class="Bookwapper clearMarginL"><img src="/not/mybook/data/book_image_lib/02abd00339c2d97e2c613c454a3d001a.png" width="110px" height="145px" alt="深入学习MongoDB"/></a><a href="/bookLib/242" title="50 Tips and Tricks for MongoDB Developers" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/75d56b9355e2013ad65e5b04e4838517.png" width="110px" height="145px" alt="50 Tips and Tricks for MongoDB Developers"/></a><a href="/bookLib/238" title="Scaling CouchDB" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/a23270976c8aea12ae759f576fc95cba.png" width="110px" height="145px" alt="Scaling CouchDB"/></a><a href="/bookLib/237" title="The Definitive Guide to MongoDB" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/d5cdc465b26a5c1d0ccfc4a2ee549d99.png" width="110px" height="145px" alt="The Definitive Guide to MongoDB"/></a><a href="/bookLib/235" title="Pro Hadoop" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/e15c845ecf1af764f98d6261906a5c61.jpg" width="110px" height="145px" alt="Pro Hadoop"/></a>                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--C/C++推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">C/C++  - 最新分享</span>
                        </span>
                        <div>
                            <a href="/bookLib/347" title="C++ Primer中文版 第4版 （一本久负盛名的C++经典教程）" class="Bookwapper clearMarginL"><img src="/not/mybook/data/book_image_lib/c1f757ecd6bd1a5e0aa5fbc3d7d6878f.jpg" width="110px" height="145px" alt="C++ Primer中文版 第4版 （一本久负盛名的C++经典教程）"/></a><a href="/bookLib/346" title="C++ Primer Plus 第五版 中文版" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/ad9253fe240626c082396523bbb45b08.png" width="110px" height="145px" alt="C++ Primer Plus 第五版 中文版"/></a><a href="/bookLib/297" title="Imperfect C++中文版(唯一一本讲解C++不足之处，并给出解决方案的图书)" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/869e01a2e76309d386fe307ee4381094.png" width="110px" height="145px" alt="Imperfect C++中文版(唯一一本讲解C++不足之处，并给出解决方案的图书)"/></a><a href="/bookLib/295" title="C++代码设计与重用" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/efebbfb86f574cc4700b107261eab857.png" width="110px" height="145px" alt="C++代码设计与重用"/></a><a href="/bookLib/296" title="C++ Primer Plus(第6版)" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/60eaf05ee71ac991f91a4794684843e9.png" width="110px" height="145px" alt="C++ Primer Plus(第6版)"/></a>                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--数据库-->
                        <span class="RedBar">
                            <span class="RedBar-in">数据库 - 最新分享</span>
                        </span>
                        <div>
                            <a href="/bookLib/313" title="SQL语言艺术" class="Bookwapper clearMarginL"><img src="/not/mybook/data/book_image_lib/default/pdfDefault.png_vbook110" width="110px" height="145px" alt="SQL语言艺术"/></a><a href="/bookLib/259" title="Oracle Partition 分区详细总结" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/ba93b3b097e12d5d0ca7c6a526ade793.png" width="110px" height="145px" alt="Oracle Partition 分区详细总结"/></a><a href="/bookLib/258" title="Oracle性能诊断艺术" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/1a4ae88a0e3d63c75b245886b148126b.png" width="110px" height="145px" alt="Oracle性能诊断艺术"/></a><a href="/bookLib/257" title="Oracle VM实现与管理实战" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/aeb3daa411286357c349aa970e2251e1.png" width="110px" height="145px" alt="Oracle VM实现与管理实战"/></a><a href="/bookLib/255" title="让Oracle跑得更快——Oracle 10g性能分析与优化思路" class="Bookwapper "><img src="/not/mybook/data/book_image_lib/2a474676fd58d9b79690d242a93b4a84.png" width="110px" height="145px" alt="让Oracle跑得更快——Oracle 10g性能分析与优化思路"/></a>                            <div class="clear"></div>
                        </div>
                    </div>

                    <!--中-->
                </div>
                <div id="index-right-in-r">
                    <!--右边栏-->

                    <div class="Shadow bright-in-i" style="margin-top:20px;">
                        <!--排行榜-->
                        <a href="/not/mybook/share/">
    <img src="/not/mybook/img/book_share_sign.png" style="margin:0 auto;display:block"/>
</a>
                    </div>

                    <div class="Shadow bright-in-i">
                        <div class="ct-wapper">
                            <span class="RedBar">
                                <span class="RedBar-in">分享动态</span>
                            </span>
                            <div class="bk-dy-items"><a class="headwapper" href="/blogm/usr-784.html"><img src="/img/tavatar.gif" width="32px" height="32px" alt="bigshow 的博客专栏"></a><div style="margin-left:45px;line-height:20px;"><a href="/bookLib/352">HTTP权威指南</a><span class="Gray block">分享于 2013年7月14日 23:29</span></div></div><div class="bk-dy-items"><a class="headwapper" href="/blogm/usr-740.html"><img src="/img/tavatar.gif" width="32px" height="32px" alt="feidu 的博客专栏"></a><div style="margin-left:45px;line-height:20px;"><a href="/bookLib/350">WPF深入浅出</a><span class="Gray block">分享于 2013年6月25日 16:18</span></div></div><div class="bk-dy-items"><a class="headwapper" href="/blogm/usr-639.html"><img src="/user/data/head-img/639_head.jpg" width="32px" height="32px" alt="生命的挑战 的博客专栏"></a><div style="margin-left:45px;line-height:20px;"><a href="/bookLib/351">悟透javascript</a><span class="Gray block">分享于 2013年6月23日 07:04</span></div></div><div class="bk-dy-items"><a class="headwapper" href="/blogm/usr-676.html"><img src="http://qzapp.qlogo.cn/qzapp/100385206/3157A72F152888C1D2322B69617A39AD/100" width="32px" height="32px" alt="杜小雨 的博客专栏"></a><div style="margin-left:45px;line-height:20px;"><a href="/bookLib/349">网络营销实战密码</a><span class="Gray block">分享于 2013年6月1日 21:45</span></div></div><div class="bk-dy-items"><a class="headwapper" href="/blogm/usr-2.html"><img src="/user/data/head-img/2_head.jpg" width="32px" height="32px" alt="koodo 的博客专栏"></a><div style="margin-left:45px;line-height:20px;"><a href="/bookLib/348">Python UNIX 和Linux 系统管理指南</a><span class="Gray block">分享于 2013年5月19日 19:52</span></div></div>                        </div>
                        <!--排行榜-->
                    </div>

                    <!--<div class="Shadow bright-in-i">
                        <div class="ct-wapper">
                            <span class="RedBar">
                                <span class="RedBar-in">排行榜</span>
                            </span>
                                    </div>
            </div>-->

                    <div class="Shadow bright-in-i">
                        <!--热心会员-->
                        <div class="ct-wapper">
                            <span class="RedBar">
                                <span class="RedBar-in">会员贡献榜</span>
                            </span>
                            <div style="margin-top:10px;"><a class="headwapper" href="/blogm/usr-2.html"><img src="/user/data/head-img/2_head.jpg" width="45px" height="45px" alt="koodo 的博客专栏"/></a><div style="margin-left:58px;line-height:25px;"><div class="Elipsis"><a style="font-size:16px;" href="/blogm/usr-2.html">koodo</a></div><span class="Gray">分享了 180 本书</span></div></div><div style="margin-top:10px;"><a class="headwapper" href="/blogm/usr-19.html"><img src="/user/data/head-img/19_head.jpg" width="45px" height="45px" alt="Serria 的博客专栏"/></a><div style="margin-left:58px;line-height:25px;"><div class="Elipsis"><a style="font-size:16px;" href="/blogm/usr-19.html">Serria</a></div><span class="Gray">分享了 61 本书</span></div></div><div style="margin-top:10px;"><a class="headwapper" href="/blogm/usr-32.html"><img src="/user/data/head-img/32_head.jpg" width="45px" height="45px" alt="mallocx 的博客专栏"/></a><div style="margin-left:58px;line-height:25px;"><div class="Elipsis"><a style="font-size:16px;" href="/blogm/usr-32.html">mallocx</a></div><span class="Gray">分享了 18 本书</span></div></div><div style="margin-top:10px;"><a class="headwapper" href="/blogm/usr-306.html"><img src="/user/data/head-img/306_head.jpg" width="45px" height="45px" alt="Fuck 的博客专栏"/></a><div style="margin-left:58px;line-height:25px;"><div class="Elipsis"><a style="font-size:16px;" href="/blogm/usr-306.html">Fuck</a></div><span class="Gray">分享了 14 本书</span></div></div><div style="margin-top:10px;"><a class="headwapper" href="/blogm/usr-201.html"><img src="/minbbs/default/headimg/default7.jpg" width="45px" height="45px" alt="Firing 的博客专栏"/></a><div style="margin-left:58px;line-height:25px;"><div class="Elipsis"><a style="font-size:16px;" href="/blogm/usr-201.html">Firing</a></div><span class="Gray">分享了 12 本书</span></div></div>                        </div>
                        <!--热心会员-->
                    </div>
                    <!--右边栏-->
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>
    </body>
</html><?php }} ?>