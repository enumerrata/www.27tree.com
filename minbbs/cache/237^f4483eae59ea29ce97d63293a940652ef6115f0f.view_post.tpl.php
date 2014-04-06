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
  'unifunc' => 'content_52c8e4dc416b81_70177119',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c8e4dc416b81_70177119')) {function content_52c8e4dc416b81_70177119($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>程序员老矣，尚能编否? </title>
        <meta name="description" content="程序员老矣，尚能编否? :
	大多数人都觉得IT业都是一个低龄行业，白发苍苍的老年人们跟“程序猿”这三个字是不会有任何联系的，他们不懂iPhone、Linux和云，只有那些精力旺盛的中青年人才能与代码进行无止尽的搏斗。但著名的IT老记者，56岁的史蒂文·沃恩·尼克尔" />
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
            <input type=hidden value="237" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/19"><img src="/user/data/head-img/19_head.jpg"/><span id="author-nickname">Serria</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">程序员老矣，尚能编否? </h1>
                        <span id="vps-title-info">由 <a href="/user/19">Serria</a> 发表于 2012年11月15日 11:59</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	大多数人都觉得IT业都是一个低龄行业，白发苍苍的老年人们跟“程序猿”这三个字是不会有任何联系的，他们不懂iPhone、Linux和云，只有那些精力旺盛的中青年人才能与代码进行无止尽的搏斗。但著名的IT老记者，56岁的史蒂文·沃恩·尼克尔斯却提醒人们：程序员，也是越老越辣的。
</p>
<p>
	本文作者史蒂文·沃恩·尼克尔斯(Steven J. Vaughan-Nichols)算得上是一名骨灰级的老程序员和IT业者。早在上世纪七十年代，CP/M-80操作系统还是前沿技术，300bps还算很快的网络连接时，史蒂文就已经开始进行关于科技与商业相关文章的写作了，他也是第一个对万维网进行报道的记者。下面，就是他为广大老程序猿们发出的呼声：
</p>
<p>
	我56岁了。虽然说我还不是真正意义上的爷爷，但是也老得差不多了。我最开始接触因特网是在上个世纪70年代。我使用的第一个编程语言是IBM 360汇编语言，第一个操作系统是IBM大型机OS/360系统。我是第一个报道万维网(Web)这个新的网络服务的记者，那时才1993年。不过其实我也只是知道了关于计算的一点点皮毛而已。
</p>
<p style="text-align:center;">
	<img src="/mod/kd/attached/image/20121115/20121115115939_81317.png" alt="" />
</p>
<p>
	<p>
		可是最近我注意到了很多言论，都在说我们这些老人们不能理解iPhone，Linux或者云之类的“新兴事物”。这让正在使用它们的我感到自己仿佛背叛了“老年人”这个群体一样。
	</p>
	<p>
		但是，请大家看看我们IT领域的名人吧。丹尼斯·里奇(Dennis Ritchie)，C语言之父，Unix的创建者，去年辞世，享年70岁。肯·汤普逊(Ken Thompson)，Unix的另一位发明者，现在已经69岁。詹姆斯·高斯林(James Gosling)，Java之父，现在已经57岁。比尔•盖茨(Bill Gates)和微软CEO史蒂夫·鲍尔默(Steve Ballmer)都是56岁。史蒂夫·乔布斯(Steve Jobs)离开我们时也是56岁。蒂姆·库克(Tim Cook)，乔布斯的继承者，苹果现任首席执行官，51岁。
	</p>
	<p>
		那对于Linux和开源呢?自由软件创始人理查德·斯托曼(Richard Stallman)现在已59岁。他的开源哲学的竞争对手埃里克·雷蒙(Eric S. Raymond)现在也54岁。而就连Linux之父李纳斯·托沃兹(Linus Torvalds)也已经过了不惑之年，虽然算不上老，但是也算是大龄中年人了。
	</p>
	<p>
		当然，不仅仅只有这些著名老程序猿才能代表我们：有调查显示，2012年，有27%的社交网络用户年龄超过了45岁。
	</p>
	<p>
		我们这代战后婴儿潮出生的人总愿意把自己想象成一个永远年轻的家伙，但事实很残酷，我们当中已经有一些人退休了，没退休的那些老头子们，却都身处在对老员工有敌意的IT业工作环境里。
	</p>
	<p>
		我想这就是为什么一直有许多关于“老人不理解科技”的言论，也许是有些人为了隐藏“年龄偏见”，这个IT行业里公开的秘密。
	</p>
	<p>
		确实，那些已经人到中年的人都有家有室，可能没有太多精力来一周工作80多个小时，但是那又怎样呢?早在几十年前，在佛瑞德·布鲁克斯(Frederick Brooks)的软件管理经典著作《人月神话》中就提到：在IT领域，人力和时间并不呈线性关系，大量人员和较短的时间，并不能缩短软件的开发进度。
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
    <div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/2_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x6C99;&#x53D1; / <a href="/user/2">koodo</a> / 2012年11月20日 12:17 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="0" actUID="2">回复</a></div>老了我宁愿去教书<div class="cms"></div></div></div></div>
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