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
  'unifunc' => 'content_52d627a3117c35_94414019',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d627a3117c35_94414019')) {function content_52d627a3117c35_94414019($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>ie6,ie7兼容性总结 </title>
        <meta name="description" content="ie6,ie7兼容性总结 :
	其实浏览器的不兼容，我们往往是各个浏览器对于一些标准的定义不一致导致的，因此，我们可以进行一些初始化，很多问题都很轻松解决。


	下面是14条特殊情况仅供参考：


	1.文字本身的大小不兼容。同样是font-size:14px的宋体" />
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
            <input type=hidden value="162" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/12"><img src="/user/data/head-img/12_head.jpg"/><span id="author-nickname">坑爹的程序员</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">ie6,ie7兼容性总结 </h1>
                        <span id="vps-title-info">由 <a href="/user/12">坑爹的程序员</a> 发表于 2012年10月18日 11:06</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	其实浏览器的不兼容，我们往往是各个浏览器对于一些标准的定义不一致导致的，因此，我们可以进行一些初始化，很多问题都很轻松解决。
</p>
<p>
	下面是14条特殊情况仅供参考：
</p>
<p>
	1.文字本身的大小不兼容。同样是font-size:14px的宋体文字，在不同浏览器下占的空间是不一样的，ie下实际占高16px，下留白3px，ff
</p>
<p>
	下实际占高17px，上留白1px，下留白3px，opera下就更不一样了。解决方案：给文字设定 line-height 。确保所有文字都有默认的
</p>
<p>
	line-height 值。这点很重要，在高度上我们不能容忍1px
</p>
<p>
	的差异。
</p>
<p>
	2.ff下容器高度限定，即容器定义了height之后，容器边框的外形就确定了，不会被内容撑大，而ie下是会被内容撑大，高度限定失效。所以不要轻易给容器定义height。
</p>
<p>
	3.横向上的撑破容器问题，。如果float容器未定义宽度，ff下内容会尽可能撑开容器宽度，ie下则会优先考虑内容折行。故，内容可能撑破的浮动容器需要定义width。
</p>
<p>
	有兴趣大家可以看看这段实验。在不同浏览器下分别测试以下各项代码。
</p>
<p>
	a.&lt;div&nbsp;style=”border:1px solid red;height:10px”&gt;&lt;/div&gt;&nbsp;
</p>
<p>
	b. &lt;div&nbsp;style=”border:1px solid red;width:10px”&gt;&lt;/div&gt;
</p>
<p>
	c. &lt;div&nbsp;style=”border:1px solid red;float:left”&gt;&lt;/div&gt;
</p>
<p>
	d. &lt;div&nbsp;style=”border:1px solid&nbsp;red;overflow:hidden”&gt;&lt;/div&gt;
</p>
<p>
	上面的代码在不同浏览器中是不一样的，实验起源于对小height 值div的运用，&lt;div style=”height:10px;overflow:hidden”&gt;&lt;/div&gt;，小height值要配合overflow:hidden一起使用。实验好玩而已，想说明的是，浏览器对容器的边界解释是大不相同的，容器内容的影响结果各不相同。
</p>
<p>
	4.最被痛恨的，double-margin bug。ie6下给浮动容器定义margin-left&nbsp;或者margin-right 实际效果是数值的2倍。解决方案，给浮动容器定义display:inline。
</p>
<p>
	5.mirror&nbsp;margin bug，当外层元素内有float元素时，外层元素如定义margin-top:14px，将自动生成margin-bottom:14px。
</p>
<p>
	padding也会出现类似问题，都是ie6下的特产，该类bug 出现的情况较为复杂，远不只这一种出现条件，还没系统整理。解决方案：外层元素设定border 或 设定float。
</p>
<p>
	引申：ff 和ie&nbsp;下对容器的margin-bottom，padding-bottom的解释有时不一致，似乎与之相关。
</p>
<p>
	6.吞吃现象。还是ie6，上下两个div，上面的div设置背景，却发现下面没有设置背景的div也有了背景，这就是吞吃现象。对应上面的背景吞吃现象，还有滚动下边框缺失的现象。解决方案：使用zoom:1。这个zoom好象是专门为解决ie6bug而生的。
