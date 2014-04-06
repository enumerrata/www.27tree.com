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
  'unifunc' => 'content_52d374ed642cd4_85157704',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d374ed642cd4_85157704')) {function content_52d374ed642cd4_85157704($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>程序员和妓女</title>
        <meta name="description" content="程序员和妓女:
	1，程序界的高手通常很讨厌微软，妓女界的高手嗯。。这个。。恐怕也如此


	2，都是吃青春饭，不过到人老猪黄后，凭着混个脸熟，程序员可以混个管理员，妓女也行，不过俗称老鸨


	3，妓女靠的本钱是三围，程序员靠的可是四围（思维）


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
            <input type=hidden value="134" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/147"><img src="/minbbs/default/headimg/default0.jpg"/><span id="author-nickname">名字真的好难起</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">程序员和妓女</h1>
                        <span id="vps-title-info">由 <a href="/user/147">名字真的好难起</a> 发表于 2012年10月7日 20:19</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	<span style="font-size:14px;"><strong>1，程序界的高手通常很讨厌微软，妓女界的高手嗯。。这个。。恐怕也如此 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>2，都是吃青春饭，不过到人老猪黄后，凭着混个脸熟，程序员可以混个管理员，妓女也行，不过俗称老鸨 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>3，妓女靠的本钱是三围，程序员靠的可是四围（思维） </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>4，程序员为了拉客，通常会在交易前提供一个DEMO，妓女提供的那叫PHOTO </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>5，程序员现在出的活时兴叫吃霸、结霸，妓女大姐一律叫波霸 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>6，心不在焉的妓女可以一边工作一边do { beep(1); </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>sleep(9)}until over flo，心不在焉的程序员也可以一边工作一边navigate到成人 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>网站上去 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>7，程序员手册：一套好的人机操作界面要求，对于新手，能够一步一步的引导他进入功能，相反对于熟客，能够直奔 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>主题；妓女同样要遵守程序员手册对人鸡界面的规定 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>8，妓女在工作中最怕的是临检，程序员最怕的是停电 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>9，新上手的程序员叫菜鸟，刚入行的妓女叫雏鸡，都是好可怜的小动物 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>10，程序界现在流行OO的方法，虽然在XXXX年前妓女已在床上掌握了O～O～～～的技术 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>11，程序员为了拉客，无奈之时，也可以先让客人试玩，妓女当然有时也会先给你甜头,不过总之程序员比妓女还惨， </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>12，妓女每个月总有几天可以理直气壮的说不，程序员如果老板不发话，可要一年干到黑 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>13，妓女不干了人家那叫从良，程序员如果不干了，估计是下了岗 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>14，程序员有千年虫问题，妓女好象没听说有 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>15，妓女的工作隐蔽性很强，程序员的工作只怕亲戚朋友都知道，所以更加没脸皮 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>16，程序员做的越好，要做的程序越多，妓女做的好，就可以挑三拣四 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>17，程序员现在流行FREE、OPEN什么的，说白了就是自己玩自己，妓女界好象还没这样恶性竞争 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>18，女人做程序那叫奇女、才女，男人要是做妓，那就叫鸭了 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>程序员与妓女基本一样，以下为证： </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>1、都是靠出卖为生。 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>2、吃青春饭，人老珠黄肯定混不下去。 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>3、越高级收入越高，当然中间人的抽头会更高。 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>4、生活没有规律。以夜生活为主，如果需要，凌晨也要加班。 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>5、名声越大，越容易受到青睐。 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>6、必须尽最大可能满足客户各种各样非正常的需求。 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>7、鼓励创新精神。 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>8、喜欢扎堆。程序员集中的地方称为软件园，妓女集中的地方叫红灯区。 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>9、流动性较大，正常情况下没有工会。 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>10、如果怀孕了，既不能做程序员，也不能做妓女。 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>11、都为防病毒的问题而烦恼... </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>12、当然, 个中高手还专门以制毒传毒为乐 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>13、一个是Microsoft,一个是Plug $ Play </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>14、工作状态相同。工作时精神高度集中，最怕外界干扰。工作完毕身心放松，体会到一种不可替代的工作快乐。 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>15、女孩子最好还是不要做这两个职业，但还是有很多女孩子做。 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>16、除非在转行以后，否则都不愿意结婚。没空儿啊。 </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>17. </strong></span>
</p>
<p>
	<span style="font-size:14px;"><strong>赚到的钱都买了配件!</strong></span>
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
    <div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/2_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x6C99;&#x53D1; / <a href="/user/2">koodo</a> / 2012年10月7日 20:35 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="0" actUID="2">回复</a></div><img src="/mod/kd/plugins/emoticons/images/jx2/j_0001.gif" border="0" alt="" /><br /><div class="cms"></div></div></div></div>
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