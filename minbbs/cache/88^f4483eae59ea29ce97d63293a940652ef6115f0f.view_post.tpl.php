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
  'unifunc' => 'content_52d4fc20ee8eb1_39012293',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d4fc20ee8eb1_39012293')) {function content_52d4fc20ee8eb1_39012293($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>最常被程序员们谎称读过的计算机书籍</title>
        <meta name="description" content="最常被程序员们谎称读过的计算机书籍:
	最近在&nbsp;博客园&nbsp;上看到一篇很有意思的文章，转到这里来和大家分享一下。


	


	英文原文：Books&nbsp;Programmers&nbsp;Claim&nbsp;to&nbsp;Have&nbsp;Read" />
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
            <input type=hidden value="88" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">最常被程序员们谎称读过的计算机书籍</h1>
                        <span id="vps-title-info">由 <a href="/user/66">影子</a> 发表于 2012年9月6日 19:35</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	最近在&nbsp;博客园&nbsp;上看到一篇很有意思的文章，转到这里来和大家分享一下。
</p>
<p>
	<br&nbsp;/>
</p>
<p>
	英文原文：Books&nbsp;Programmers&nbsp;Claim&nbsp;to&nbsp;Have&nbsp;Read
</p>
<p>
	马克·吐温曾经说过，所谓经典小说，就是指很多人希望读过，但很少人真正花时间去读的小说。这种说法同样适用于“经典”的计算机书籍。
</p>
<p>
	在&nbsp;Stack&nbsp;Overflow&nbsp;(以及其它很多软件论坛)上，诸如”程序员最应该读的计算机书籍有哪些?“这样的问题会周期性的出现。这样的问题不断的被提出、被回答，只是形式不同罢了。相同的几本书总是会出现在清单的前几名内，所以，如果想知道人们谈论的都是些什么，你有必要去读一读这些书的。
</p>
<p>
	大多数程序员真正读过的计算机书籍代码大全(Code&nbsp;Complete)——两届&nbsp;Software&nbsp;Jolt&nbsp;Award&nbsp;震撼大奖得主！程序员修炼之道（The&nbsp;Pragmatic&nbsp;Programmer）C程序设计语言(&nbsp;C&nbsp;Programming&nbsp;Language)(第&nbsp;2&nbsp;版)重构:改善既有代码的设计（Refactoring:&nbsp;Improving&nbsp;the&nbsp;Design&nbsp;of&nbsp;Existing&nbsp;Code）人月神话（The&nbsp;Mythical&nbsp;Man-Month）编码——隐匿在计算机软硬件背后的语言（Code:&nbsp;The&nbsp;Hidden&nbsp;Language&nbsp;of&nbsp;Computer&nbsp;Hardware&nbsp;and&nbsp;Software）Head&nbsp;First&nbsp;设计模式（Head&nbsp;First&nbsp;Design&nbsp;Patterns）编程珠玑（Programming&nbsp;Pearls）Effective&nbsp;Java&nbsp;中文版（Effective&nbsp;Java&nbsp;(2nd&nbsp;Edition)）or&nbsp;Effective&nbsp;C++（第三版）中文版Test&nbsp;Driven&nbsp;Development:&nbsp;By&nbsp;Example　　上面的这些书我自己都读过，所以我不难相信很多不是很优秀的程序员也都读过它们。如果你对编程有足够的兴趣，能够来到这里读这篇博客，你很可能读过其中的大部分，甚至还有很多不在这个清单中的，所以我就不浪费时间每本书都评论一番了。我想说的是，这个清单上的每本书都是它各自领域里的奇书。所以，很多有愿望不断提高自己的编程技术的程序员都读过这些书，这就不足为怪了。
</p>
<p>
	在人们备受推崇的计算机书籍中，还有一类书受到了独特的待遇。我称下面这个清单为“最常被程序员们谎称读过的计算机书籍”。这并不是说推荐这些书的人都没有真正读过它们。我只是有相当的信心怀疑更多的人只是在口头上宣称读过下列书籍，而实际上很少人真正读过它们。下面就是这个清单。
