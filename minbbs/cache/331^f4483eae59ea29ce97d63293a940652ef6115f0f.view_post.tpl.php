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
  'unifunc' => 'content_52d594267f9c82_82830837',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d594267f9c82_82830837')) {function content_52d594267f9c82_82830837($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>08被忽视的十大功能</title>
        <meta name="description" content="08被忽视的十大功能:
	WindowsServer2008正在逐渐向我们走来，随着最近其第一个RC版的问世，意味着它真正发布的时刻已经不会让我们等待太长的时间。


	WindowsServer2008的开发时间可以说不短了，它是自2003年之后的第一个Win" />
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
            <input type=hidden value="331" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/451"><img src="/user/data/head-img/451_head.jpg"/><span id="author-nickname">鑫盛创业❥西西</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">08被忽视的十大功能</h1>
                        <span id="vps-title-info">由 <a href="/user/451">鑫盛创业❥西西</a> 发表于 2013年4月17日 16:10</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	Windows Server 2008正在逐渐向我们走来，随着最近其第一个RC版的问世，意味着它真正发布的时刻已经不会让我们等待太长的时间。
</p>
<p>
	Windows Server 2008的开发时间可以说不短了，它是自2003年之后的第一个Windows服务器操作系统，它所新增加的很多功能也已经被公布：大多数IT专业人士对其中一些功能的细节信息也比较熟悉，例如Server Core、PowerShell和代号Viridian的Windows Server Virtualization技术。但是除了这些名头比较响的功能之外，Windows 2008还包含了很多其他的功能。
</p>
<p>
	为了这个目的，本文将把Windows Server 2008十大被忽视的十大功能展现给大家。这些功能虽然没有得到人们的关注，但是对你的网络来说却是非常重要的。
</p>
<p>
	10、打印管理终端（PMC）
</p>
<p>
	这个功能最初在Windows Server 2003 R2中发布。但是与R2版所不同的是，在Windows 2008中它是一个默认支持的功能，所有人都可以使用它。PMC是微软的管理终端MMC的快速版，可以让管理员从一个终端完整的看到每一个打印机。此外，你可以使用组策略来将打印机映射到特定的用户组，这样财务人员就不会占着工程人员所需要使用的打印机了。
</p>
<p>
	9、审核工具Audipol
</p>
<p>
	这是一个非常复杂的日志工具，可以让你在企业内的任何一台计算机上配置、创建、备份和恢复审核策略。在这个质量法规的时代，审核工作比以往任何时候都显的更加重要，使用Auditpol，可能让你无需再使用第三方的审核软件。通过使用命令行工具Auditpol，你能偶启用独立的子项目。与在Windows Server 2003中功能非常简单的版本相比，它大大提高了审核的数量，而且还有数百种不同的分类，可以让你创建在你的操作系统内部的活动记录。
</p>
<p>
	8、Windows远程Shell（WinRS）
</p>
<p>
	在Windows Server 2003中，为了连接到远程计算机的命令行窗口中，管理员需要使用终端服务。终端服务虽然不错，但是扩展性差，对于每一个远程计算机上都需要一个到终端的连接。而借助于WinRS，你可以安全的连接到你所需要的任意多的远程计算机上。对于管理员来说，这可能是一个非常节约时间的功能。
</p>
<p>
	7、事件转发
</p>
<p>
	对于那些桌面计算机运行Vista的企业来说，这是一个不错的功能。事件转发功能汇聚和转发所选择的计算机的日志到一个集中的终端上，使管理更加有效率。比如说，你是一个管理员，你得到用户报告说他在其屏幕上看到了恐怖的显示登录问题的“Event 51”弹出窗口，你无需再使用“帆布鞋网络”技术（从一台计算机跑到另一台计算机检查安全日志或问题），你只需简单的从你的计算机上“订阅”Vista计算机，它们就会把你所需要的任何信息送到你的门上。
</p>
<p>
	6、活动目录权限管理服务（AD RMS）