</p>
<p>
	7.注释也能产生bug~~~“多出来的一只猪。”这是前人总结这个bug使用的文案，ie6的这个bug下，大家会在页面看到猪字出现两遍，重复的内容量因注释的多少而变。解决方案：用“&lt;!–[if !IE]&gt; picRotate start
</p>
<p>
	&lt;![endif]–&gt;”方法写注释。
</p>
<p>
	8.img&nbsp;下的留白&nbsp;方案：给img设定&nbsp;display:block。
</p>
<p>
	9. 失去line-height。&lt;div&nbsp;style=”line-height:20px”&gt;&lt;img /&gt;文字&lt;/div&gt;，很遗憾，在ie6下单行文字&nbsp;line-height 效果消失了。。。，原因是&lt;img /&gt;这个inline-block元素和inline元素写在一起了。解决方案：让img 和文字都 float起来。
</p>
<p>
	引申：大家知道img&nbsp;的align 有 text-top，middle，absmiddle啊什么的，你可以尝试去调整img&nbsp;和文字让他们在ie和ff下能一致，你会发现怎么调都不会让你满意。索性让img 和文字都 float起来，用margin调整。
</p>
<p>
	10.clear层应该单独使用。也许你为了节省代码把clear属性直接放到下面的一个内容层，这样有问题，不仅仅是ff和op下失去margin效果，ie下某些margin值也会失效
</p>
<p>
	&lt;div
</p>
<p>
	style=”background:red;float:left;”&gt;dd&lt;/div&gt;
</p>
<p>
	&lt;div
</p>
<p>
	style=”clear:both;margin-top:18px;background:green”&gt;ff&lt;/div&gt;
</p>
<p>
	11.ie
</p>
<p>
	下overflow:hidden对其下的绝对层position:absolute或者相对层 position:relative无效。解决方案：给overflow:hidden加position:relative或者position:
</p>
<p>
	absolute。另，ie6支持overflow-x或者overflow-y的特性，ie7、ff不支持。
</p>
<p>
	12.ie6下严重的bug，float元素如没定义宽度，内部如有div定义了height或zoom:1，这个div就会占满一整行，即使你给了宽度。float元素如果作为布局用或复杂的容器，都要给个宽度的。
</p>
<p>
	13.ie6下的bug，绝对定位的div下包含相对定位的div，如果给内层相对定位的div高度height具体值，内层相对层将具有100%的width值，外层绝对层将被撑大。解决方案给内层相对层float属性。
</p>
<p>
	14.width:100%这个东西在ie里用很方便，会向上逐层搜索width值，忽视浮动层的影响，ff下搜索至浮动层结束，如此，只能给中间的所有浮动层加width:100%才行，累啊。opera这点倒学乖了跟了ie。
</p>
<p>
	-----------------------------------------------------------------------------------------------------------------
</p>
<p>
	ie的float
</p>
<p>
	bug(ie6,ie7)使前端工程师们为之困扰,最常见的现象就是:当浮动元素的父级元素在拖动滚动条的时候出现边框的缺失,对于此类问题的解决方案就是使浮动元素获得布局.
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;在诸多的情况中,因为页面需要宽度自由伸缩而不能申明宽度为固定值,但我们可以设置*height:1%;,*在这里可谓是举足轻重,因为*只能被ie7及以下版本解析,ie8并不识别此类写法,所以可以使用这个写法来区别ie8和其他版本号的ie浏览器.对网上流行的ie8
</p>
<p>
	beta1的hack,也算是一个补充.
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;一些常用的hack测试
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;* html &nbsp;p {color:red;} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 支持
</p>
<p>
	IE6 &nbsp; &nbsp; &nbsp; &nbsp;不支持FF IE7 IE8b
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;*+html p {color:red;}　　 &nbsp;支持 IE7 IE8b &nbsp; &nbsp; &nbsp; &nbsp;
</p>
<p>
	不支持FF IE6
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;p {*color:red;} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;支持 IE7 IE6 &nbsp; &nbsp; &nbsp; &nbsp;
</p>
<p>
	不支持FF IE8b
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;IE8 中增加了 CSS3 中的子串匹配的属性选择器（substring matching attribute
</p>
<p>
	selectors），具体规则与正则中的匹配很相似：
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;E[att^=’val’] //子串以’val’ 开始
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;E[att$=’val’] //子串以’val’ 结束
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;E[att*=’val’] //子串中包含’val’
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;IE8 支持绝大多数基本的 CSS2.1
</p>
<p>
	选择器，不支持的包括但不限于：[:first-line] 、[:first-letter]。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;对于 CSS2.1 中的 generated
