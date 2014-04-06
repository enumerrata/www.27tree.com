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
  'unifunc' => 'content_52d547dd30ebe8_25080397',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d547dd30ebe8_25080397')) {function content_52d547dd30ebe8_25080397($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Java之父评价C语言之父：我用尽了形容词</title>
        <meta name="description" content="Java之父评价C语言之父：我用尽了形容词:
	Java之父詹姆斯·高斯林（JamesGosling）在上个月发布了关于讨论C语言之父丹尼斯·里奇（DennisRitchie）的简短博文：


	丹尼斯·里奇辞世的新闻如五雷轰顶。过去几天已经有很多资讯报道此事。他的影响巨大，并超越了" />
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
            <input type=hidden value="227" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/73"><img src="/user/data/head-img/73_head.jpg"/><span id="author-nickname">_后觉</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">Java之父评价C语言之父：我用尽了形容词</h1>
                        <span id="vps-title-info">由 <a href="/user/73">_后觉</a> 发表于 2012年11月12日 23:40</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p style="text-indent:2em;">
	Java之父詹姆斯·高斯林（James Gosling）在上个月发布了关于讨论C语言之父丹尼斯·里奇（Dennis Ritchie）的简短博文：
</p>
<p style="text-indent:2em;">
	丹尼斯·里奇辞世的新闻如五雷轰顶。过去几天已经有很多资讯报道此事。他的影响巨大，并超越了科技世界，虽然他的大多影响都不为人知，但完全可以感受到。C语言撑起了一切。我的整个职业生涯也是从C语言和Unix中发展而来。
</p>
<p style="text-indent:2em;">
	对当今的大多数工程师而言，很难理解我在20世纪70年代感受到的幸福愉快感。当一种编程语言最终出现，我（其他人也）可以从汇编语言提升到一种真正的编程语言。我们可以做任何一切，过去我们得编写所有低级位系统。在C语言之前，编程语言达不到任务：开销太大了。系统的复杂性是真的阻碍了用汇编语言编写大型软件。C语言就像代码的JATO。
</p>
<p style="text-indent:2em;">
	（编注：“JATO”是“Jet-fuel assisted take
</p>
<p style="text-indent:2em;">
	off”的缩写，字面意思：“辅助起飞的喷气燃料”。这个系统通过小型火箭提供辅助动力，以帮助超载的飞机起飞升空。）
</p>
<p style="text-indent:2em;">
	下面是詹姆斯·高斯林此文的一些评论：
</p>
<p style="text-indent:2em;">
	Truely James. For every Computer professional in the world, the first
</p>
<p style="text-indent:2em;">
	language they come across is C. With so much of wonderfulness and which also
</p>
<p style="text-indent:2em;">
	makes the learning experience so fun and entertaining. RIP Ritchie!!!
</p>
<p style="text-indent:2em;">
	说的很对，詹姆斯！对于每个计算机专业人士，他们所接触的第一种编程语言就是C语言。（C语言）有着如此多的令人惊奇的地方，这也使得学习过程非常有趣。安息，里奇！！！
</p>
<p style="text-indent:2em;">
	Great ones are falling. I still love C. So simple. So powerful.
</p>
<p style="text-indent:2em;">
	一位巨星的陨落。我仍然爱着C语言。如此简单，如此强大。
</p>
<p style="text-indent:2em;">
	I remember C being like Adventure for programmers: lots of little pits for
</p>
<p style="text-indent:2em;">
	the unwary to fall into. Even after many years there were a few I hadn't found.
</p>
<p style="text-indent:2em;">
	It was a good time.
</p>
<p style="text-indent:2em;">
	我记得C语言就是程序员的冒险：有很多小坑，一不小心就陷进去。即便很多年过后，还有一些我没有发现的。那是个美好时刻。
</p>
<p style="text-indent:2em;">
	The equation is quite simple : Richie is like Einstein, pure Genius. All the
</p>
<p style="text-indent:2em;">
	IT is built on K&amp;amp;R works. Thanks man, and RIP...
</p>
<p style="text-indent:2em;">
	等式非常简单：里奇就像爱因斯坦，纯粹的天才。IT业的所有都基于肯贝汉和里奇的成果。感谢，安息……<img src="/mod/kd/plugins/emoticons/images/jx2/j_0002.gif" border="0" alt="" />
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
    <div class="vps-wapper"><a class="headwapper"><img src="/img/tavatar.gif" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x6C99;&#x53D1; / <a href="/user/230">Autojar</a> / 2012年11月13日 13:08 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="0" actUID="230">回复</a></div>肯贝汉和里奇<div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/66_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x677F;&#x51F3; / <a href="/user/66">影子</a> / 2012年11月13日 23:37 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="1" actUID="66">回复</a></div>不会吧，原来真的逝世。我还一直不打清楚<img src="/mod/kd/plugins/emoticons/images/jx2/j_0012.gif" alt="" border="0" /><br /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/66_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x5730;&#x677F; / <a href="/user/66">影子</a> / 2012年11月13日 23:38 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="2" actUID="66">回复</a></div>向伟人致敬<img src="/mod/kd/plugins/emoticons/images/tsj/t_0003.gif" alt="" border="0" /><br /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/66_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">4&#x697C; / <a href="/user/66">影子</a> / 2012年11月13日 23:39 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="3" actUID="66">回复</a></div>为什么不能转载<img src="/mod/kd/plugins/emoticons/images/jx2/j_0004.gif" alt="" border="0" /><br /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/2_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">5&#x697C; / <a href="/user/2">koodo</a> / 2012年11月14日 13:32 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="4" actUID="2">回复</a></div>转载，分享吧<div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default7.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">6&#x697C; / <a href="/user/201">Firing</a> / 2012年11月14日 17:30 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="5" actUID="201">回复</a></div>不怎么喜欢java，php是最喜欢的啦<div class="cms"></div></div></div></div>
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