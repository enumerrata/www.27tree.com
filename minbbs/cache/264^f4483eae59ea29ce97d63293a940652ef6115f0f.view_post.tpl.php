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
  'unifunc' => 'content_52d4fe2ca72a79_04119188',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d4fe2ca72a79_04119188')) {function content_52d4fe2ca72a79_04119188($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>忘记MySQL数据库密码了怎么办？</title>
        <meta name="description" content="忘记MySQL数据库密码了怎么办？:
	在实际操作中你是否遇到过忘记MySQL数据库密码的情况？不用着急我们这篇文章就是这一问题给出的答案，如果你对其解决方案的实际操作步骤有兴趣了解的话，你就可以通过以下的文章对其进行更好的了解。


	破解本地MySQL数据库密码：


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
            <input type=hidden value="264" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/201"><img src="/minbbs/default/headimg/default7.jpg"/><span id="author-nickname">Firing</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">忘记MySQL数据库密码了怎么办？</h1>
                        <span id="vps-title-info">由 <a href="/user/201">Firing</a> 发表于 2012年12月5日 11:49</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	在实际操作中你是否遇到过忘记MySQL数据库密码的情况？不用着急我们这篇文章就是这一问题给出的答案，如果你对其解决方案的实际操作步骤有兴趣了解的话，你就可以通过以下的文章对其进行更好的了解。
</p>
<p>
	破解本地MySQL数据库密码：
</p>
<p>
	Windows:
</p>
<p>
	1.用系统管理员登陆系统。
</p>
<p>
	2.停止MySQL的服务。
</p>
<p>
	3.进入命令窗口，然后进入 MySQL的安装目录，比如我的安装目录是c:\mysql,进入C:\mysql\bin
</p>
<p>
	4.跳过权限检查启动MySQL，
</p>
<p>
	c:\mysql\bin&gt;mysqld-nt ––skip-grant-tables
</p>
<p>
	或则：c:\mysql\bin&gt;mysqld ––skip-grant-tables
</p>
<p>
	mysqld.exe是微软Windows MySQL server数据库服务器相关程序。mysqld-nt.exe是MySQL Daemon数据库服务相关程序。
</p>
<p>
	5.[未验证]
</p>
<p>
	重新打开一个窗口
</p>
<p>
	进入c:\mysql\bin目录，设置root的新MySQL数据库密码
</p>
<p>
	c:\mysql\bin&gt;mysqladmin -u root flush-privileges password "newpassword"
</p>
<p>
	c:\mysql\bin&gt;mysqladmin -u root -p shutdown
</p>
<p>
	将newpassword替换为你要用的root的密码，第二个命令会提示你输入新密码，重复第一个命令输入的密码。
</p>
<p>
	5.[验证]或则:
</p>
<p>
	重新开打一个命令提示符的窗口(CMD)
</p>
<p>
	用空密码方式使用root用户登录 MySQL；
</p>
<p>
	mysql -u root
</p>
<p>
	修改root用户的MySQL数据库密码；
</p>
<p>
	<br />
</p>
<pre name="code" id="prettyprint" class="javascript">mysql&gt; update mysql.user set password=PASSWORD('新密码') where User='root';   
mysql&gt; flush privileges;   
mysql&gt; quit  </pre>
<p>
	6.停止MySQL Server，用正常模式启动Mysql
</p>
<p>
	7．你可以用新的密码链接到Mysql 了。
</p>
<p>
	Unix&amp;Linux：
</p>
<p>
	1.用root或者运行mysqld 的用户登录系统；
</p>
<p>
	2．利用kill命令结束掉mysqld的进程；
</p>
<p>
	3．使用–skip-grant-tables参数启动MySQL Server
</p>
<p>
	<span style="line-height:1.5;">
<pre name="code" id="prettyprint" class="javascript">shell&gt;mysqld_safe –skip-grant-tables &amp; </pre>
</span>
</p>
<p>
	4.为root@localhost设置新MySQL数据库密码
</p>
<p>
<pre name="code" id="prettyprint" class="javascript">shell&gt;mysqladmin -u root flush-privileges password "newpassword" </pre>
5．重启MySQL Server
</p>
<p>
<pre name="code" id="prettyprint" class="javascript">shell&gt;sudo /etc/init.d mysqld restart</pre>
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