</p>
<p>
	content 部分，即通过使用伪元素 :before 和 :after 添加文本内容，IE8 中支持 并未完全
</p>
<p>
	。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;而对于几乎在其他浏览器中都支持的 opacity 和 RGBA ，IE8 中依旧没有支持。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;对于原来用来区分
</p>
<p>
	IE 的 HACK 在 IE8 中基本失效（比如*property:value、*property:value等）。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;原有 IE 的
</p>
<p>
	list-item whitespace bug 在 IE8 中依旧存在。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;原有 IE 的 z-index bug 在 IE8
</p>
<p>
	中依旧存在。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;IE8 中产生新的 bug：当 line-heigth 小于正常值时，超出的部分将被裁切掉。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;IE8 中依然不支持 display:table 。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;IE8 中依然不支持 border 的
</p>
<p>
	transparent 值。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;IE8 中 @import 只支持三层嵌套。
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;IE8中 border的
</p>
<p>
	transparent 不被支持
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;IE8中产生新的BUG：line-heigth BUG
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp;/*/p{
</p>
<p>
	color:#1e90ff}/*/　只针对IE8的hack，可以是属性也可以是类
</p>
<p>
	------------------------------------------------------------------------------------------
</p>
<p>
	BUG描述：
</p>
<p>
	页面中某DIV使用了position:relative，结合top=-25px等元素定位。在FF和IE7下表现正常，但是在IE6中该DIV会随鼠标滚动而滚动。
</p>
<p>
	分析：
</p>
<p>
	这是IE6一个已知的BUG：当某position:relative元素
</p>
<p>
	被带有overflow:auto/scroll属性的块级元素包含时，会表现出postion:absolute的行为。
</p>
<p>
	解决方法：
</p>
<p>
	1.为包含块元素添加属性position:relative 。
</p>
<p>
	2.把该元素的position:relative属性去掉，使用默认的static定位，并通过margin-top等属性实现类似的效果。
</p>
<p>
	————————————————————————————————————————————————————————————————
