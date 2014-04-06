<?php /*%%SmartyHeaderCode:1129252d652dfdd36f0-89821247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37691188c98a94e307c2c00c2f1e1a3d51e80720' => 
    array (
      0 => '.\\templates\\view_post.tpl',
      1 => 1366293582,
      2 => 'file',
    ),
    '6b408071f36a0a833d5efb0b16de204b7c8bf305' => 
    array (
      0 => 'E:\\_web\\27tree\\minbbs\\templates\\bbshead.tpl',
      1 => 1365894660,
      2 => 'file',
    ),
    'df7c0409b1abc8fe0d8f7437e4af1c43db5b4280' => 
    array (
      0 => 'E:\\_web\\27tree\\templates\\nav_v3.php',
      1 => 1369445944,
      2 => 'file',
    ),
    '9ec4395b7e60b3b693a0715719ec673ba9b3c1f8' => 
    array (
      0 => 'E:\\_web\\27tree\\minbbs\\templates\\view_post_comm.tpl',
      1 => 1363699358,
      2 => 'file',
    ),
    'fb8c740d470c5c754c0319bcef74d0d0ce89ad01' => 
    array (
      0 => 'E:\\_web\\27tree\\templates\\stat_code.php',
      1 => 1360988926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1129252d652dfdd36f0-89821247',
  'variables' => 
  array (
    'BD' => 0,
    'SEO' => 0,
    'PATH' => 0,
    'postid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d652e003ee50_62200777',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d652e003ee50_62200777')) {function content_52d652e003ee50_62200777($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>修改默认SSH和vsftpd端口号，禁止远程root登陆</title>
        <meta name="description" content="修改默认SSH和vsftpd端口号，禁止远程root登陆:
	SSH端口默认是22.但从安全方面考虑，建议修改这个端口。端口的取值范围是0–65535(即2的16次方)，0到1024是系统使用的端口，如http服务的端口80。我们可以使用的端口范围：1024到65535。这个是socket规定的。" />
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
            <input type=hidden value="342" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/851"><img src="/user/data/head-img/851_head.jpg"/><span id="author-nickname">leo</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">修改默认SSH和vsftpd端口号，禁止远程root登陆</h1>
                        <span id="vps-title-info">由 <a href="/user/851">leo</a> 发表于 2013年9月14日 22:11</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	SSH 端口默认是22. 但从安全方面考虑，建议修改这个端口。 端口的取值范围是 0 – 65535(即2的16次方)，0到1024是系统使用的端口，如 http服务的端口80。我们可以使用的端口范围：1024到65535。这个是socket规定的。
</p>
<p>
	Linux修改ssh端口2212vi /etc/ssh/ssh_configvi /etc/ssh/sshd_config取消Port前的#注释，并将端口22改成65535
</p>
<p>
	重启SSH服务1service sshd restart此时在用SSH连接，就需要修改ssh 的端口为6535才能连接了。
</p>
<p>
	禁用Root 远程登陆
</p>
<p>
	先在ssh的配置文件里修改Root 远程登陆参数。 禁用root远程登陆。 然后创建一个远程登陆用户。 用这个用户登陆之后，在切换到root用户，拿到最高权限。
</p>
<p>
	创建普通权限的用户12useradd ruserpasswd ruser禁止ROOT远程SSH登录1vi /etc/ssh/sshd_config把PermitRootLogin yes改为PermitRootLogin no
</p>
<p>
	重启sshd服务1service sshd restart
</p>
<p>
	注意： 如果系统开起了iptables防火墙，那么还需要把修改之后的端口号添加到防火墙里面，不然SSH会连不上。关于防火墙端口的添加，参考
</p>
<p>
	更改 vsftpd 的端口号 &nbsp;vsftpd启动后，默认的ftp端口是21，现在我想把ftp端口改成 801 ,修改后能保证
</p>
<p>
	用户上传下载不受影响
</p>
<p>
	1.编辑 /etc/vsftpd/vsftpd.conf 文件，在该配置文件中添加此行：listen_port=801
</p>
<p>
	2.编辑 /etc/services 文件，将其中的 ftp 21/tcp 改为 ftp 801/tcp , ftp
</p>
<p>
	21/udp
</p>
<p>
	改为 ftp 801/udp
</p>
<p>
	3.执行 /etc/init.d/vsftpd restart 重新启动 vsftpd 服务。启动完成后可以使
</p>
<p>
	用 netstat -ntpl | grep vsftpd 命令可以查看到系统现
</p>
<p>
	监听的 vsftpd 的端口为 801
</p>
<p>
	4.使用 lftp 192.168.0.1:801(192.168.0.1 是 vsftpd 服务器的地址 )，这样既
</p>
<p>
	可以访问到 ftp 服务器了。
</p>
<p>
	<br />
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