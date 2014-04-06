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
  'unifunc' => 'content_52d626b4746167_22802603',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d626b4746167_22802603')) {function content_52d626b4746167_22802603($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>PHP ServerPush 数据推送技术 即反向Ajax</title>
        <meta name="description" content="PHP ServerPush 数据推送技术 即反向Ajax:
	随着人们对即时性应用需求的不断上升，服务推送技术在聊天、消息提醒尤其是社交网络服务技术开始兴起，成为实时应用的数据流核心。这篇文章试图探讨的便是各种适合于PHP的数据推送的实现方式以及其优劣。


	1.什么是ServerPush


" />
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
            <input type=hidden value="240" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">PHP ServerPush 数据推送技术 即反向Ajax</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2012年11月16日 18:17</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	随着人们对即时性应用需求的不断上升，服务推送技术在聊天、消息提醒尤其是社交网络服务技术开始兴起，成为实时应用的数据流核心。这篇文章试图探讨的便是各种适合于PHP的数据推送的实现方式以及其优劣。
</p>
<p>
	1. 什么是Server Push
</p>
<p>
	想象在聊天应用中，如果使用传统的ajax来承担消息的传入，那么一般是通过每隔一定时间拉取一次信息的方式实现，但是其实这种方式有大量查询是浪费的。聊天等Web应用更需要服务器在特定时间来主动告知前端有新的消息即Push，而不是前端每时每刻问服务器：“来消息了吗？”即Pull。这也正是为什么这个技术常被叫做反向ajax。
</p>
<p>
	其他别名：Comet，反向Ajax
</p>
<p>
	2. 如何实现Push
</p>
<p>
	其实所谓的推送技术也没有多么复杂，目前从大类上有3种，一种仍然建立在ajax基础上，还有一种建立在框架基础上，最后一种抛弃了传统的HTTP协议，使用Flash或者<strong>HTML5的WebSockets</strong>技术。接下来将对这三种类别产生的不同的方式进行探讨。
</p>
<p>
	1) Ajax 长轮询
</p>
<p>
	Ajax长轮询从本质上来说仍然是一种pull，但是实时性较高，无用请求减少很多，是一种不错的Push实现方案。不过它只减少了网络上的无谓消耗。
</p>
<p>
	核心: 客户端发起一个ajax请求，服务端将请求搁置(pending)或者说挂起，直到到了超时时间(timeout)或需要推送时返回；客户端则等待ajax返回后处理数据，再发起下一个ajax请求。即一个持续时间比常规请求要长很多的ajax请求。
</p>
<p>
	优点: 兼容性较高，实现简单
</p>
<p>
	缺点: 对于php这种语言来说，如果要做到实时，那么服务端就要承受大得多的压力，因为搁置到什么时候往往是不确定的，这就要php脚本每次搁置都进行一个while无限循环。
</p>
<p>
	当然，如果服务器刷新每秒级，那尚可接受，只是实时性上退化了。
</p>
<p>
	注意: 浏览器有连接数限制。我得出的结论是如果当前页面上有一个ajax请求处于等待返回状态，那么其他ajax请求都会被搁置(Chrome, Firefox已测)。如果页面有一般ajax需求怎么办？解决方法是开个iframe框架，框架中使在另一个域名下进行Comet长轮询，需要注意跨域问题。
</p>
<p>
	PHP实现: Jquery+php实现comet
</p>
<p>
	相关:Ajax跨域和js跨域解决方案
</p>
<p>
	2) Frame 长连接
</p>
<p>
	受到ajax启发，出现了框架下的长连接。
</p>
<p>
	核心: Frame中发起一个普通请求，服务器将其搁置；需要推送时输出直接执行
</p>
<p>
	脚本，然后继续保持连接。如果担心超时问题可以改成框架论询。
</p>
<p>
	优点: 与1一样具有高兼容特性
</p>
<p>
	缺点: 最大的问题是如果框架在载入，那么浏览器就好一直显示“载入中”，这就弱爆了(解决方法参见文末的相关阅读资源)。同样服务器也要能hold住大量循环……另外，是否有同域连接限制没测试。
</p>
<p>
	3) Flash/HTML5 WebSockets
</p>
<p>
	用flash来发起WebSockets，秒杀前面一切问题。
</p>
<p>
	优点: 标准化, RealTime, Push
</p>
<p>
	缺点: 服务器需要能应对WebSockets；还有如果既没有Flash又不支持HTML5的怎么办？
</p>
<p>
	PHP实现: Start Using HTML5 WebSockets Today
</p>
<p>
	6) 使用兼容封装层(socket.io)
</p>
<p>
	以上每种方法都有优劣，那么终极解决方案便是合在一起！能WebSockets时候就WebSockets，不支持HTML5特性就退化到Flash，没有Flash则退化到Ajax长轮询。
</p>
<p>
	优点: 高度封装，编写非常容易，几乎不需要关心如何去实现的。实时，超低负载，高并发。
</p>
<p>
	缺点: 其实算不上缺点，socket.io的服务器端要求是node.js，而不是php。
</p>
<p>
	个人看法: 如果你是独立主机，能运行程序，那么socket.io配合node.js是个非常高效的选择。为什么呢？因为它还可以避免php的服务端高负载。
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
    </div>
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