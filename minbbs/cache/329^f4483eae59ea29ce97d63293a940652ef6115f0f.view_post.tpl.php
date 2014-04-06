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
  'unifunc' => 'content_52d60bc659f610_73935267',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d60bc659f610_73935267')) {function content_52d60bc659f610_73935267($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>几种Wi-Fi技术标准与应用对比</title>
        <meta name="description" content="几种Wi-Fi技术标准与应用对比:
	无论是家庭还是商业用户，在寻求无线局域网（WLAN）解决方案上都有许多选择。很多产品都支持802.11a、802.11b、802.11g和802.11n等Wi-Fi技术标准。另外，还有蓝牙和其他各种非Wi-Fi技术，它们都有属于自己的特" />
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
            <input type=hidden value="329" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/453"><img src="/minbbs/default/headimg/default10.jpg"/><span id="author-nickname">wangliuwei</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">几种Wi-Fi技术标准与应用对比</h1>
                        <span id="vps-title-info">由 <a href="/user/453">wangliuwei</a> 发表于 2013年4月17日 12:53</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p style="text-indent:2em;">
	无论是家庭还是商业用户，在寻求无线局域网（WLAN）解决方案上都有许多选择。很多产品都支持802.11a、802.11b、802.11g和802.11n等Wi-Fi技术标准。另外，还有蓝牙和其他各种非Wi-Fi技术，它们都有属于自己的特定网络标准。
</p>
<p style="text-indent:2em;">
	本文将向你介绍Wi-Fi及其相关技术的对比，以便帮助读者选择适合自己的无线网络应用。
</p>
<p style="text-indent:2em;">
	802.11标准
</p>
<p style="text-indent:2em;">
	1997年，美国电子电气工程师协会（IEEE）制定了第一个无线局域网标准802.11，主要用于解决办公室局域网和校园网中用户与用户终端的无线接入，业务主要限于数据存取，速率最高只能达到2Mbps。由于它在速率和传输距离上都不能满足人们的需要，802.11无线产品已经不再被生产。
</p>
<p style="text-indent:2em;">
	802.11n
</p>
<p style="text-indent:2em;">
	该标准是IEEE推出的最新标准。802.11n通过采用智能天线技术，可以将WLAN的传输速率由目前802.11a及802.11g提供的54Mbps、108Mbps，提供到300Mbps甚至是600Mbps。得益于将MIMO（多入多出）与OFDM（正交频分复用）技术相结合而应用的MIMO OFDM技术，提高了无线传输质量，也使传输速率得到极大提升。
</p>
<p style="text-indent:2em;">
	另外，802.11n采用了一种软件无线电技术，它是一个完全可编程的硬件平台，使得不同系统的基站和终端都可以通过这一平台的不同软件实现互通和兼容，这使得WLAN的兼容性得到极大改善。这意味着WLAN将不但能实现802.11n向前后兼容，而且可以实现WLAN与无线广域网络的结合，比如3G。
</p>
<p style="text-indent:2em;">
	802.11n优点——具有最快的网络速率和最广的信号覆盖范围;信号干扰影响较小。
</p>
<p style="text-indent:2em;">
	802.11n缺点——标准没有被正式确定;成本较高;使用多个信号，容易干扰附件的802.11b/g网络。
</p>
<p style="text-indent:2em;">
	802.11g
</p>
<p style="text-indent:2em;">
	在2002年和2003年间，WLAN产品开始拥有了一个全新的标准802.11g。802.11g结合了802.11a和802.11b二者的优点，可以说是一种混合标准。它既能适应传统的802.11b标准，在2.4GHz频率下提供每秒 11Mbit/s数据传输率，也符合802.11a标准在 5GHz频率下提供 56Mbit/s数据传输率。
</p>
<p style="text-indent:2em;">
	802.11g优点——较高的网络速率;信号质量好，不容易被阻隔。
</p>
<p style="text-indent:2em;">
	802.11g缺点——成本比802.11b高;电器设备可能会影响到2.4GHz频段信号。
</p>
<p style="text-indent:2em;">
	802.11b
</p>
<p style="text-indent:2em;">
	1999年7月，IEEE扩大了802.11应用标准，创建了802.11b标准。相比传统的以太网，该标准可以支持最高11Mbps的数据传输速率。802.11b继承了802.11的无线信号频率标准，采用2.4GHz直接序列扩频。厂商也更乐意采用这一频率标准，因为这可以降低产品成本。另一方面，由于使用了未受规范的2.4GHz扩频，无线局域网信号也很容易被微波炉、无绳电话或者其他电器设备发出的信号所干扰。当然，解决这一问题也很简单，安装802.11b设备的时候，注意与其他设备保持一定的距离即可。
</p>
<p style="text-indent:2em;">
	802.11b优点——成本低;信号辐射较好，不容易被阻隔。
</p>
<p style="text-indent:2em;">
	802.11b缺点——带宽速率较低;信号容易受到干扰。
</p>
<p style="text-indent:2em;">
	802.11a
