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
  'unifunc' => 'content_52d20398236d02_02581718',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d20398236d02_02581718')) {function content_52d20398236d02_02581718($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>什么是301重定向?</title>
        <meta name="description" content="什么是301重定向?:
	什么是301重定向?


	301转向(或叫301重定向，301跳转)是当用户或搜索引擎向网站服务器发出浏览请求时，服务器返回的HTTP数据流中头信息(header)中的状态码的一种，表示本网页永久性转移到另一个地址。


	其它常见的" />
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
            <input type=hidden value="254" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/253"><img src="/minbbs/default/headimg/default20.jpg"/><span id="author-nickname">LEVT_SSD</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">什么是301重定向?</h1>
                        <span id="vps-title-info">由 <a href="/user/253">LEVT_SSD</a> 发表于 2012年11月28日 16:57</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	什么是301重定向?
</p>
<p>
	301转向(或叫301重定向，301跳转)是当用户或搜索引擎向网站服务器发出浏览请求时，服务器返回的HTTP数据流中头信息(header)中的状态码的一种，表示本网页永久性转移到另一个地址。
</p>
<p>
	其它常见的状态码还包括，200表示一切正常，404网页找不到，302暂时转向，等等。
</p>
<p>
	为什么要做网址重定向?
</p>
<p>
	除了前面介绍过的网址规范化问题外，还有很多需要做网址转向的情形。比如，为保护版权，你拥有不同TLD的多个域名：
</p>
<p>
	company.com
</p>
<p>
	company.net
</p>
<p>
	company.org
</p>
<p>
	company.com.cn
</p>
<p>
	company.cn
</p>
<p>
	等等。
</p>
<p>
	很自然这些域名全部指向一个网站。如用company.com为主域名，其它域名就可以转向到company.com。
</p>
<p>
	或者你注册了公司全称域名longcompanyname.com，但太长 ，你也注册了缩写域名方便用户记住lcn.com，其中一个做主域名，另一个就可以转向到主域名。
</p>
<p>
	为什么要用301转向？
</p>
<p>
	网址转向方法主要包括：301转向，302转向，JavaScript转向，PHP/ASP/CGI转向，META REFRESH网页META刷新，等。302转向可能会有URL规范化问题。其它方法都是常用的作弊手法，当然不是说不可以正当地用，方法本身没有错，但被作弊者用多了，搜索引擎对这些可疑的转向都很敏感。何必冒险呢。
</p>
<p>
	当网页A用301重定向转到网页B时，搜索引擎可以肯定网页A永久的改变位置，或者说实际上不存在了，搜索引擎就会把网页B当作唯一有效目标。好处是，第一，没有网址规范化问题，第二，也很重要的，网页A的PR网页级别会传到网页B。
</p>
<p>
	很多时候其它网站会链接到
</p>
<p>
	http://domainname.com
</p>
<p>
	http://www.domainname.com/index.html
</p>
<p>
	http://domainname.com/index.html
</p>
<p>
	而不是你希望的
</p>
<p>
	http://www.domainname.com
</p>
<p>
	这样链接的PR也会传递到所有URL，如果你用301转向把前三个URL转到
</p>
<p>
	http://www.domainname.com
</p>
<p>
	PR也就集中在网页http://www.domainname.com了。
</p>
<p>
	怎样判断网站有网址规范化问题？
</p>
<p>
	英语中有句话，东西没坏就别修理。很多网站没做301转向排名也没影响，那就别动它。
</p>
<p>
	如果你觉得网站排名没有预想的好，可以看看是否有网址规范化问题：
</p>
<p>
	1) 查一下这些URL是否都有差不多的PR值和网页快照：
</p>
<p>
	http://domainname.com
</p>
<p>
	http://www.domainname.com/index.html
</p>
<p>
	http://domainname.com/index.html
</p>
<p>
	http://www.domainname.com
</p>
<p>
	如果是，那可能有问题。
</p>
<p>
	2)搜一下site:domain.com看是否结果中有多个主页版本。
</p>
<p>
	3)你的网站是否在Google有大量网页被标为“ 补充材料”(Supplemental Result)。一般认为被归为“ 补充材料”是网址规范化问题的征兆。
</p>
<p>
	怎样做301转向
</p>
<p>
	如果你用的是Unix/Linux主机，可以用文件(Unix/Linux中用于目录特定指令如密码，转向，错误处理等的文件)。
</p>
<p>
	比如把/old.htm转到http://www.domain.com/new.htm，可以用这个指令：
</p>
<p>
	redirect 301 /old.htm http://www.domain.com/new.htm
</p>
<p>
	或
</p>
<p>
	redirect permanent /old.htm http://www.domain.com/new.htm
</p>
<p>
	如果要把所有http://domain.com形式的URL用301重定向转到 http://www.domain.com，包括：
</p>
<p>
	http://domain.com/about.htm
</p>
<p>
	转到 http://www.domain.com/about.htm
</p>
<p>
	及
</p>
<p>
	http://domain.com/dir/index.htm
</p>
<p>
	转到 http://www.domain.com/dir/index.htm
</p>
<p>
	等等，还要用到mod_rewrite：
</p>
<p>
	Options +FollowSymLinks
</p>
<p>
	RewriteEngine on
</p>
<p>
	RewriteCond %{HTTP_HOST} ^domain.com [NC]
</p>
<p>
	RewriteRule ^(.*)$ http://www.domain.com/$1 [L,R=301]
</p>
<p>
	如果你用的是 Windows主机，应该在控制面板做301转向设定。
</p>
<p>
	补充 ：在网址规范化评论里回答石头王的问题，可能对大家有帮助：
</p>
<p>
	据我所知，HTML无法做301转向。在HTML里只能做JS或META REFRESH，但不是301转向。HTML一被读取，就已经返回200 OK状态码了。
</p>
<p>
	如果你的页面是ASP或PHP还可以做301转向：
</p>
<p>
	ASP：
</p>
<p>
	&lt;%@ Language=VBScript %&gt;
</p>
<p>
	&lt;%
</p>
<p>
	Response.Status=”301 Moved Permanently” Response.AddHeader “Location”, ”http://www.domain.com”
</p>
<p>
	&gt;
</p>
<p>
	PHP:
</p>
<p>
	Header( “HTTP/1.1 301 Moved Permanently” );
</p>
<p>
	Header( “Location: http://www.domain.com” );
</p>
<p>
	?&gt;
</p>
<p>
	另外，DOThtaccess文件只是一个普通文字文件，你用Notepad建这个文件，放上指令，存在你帐号的根目录下就行了。不需要修改Apache。
</p>
<p>
	问：网页用301重新定向后搜索引擎多久能处理
</p>
<p>
	网页用301重新定向后原搜索引擎收录老域名的页面是不是会转交给定向到的新域名。搜索引擎收录老域名的页面会发生什么变化，比如说
</p>
<p>
	site:www.xxx.com 后老域名里的东西会转到新域名下吗，要多久大概。
</p>
<p>
	答：如果您的旧网址使用 HTTP 301（永久）重定向指向您的新网站，搜索引擎漫游时会自动获知新网址，并在六到八周内自动进行更新。
</p>
<p>
	301重定向可促进搜索引擎优化效果
</p>
<p>
	从搜索引擎优化角度出发，301重定向是网址重定向最为可行的一种办法。当网站的域名发生变更后，搜索引擎只对新网址进行索引，同时又会把旧地址下原有的外部链接如数转移到新地址下，从而不会让网站的排名因为网址变更而收到丝毫影响。同样，在使用301永久性重定向命令让多个域名指向网站主域时，亦不会对网站的排名产生任何负面影响。
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