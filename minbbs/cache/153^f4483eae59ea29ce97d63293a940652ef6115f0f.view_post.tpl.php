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
  'unifunc' => 'content_52d601e0ace821_71052638',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d601e0ace821_71052638')) {function content_52d601e0ace821_71052638($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>DOTA2 与 完美世界</title>
        <meta name="description" content="DOTA2 与 完美世界:
	完美代理DOTA！为什么不是其他更强的公司


	或许是大家一直被腾讯系列的弄啊弄，抄袭CS，之类游戏挡住了视野。老牌玩家还在一直围观者盛大，腾讯等等。或许大家眼里的网游只有魔兽世界，CF，DNF等等的时候已经忘记了中国其实还有很多其他" />
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
            <input type=hidden value="153" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/172"><img src="/user/data/head-img/172_head.jpg"/><span id="author-nickname">Admin</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">DOTA2 与 完美世界</h1>
                        <span id="vps-title-info">由 <a href="/user/172">Admin</a> 发表于 2012年10月16日 12:06</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	完美代理DOTA！为什么不是其他更强的公司
</p>
<p>
	或许是大家一直被腾讯系列的弄啊弄，抄袭CS，之类游戏挡住了视野。老牌玩家还在一直围观者盛大，腾讯等等。或许大家眼里的网游只有魔兽世界，CF，DNF等等的时候已经忘记了中国其实还有很多其他的游戏商家在悄然崛起。
</p>
<p>
	对于完美代理DOTA2的事情，小编特意去找了几个人咨询了一下：
</p>
<p>
	大概的内容是。
</p>
<p>
	１．完美能搞定阀门吗？
</p>
<p>
	２．完美能搞定DOTA2吗？
</p>
<p>
	３．完美到底在想什么！？
</p>
<p>
	答题的总结吧，据悉其实完美和阀门的问题其实可以谈到很远，完美和阀门保持者不正当关系其实有两年多，从第一届DOTA2西雅图比赛的时候完美就已经相中了DOTA2这个 游戏，当时完美的老总 池宇峰 特意跑到了西雅图希望能和阀门方面接轨，并能接手到这个让人振奋的游戏。
</p>
<p>
	其实理论上说，在国外的电子产品商人的眼里所有代理都一样，只要服务器能搞定，基本上就只要看诚意。当年九成和暴雪不也就是这样合体了的吗？
</p>
<p>
	那么算是能说完美在两年前的时候就已经相中了DOTA2，阀门那边也不会出现很大的意见。
</p>
<p>
	一个公司老总为了一个游戏代理权，不远千里过去，诚意是完全有了那么能力方面呢？
</p>
<p>
	完美能搞定DOTA2吗？
</p>
<p>
	其实做为一个代理的话，并没有那么多的技术方面问题，一个完善的售后系统和不错的服务器即可。而且大家也知道就算没有完善的售后还有不错的服务器某公司都也是成功的抱住了的大神的大腿的事情在中国也是出现过的。
</p>
<p>
	小编于是去整理了一下完美的财务报告。
</p>
<p>
	1.目前得出的是　完美目前的游戏大概有１５款。其中有５款，神魔大陆，波霸之剑，完美世界，梦幻诛仙，刚刚上线公测是神雕侠侣。
</p>
<p>
	2.在2010年毛利润2,025.74（百万）
</p>
<p>
	3.在欧洲和日本也有很多代理的游戏
</p>
<p>
	4.有自主亚牛开发的游戏引擎和游戏开放平台开发游戏。
</p>
<p>
	十多款游戏的代理权，完美在网络游戏方面的代理经营，推广，运营方面的问题是一点一压力都没有了。最少小编认为不会出现客服不能打通，官网进入404，服务每天一次掉线的情况。
</p>
<p>
	作为一个代理商方面，完美是完全有能力将这个游戏接入手，然后推广营销，然后进行运营，维护的。
</p>
<p>
	那么完美在DOTA2方面在等待什么？
</p>
<p>
	大概的整理了一下思路，同时有一个人大概的点拨之后小编发现了一个很重要的问题的问题-steam！
</p>
<p>
	DOTA2之于steam，DOTA2之于Valve，DOTA2之于完美，其实这些都一直围绕在一个问题就是Steam平台。
</p>
<p>
	中国没有单机市场！
</p>
<p>
	或者说DOTA2的出现基本上断绝了中国单机市场，无论是那一年的仙剑5，还是那一年的仙剑1，中国从未出现过单机。也没有市场。
</p>
<p>
	只是这个时候，steam平台携带者dota2，或者说DOTA2带着的是一个单机的钥匙进入中国。
</p>
<p>
	不只是为了DOTA2，而是为了整个单机市场，中国单机市场到如今已经是一片狼藉，无论是目前或是以前的游戏对战平台还是游戏开放商。
</p>
<p>
	腾讯会去做吗？腾讯一直剑指网游，手中握有同样是对抗类型的LOL不可能会让自己的用户在开始导入到单机市场。
</p>
<p>
	盛大会去做吗？盛大在去年跑掉浩方平台之后，明显开始出现的情况是开始回收成本开始下棋。
</p>
<p>
	网易会去做吗？网易还在暗黑3，还是WOW暴雪爸爸的带领下走入死局。
</p>
<p>
	完美此刻的接入单机市场是非常的完美！
</p>
<p>
	没有人抢夺的一块肉！被完美接手了。
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
    <div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/73_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x6C99;&#x53D1; / <a href="/user/73">_后觉</a> / 2012年10月16日 16:10 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="0" actUID="73">回复</a></div>完美并不美，我们都虚伪~~~<img src="/mod/kd/plugins/emoticons/images/jx2/j_0002.gif" border="0" alt="" /><div class="cms"><div class="sub-comm-item"><tx></tx><t></t><em class="ct-t-whw"><img src="/user/data/head-img/172_head.jpg" width="32px" height="32px"/></em><div style="margin-left:45px;line-height:20px;"><a href="/user/172">Admin</a> @ <a href="/user/73">后觉゛</a>&nbsp;：不喜欢完美世界，游戏都不怎么好玩的。/<span class="block Gray">2012年10月16日 17:35 / <a href="javascript:;" rel="0" actUID="172" onclick="javascript:rep(this,2);">回复</a></span></div></div></div></div></div></div>
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