</p>
<p style="text-indent:2em;">
	当802.11b还在发展之中的时候，IEEE又创建了另一个无线局域网标准802.11a。由于802.11b比802.11a流行得更快，所以一些人就认为802.11a是在802.11b之后被创建的。其实，802.11a和802.11b几乎是同一个时期被创建的。由于802.11a的成本较高，所以它主要是被应用在商业领域，而802.11b则主要被用在家庭市场。
</p>
<p style="text-indent:2em;">
	802.11a提供的最高数据传输速率为54Mbps，工作在5GHz频段上。这一更高的频率也就意味着，802.11a信号更容易受到墙壁或者其他障碍物的影响。
</p>
<p style="text-indent:2em;">
	此外，由于802.11a和802.11b使用了不同的频率标准，因此这二者是互不兼容的。为此，有一些厂商在电脑中提供了802.11a/b网络模块，以便应对不同环境下的无线联网需要。
</p>
<p style="text-indent:2em;">
	802.11a优点——具有较高的网络速率;信号不易被干扰。
</p>
<p style="text-indent:2em;">
	802.11a缺点——成本较高;信号容易被障碍物阻隔。
</p>
<p style="text-indent:2em;">
	蓝牙及其他
</p>
<p style="text-indent:2em;">
	除了上面所讲的这四种常见的Wi-Fi标准外，还有其他的无线网络技术。
</p>
<p style="text-indent:2em;">
	其他IEEE802.11工作组标准比如802.11h和802.11j，它们也是作为Wi-Fi技术的一个扩展分支而存在。
</p>
<p style="text-indent:2em;">
	蓝牙是一种替代性无线网络技术，它是对802.11家族的补充。蓝牙可以实现在短距离内（大约10米）的低功耗网络设备上实现网络传输（1~3Mbps速率），比如掌上电脑、蓝牙手机等。蓝牙制造成本的低廉，使得蓝牙很快就形成了产业化规模。当今，你可以随时随地看到应用蓝牙技术的PDA、智能手机。但是蓝牙很少应用在WLAN网络上，这是因为考虑到蓝牙应用范围和传输速率方面的不利因素。
</p>
<p style="text-indent:2em;">
	WiMax（又名802.16）是一项新兴的宽带无线接入技术，能提供面向互联网的高速连接，数据传输距离最远可达50km。WiMAX同时也是一种互联网阵营提出的未来公共无线宽带数据网的技术体制，代表着未来无线通信系统的宽带和智能特征，例如协议结构和网络结构扁平化、支持高速数据传输和无缝漫游、支持各种类型的业务并在MAC层和物理层保障其QoS等。
</p>
<p style="text-indent:2em;">
	<p>
		无线网络应用
	</p>
	<p>
		下面将列出已经在运用或者还在发展中的各类IEEE802.11标准：
	</p>
	<p>
		802.11a——54Mbps速率，5GHz频段信号（1999年获得批准）
	</p>
	<p>
		802.11b——11Mbps速率，2.4GHz频段信号（1999年）
	</p>
	<p>
		802.11c——符合802.1D的媒体接入控制层（MAC） 桥接（MAC Layer Bridging）
	</p>
	<p>
		802.11d——根据各国情况，使用的无线信号频谱（2001年）
	</p>
	<p>
		802.11e——对服务等级（Quality of Service， QoS） 的支持（尚未批准）
	</p>
	<p>
		802.11f——IAPP（Inter-Access Point Protocol），接入点内部协议，支持基站的互连性（2003年）
	</p>
	<p>
		802.11g——54Mbps速率，2.4GHz频段信号（2003年）
	</p>
	<p>
		802.11h——无线覆盖半径的调整，包括室内（indoor） 和室外（outdoor） 信道（5GHz频段）（2003年）
	</p>
	<p>
		802.11i——802.11规范家族在安全和鉴权（Authentification）方面的补充（2004年）
	</p>
	<p>
		802.11j——根据日本规定做的升级（5GHz）（2004年）
	</p>
	<p>
		802.11k——对WLAN进行系统管理（在进行中）
	</p>
	<p>
		802.11l——预留并不打算使用，以免同802.11i产生混乱
	</p>
	<p>
		802.11m——802.11规范家族的维护标准
	</p>
	<p>
		802.11n——比802.11g更高传输速率的改善
	</p>
	<p>
		802.11o——针对局域网中的语音应用
	</p>
	<p>
		802.11r——提供更强大的漫游功能
	</p>
	<p>
		802.11s——实现先进的Mesh功能，提供自配置、自修复功能
	</p>
	<p>
		802.11T——无线性能预报，可以成为测试无线网络的标准
	</p>
	<p>
		802.11u——与3G或者蜂窝等形式的外部网络连接
	</p>
	<p>
		802.11v——无线网络管理/设备配置
	</p>
	<p>
		802.11w——增强保护管理框架的安全性
	</p>
	<p>
		802.11x——通用802.11规范家族名称
	</p>
	<p>
		802.11y——802.11协议族中基于竞争的协议，用于制定标准化的干扰避免机制
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