</p>
<p>
	最常被程序员们谎称读过的计算机书籍算法导论（Introduction&nbsp;to&nbsp;Algorithms）(CLRS)这本书的名称是所有出版过的计算机书籍中最让人误解一个。它被广泛的使用在很多大学里，通常被当作毕业生必需的算法课程。于是，只要在大学里上过计算机课程的学生几乎都有一本这样的书。然而，除非你拥有计算机硕士学位(而且是算法研究领域的)，我怀疑你顶多只读过算法导论（Introduction&nbsp;to&nbsp;Algorithms）里节选的几章内容。这个书名让人误解，是因为”Introduction”这个词让人以为它很适合初级程序员。实际上不是。这本书对算法做尽可能详尽综合的介绍，就像其它一些随处可见的类似的书一样。请不要再把这本书推荐给初学者。编译原理(Compilers:&nbsp;Principles,&nbsp;Techniques,&nbsp;and&nbsp;Tools)(the&nbsp;Dragon&nbsp;Book).这本恐龙封面的书涵盖了开发一个编译器你所需要的全部的知识。它的内容包括词汇分析，语法分析，类型检查，代码优化，以及其它很多高深的题目。请不要把这本书推荐给初级程序员，他们需要的只是分析简单的包含数学公式或&nbsp;HTML&nbsp;的字符串。除非你真的需要实现一个能够实用的编译器(或解释器)，你根本不需要掌握这本“恐龙”书的全部强大威力。把它推荐给一个遇到简单文本分析问题的人，这证明你根本没有读过它。计算机程序设计艺术(The&nbsp;Art&nbsp;of&nbsp;Computer&nbsp;Programming)(TAOCP)我经常听到人们把这本书描述为“每个程序员必读”的系列计算机书籍。我认为这明显不是实情。在我说出这样大不敬的话、被你们用板砖拍死之前，请让我做解释一下。这不是一本让你一页一页翻着读的书。这是一本参考大全书。把它放在你的书架上看起来会很不错(实际上也它确实很好)，但如果想把它通读一遍，你需要几年时间，而且最后什么都没记住。这并不是说手边放这样一本书没有什么价值。它是一本参考书，当我遇到难题，走投无路时，很多次我都在这本书里找到办法。但这本书终究是被我当作参考书。它复杂难懂，很理论，里面的例子都是汇编语言的。好的一面是，如果你想在这本书里寻找针对某一问题的解决方案，如果你找不到，那就说明这个问题无解。它是一本对它所涉及到的领域做了最最详尽介绍的一本书。Design&nbsp;Patterns:&nbsp;Elements&nbsp;of&nbsp;Reusable&nbsp;Object-Oriented&nbsp;Software&nbsp;(Gang&nbsp;of&nbsp;Four)这本书是唯一一本在这个清单里我从头到尾读过的书，读的结果是，我不知道该把这本书归到哪个类别。它出现在这个清单里，并不是因为我认为只有很少人真正读过它。很多人都读过。只是因为有更多推荐过这本书的人自己却没有读过。Design&nbsp;Patterns&nbsp;这边书的问题在于，很多书里给出的信息，你在其它很多地方都能看到。这样就使得一个初学者在维基百科上读了几篇关于设计模式的内容后，就敢在面试中宣称自己看过这本书。这就是为什么&nbsp;Singleton&nbsp;成了一种新的全局变量的原因。如果有更多的人花时间读过这本也叫做&nbsp;Gang&nbsp;of&nbsp;Four&nbsp;的书的原著，那世界上就不会有这么多人会把&nbsp;17&nbsp;种设计模式硬塞到一个日志(logging)框架里了。这本书最精彩的部分是每章里描述如何正确的使用一种模式的段落。遗憾的是，这些精华却在很多其它设计模式资料里被漏掉了。C++程序设计语言(The&nbsp;C++&nbsp;Programming&nbsp;Language)这本书不像一本编程教材，更像一本编程语言参考。有很多的迹象表明有人确实读过这本书，否则我们不可能有这么多的C++&nbsp;编译器可选择。编程初学者(或者甚至其它语言的专家)，如果想学C++，不应该直接去啃&nbsp;C++&nbsp;程序设计语言(The&nbsp;C++&nbsp;Programming&nbsp;Language)这本书。告诉他们去读《C++&nbsp;Primer&nbsp;中文版》。　　正如我之前说的，我知道你们当中会有一些人真正的读过这些书。那这篇文章不是针对你的，针对的是那些企图通过假装读过这些书来表现自己的民众。&nbsp;如果你自己没有读过这些计算机书籍，请不要推荐给别人。这样做会耽误别人的时间，误人子弟，因为一些阅历更丰富的人可能会有更好的书(更针对某一领域，更容易理解，跟某种编程语言或某种编程水平更契合的书)来推荐。除此之外，你也能避免被那些真正读过计算机程序设计艺术(The&nbsp;Art&nbsp;of&nbsp;Computer&nbsp;Programming)的人用&nbsp;MMIX&nbsp;知识给拷问住造成的尴尬(如果你不知道我在说什么，那我指的就是你)。
