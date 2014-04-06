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
  'unifunc' => 'content_52d622867d4cd0_06855925',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d622867d4cd0_06855925')) {function content_52d622867d4cd0_06855925($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Position定位：relative | absolute</title>
        <meta name="description" content="Position定位：relative | absolute:
	定位一直是WEB标准应用中的难点，如果理不清楚定位那么可能应实现的效果实现不了，实现了的效果可能会走样。如果理清了定位的原理，那定位会让网页实现的更加完美。


	


	在CSS中关于定位的内容是：position:relative|" />
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
            <input type=hidden value="333" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">Position定位：relative | absolute</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2013年4月18日 11:09</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	定位一直是WEB标准应用中的难点，如果理不清楚定位那么可能应实现的效果实现不了，实现了的效果可能会走样。如果理清了定位的原理，那定位会让网页实现的更加完美。
</p>
<p>
	<br />
</p>
<p>
	在CSS中关于定位的内容是：<strong>position:relative | absolute | static | fixed</strong> 
</p>
<p>
	<strong>static(静态) </strong>没有特别的设定，遵循基本的定位规定，不能通过z-index进行层次分级。
</p>
<p>
	<strong>relative(相对定位) </strong>对象不可层叠、不脱离文档流，参考自身静态位置通过 top,bottom,left,right 定位，并且可以通过z-index进行层次分级。
</p>
<p>
	<strong>absolute(绝对定位) </strong>脱离文档流，通过 top,bottom,left,right 定位。选取其最近一个最有定位设置的父级对象进行绝对定位，如果对象的父级没有设置定位属性，absolute元素将以body坐标原点进行定位，可以通过z-index进行层次分级。
</p>
<p>
	<strong>fixed（固定定位） </strong>这里所固定的参照对像是可视窗口而并非是body或是父级元素。可通过z-index进行层次分级。
</p>
<p>
	<br />
</p>
<p>
	<span style="font-size:16px;"><strong>1、相对定位relative</strong></span> 
</p>
<p>
	相对定位是一个非常容易掌握的概念。如果对一个元素进行相对定位，它将出现在它所在的位置上。然后，可以通过设置垂直或水平位置，让这个元素“相对于”它的起点进行移动。如果将top设置为20像素，那么框将出现在原位置顶部下面20像素的地方。如果将left设置为20像素，那么会在元素左边创建20像素的空间，也就是将元素向右移动（见图2-10）。
</p>
<pre name="code" id="prettyprint" class="javascript">#mybox {
    position :relative;
    left: 20px;
    top: 20px;
}</pre>
<p>
	<img src="/mod/kd/attached/image/20130418/20130418110628_70231.jpg" alt="" />
</p>
<p>
	<br />
</p>
<p>
	<strong>当Position属性值为Relative时</strong> 
</p>
<p>
	对象原来占有的位置保留，其后面的对象按原来文档流仍然保持原来的位置
</p>
<p>
	Top的值表示对象相对原位置向下偏移的距离
</p>
<p>
	bottom的值表示对象相对原位置向上偏移的距离
</p>
<p>
	两者同时存在时，只有Top起作用。
</p>
<p>
	left的值表示对象相对原位置向右偏移的距离
</p>
<p>
	right的值表示对象相对原位置向左偏移的距离
</p>
<p>
	两者同时存在时，只有left起作用。
</p>
<p>
	如果相对定位的对象有padding 和border 和 margin时，定位的起点不受影响。还是原来物体的位置。
</p>
<p>
	<br />
</p>
<p>
	<strong><span style="font-size:16px;">2.绝对定位absolute</span></strong> 
</p>
<p>
	&nbsp; &nbsp;相对定位实际上被看作普通流定位模型的一部分，因为元素的位置相对于它在普通流中的位置。与之相反，绝对定位使元素的位置与文档流无关，因此不占据空间。普通文档流中其他元素的布局就像绝对定位的元素不存在时一样（见图2-11）。
</p>
<img src="/mod/kd/attached/image/20130418/20130418110713_43391.jpg" alt="" /> 
<p>
	<br />
</p>
<p>
	绝对定位的元素的位置相对于最近的已定位祖先元素。如果元素没有已定位的祖先元素，那么它的位置相对于最初的包含块。根据用户代理的不同，最初的包含块可能是画布或HTML元素。
</p>
<p>
	与相对定位的框一样，绝对定位的框可以从它的包含块向上、下、左、右移动。这提供了很大的灵活性。可以直接将元素定位在页面上的任何位置。
</p>
<p>
	对于定位的主要问题是要记住每种定位的意义。相对定位是“相对于”元素在文档流中的初始位置，而绝对定位是“相对于”最近的已定位祖先元素，如果不存在已定位的祖先元素，那么是最初的包含块。
</p>
<p>
	因为绝对定位的框与文档流无关，所以它们可以覆盖页面上的其他元素。可以通过设置z-index属性来控制这些框的堆放次序。z-index值越高，框在堆中的位置就越高。
</p>
<p>
	<br />
</p>
<p>
	<strong>当Position属性值为absolute时</strong> 
</p>
<p>
	对象从文档流中抽取出来，原占有的位置被后面的对象顶替上来
</p>
<p>
	Top的值表示对象上边框与浏览器窗口顶部的距离
</p>
<p>
	bottom的值表示对象下边框与浏览器窗口底部的距离
</p>
<p>
	两者同时存在时，只有Top起作用；如果两者都未指定，则其顶端将与原文档流位置一致，即垂直保持位置不变。
</p>
<p>
	left的值表示对象左边框与浏览器窗口左边的距离
</p>
<p>
	right的值表示对象右边框与浏览器窗口右边的距离
</p>
<p>
	两者同时存在时，只有left起作用；如果两者都未指定，则其左边将与原文档流位置一致，即水平保持位置不变。
</p>
<p>
	在Position属性值为absolute的同时，如果有一级父对象（无论是父对象还是祖父对象，或者再高的辈分，一样）的Position属性值为Relative时，则上述的相对浏览器窗口定位将会变成相对父对象定位，这对精确定位是很有帮助的。
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