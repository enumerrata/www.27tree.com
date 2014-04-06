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
  'unifunc' => 'content_52d3d8278aeab7_60746315',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d3d8278aeab7_60746315')) {function content_52d3d8278aeab7_60746315($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>arp攻击解决办法</title>
        <meta name="description" content="arp攻击解决办法:
	如果你发现经常网络掉线，或者发现自己的网站所有页面都被挂马，但到服务器上，查看页面源代码，却找不到挂马代码，就要考虑到是否自己机器或者同一IP段中其他机器是否中了ARP病毒。除了装ARP防火墙以外，还可以通过绑定网关的IP和MAC来预防" />
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
            <input type=hidden value="262" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">arp攻击解决办法</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2012年12月4日 22:25</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	如果你发现经常网络掉线，或者发现自己的网站所有页面都被挂马，但到服务器上，查看页面源代码，却找不到挂马代码，就要考虑到是否自己机器或者同一IP段中其他机器是否中了ARP病毒。除了装ARP防火墙以外，还可以通过绑定网关的IP和MAC来预防一下。这个方法在局域网中比较适用：
</p>
<p>
	你所在的局域网里面有一台机器中了ARP病毒，它伪装成网关，你上网就会通过那台中毒的机器，然后它过一会儿掉一次线来骗取别的机器的帐户密码什么的东西。
</p>
<p>
	下面是手动处理方法的简要说明：
</p>
<p>
	如何检查和处理“ ARP 欺骗”木马的方法
</p>
<p>
	1．检查本机的“ ARP 欺骗”木马染毒进程
</p>
<p>
	同时按住键盘上的“ CTRL ”和“ ALT ”键再按“ DEL ”键，选择“任务管理器”，点选“进程”标签。察看其中是否有一个名为“ MIR0.dat ”的进程。如果有，则说明已经中毒。右键点击此进程后选择“结束进程”。
</p>
<p>
	2．检查网内感染“ ARP 欺骗”木马染毒的计算机
</p>
<p>
	在“开始” - “程序” - “附件”菜单下调出“命令提示符”。输入并执行以下命令：
</p>
<p>
	ipconfig
</p>
<p>
	记录网关 IP 地址，即“ Default Gateway ”对应的值，例如“ 59.66.36.1 ”。再输入并执行以下命令：
</p>
<p>
	arp –a
</p>
<p>
	在“ Internet Address ”下找到上步记录的网关 IP 地址，记录其对应的物理地址，即“ Physical Address ”值，例如“ 00-01-e8-1f-35-54 ”。在网络正常时这就是网关的正确物理地址，在网络受“ ARP 欺骗”木马影响而不正常时，它就是木马所在计算机的网卡物理地址。
</p>
<p>
	也可以扫描本子网内的全部 IP 地址，然后再查 ARP 表。如果有一个 IP 对应的物理地址与网关的相同，那么这个 IP 地址和物理地址就是中毒计算机的 IP 地址和网卡物理地址。
</p>
<p>
	3．设置 ARP 表避免“ ARP 欺骗”木马影响的方法
</p>
<p>
	本方法可在一定程度上减轻中木马的其它计算机对本机的影响。用上边介绍的方法确定正确的网关 IP 地址和网关物理地址，然后在 “命令提示符”窗口中输入并执行以下命令：
</p>
<p>
	arp –s 网关 IP 网关物理地址
</p>
<p>
	4. 静态ARP绑定网关
</p>
<p>
	步骤一：
</p>
<p>
	在能正常上网时，进入MS-DOS窗口，输入命令：arp －a，查看网关的IP对应的正确MAC地址， 并将其记录下来。
</p>
<p>
	注意：如果已经不能上网，则先运行一次命令arp －d将arp缓存中的内容删空，计算机可暂时恢复上网（攻击如果不停止的话）。一旦能上网就立即将网络断掉（禁用网卡或拔掉网线），再运行arp －a。
</p>
<p>
	步骤二：
</p>
<p>
	如果计算机已经有网关的正确MAC地址，在不能上网只需手工将网关IP和正确的MAC地址绑定，即可确保计算机不再被欺骗攻击。
</p>
<p>
	要想手工绑定，可在MS-DOS窗口下运行以下命令：
</p>
<p>
	arp －s 网关IP 网关MAC
</p>
<p>
	例如：假设计算机所处网段的网关为192.168.1.1，本机地址为192.168.1.5，在计算机上运行arp －a后输出如下：
</p>
<p>
	Cocuments and Settings&gt;arp -a
</p>
<p>
	Interface:192.168.1.5 --- 0x2
</p>
<p>
	Internet Address Physical Address Type
</p>
<p>
	192.168.1.1 00-01-02-03-04-05 dynamic
</p>
<p>
	其中，00-01-02-03-04-05就是网关192.168.1.1对应的MAC地址，类型是动态（dynamic）的，因此是可被改变的。
</p>
<p>
	被攻击后，再用该命令查看，就会发现该MAC已经被替换成攻击机器的MAC。如果希望能找出攻击机器，彻底根除攻击，可以在此时将该MAC记录下来，为以后查找该攻击的机器做准备。
</p>
<p>
	手工绑定的命令为：
</p>
<p>
	arp －s 192.168.1.1 00-01-02-03-04-05
</p>
<p>
	绑定完，可再用arp －a查看arp缓存：
</p>
<p>
	Cocuments and Settings&gt;arp -a
</p>
<p>
	Interface: 192.168.1.5 --- 0x2
</p>
<p>
	Internet Address Physical Address Type
</p>
<p>
	192.168.1.1 00-01-02-03-04-05 static
</p>
<p>
	这时，类型变为静态（static），就不会再受攻击影响了。
</p>
<p>
	但是，需要说明的是，手工绑定在计算机关机重启后就会失效，需要再次重新绑定，不过也可以写个批处理，拖到启动中。脚本如下：
</p>
<p>
	@echo off
</p>
<p>
	arp -s192.168.1.1 00-01-02-03-04-05
</p>
<p>
	end
</p>
<p>
	保存为*.bat的文件。放在开机启动中。
</p>
<p>
	要彻底根除攻击，只有找出网段内被病毒感染的计算机，把病毒杀掉，才算是真正解决问题。
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
    <div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/66_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x6C99;&#x53D1; / <a href="/user/66">影子</a> / 2012年12月7日 22:47 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="0" actUID="66">回复</a></div>嗯，帖子不错，先奖励一下<div class="cms"><div class="sub-comm-item"><tx></tx><t></t><em class="ct-t-whw"><img src="/user/data/head-img/2_head.jpg" width="32px" height="32px"/></em><div style="margin-left:45px;line-height:20px;"><a href="/user/2">koodo</a> @ <a href="/user/66">影子</a>&nbsp;：叉<span class="block Gray">2012年12月8日 11:24 / <a href="javascript:;" rel="0" actUID="2" onclick="javascript:rep(this,2);">回复</a></span></div></div></div></div></div></div>
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