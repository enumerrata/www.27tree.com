<?php /*%%SmartyHeaderCode:15708850551a0142387f8e8-44183512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4483eae59ea29ce97d63293a940652ef6115f0f' => 
    array (
      0 => './templates/view_post.tpl',
      1 => 1366293583,
      2 => 'file',
    ),
    '94576f19f9e8f594e167eac4b2396fa5812c5788' => 
    array (
      0 => '/www/users/itsrcs.com/minbbs/templates/bbshead.tpl',
      1 => 1365894661,
      2 => 'file',
    ),
    'cec4ef372ad8d063f1d2bb2b72393f7000fdd977' => 
    array (
      0 => '/www/users/itsrcs.com/templates/nav_v3.php',
      1 => 1369445944,
      2 => 'file',
    ),
    '26e665168fa43d4e7c8baf59fbf5e9001832d7b8' => 
    array (
      0 => '/www/users/itsrcs.com/minbbs/templates/view_post_comm.tpl',
      1 => 1363699359,
      2 => 'file',
    ),
    '22d1643e793a2fe27cb30c1ecff58342c4f8febd' => 
    array (
      0 => '/www/users/itsrcs.com/templates/stat_code.php',
      1 => 1360988927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15708850551a0142387f8e8-44183512',
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d3fe39082ee5_58488874',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d3fe39082ee5_58488874')) {function content_52d3fe39082ee5_58488874($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title> android学习和广告平台赚钱</title>
        <meta name="description" content=" android学习和广告平台赚钱:
	android开发学习：&nbsp;&nbsp;&nbsp;android学习的前提是java基础。如果你没有好的java基础，那就赶紧补充，我在这里不做介绍。


	android是基于linux的，如果你要做底层的东西，可以买一些关" />
        <meta name="keywords" content="Java编程 AJAX技术 PHP技术 WEB技术 IT技术社区" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/minbbs/static/css/bbs.css" />
        <script type="text/javascript" src="/jss/jquery-min.js"></script>
        <script type="text/javascript" src="/jss/coref.js?v=4-1"></script>
        <script src="/jss/dojo/dojo.js"></script>
        <link rel="stylesheet" type="text/css" href="/minbbs/static/css/postList.css" />
        <link rel="stylesheet" type="text/css" href="/minbbs/static/css/view_post.css?v=4-1" />
        <link rel="stylesheet" type="text/css" href="/mod/kd/themes/default/default.css" />
        <link rel="stylesheet" type="text/css" href="/mod/kd/SyntaxHighlighter/Styles/SyntaxHighlighter.css" />
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
        <div class="sdCenter" style="margin-top:15px;">
            <input type=hidden value="121" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/2"><img src="/user/data/head-img/2_head.jpg"/><span id="author-nickname">koodo</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title"> android学习和广告平台赚钱</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2012年9月25日 19:31</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p&nbsp;style="text-indent:2em;">
	android开发学习：&nbsp;&nbsp;&nbsp;android学习的前提是java基础。如果你没有好的java基础，那就赶紧补充，我在这里不做介绍。
</p>
<p&nbsp;style="text-indent:2em;">
	android是基于linux的，如果你要做底层的东西，可以买一些关于linux&nbsp;c开发和linux内核的书来补充一下基础。这里只介绍应用开发，linux底层的就不讨论了。
</p>
<p&nbsp;style="text-indent:2em;">
	android应用开发方面的书，我建议《android应用开发详解》、《android疯狂讲义》、《android技术内幕:系统卷》，开发工具通常使用Eclipse，装上ADT插件就可以开发android程序了。
</p>
<p&nbsp;style="text-indent:2em;">
	android应用开发学习流程简介：
</p>
<p&nbsp;style="text-indent:2em;">
	1.&nbsp;搭建环境。
</p>
<p&nbsp;style="text-indent:2em;">
	包括Java、Eclipse、模拟器、web开发环境（可选）。真机运行速度是模拟器的几十倍，建议一定要买台android的手机来用，也不一定要很贵，我前期学android开发时用过的1100左右的索爱x8也挺不错的，至少可以流程地运行我的程序。另外，这里提到了web开发环境，因为我们大部分的程序都是要联网的、要从服务器获取数据，为用户提供更丰富的体验。如果你要做单机版的软件，那就可以不用搭建web开发环境。这样提醒一下：我的软件都是可单机可联网使用的，联网时可以得到在线的数据。我的服务器是在好空间网络上租的，几百块钱一年，很便宜，但也经常故障死机。通常，服务器一旦死机，当天我的收入就会直接减少40%以上。而且，好空间网络的服务器出问题之后，基本上是拖很久都解决不了的。建议钱多的话，到其他地方买个更好的服务器。
</p>
<p&nbsp;style="text-indent:2em;">
	前期使用eclipse就能完成程序打包、签名等任务，后期要学习一下android的工具tools和adb命令，让我们更深入了解android的程序结构。
</p>
<p&nbsp;style="text-indent:2em;">
	2.&nbsp;android基础学习。
</p>
<p&nbsp;style="text-indent:2em;">
	环境搭好之后，要学习&nbsp;Android应用的界面开发、事件处理、Activity、Service、使用Intent和IntentFilter进行通信、&nbsp;图形与图像处理、数据存储和IO（包括文件系统、SQlite数据库）、Broadcast&nbsp;Receiver、多媒体等基础知识。有了这些基础知识后，你就可以开发一些简单的android应用了。
</p>
<p&nbsp;style="text-indent:2em;">
	然后要扩展一下基础，学习OpenGL与3D应用开发、Widget手机桌面的应用、网络应用（包括xml数据通信、json数据通信、http网络知识）、重力感应相关知识、GPS应用开发知识、google&nbsp;map等基础扩展知识。
</p>
<p&nbsp;style="text-indent:2em;">
	建议：学好java&nbsp;基础，&nbsp;&nbsp;多看SDK下的DEMO、API文档，多写学习总结、项目总结，多去官方网站develop.android.com，guide下有很多内容，多去eoe论坛&nbsp;。&nbsp;&nbsp;&nbsp;3.&nbsp;知识水平提高提高
</p>
<p&nbsp;style="text-indent:2em;">
	要成为一个专业的android程序员（我自己还远没有达到），还应该具备linux底层的一些知识，java&nbsp;JNI方面的知识。熟悉一直web开发知识，让你能够自己搭建一个完整的android软件系统。
</p>
<p&nbsp;style="text-indent:2em;">
	4.&nbsp;动手干活
</p>
<p&nbsp;style="text-indent:2em;">
	这阶段，你应该尝试分析应用市场，看看那些应用受欢迎，并且应用数量不多，还有让你的软件能生存的空间（当然也要考虑自己目前的水平问题，太难的程序在刚开始应该是写不出来的，除非你就是传说当中的那个万中无一的绝世高手）。
</p>
<p&nbsp;style="text-indent:2em;">
	分析确定好开发什么应用之后，就要开始着手干活了。先话2,3个星期写一款软件出来，然后发到各大应用市场，看看市场反应。然后根据用户使用的反馈信息，进行程序完善和bugfix。通过反复的修改及调试程序，可以学会界面布局、资源管理、logcat、调试、对activity、service、intentFilter等有一定的了解。这个时期最好的帮手是SDK目录下的doc、百度及google、破解工具（apktool、dex2jar、jd-gui，可以提取目标apk的资源及反编译源代码，这里反编译不是为了干坏事，而是从别人那里学习技术，了解别人的程序界面设计，资源光流等等。你并不能完全的得到一个好程序的破解代码，但你可以通过代码片段来获取信息学习或者进行搜索从而学到各种技术），这个阶段你就要多看别人的代码多动手了，你要开始熟悉和使用android的类库。
</p>
<p&nbsp;style="text-indent:2em;">
	5.&nbsp;开始赚钱
</p>
<p&nbsp;style="text-indent:2em;">
	经过上面的阶段，你应该开发出了第一款准备面向市场的手机应用了，这个时候，你就可以考虑怎样用你的程序来赚钱了。先来介绍下android下的常用的赚钱方法：
</p>
<p&nbsp;style="text-indent:2em;">
	1.&nbsp;收费应用
</p>
<p&nbsp;style="text-indent:2em;">
	在国内，可以通过移动MM、机锋网的金币、支付宝等各种渠道进行付费，目前也有不少软件提供免费使用，然后在部分高级功能中需要付费开通功能，通常都是用支付宝提供进行支付，然后根据支付宝提供的接口知道用户是否付费成功了。
</p>
<p&nbsp;style="text-indent:2em;">
	中国人就是有那种吃免费午餐的习惯，收费软件在中国是很难赚钱的。而且直接收费容易让用户恶评软件。
</p>
<p&nbsp;style="text-indent:2em;">
	2.&nbsp;免费应用&nbsp;+&nbsp;广告
</p>
<p&nbsp;style="text-indent:2em;">
	这是目前国内个人开发者最普遍的赚钱方式，你可以利用嵌入国内外数十家移动广告平台的sdk、并在各渠道发布你的应用来获取展示广告，从而利用用户对广告的点击而获取收入。但需要注意的是，身为开发者你最好不要以不正当等方式来获得用户点击，别破坏市场环境(比如现在很多应用所有功能都要求用户下载广告应用获取积分而得到使用，特别是一些情、色的应用)。
</p>
<p&nbsp;style="text-indent:2em;">
	3.&nbsp;应用内容的商业合作
</p>
<p&nbsp;style="text-indent:2em;">
	这种模式需要你的应用有影响力，能让商家为你买单。例如UC浏览器首页的导航栏中的那几十个链接（如新浪、腾讯、搜狐、各种手机软件网站等）都不是白放上去的，没有给UC大量的广告费，是不肯能在上面取得一席之地的。
</p></div>
                </div>

                <!-- 编辑器 -->
                <div class="ps-items" id="ps-editor-wapper">
                    <textarea id="ps-editor" style="width:99.8%;display:none;margin-bottom:10px;"></textarea>
                    <a class="next-cp" style="margin-top:10px;" href="javascript:;" id="ps-submit-btn">马上发表</a>
                </div>
                <!-- 编辑器 -->

                <!-- 回复按钮 -->
                <div class="ps-items">
                    <span class="RedBar">
    <span class="RedBar-in">说几句吧</span><span class="Gray RedBar-in-mr">水水更健康</span>
</span>
<div id="vps-comm-wapper">
    <div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/12_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x6C99;&#x53D1; / <a href="/user/12">坑爹的程序员</a> / 2012年9月27日 17:15 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="0" actUID="12">回复</a></div>感觉Android调试很麻烦<div class="cms"></div></div></div></div>
                    <a class="next-cp" id="loadEditor" style="margin-top:10px;">发表回复</a>
                </div>
                <!-- 回复按钮 -->
            </div>
            <div class="clear"></div>
        </div>
        <script charset="utf-8" src="/minbbs/bin_js/bbs-post.js?v=19"></script>
        <script charset="utf-8" src="/mod/kd/SyntaxHighlighter/Scripts/shCore.js"></script>
        <script language="javascript">$(function() {
            dp.SyntaxHighlighter.HighlightAll("code");
        });
        </script>
        <span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>
    </body>
</html><?php }} ?>