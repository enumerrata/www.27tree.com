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
  'unifunc' => 'content_52d489853d1e29_39704317',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d489853d1e29_39704317')) {function content_52d489853d1e29_39704317($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ubuntu下Memcache的安装与基本使用</title>
        <meta name="description" content="Ubuntu下Memcache的安装与基本使用:
	在全世界范围内很多大负载站点采用了Memcache作缓存服务，以分担数据库服务器的压力。


	这里只介绍在Ubuntu下如何配置Memcache和如何在PHP使用Memecache，对于更深入的了解，比如Memcache的运作机理或更" />
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
            <input type=hidden value="181" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/32"><img src="/user/data/head-img/32_head.jpg"/><span id="author-nickname">mallocx</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">Ubuntu下Memcache的安装与基本使用</h1>
                        <span id="vps-title-info">由 <a href="/user/32">mallocx</a> 发表于 2012年10月25日 08:39</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	在全世界范围内很多大负载站点采用了Memcache作缓存服务，以分担数据库服务器的压力。
</p>
<p>
	这里只介绍在Ubuntu下如何配置Memcache和如何在PHP使用Memecache，对于更深入的了解，比如Memcache的运作机理或更高级的应用还是Google一下…^_^
</p>
<p>
	关于Memcache与memcached
</p>
<p>
	Memcache是项目名，memcached是服务名。让很多初接触的人感觉很是莫名其妙。个人认为正确的应该是用前者用更为正确一点。
</p>
<p>
	安装Memcache
</p>
<p>
	Memcache分为两部分,Memcache服务端和客户端。Memcache服务端是作为服务来运行的，所有数据缓存的建立，存储，删除实际上都是在这里完成的。客户端，在这里我们指的是PHP的可以调用的扩展。
</p>
<p>
	1)安装Memcache服务端
</p>
<p>
	sudo apt-get install memcached
</p>
<p>
	安装完Memcache服务端以后，我们需要启动该服务：
</p>
<p>
	memcached -d -m 128 -p 11111 -u root
</p>
<p>
	这里需要说明一下memcached服务的启动参数：
</p>
<p>
	-p 监听的端口
</p>
<p>
	-l 连接的IP地址, 默认是本机
</p>
<p>
	-d start 启动memcached服务
</p>
<p>
	-d restart 重起memcached服务
</p>
<p>
	-d stop|shutdown 关闭正在运行的memcached服务
</p>
<p>
	-d install 安装memcached服务
</p>
<p>
	-d uninstall 卸载memcached服务
</p>
<p>
	-u 以的身份运行 (仅在以root运行的时候有效)
</p>
<p>
	-m 最大内存使用，单位MB。默认64MB
</p>
<p>
	-M 内存耗尽时返回错误，而不是删除项
</p>
<p>
	-c 最大同时连接数，默认是1024
</p>
<p>
	-f 块大小增长因子，默认是1.25-n 最小分配空间，key+value+flags默认是48
</p>
<p>
	-h 显示帮助2)安装Memcache客户端
</p>
<p>
	sudo apt-get install php5-memcache
</p>
<p>
	安装完以后我们需要在php.ini里进行简单的配置,打开/etc/php5/apache2/php.ini文件在末尾添加如下内容：
</p>
<p>
	[Memcache]
</p>
<p>
	; 一个高性能的分布式的内存对象缓存系统，通过在内存里维护一个统一的巨大的hash表，
</p>
<p>
	; 它能够用来存储各种格式的数据，包括图像、视频、文件以及数据库检索的结果等。
</p>
<p>
	; 是否在遇到错误时透明地向其他服务器进行故障转移。
</p>
<p>
	memcache.allow_failover = On
</p>
<p>
	; 接受和发送数据时最多尝试多少个服务器，只在打开memcache.allow_failover时有效。memcache.max_failover_attempts = 20
</p>
<p>
	; 数据将按照此值设定的块大小进行转移。此值越小所需的额外网络传输越多。
</p>
<p>
	; 如果发现无法解释的速度降低，可以尝试将此值增加到32768。
</p>
<p>
	memcache.chunk_size = 8192
</p>
<p>
	; 连接到memcached服务器时使用的默认TCP端口。
</p>
<p>
	memcache.default_port = 11111
</p>
<p>
	; 控制将key映射到server的策略。默认值”standard”表示使用先前版本的老hash策略。
</p>
<p>
	; 设为”consistent”可以允许在连接池中添加/删除服务器时不必重新计算key与server之间的映射关系。
</p>
<p>
	;memcache.hash_strategy = “standard”; 控制将key映射到server的散列函数。默认值”crc32″使用CRC32算法，而”fnv”则表示使用FNV-1a算法。
</p>
<p>
	; FNV-1a比CRC32速度稍低，但是散列效果更好。
</p>
<p>
	;memcache.hash_function = “crc32″
</p>
<p>
	保存php.ini,执行sudo /etc/init.d/apache2 restart重启Apache。
</p>
<p>
	在PHP中使用Memcache
</p>
<p>
	&lt;?php
</p>
<p>
	$mem = new Memcache; //创建Memcache对象
</p>
<p>
	$mem-&gt;connect(”127.0.0.1″, 11111); //连接Memcache服务器
</p>
<p>
	$val = “这是一个Memcache的测试.”;
</p>
<p>
	$key = md5($val);
</p>
<p>
	$mem-&gt;set($key, $val, 0, 120); //增加插入一条缓存，缓存时间为120s
</p>
<p>
	if(($k = $mem-&gt;get(’key’))){ //判断是否获取到指定的key
</p>
<p>
	echo ‘from cache:’.$k;
</p>
<p>
	} else {
</p>
<p>
	echo ‘normal’; //这里我们在实际使用中就需要替换成查询数据库并创建缓存.
</p>
<p>
	}
</p>
<p>
	?&gt;
</p>
<p>
	对于key，通常用md5 查询语句来获取，在实际使用中根据具体需要来决定好了…
</p>
<p>
	通过上面的步骤，我们就完成了Memcache的配置和基本使用…
</p>
<p>
	php5-memcache扩展提供的方法
</p>
<p>
	Memcache::add — 添加一个值，如果已经存在，则返回false
</p>
<p>
	Memcache::addServer — 添加一个可供使用的服务器地址
</p>
<p>
	Memcache::close — 关闭一个Memcache对象
</p>
<p>
	Memcache::connect — 创建一个Memcache对象
</p>
<p>
	memcache_debug — 控制调试功能
</p>
<p>
	Memcache::decrement — 对保存的某个key中的值进行减法操作
</p>
<p>
	Memcache::delete — 删除一个key值
</p>
<p>
	Memcache::flush — 清除所有缓存的数据
</p>
<p>
	Memcache::get — 获取一个key值
</p>
<p>
	Memcache::getExtendedStats — 获取进程池中所有进程的运行系统统计
</p>
<p>
	Memcache::getServerStatus — 获取运行服务器的参数
</p>
<p>
	Memcache::getStats — 返回服务器的一些运行统计信息
</p>
<p>
	Memcache::getVersion — 返回运行的Memcache的版本信息
</p>
<p>
	Memcache::increment — 对保存的某个key中的值进行加法操作
</p>
<p>
	Memcache::pconnect — 创建一个Memcache的持久连接对象
</p>
<p>
	Memcache::replace — R对一个已有的key进行覆写操作
</p>
<p>
	Memcache::set — 添加一个值，如果已经存在，则覆写
</p>
<p>
	Memcache::setCompressThreshold — 对大于某一大小的数据进行压缩
</p>
<p>
	Memcache::setServerParams — 在运行时修改服务器的参数
</p>
<p>
	<br />
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