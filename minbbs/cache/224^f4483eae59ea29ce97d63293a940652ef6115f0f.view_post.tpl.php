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
  'unifunc' => 'content_52cce4091d4b71_58219682',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cce4091d4b71_58219682')) {function content_52cce4091d4b71_58219682($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>一个前百度工程师看百度的狼性</title>
        <meta name="description" content="一个前百度工程师看百度的狼性:
	
		
	
最近百度的狼性话题闹的沸沸扬扬，但是读各路评论文章总有隔靴搔痒之感。因为有些事情公司外面的人不了解，而公司内部员工又不敢说，所以还是让我这样的离职员工来写一些吧。都是两年多前的事情了，时逾境迁，胡说八道，仅供参考。


	战" />
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
            <input type=hidden value="224" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/201"><img src="/minbbs/default/headimg/default7.jpg"/><span id="author-nickname">Firing</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">一个前百度工程师看百度的狼性</h1>
                        <span id="vps-title-info">由 <a href="/user/201">Firing</a> 发表于 2012年11月12日 11:13</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	<div style="text-align:center;">
		<img src="/mod/kd/attached/image/20121112/20121112111347_98669.jpg" alt="" />
	</div>
最近百度的狼性话题闹的沸沸扬扬，但是读各路评论文章总有隔靴搔痒之感。因为有些事情公司外面的人不了解，而公司内部员工又不敢说，所以还是让我这样的离职员工来写一些吧。都是两年多前的事情了，时逾境迁，胡说八道，仅供参考。
</p>
<p>
	战略：
</p>
<p>
	在李彦宏的那封信里谈到了移动搜索的战略，也谈到了危机，可惜没有文章提到过危机是怎么产生的。记得三年前，还是2009年，还是华为的那位神童李一男做CTO，我作为一名底层的在做移动搜索的工程师有幸能和他有过大致如下的对话：
</p>
<p>
	“最近苹果的iphone和安卓的手机势头很猛，不知道公司有没有在这方面的行动和方向?”
</p>
<p>
	“我们在中国的移动搜索是统治地位，而且中国依然会是诺基亚的市场，因为大量的山寨机，所以苹果和安卓现在还不是我们的重点。”
</p>
<p>
	“哦，但是在国外诺基亚的市场好像逐渐被智能手机取代。”
</p>
<p>
	“但是这里是中国，中国是特殊的国情。”
</p>
<p>
	首先可见百度还是非常开放和透明的，一位普通的工程师能够和CTO这样对话，而且CTO的回答也绝不是打太极。但是无论如何，三年之后看来，他的预判无疑错的离谱，没有什么特殊的中国国情，百度在诺基亚和塞班系统上无疑押错了宝。而且从之后公司种种决策来看，的确是是将塞班系统作为首要支持的。我不知道有多少的代码死在了硬盘上，但是从现在百度在手机app和移动搜索上的迟缓动作看来，可见一斑。
</p>
<p>
	转向：
</p>
<p>
	百度已然是一家航母，虽然李彦宏拼命地想强调自己依然是小快艇，因为小快艇在领导犯了战略方向错误之后能够很快转向。可惜，无论他是否承认，如今是要让一家成千上万人的大公司迅速掉头，就没那么容易了。
</p>
<p>
	更何况百度在原来的航道上开得实在是不错。
</p>
<p>
	这条是赚钱的航道，也是让华尔街眉开眼笑的航道。凤巢和框计算的成功，使得两年来，百度的股票从60多美元直上140多美元。而对于那些既不能立刻赚钱，又需要探索的新产品，那就投三五人，几个月，花点零钱看看效果不行砍掉，总之不能影响营收。从日本业务，到无线搜索，新产品都是处于这样的境地。所以百度的新产品少有成功也就无不奇怪了。迫于华尔街的短视的压力，又自谷歌离开中国后缺少竞争对手，于是安于守成不敢创新。
</p>
<p>
	而在百度意识到需要真正转向移动搜索和无线产品之后，当时无线产品部的经理 张亮又离职投奔创新工厂，更是雪上加霜。
</p>
<p>
	十点上班：