</p>
<p>
	ie6的末日即将来临,对我们前端开发人员来说,无疑是一个慰藉人心的喜讯.但这个末日也并非朝日可至,所以我们还是争取最后的胜利,用各种hack和方法来规避ie6下双边距,背景透明,重复文字等等一堆bug.下面是转载自前端观察(译自http://www.sitepoint.com/)中的10个修复ie6下bug技巧:
</p>
<p>
	1.
</p>
<p>
	使用DOCTYPE
</p>
<p>
	你应该在一直每个HTML文件的头部都使用DOCTYPE，并且我们推荐使用strict 版本，比如：
</p>
<p>
	&lt;!DOCTYPE &nbsp; HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
</p>
<p>
	"http://www.w3.org/TR/html4/strict.dtd"&gt;
</p>
<p>
	或者，对于XHTML使用:
</p>
<p>
	&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
</p>
<p>
	Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
</p>
<p>
	你需要处理的最棘手的事情就是IE6进入quirks模式——它已经够诡异了。
</p>
<p>
	2. 设置position:
</p>
<p>
	relative
</p>
<p>
	将一个元素设置为”position:relative”可以解决很多问题，特别是你曾经遇到隐藏的或对齐诡异的盒子。显然，你需要非常小心点儿，因为绝对定位的子节点可能会因此重新定位。
</p>
<p>
	3.
</p>
<p>
	将浮动元素设置为display:inline
</p>
<p>
	具有margin属性的浮动元素可能引起著名的IE6双倍margin问题，比如，你为一个元素指定margin-left为5px，但是IE6中实际上却表现为10px。”display:inline”将解决这个问题，尽管这不是必须的，你的CSS仍然是有效的。
</p>
<p>
	4.
</p>
<p>
	将一个元素设置为hasLayout
</p>
<p>
	很多IE6(和IE7)的渲染问题可以通过设置元素的hasLayout来解决。
</p>
<p>
	这是一个IE内部属性（IE隐藏的，更多关于haslayout的资料，可以参阅这里），用来确定相对于其他元素，内容是如何布局和定位的。如果你需要设置一个inline元素(比如一个链接)为block元素，或者是应用透明效果，设置hasLayout也可能是必须的。
</p>
<p>
	最简单的设置hasLayout的方法是为CSS设置一个高度或宽度（zoom也可以用，但是zoom并不是CSS标准的一部分）。我们推荐设置实际尺寸，但是问题是这是不现实的，你可能需要使用”height:1%”。如果父元素并没有设置高度，该元素的实际高度并不受影响，而且这个时候hasLayout已经被启用。
</p>
<p>
	5.修正重复文字bug
</p>
<p>
	复杂的布局可以触发在浮动元素的最后一些字符可能出现在出现在清除元素下面的bug。这里有几个解决方法，有些是完美的，但是做一些反复试验也是必须的：
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp; .确保所有的元素使用”display:inline;”
</p>
<p>
	.在最后一个元素上使用一个”margin-right:-3px;”
</p>
<p>
	&nbsp; &nbsp; &nbsp; &nbsp; .为浮动元素的最后一个条目使用一个条件注释，比如：
</p>
<p>
	&lt;!--[if !IE]&gt;Put your commentary in
</p>
<p>
	here...&lt;![endif]--&gt;
</p>
<p>
	.在容器的最后元素使用一个空的div(它也有必要设置宽度为90%或类似宽度。
</p>
<p>
	&gt;&gt;&gt;&gt;&gt;&gt;你还可以访问positioniseverything.net 查看该问题的完整介绍。
</p>
<p>
	6.在可点击和悬停的元素上只使用&lt;a&gt;标签
</p>
<p>
	IE6只认识对a标签的CSS
</p>
<p>
	hover效果。
</p>
<p>
	你也可以在基于JavaScript的组件内使用他们来控制，以使他们保持键盘的可操作性。是有一些可替代的选择，但是&lt;a&gt;标签比其它方案更可靠。
</p>
<p>
	7.使用!important
</p>
<p>
	或高级选择器来区分IE6
</p>
<p>
	不使用传统Hack或在额外文件中的条件CSS的方法，写出特别针对IE6的可行的代码也还是有可能的。比如最小高度可以通过这段代码来定义：
</p>
<p>
	#element {
</p>
<p>
	&nbsp; &nbsp; min-height: 20em;
</p>
<p>
	&nbsp; &nbsp; height: auto
</p>
<p>
	!important; /* 所有浏览器都理解这段代码 */
</p>
<p>
	&nbsp; &nbsp; height: 20em; /* IE6 错误的使用这个值
</p>
<p>
	/*
</p>
<p>
	}
</p>
<p>
	IE6
</p>
<p>
	不理解min-height并错误的用20em覆盖”auto”高度，但是，如果内容需要更多的空间的话，它会自动增加高度。
</p>
<p>
	另外一个可选的方法是使用高级选择器，比如e.g.
</p>
<p>
	#element {
</p>
<p>
	&nbsp; &nbsp; min-height: 20em;
</p>
<p>
	&nbsp; &nbsp; height:
</p>
<p>
	20em;
</p>
<p>
	}
</p>
<p>
	/* IE6 无视下面的代码*/
</p>
<p>
	#element[id] {
</p>
<p>
	&nbsp; &nbsp; height:
</p>
<p>
	auto;
</p>
<p>
	}
</p>
<p>
	8.避免百分比单位
</p>
<p>
	百分比会把IE搞糊涂的。除非你可以确切的控制每一个父元素的大小，才可能做到最佳预防。你可以通过!important在其他浏览器中继续使用百分比，比如：
</p>
<p>
	body {
</p>
<p>
	&nbsp; &nbsp; margin: 2% 0 !important;
</p>
<p>
	&nbsp; &nbsp; margin:
</p>
<p>
	20px 0; /* IE6 only */
</p>
<p>
	}
</p>
<p>
	9.尽早测试并不断测试
</p>
<p>
	不要等到你的网站或应用完成了才测试IE6;这样的话问题可能更糟糕，而且会花更多时间来修正。如果你的网站能够在Firefox和IE6中正常运行，那么一般在其它浏览器就不会有问题。
</p>
<p>
	10.重构你的代码
</p>
<p>
	经常发生的事情是，修正bug要比重新考虑一个布局问题要花更长的时间。对HTML做些小改动和一些简单的CSS常常更有效。这可能意味着你要放弃完美的代码，但是会出现较少的长期问题而且将来你会很清楚如果处理这些可能出现的问题。
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