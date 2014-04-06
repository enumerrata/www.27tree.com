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
  'unifunc' => 'content_52d5081b4290c2_84172545',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d5081b4290c2_84172545')) {function content_52d5081b4290c2_84172545($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>IE10将增强对HTML5和CSS3的支持</title>
        <meta name="description" content="IE10将增强对HTML5和CSS3的支持:
	Windows8终于发布了，虽然现在可用的只是开发者预览版，好消息是，IE10也随着发了，虽然现在还只有Windows8可用。我们来看下IE10都有哪些新特性吧。


	IE开发者中心给到了一份详细的针对前端开发者的文档，列出了IE10" />
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
            <input type=hidden value="160" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">IE10将增强对HTML5和CSS3的支持</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2012年10月17日 20:17</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	Windows 8 终于发布了，虽然现在可用的只是开发者预览版，好消息是，IE 10 也随着发了，虽然现在还只有Windows 8可用。我们来看下IE10都有哪些新特性吧。
</p>
<p>
	IE开发者中心给到了一份详细的针对前端开发者的文档，列出了IE10支持的HTML5和CSS3新特性。它终于跟上了：
</p>
<p>
	<br />
</p>
<p>
	<span style="font-size:14px;"><strong>CSS3</strong></span>
</p>
<p>
	<ul>
		<li>
			css region
		</li>
		<li>
			css3多列
		</li>
		<li>
			Flexbox
		</li>
		<li>
			grid
		</li>
		<li>
			定位浮动(positioned float)
		</li>
		<li>
			3D变换(3D transfrom)
		</li>
		<li>
			动画(animation)
		</li>
		<li>
			渐变(gradient)
		</li>
		<li>
			text-shadow
		</li>
		<li>
			去掉样式表限制——在IE9之前的版本中，每个页面最多只能加载31个样式表文件，@import也只能最多嵌套4层，IE10中去掉了这些限制。
		</li>
	</ul>
</p>
<p>
	<br />
</p>
<p>
	<strong><span style="font-size:14px;">HTML5</span></strong>
</p>
<p>
	<ul>
		<li>
			脚本同步——script标签的async属性，用来定义脚本是否异步执行
		</li>
		<li>
			File API
		</li>
		<li>
			HistoryParsing
		</li>
		<li>
			表单验证(form validation)
		</li>
		<li>
			progress和range控制——其实也可以看作HTML5表单中的功能
		</li>
		<li>
			web workers
		</li>
		<li>
			web sockets
		</li>
		<li>
			拖拽(drag and drop)
		</li>
		<li>
			应用缓存——application cache，也就是离线存储，不过需要注意的是W3C更新了离线存储配置文件的扩展名，之前是ooxx.manifest，以后要用appcache扩展。
		</li>
		<li>
			spellcheck频道通信(channel messaging)
		</li>
	</ul>
</p>
<p>
	<br />
</p>
<p>
	<span style="font-size:14px;"><strong>其它</strong></span>
</p>
<p>
	<ul>
		<li>
			Indexed Database
		</li>
		<li>
			Web performance API
		</li>
		<li>
			SVG 滤镜效果
		</li>
		<li>
			需要注意的是，IE10对CSS3新特性的支持，大部分还是需要-ms-前缀的
		</li>
	</ul>
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