</p>
<p>
	360的出现，股价的小跌，其实是一件好事。顺风顺水惯了，有点小风浪其实对公司的成长更有帮助。可惜李彦宏不这么想，读他的那封信，有对现状的急躁，以及对未来的迷茫。就好像突然闯入了躁动的青春期，有了烦恼，一切不再如以往那样心想事成。
</p>
<p>
	于是他觉得需要改变，回到以前那个玫瑰花园。
</p>
<p>
	于是他觉得一定是员工懒惰了。以前可以通宵达旦，一个产品三个月就能搞得出来，而现在上班都要十点之后，这艘船转了一年都还没转过来。看来要好好管教一番了。
</p>
<p>
	这里作为一个前百度的工程师不得不说，百度工程师的日子绝对不闲，而且能够做核心的工作，压力也是比较大的，绝对是事比人多。而十点之后上班真没什么错，很多人是早上十点到十一点到，然后早上扫信，下午开各种会响应各种临时请求，只有晚上六点开始也许才能写点代码，闲时写到晚上九点多，忙时写到晚上十一点、一两点都有，然后打个的回去。工作时间是长的，效率也是不高的，乱七八糟杂事太多。这样的日程表无非也是为了避开恐怖的上下班的高峰，和蹭一下公司报销的出租车费。假如这点自由都没有要打卡，那恐怕要伤很多人的心。那位经理说一半人要离职恐怕并不是因为接受不了十点前上班，而是接受不了这种粗暴愚蠢且缺乏信任的做法。
</p>
<p>
	所以真正需要的也许不是打卡机，而是更加透明高效的流程，对系统更多的自动化管理而非人工介入，通过优化工具来提高开发效率等等。不过好像似乎这些都没有采购几台打卡机那么容易实现哦，那还是上打卡机吧……
</p>
<p>
	狼性和小资：
</p>
<p>
	其实说了那么多似乎都和狼性和小资没什么关系，无非就是要员工再多加班些，再努力工作些，对付竞争对手手段可以更毒辣些，对待同事的态度可以更严肃些，最后上班个人卫生可以继续邋遢些嘛。可是以前百度还是很讲文化的，有百度论语啥的(虽然我觉着儒家哲学就是对于等级观念和上下服从的漂亮包装，不过好歹包装的不错)，强调平等开放啥的，但为啥这次祭出“狼性”那么有争议的词呢?
</p>
<p>
	李彦宏是一个很有个人魅力的领袖，但他周围的创业伙伴以及他请来的高管却都离他而去。他能够一呼百应，但是缺少能够执行管理的团队。因此他需要一个口号来激发所有人，一个都所有人都能够理解的口号，一个喊出来响亮可以造成真正行动的口号，就像“革命无罪，打倒右派”一样的口号。
</p>
<p>
	他成功了。他选择的词太恰当了。在百度待过时间久一点的都知道，百度的中层领导分为两派，一派来自华为，另一派来自微软谷歌等等外企。双方行事方式、价值观、技术文化都有差异。那“回归狼性，淘汰小资”的意味就不言而喻了。
</p>
<p>
	难怪有人说这是百度文化大革命。
</p>
<p>
	逃不开的怪圈，不理解的是非。中国人的狼性真的来自于天天喂的狼奶么?希望是我想多了。
</p>
<p>
	希望百度这次能够脱胎换骨，焕发狼性，实现第二次飞跃，再上一层楼吧。胡言乱语，仅以此文纪念我曾经两年多的忙碌开心既有压力又有价值的百度岁月吧。
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
    <div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/73_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x6C99;&#x53D1; / <a href="/user/73">_后觉</a> / 2012年11月12日 13:48 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="0" actUID="73">回复</a></div>有野心才有未来，这样的狼性可以有<div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default7.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x677F;&#x51F3; / <a href="/user/201">Firing</a> / 2012年11月12日 17:24 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="1" actUID="201">回复</a></div>360的出现，股价的小跌，其实是一件好事。顺风顺水惯了，有点小风浪其实对公司的成长更有帮助。<div class="cms"></div></div></div></div>
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