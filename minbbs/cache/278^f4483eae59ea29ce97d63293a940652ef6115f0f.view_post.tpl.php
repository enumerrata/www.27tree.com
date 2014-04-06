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
  'unifunc' => 'content_52d634bdb43621_56544354',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d634bdb43621_56544354')) {function content_52d634bdb43621_56544354($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>7 种流行 PHP IDE 的比较</title>
        <meta name="description" content="7 种流行 PHP IDE 的比较:
	Eclipse


	在Eclipse开发平台中有两个插件支持PHP。第一个PHPIDE项目是EclipseFoundation项目，这意味着它在Eclipse许可范围内发布，并使用EclipseFoundation工具和方法开发。

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
            <input type=hidden value="278" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">7 种流行 PHP IDE 的比较</h1>
                        <span id="vps-title-info">由 <a href="/user/32">mallocx</a> 发表于 2012年12月14日 09:05</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	<strong><span style="font-size:16px;">Eclipse</span></strong> 
</p>
<p>
	在 Eclipse 开发平台中有两个插件支持 PHP。第一个 PHP IDE 项目是 Eclipse Foundation 项目，这意味着它在 Eclipse 许可范围内发布，并使用 Eclipse Foundation 工具和方法开发。
</p>
<p>
	另一个是 PHPEclipse，它是独立开发的。因为使用 Eclipse，所以这两个插件都可以在三大操作系统中运行：Windows、Linux® 和 Mac OS X。您可以只下载这两个插件（如果已经使用 Eclipse），或者下载包含所需要的全部内容的 pre-fab 版本。
</p>
<p>
	这两个插件都支持核心 IDE 特性。特别是代码智能特性，它十分强大，可以在需要的时候弹出并显示所有需要的类、方法和参数信息。
</p>
<p>
	左边是在项目中文件的项目视图。下面是类视图，显示所有已经定义的类。中间是代码。可以同时在多个选项卡中打开多个文件。右边是调试和浏览的面板。这是常用的 PHPEclipse 用户界面。
</p>
<p>
	<img src="/mod/kd/attached/image/20121214/20121214090146_79814.jpg" alt="" /> 
</p>
<p>
	<br />
</p>
<p>
	<strong><span style="font-size:16px;">Komodo</span></strong> 
</p>
<p>
	下一个要介绍的是 ActiveState 的 Komodo IDE。这个 IDE 在 Windows、Mac OS X 和 Linux 上运行，并支持通用的开源语言 —— Perl、PHP 和 Ruby。代码智能引擎非常可靠。它扫描所有语言安装找到定制扩展，比如 PEAR 模块。在项目方面，它支持与 CVS、Subversion 和 Perforce 的集成，也允许直接向服务器 FTP 传递代码。
</p>
<p>
	左边是类视图，右边是项目视图。中间的主要部分是代码视图。下面是调试用的断点、命令输出等等。对于所有这些系统，都可以根据需要定制 UI 。
</p>
<p>
	<img src="/mod/kd/attached/image/20121214/20121214090225_58599.jpg" alt="" />
</p>
<p>
	Komodo 是一个商业产品。在我写作本文的时候，这款 IDE 有个人版（US$29.95）和专业版（US$299.95）两个版本可选。它的一个独特的特性是常规表达式调试器。不管您是常规表达式的新手还是已经开始涉足高级常规表达式特性，这点购买的投入都是很值得的。
</p>
<p>
	它的缺点是没有数据库集成（至少我没有找到），而且我还遇到了代码智能不总是在想要的时候弹出的小问题。但是，总的来说，Komodo 还堪称是一款健壮的、特色丰富的、可靠的 PHP IDE。
</p>
<p>
	<br />
</p>
<p>
	<strong><span style="font-size:16px;">PHP 设计器</span></strong> 
</p>
<p>
	PHP 设计器与其他 IDE 不太相同。当然，它支持有限的代码智能。但是，它更集中于 PHP Web 应用程序的设计方面。这一点在其集成的浏览器上可见一斑，该浏览器特别地采用了像素标尺用于帮助在页面上定位元素。
</p>
<p>
	<img src="/mod/kd/attached/image/20121214/20121214090306_17620.jpg" alt="" /> 
</p>
<p>
	PHP 设计器中的 PHP 的代码智能和调试特性不是很显著，而对 HTML、CSS 和 JavaScript 的代码智能支持上要相对更强一些。PHP 设计器介于程序员使用的 IDE （主要侧重于代码）和 Adobe Dreamweaver （更侧重于设计）之间。如果您正在寻找这类中间产品，那么 PHP 设计器很值得考虑，因为 IDE 对于个人使用是免费的，而其专业版也只需 US$55。
</p>
<p>
	<br />
</p>
<p>
	<strong><span style="font-size:16px;">PHPEdit</span></strong> 
</p>
<p>
	来自 WaterProof Software 的 PHPEdit 感觉像是应用于 PHP 的 Microsoft msdev 环境 —— 这是个不错的事情。PHPEdit 是仅用于 Windows 的 IDE，很容易设置。它甚至还有 PHP 的版本。在 PHP、CSS 和 HTML 的代码智能方面它做得很好，但是却不提供对 JavaScript 的代码智能的支持。
</p>
<p>
	<img src="/mod/kd/attached/image/20121214/20121214090405_42040.jpg" alt="" /> 
</p>
<p>
	为了便于部署，PHPEdit 可以连接到 CVS 和 Subversion，以及 FTP 和它自己专有的 ezDeployment 系统。除了代码智能特性，为了加速开发，这款 IDE 有一个极好的代码示例整体模板库，您还可以向库里面添加内容。PHPEdit 的评估版本可以免费使用，要得到正式版本，需要 US$89。
</p>
<p>
	<br />
</p>
<p>
	<strong><span style="font-size:16px;">Zend Studio</span></strong> 
</p>
<p>
	<img src="/mod/kd/attached/image/20121214/20121214090442_12029.jpg" alt="" /> 
</p>
<p>
	<br />
</p>
<p>
	在其他一些 IDE 中，代码片段是内置的以使代码编制更为容易。这款 IDE 也直接集成了数据库以给出可用的表格和字段。
</p>
<p>
	Zend Studio 的标准版需要 US$99，专业版需要 US$299。我在这里提到的某些特性在标准版本中没有包含。Zend Studio 试用版本可以免费使用。
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