</p>
<p>
	在Windows 2003中，这个服务被称作Windows权限管理服务。虽然它在Windows 2003中就有，但是那时候是作为一个需要购买的附加产品出现的。现在这个服务已经被集成在Windows Server 2008中，而且包括一些升级。活动目录权限管理服务可以帮助用户创建权限保护的文件、授权版权保护信息和检查确保只有授权用户才能访问版权保护的数据。在Windows Server 2008中的增强还包括，通过管理终端MMC可以管理活动目录权限管理服务，以及通过“管理角色”托管活动目录权限管理服务任务。
</p>
<p>
	5、新的密码策略
</p>
<p>
	在活动目录AD中，域是一个安全范围。在Windows Server 2008的前面的服务器操作系统Windows Server 2003中，这个范围导致了每一个域限制使用一个密码策略。这是一个限制性的要求，在Windows Server 2008中已经消除了这个限制。现在你不用必须创建新域来获得一个新的密码策略;而只需要为特定的组或用户创建密码策略就可以了。如果你的C级别的领导（CEO、CIO等）比其他普通人需要更严格的策略，那么在Windows Server 2008中你实现起来就简单多了。
</p>
<p>
	4、组策略改进之一：可搜索策略
</p>
<p>
	在组策略管理器的改变中有两个是最值得关注的，而这两个改变在Windows Server 2008中都已经实现。第一个是对组策略设置的可搜索数据库。大多数管理员已经使用了Excel电子表格来保存他们的组策略设置。试想一下，假如有数千个这种设置，很明显这会变为一个很不实用的做法。现在在组策略管理终端GPMC内，管理员可以对策略进行搜索，让你摆脱Excel的束缚，大大加快搜索的速度。
</p>
<p>
	3、组策略改进之二：对组策略添加评注
</p>
<p>
	第二个组策略的升级是，现在能够对组策略设置添加评注。能够对组策略设置添加评注不仅仅对现在的管理有所帮助，而且将来的管理和对组策略进行故障排查的时候大有好处。举个例子来说，当你在配置一个组策略的时候，你可以说出为什么你要创建这个特殊的策略;然后，当你需要对这个策略进行故障排查或重新配置的时候，你（或者你的继任者）从评注中可以首先查看当初为什么要创建这个策略。此外，当你进行组策略建模的时候，为了勾勒出不同的策略会互相影响或影响你的环境，这些评注可以在一个报告中出现，从而简化你的组策略设置。
</p>
<p>
	2、升级、移植指导工具
</p>
<p>
	当升级或移植到一个新的操作系统上时，IT专业人士的主要关注的问题之一是安装的简单性。尽管微软的高级产品经理Ralston没有给出详细的说明，但是他却透漏了这方面的一些进展情况。它是一个“保护部署技术，将在升级或移植的过程中给予客户说明性的指导。”这将提供给管理员一个成功的部署、升级和维护Windows Server 2008的工具。他承诺，关于这个高级技术的更多信息将在11月公布出来。届时将在Technet的Windows Server开发团队博客上公布。
</p>
<p>
	1、提速八倍网速
</p>
<p>
	现在对网络提高的需要在不断增加。网络正在比以往任何时候都多的传输的数据，但是由于过时的网络协议栈，这些网络越来越像拉斯维加斯的高速公路。对于微软来说，可以在一个包中发送的数据量自从1995年以来一直保持在大约64KB，这个大小的数据包换算为大约5MB的顶级数据吞吐率。在效率方面来说，这就如同拥有一个双轮卡车，但只拉着一个箱子到处跑动。换句话说，如果这个数据包的大小一直保持这么小的话，无论你的网络管道多么大多么快，都不会有意义。
</p>
<p>
	数据包大小的限制上限已经升级到512KB，最终换算称40MB的数据吞吐率。换言之，如果进行合适的配置和优化的话，你的网络的速度可以是现在的八倍。听起来是不是很不错呢
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