</p>
<p>
	（转自博客园）
</p>
<p>
	相关链接：http://news.cnblogs.com/n/138021/
</p>
<p>
	<br&nbsp;/>
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
    <div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default15.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x6C99;&#x53D1; / <a href="/user/37">_KOODO</a> / 2012年9月6日 19:37 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="0" actUID="37">回复</a></div>怎么这么大一陀，复制过来也不编辑一下<div class="cms"><div class="sub-comm-item"><tx></tx><t></t><em class="ct-t-whw"><img src="/user/data/head-img/66_head.jpg" width="32px" height="32px"/></em><div style="margin-left:45px;line-height:20px;"><a href="/user/66">%E5%BD%B1%E5%AD%90</a> @ <a href="/user/37">KOODO</a>&nbsp;：你不是管理员，你自己弄<span class="block Gray">2012年9月6日 19:38 / <a href="javascript:;" rel="0" actUID="66" onclick="javascript:rep(this,2);">回复</a></span></div></div></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/19_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x677F;&#x51F3; / <a href="/user/19">Serria</a> / 2012年9月6日 20:05 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="1" actUID="19">回复</a></div>文章怎么发在论坛这里呢？<img src="/mod/kd/plugins/emoticons/images/jx2/j_0021.gif" border="0" alt="" /><div class="cms"><div class="sub-comm-item"><tx></tx><t></t><em class="ct-t-whw"><img src="/minbbs/default/headimg/default15.jpg" width="32px" height="32px"/></em><div style="margin-left:45px;line-height:20px;"><a href="/user/37">KOODO</a> @ <a href="/user/19">Serria</a>&nbsp;：还是在灌水区<span class="block Gray">2012年9月6日 20:09 / <a href="javascript:;" rel="0" actUID="37" onclick="javascript:rep(this,2);">回复</a></span></div></div></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default15.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x5730;&#x677F; / <a href="/user/37">_KOODO</a> / 2012年9月6日 20:15 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="2" actUID="37">回复</a></div>文章这些发博文<div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default4.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">4&#x697C; / <a href="/user/29">human</a> / 2012年9月6日 20:22 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="3" actUID="29">回复</a></div><img border="0" alt="" src="/mod/kd/plugins/emoticons/images/tsj/t_0022.gif" /><div class="cms"><div class="sub-comm-item"><tx></tx><t></t><em class="ct-t-whw"><img src="/user/data/head-img/66_head.jpg" width="32px" height="32px"/></em><div style="margin-left:45px;line-height:20px;"><a href="/user/66">%E5%BD%B1%E5%AD%90</a> @ <a href="/user/29">human</a>&nbsp;：意外<span class="block Gray">2012年9月7日 19:19 / <a href="javascript:;" rel="0" actUID="66" onclick="javascript:rep(this,2);">回复</a></span></div></div></div></div></div></div>
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