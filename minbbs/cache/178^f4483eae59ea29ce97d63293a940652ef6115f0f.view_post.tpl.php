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
  'unifunc' => 'content_52d548b4d37d44_51933071',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d548b4d37d44_51933071')) {function content_52d548b4d37d44_51933071($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>在Ubuntu安装完成后更改默认的语言LANG，出现Cannot set LC_CTYPE to default locale: No such file or directory错误的解决办法</title>
        <meta name="description" content="在Ubuntu安装完成后更改默认的语言LANG，出现Cannot set LC_CTYPE to default locale: No such file or directory错误的解决办法:
	在安装ubuntu的时候选了中文，但后来发现SVN客户端需要utf8来支持中文。


	于是修改/etc/default/locale为：


	LANG="en_US.UTF-8"


	LANGUAGE="en_US:en"


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
            <input type=hidden value="178" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/32"><img src="/user/data/head-img/32_head.jpg"/><span id="author-nickname">mallocx</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">在Ubuntu安装完成后更改默认的语言LANG，出现Cannot set LC_CTYPE to default locale: No such file or directory错误的解决办法</h1>
                        <span id="vps-title-info">由 <a href="/user/32">mallocx</a> 发表于 2012年10月24日 22:54</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	在安装ubuntu的时候选了中文，但后来发现SVN客户端需要utf8来支持中文。
</p>
<p>
	于是修改 /etc/default/locale为：
</p>
<p>
	LANG="en_US.UTF-8"
</p>
<p>
	LANGUAGE="en_US:en"
</p>
<p>
	但是，后来perl, locale,export LANG=en_US.UTF-8之类的命令都出现warning：
</p>
<p>
	&gt; locale
</p>
<p>
	locale: Cannot set LC_CTYPE to default locale: No such file or directory
</p>
<p>
	locale: Cannot set LC_MESSAGES to default locale: No such file or directory
</p>
<p>
	locale: Cannot set LC_ALL to default locale: No such file or directory
</p>
<p>
	LANG=en_US.UTF-8
</p>
<p>
	LANGUAGE=en_US:en
</p>
<p>
	LC_CTYPE="en_US.UTF-8"
</p>
<p>
	LC_NUMERIC="en_US.UTF-8"
</p>
<p>
	LC_TIME="en_US.UTF-8"
</p>
<p>
	LC_COLLATE="en_US.UTF-8"
</p>
<p>
	LC_MONETARY="en_US.UTF-8"
</p>
<p>
	LC_MESSAGES="en_US.UTF-8"
</p>
<p>
	LC_PAPER="en_US.UTF-8"
</p>
<p>
	LC_NAME="en_US.UTF-8"
</p>
<p>
	LC_ADDRESS="en_US.UTF-8"
</p>
<p>
	LC_TELEPHONE="en_US.UTF-8"
</p>
<p>
	LC_MEASUREMENT="en_US.UTF-8"
</p>
<p>
	LC_IDENTIFICATION="en_US.UTF-8"
</p>
<p>
	LC_ALL=
</p>
<p>
	解决办法：
</p>
<p>
	locale-gen en_US.UTF-8
</p>
<p>
	如果Ubuntu Server在安装过程中，选择的是中文（很多新手都会在安装时选择中文，便于上手），这样在完成安装后，系统默认的语言将会是中文zh_CN.UTF- 8。但问题是我们安装的是服务器，只需要运行命令行终端，但在终端下无法正常的显示默认中文编码zh_CN.UTF-8。
</p>
<p>
	可以有三种方法解决该问题，分别详细介绍如下。
</p>
<p>
	第一种：安装zhcon软件包
</p>
<p>
	$ sudo apt-get install zhcon
</p>
<p>
	即可将zhcon软件包安装上，它其实就相当于一个Ubuntu的UC-DOS程序，是一个汉字外挂。既然是外挂就必然要占用一定的系统资源，根据实际需求可选用该方法。
</p>
<p>
	第二种：使用putty、securteCRT等虚拟终端软件
</p>
<p>
	直接修改虚拟终端界面配置项目中的字体编码为UTF-8即可。其实就是仍然采用了Ubuntu Server默认的zh_CN.UTF-8汉字编码，但在虚拟终端中经过“编码修正”后正确显示出来，因为Windows系统下是采用GBK作为系统默认 编码的，故在Windows下，无论是虚拟机，还是默认的虚拟终端界面，显示汉字都是乱码或菱形符号。该方法使用较广，但在实际终端下，仍然无法正常显示 汉字，因为此时系统的默认编码还是zh_CN.UTF-8，服务器上的实际终端还是不能认识zh_CN.UTF-8这种编码。故引出第三种方法。
</p>
<p>
	第三种：修改Ubuntu的配置文件/etc/default/locale
</p>
<p>
	将原来的配置内容修改为
</p>
<p>
	LANG=”en_US.UTF-8″
</p>
<p>
	LANGUAGE=”en_US:en”
</p>
<p>
	再在终端下运行：
</p>
<p>
	$ locale-gen -en_US:en
</p>
<p>
	注销或重启后，Ubuntu Server真正服务器实体终端就恢复成了英文的语言环境。
</p>
<p>
	所以，此方法不是真正意义上的中文化，而是恢复英文的默认编码
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
    <div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/73_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x6C99;&#x53D1; / <a href="/user/73">_后觉</a> / 2012年10月24日 23:33 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="0" actUID="73">回复</a></div><p>
	标题太长了
</p><div class="cms"><div class="sub-comm-item"><tx></tx><t></t><em class="ct-t-whw"><img src="/user/data/head-img/32_head.jpg" width="32px" height="32px"/></em><div style="margin-left:45px;line-height:20px;"><a href="/user/32">mallocx</a> @ <a href="/user/73">后觉゛</a>&nbsp;：没事<span class="block Gray">2012年10月25日 01:01 / <a href="javascript:;" rel="0" actUID="32" onclick="javascript:rep(this,2);">回复</a></span></div></div></div></div></div></div>
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