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
  'unifunc' => 'content_52d54fd5958b58_10665715',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d54fd5958b58_10665715')) {function content_52d54fd5958b58_10665715($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>可能真有种东西叫“境界”吧</title>
        <meta name="description" content="可能真有种东西叫“境界”吧:
	&nbsp;&nbsp;&nbsp;最近有点迷茫，不知道怎么回事。


	&nbsp;&nbsp;&nbsp;是一种说不出来的感觉，其实也不是被谁惹了，也不是办什么事办砸了，总之就是在心里觉得并没有什么事值得这样去烦恼，又总是心情不好，" />
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
            <input type=hidden value="243" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/66"><img src="/user/data/head-img/66_head.jpg"/><span id="author-nickname">影子</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">可能真有种东西叫“境界”吧</h1>
                        <span id="vps-title-info">由 <a href="/user/66">影子</a> 发表于 2012年11月20日 00:52</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	&nbsp;&nbsp;&nbsp; 最近有点迷茫，不知道怎么回事。
</p>
<p>
	&nbsp;&nbsp;&nbsp; 是一种说不出来的感觉，其实也不是被谁惹了，也不是办什么事办砸了，总之就是在心里觉得并没有什么事值得这样去烦恼，又总是心情不好，感觉不想做事，或者刚一坐下来就觉得很烦，浮躁不安。听说女生每个月都会有类似的感受，如果真是这样，那我得代表全体男生向女孩子们报以深深的歉意，让你们独自忍受这样的苦闷。因为这种感觉实在是太让人难受了，就像身体某处“抓不到的痒”！
</p>
<p>
	&nbsp;&nbsp;&nbsp; 后来，想来想去，只能安慰自己说，可能是到了某种境界了吧<img src="/mod/kd/plugins/emoticons/images/face/f_0001.gif" alt="" border="0" />
</p>
<p>
	&nbsp;&nbsp;&nbsp; 很多人会喜欢一种东西，刚开始很喜欢，慢慢地，会喜欢都发疯的状态，但总有一天，这样的热情都会消去，因为境界到了！
</p>
<p>
	&nbsp;&nbsp;&nbsp; 刚发现一样东西，好奇，然后喜欢上了，例如某种技能。因为喜欢，所以废寝忘食，越来越熟练，越来越有自豪感。因为 这份自豪感，所以愈加专注，将许多情感付诸其中，它已经不是单纯的一项技能，它承载了我的汗水、我的金钱、我的青春、我的情感、我的一个一个的白天和黑夜，它是我最忠诚的朋友，它赋予我价值、希望和荣誉感！直到那么一天，我发现它已经烂熟与胸，当我具备能力从一万五千里的高空俯瞰它的时候，我发现它不是完美的，这几乎毁了我过去对这个世界的认识，以及我对自己的肯定……
</p>
<p>
	&nbsp;&nbsp;&nbsp; 接着，我发现它这也不好，那也不好，然后接着……接着……最后，我发现过去是有都么幼稚，竟一直认为“轮船放在汽车后备箱里”。过去，是个“一颗糖果”就足矣的孩子，每次做出什么来的时候，总会有种特别的满足感，觉得自己了不起，现在居然不幸知道来“真相”。过去的荣誉感没了，不想再去碰那样东西，还总是患得患失得想是否为它错过太多美好的东西。
</p>
<p>
	&nbsp;&nbsp;&nbsp; 一瞬间，过去以为拥有的，现在都没了，想要寻找新的奶酪，又不知道要往哪里去，像个倒在街上的赌徒 。
</p>
<p>
	&nbsp;&nbsp;&nbsp; 我想，我和上面说的那个赌徒有七八分像吧。刚碰计算机的时候，以为计算机就等于程序设计。所以便试了一把手气，感觉还不错，于是便上了瘾，虽然起步比很多人晚，学得也比别人慢，可就是喜欢。直到上一次去参加了一个编程的竞赛，不是什么出名的比赛，不过毕竟最后进了复赛，应该是省赛级别了吧，所以高兴了好久。那天复赛惨败归来，于是不得不面对一个回避来很久的事实：
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;从学会用一门语言的语法规则去把自己的想法表达出来，到学会去写规范的、勉强可称之为程序的代码，再到会用一些数据结构去做一个可以用的东西出来，再到知道结合算法去写出更优秀的程序，道路不坎坷但很漫长，可是一路走得很开心。
</p>
<p>
	&nbsp;&nbsp;&nbsp; 然而，就是在我做完这些，以为自己有能力可以做点什么的时候，回首才发现程序终究是程序，它不是软件。程序只是一个好看的模型而已，软件才是会做事的东西，况且，软件不是计算机的全部。以为自己即将看清计算机的轮廓，不想自己其实只是一直在低着头在角落里蛮干，把自己耍来好久。
</p>
<p>
	&nbsp;&nbsp;&nbsp; 迫切得想要回到新的“正轨”，迫切得想要改变现状，然后很烦躁，然后发现什么也没做成，然后愈加着急……
</p>
<p>
	&nbsp;&nbsp;&nbsp; 呵呵，吐完了，心情也舒畅了，去睡觉了。希望很久以后，我有机会到达另一个“境界”，那个时候回来，会发现其实当初的选择其实是对的，至少没有大错，当初还有很多东西是需要领悟的，当初就是需要这样一个过程<img src="/mod/kd/plugins/emoticons/images/face/f_0003.gif" alt="" border="0" />
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;
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
    <div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/2_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x6C99;&#x53D1; / <a href="/user/2">koodo</a> / 2012年11月20日 10:30 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="0" actUID="2">回复</a></div>议论文?<div class="cms"></div></div></div></div>
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