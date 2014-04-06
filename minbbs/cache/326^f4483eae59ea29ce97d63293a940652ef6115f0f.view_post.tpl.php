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
  'unifunc' => 'content_52ceb1e9cb8613_34348555',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ceb1e9cb8613_34348555')) {function content_52ceb1e9cb8613_34348555($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>邮件群发 不进垃圾箱 技巧</title>
        <meta name="description" content="邮件群发 不进垃圾箱 技巧:
	1.邮件中不要包含明显的“垃圾”内容


	这一点很明显，邮件中包含的“貌似垃圾”的文字和短语越多，进入收件箱的概率就越小。现在有很多免费的软件帮你检测邮件“垃圾指数”，不过知道一些基本规则还是必要的


	。


	不要过多使用“免费" />
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
            <input type=hidden value="326" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">邮件群发 不进垃圾箱 技巧</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2013年4月2日 19:39</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	1. 邮件中不要包含明显的“垃圾”内容
</p>
<p>
	这一点很明显，邮件中包含的“貌似垃圾”的文字和短语越多，进入收件箱的概率就越小。现在有很多免费的软件帮你检测邮件“垃圾指数”，不过知道一些基本规则还是必要的
</p>
<p>
	。
</p>
<p>
	不要过多使用“免费”这个词 字体颜色不要太丰富 一句话只用一个感叹号不要在邮件中使用像伟哥、毒品、淫秽、包你中奖等这样的“垃圾”词语 住不要在你自己的邮件中包含
</p>
<p>
	你在收到的垃圾邮件中看到过的内容。
</p>
<p>
	2. 不要用 “大图”代替所有文字
</p>
<p>
	用一张大图作为你的邮件内容，有很多坏处，其中最重要的一点就是垃圾邮件过滤器会寻找这种以图片为基础的邮件。大的图片文件常常隐含者容易被垃圾邮件过滤器发现的信息
</p>
<p>
	（如“免费”和“伟哥”这样的字眼）。因此，如果垃圾邮件过滤器无法在一封邮件中读到任何有意义的文字，而只看到一张图片，它极有可能把该邮件当成垃圾邮件。
</p>
<p>
	3. 进入腾讯（QQ）和新浪等邮箱的白名单
</p>
<p>
	腾讯（QQ）、新浪等邮箱都设有受信任的邮件地址列表，也就是我们常说的“白名单”。只要你在他们的白名单上，你的邮件就比较容易进入他们的收件箱。不过请注意，如果发
</p>
<p>
	送明显的垃圾邮件，你也可能从白名单中被除名。进入邮箱白名单是一场艰苦的持久战，但是为此付出的努力绝对不会白费的。
</p>
<p>
	4. 优化你的邮件HTML代码
</p>
<p>
	垃圾邮件过滤器会检测邮件HTML代码的规范性，不规范的代码可能被认为是垃圾邮件，尤其当邮件内容一看就是在Microsoft Word中编辑好然后扔进邮件中的邮件。要有专业的编
</p>
<p>
	码人员（最好是之前做过邮件模板并知道如何提高邮件进入收件箱的人）或使用邮件发送合作伙伴提供的专业模
</p>
<p>
	5. 正式发送邮件之前做足测试工作
</p>
<p>
	在将你精心编写的邮件发送给你列表中的所有收件人之前，请务必发送一封测试邮件给每个主流邮件服务商（如Hotmail, Yahoo, MSN, Gmail，网易，新浪，腾讯等以及在Outlook
</p>
<p>
	客户端中查看邮件的通用企业邮箱）。发送测试邮件时务必使用和正式发送时一模一样的服务器和信息。如果测试时，你的邮件进入了垃圾邮件箱，那正式发送时，也极有可能会
</p>
<p>
	进入垃圾邮件箱。测试时，你可以尝试不同的邮件主题和内容，从而推断出什么样的邮件更容易被当作垃圾邮件。
</p>
<p>
	6. 鼓励你的客户将你加为好友或联系人
</p>
<p>
	一旦收件人将你加入他们的联系人列表、好友列表或通讯录，你的邮件就一定可以到达他们的收件箱。抓住每个机会，鼓励你的收件人将你加为联系人。建议你通过以下三种方式
</p>
<p>
	鼓励你的客户将你加为好友或联系人：在注册时的确认邮件里，或在确认网页上以及大部分客户服务过程中。一个典型的方式就是写出：“为了保证你能继续收到我们的优质信息
</p>
<p>
	，请将我们加入你的联系人列表。”
</p>
<p>
	7. 提供清晰的反订阅/退订链接
</p>
<p>
	没有人希望看到有人退出自己的收件人列表。然而，提供清晰的反订阅方式（并在收件人退订后迅速生效），会降低他们将你的邮件标记为垃圾邮件的概率。判定你的邮件为垃圾
</p>
<p>
	邮件的首要标准就是你收到的垃圾邮件投诉数，所以要不惜一切代价防止被投诉。
</p>
<p>
	8. 经常清理你的收件人列表
</p>
<p>
	如果发现你的收件人有很多是无法送达的，大部分邮件服务商的垃圾邮件过滤器都会给你的域名或IP打一个较高的垃圾邮件指数，也就是说你的邮件更有可能最后进入收件人的垃
</p>
<p>
	圾邮件箱。无法送达邮件帐号由下面三种情况：帐号不存在，帐号被关闭或者收件箱已满。你需要经常检查你的收件人列表，清除这些帐号。如果这些帐号留存在你的收件人列表
</p>
<p>
	中，你总有一天会被标记为垃圾邮件发送者的！
</p>
<p>
	9. 分割较大的收件人列表
</p>
<p>
	种种实践经验告诉我们要将较大的收件人列表分割成若干个小的，其中最重要的一个就是通过合理的列表分割，我们不至于在发邮件时一下子收到一大群垃圾邮件投诉。不可否认
</p>
<p>
	，即使是忠诚的订阅者有时也会将你的邮件标记为垃圾邮件。如果你将较大的收件人列表分割成若干个小的来发送邮件，邮件服务商（如网易，新浪等）就不会看见同时有很多人
</p>
<p>
	举报你的邮件为垃圾邮件。
</p>
<p>
	10. 用自己的邮件发送服务器时，注意控制邮件发送速度
</p>
<p>
	大部分邮件服务商的垃圾邮件过滤器都会根据你一次发送多少封邮件来做出相应判断。发送大量邮件时，即使你的邮件发送服务器非常迅速有效，你也要控制发信的速度。安全起见，最好不要在一个小时内，发送几千封邮件到同一个邮件服务商那里
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
    <div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/2_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x6C99;&#x53D1; / <a href="/user/2">koodo</a> / 2013年4月2日 19:39 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="0" actUID="2">回复</a></div>留着有用<div class="cms"></div></div></div></div>
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