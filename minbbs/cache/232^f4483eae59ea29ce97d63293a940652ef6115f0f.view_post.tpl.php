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
  'unifunc' => 'content_52d4ef81d714d2_49570391',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d4ef81d714d2_49570391')) {function content_52d4ef81d714d2_49570391($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>DedeCMS使用Ajax实现搜索下拉提示功能</title>
        <meta name="description" content="DedeCMS使用Ajax实现搜索下拉提示功能:
	这个功能主要实现的是用户在搜索的时候输入关键字，然后会出现下拉菜单，下拉菜单中出现的是站内所有包含这个关键字的文章的标题共用户选择，相对DedeCMS原生的搜索这个功能实用一点，既增加了用户体验，也可以让用户快速的找到想要的东西。功能基" />
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
            <input type=hidden value="232" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/230"><img src="/img/tavatar.gif"/><span id="author-nickname">Autojar</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">DedeCMS使用Ajax实现搜索下拉提示功能</h1>
                        <span id="vps-title-info">由 <a href="/user/230">Autojar</a> 发表于 2012年11月13日 14:33</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	这个功能主要实现的是用户在搜索的时候输入关键字，然后会出现下拉菜单，下拉菜单中出现的是站内所有包含这个关键字的文章的标题共用户选择，相对DedeCMS原生的搜索这个功能实用一点，既增加了用户体验，也可以让用户快速的找到想要的东西。功能基于php+jquery来实现，参考autocomplete，效果图如下：
</p>
<p>
	<img src="http://down.chinaz.com/upload/2012/8/14/2012081442313489.png" alt="" />
</p>
<p>
	<p>
		下面讲解下具体实现步骤：
	</p>
	<p>
		1、打开你的网站首页模板，在&lt;/head&gt;之前加入
	</p>
	<p>
		<p>
			&lt;script language="javascript" type="text/javascript" src="{dede:global.cfg_templets_skin/}/js/jquery-1.7.1.min.js"&gt;&lt;/script&gt;
		</p>
		<p>
			&lt;script type="text/javascript"&gt;
		</p>
		<p>
			&nbsp; &nbsp;function lookup(inputString) {
		</p>
		<p>
			&nbsp; &nbsp; &nbsp; &nbsp;if(inputString.length == 0) {
		</p>
		<p>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// Hide the suggestion box.
		</p>
		<p>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$('#suggestions').hide();
		</p>
		<p>
			&nbsp; &nbsp; &nbsp; &nbsp;} else {
		</p>
		<p>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$.post("/plus/search_list.php", {queryString: ""+inputString+""}, function(data){
		</p>
		<p>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;if(data.length &gt;0) {
		</p>
		<p>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$('#suggestions').show();
		</p>
		<p>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$('#autoSuggestionsList').html(data);
		</p>
		<p>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}
		</p>
		<p>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;});
		</p>
		<p>
			&nbsp; &nbsp; &nbsp; &nbsp;}
		</p>
		<p>
			&nbsp; &nbsp;} // lookup
		</p>
		<p>
			&nbsp; &nbsp;function fill(thisValue) {
		</p>
		<p>
			&nbsp; &nbsp; &nbsp; &nbsp;$('#inputString').val(thisValue);
		</p>
		<p>
			&nbsp; &nbsp; &nbsp; &nbsp;setTimeout("$('#suggestions').hide();", 200);
		</p>
		<p>
			&nbsp; &nbsp;}
		</p>
		<p>
			&lt;/script&gt;
		</p>
		<p>
			<p>
				jquery-1.7.1.min.js这个jquery库需要你自己下载，这里就不多说了。本人用的是这个版本的。
			</p>
			<p>
				这段代码中的search_list.php就是本文下载的文件，下载后放入/plus目录下。
			</p>
			<p>
				2、打开head.htm，找到搜索部分的from表单代码修改为
			</p>
			<p>
				<p>
					&lt;form &nbsp;name="formsearch" action="{dede:global.cfg_cmsurl/}/plus/search.php" id="formkeyword"&gt;
				</p>
				<p>
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;label for="header-subscribe-email" class="text"&gt; &lt;/label&gt;
				</p>
				<p>
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input type="hidden" name="kwtype" value="0" /&gt;
				</p>
				<p>
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input type="text" name="q" size="24" &nbsp;value="在这里搜索..." onfocus="if(this.value=='在这里搜索...'){this.value='';}" &nbsp;onblur="if(this.value==''){this.value='在这里搜索...';}" id="inputString" onkeyup="lookup(this.value);" onblur="fill();" class="f-text"&gt;
				</p>
				<p>
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input type="submit" class="commit" value="搜索" /&gt;
				</p>
				<p>
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class="suggestionsBox" id="suggestions" style="display: none;"&gt;
				</p>
				<p>
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class="suggestionList"&gt;&lt;ul id="autoSuggestionsList"&gt;&lt;/ul&gt;&lt;/div&gt;
				</p>
				<p>
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;
				</p>
				<p>
					&nbsp; &nbsp; &nbsp; &nbsp;&lt;/form&gt;
				</p>
				<p>
					<p>
						这部分可以根据你自己的代码的实际情况具体修改，主要是输入关键字的input和下边加的DIV层。
					</p>
					<p>
						3、打开你自己的样式表css文件，在最后加入
					</p>
					<p>
						<p>
							.suggestionsBox { position:relative; left:0px;width: 250px; background: white;border: 1px solid #dcdcdc;color: #323232; z-index:999; }
						</p>
						<p>
							.suggestionList { margin: 0px; padding: 0px; }
						</p>
						<p>
							.suggestionList li { margin: 0px 0px 3px 0px; position:relative;padding: 3px; cursor: pointer;list-style:none;padding-left:5px;height:20px;overflow:hidden}
						</p>
						<p>
							.suggestionList li:hover { background-color: #659CD8; }
						</p>
						<p>
							.jr{position:absolute;top:9px;right:-5px}
						</p>
						<p>
							此样式可以根据自己的网站定义噢。
						</p>
						<p>
							到这添加的代码就完了，然后下载search_list.rar,下载后解压得search_list.php到放入/plus目录下。在这个文件里有详细注解。可根据实际情况调整。所有结果都是由这个文件来返回的。最后去前台试试您的效果把。
						</p>
					</p>
				</p>
			</p>
		</p>
	</p>
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