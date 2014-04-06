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
  'unifunc' => 'content_52d523f484f667_83262278',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d523f484f667_83262278')) {function content_52d523f484f667_83262278($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>vi编辑器基础命令</title>
        <meta name="description" content="vi编辑器基础命令:
	vi编辑器是所有Unix及Linux系统下标准的编辑器，它的强大不逊色于任何最新的文本编辑器，这里只是简单地介绍一下它的用法和一小部分指令.由于对Unix及Linux系统的任何版本，vi编辑器是完全相同的，因此您可以在其他任何介绍vi的" />
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
            <input type=hidden value="180" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">vi编辑器基础命令</h1>
                        <span id="vps-title-info">由 <a href="/user/32">mallocx</a> 发表于 2012年10月25日 08:11</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	vi编辑器是所有Unix及Linux系统下标准的编辑器，它的强大不逊色于任何最新的文本编辑器，这里只是简单地介绍一下它的用法和一小部分指令.由于对Unix及Linux系统的任何版本，vi编辑器是完全相同的，因此您可以在其他任何介绍vi的地方进一步了解它。Vi也是Linux中最基本的文本编辑器，学会它后，您将在Linux的世界里畅行无阻。
</p>
<p>
	1、vi的基本概念
</p>
<p>
	基本上vi可以分为三种状态，分别是命令模式（command mode）、插入模式（Insert mode）和底行模式（last line mode），各模式的功能区分如下：
</p>
<p>
	1.命令行模式(command mode)
</p>
<p>
	控制屏幕光标的移动，字符、字或行的删除，移动复制某区段及进入Insert mode下，或者到 last line mode。
</p>
<p>
	2.插入模式(Insert mode)
</p>
<p>
	只有在Insert mode下，才可以做文字输入，按「ESC」键可回到命令行模式。
</p>
<p>
	3.底行模式(last line mode)
</p>
<p>
	将文件保存或退出vi，也可以设置编辑环境，如寻找字符串、列出行号…等。
</p>
<p>
	不过一般我们在使用时把vi简化成两个模式，就是将底行模式(last line mode)也算入命令行模式(command mode)。
</p>
<p>
	2、vi的基本操作
</p>
<p>
	a.进入vi
</p>
<p>
	在系统提示符号输入vi及文件名称后，就进入vi全屏幕编辑画面：
</p>
<p>
	$ vi myfile
</p>
<p>
	不过有一点要特别注意，就是您进入vi之后，是处于「命令行模式（command mode）」，您要切换到「插入模式（Insert mode）」才能够输入文字。初次使用vi的人都会想先用上下左右键移动光标，结果电脑一直哔哔叫，把自己气个半死，所以进入vi后，先不要乱动，转换到 「插入模式（Insert mode）」再说吧！
</p>
<p>
	b.切换至插入模式(Insert mode)编辑文件
</p>
<p>
	在「命令行模式（command mode）」下按一下字母「i」就可以进入「插入模式（Insert mode）」，这时候你就可以开始输入文字了。
</p>
<p>
	c.Insert 的切换
</p>
<p>
	您目前处于「插入模式（Insert mode）」，您就只能一直输入文字，如果您发现输错了字！想用光标键往回移动，将该字删除，就要先按一下「ESC」键转到「命令行模式（command mode）」再删除文字。
</p>
<p>
	d.退出vi及保存文件
</p>
<p>
	在「命令行模式（command mode）」下，按一下「：」冒号键进入「Last line mode」，例如：
</p>
<p>
	: w filename （输入 「w filename」将文章以指定的文件名filename保存）
</p>
<p>
	: wq (输入「wq」，存盘并退出vi)
</p>
<p>
	: q! (输入q!， 不存盘强制退出vi)
</p>
<p>
	3、命令行模式（command mode）功能键
</p>
<p>
	1. 插入模式
</p>
<p>
	按「i」切换进入插入模式「insert mode」，按“i”进入插入模式后是从光标当前位置开始输入文件；
</p>
<p>
	按「a」进入插入模式后，是从目前光标所在位置的下一个位置开始输入文字；
</p>
<p>
	按「o」进入插入模式后，是插入新的一行，从行首开始输入文字。
</p>
<p>
	2.从插入模式切换为命令行模式
</p>
<p>
	按「ESC」键。
</p>
<p>
	3. 移动光标
</p>
<p>
	vi可以直接用键盘上的光标来上下左右移动，但正规的vi是用小写英文字母「h」、「j」、「k」、「l」，分别控制光标左、下、上、右移一格。
</p>
<p>
	按「ctrl」+「b」：屏幕往“后”移动一页。
</p>
<p>
	按「ctrl」+「f」：屏幕往“前”移动一页。
</p>
<p>
	按「ctrl」+「u」：屏幕往“后”移动半页。
</p>
<p>
	按「ctrl」+「d」：屏幕往“前”移动半页。
</p>
<p>
	按数字「0」：移到文章的开头。
</p>
<p>
	按「G」：移动到文章的最后。
</p>
<p>
	按「$」：移动到光标所在行的“行尾”。
</p>
<p>
	按「^」：移动到光标所在行的“行首”
</p>
<p>
	按「w」：光标跳到下个字的开头
</p>
<p>
	按「e」：光标跳到下个字的字尾
</p>
<p>
	按「b」：光标回到上个字的开头
</p>
<p>
	按「#l」：光标移到该行的第#个位置，如：5l,56l。
</p>
<p>
	4.删除文字
</p>
<p>
	「x」：每按一次，删除光标所在位置的“后面”一个字符。
</p>
<p>
	「#x」：例如，「6x」表示删除光标所在位置的“后面”6个字符。
</p>
<p>
	「X」：大写的X，每按一次，删除光标所在位置的“前面”一个字符。
</p>
<p>
	「#X」：例如，「20X」表示删除光标所在位置的“前面”20个字符。
</p>
<p>
	「dd」：删除光标所在行。
</p>
<p>
	「#dd」：从光标所在行开始删除#行
</p>
<p>
	5.复制
</p>
<p>
	「yw」：将光标所在之处到字尾的字符复制到缓冲区中。
</p>
<p>
	「#yw」：复制#个字到缓冲区
</p>
<p>
	「yy」：复制光标所在行到缓冲区。
</p>
<p>
	「#yy」：例如，「6yy」表示拷贝从光标所在的该行“往下数”6行文字。
</p>
<p>
	「p」：将缓冲区内的字符贴到光标所在位置。注意：所有与“y”有关的复制命令都必须与“p”配合才能完成复制与粘贴功能。
</p>
<p>
	6.替换
</p>
<p>
	「r」：替换光标所在处的字符。
</p>
<p>
	「R」：替换光标所到之处的字符，直到按下「ESC」键为止。
</p>
<p>
	7.回复上一次操作
</p>
<p>
	「u」：如果您误执行一个命令，可以马上按下「u」，回到上一个操作。按多次“u”可以执行多次回复。
</p>
<p>
	8.更改
</p>
<p>
	「cw」：更改光标所在处的字到字尾处
</p>
<p>
	「c#w」：例如，「c3w」表示更改3个字
</p>
<p>
	9.跳至指定的行
</p>
<p>
	「ctrl」+「g」列出光标所在行的行号。
</p>
<p>
	「#G」：例如，「15G」，表示移动光标至文章的第15行行首。
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