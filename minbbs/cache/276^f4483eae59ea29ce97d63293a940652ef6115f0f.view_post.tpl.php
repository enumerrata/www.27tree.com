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
  'unifunc' => 'content_52ce009a9f9558_89892889',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce009a9f9558_89892889')) {function content_52ce009a9f9558_89892889($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Zend Framework中的AutoLoad机制</title>
        <meta name="description" content="Zend Framework中的AutoLoad机制:
set_include_path(USVN_LIB_DIR.PATH_SEPARATOR.get_include_path());
require_once'Zend/Loader/Autoloader.php';
$autoloader" />
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
            <input type=hidden value="276" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">Zend Framework中的AutoLoad机制</h1>
                        <span id="vps-title-info">由 <a href="/user/32">mallocx</a> 发表于 2012年12月13日 21:29</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
<pre name="code" id="prettyprint" class="javascript">set_include_path(USVN_LIB_DIR . PATH_SEPARATOR . get_include_path()); 
require_once 'Zend/Loader/Autoloader.php'; 
$autoloader = Zend_Loader_Autoloader::getInstance(); 
$autoloader-&gt;registerNamespace("Zend_"); 
$autoloader-&gt;registerNamespace("USVN_"); 
$autoloader-&gt;registerNamespace("menus_"); 
$config = new USVN_Config_Ini(USVN_CONFIG_FILE, USVN_CONFIG_SECTION); </pre>
	<p>
		过程分析
	</p>
	<p>
		首先是设置了include_path,include_path就是php中调用include的时候文件寻找的地址
	</p>
	<p>
		下面就是 require_once 'Zend/Loader/Autoloader.php';
	</p>
	<p>
		在Zend/Loader/Autoloader.php文件内，读入了Zend/Loader.php， 这个php定义了Zend_Loader这个类，这个类包含了loadClass，loadFile, isReadable(文件是否可读)等函数实例化Zend_Loader_Autoloader的过程就是调用其构造函数（这里是使用了单例模式）的过程它的构造函数中的spl_autoload_register(array(__CLASS__, 'autoload'));将Zend_Loader_Autoloader:autoload作为类自动加载函数。还做了一个操作将_internalAutoloader赋值了自身的_autoload
	</p>
	<p>
		至于这里面是怎么autoload的等会根据具体例子查看
	</p>
	<p>
		接下来调用了Zend_Loader_Autoloader:registerNamespace("USVN_")，这个函数做的事就只是在Zend_Loader_AutoLoader的内部属性_namespaces上挂载一个key为USVN_和value为true的值。
	</p>
	<p>
		看到这个函数就明白其实代码也可以写成
	</p>
	<p>
		$autoloader-&gt;registerNamespace("Zend_")-&gt;registerNamespace("USVN_")
	</p>
	<p>
		或者
	</p>
	<p>
		$autoloader-&gt;registerNamespace(array("Zend_","USVN_"))
	</p>
	<p>
		好了，现在到调用 USVN_Config_Ini类了
	</p>
	<p>
		这个类自然走的就是Zend_Loader_Autoloader:autoload("USVN_Config_Ini")这个函数第一步会去调用getClassAutoloaders获取这个类的AutoLoader。getClassAutoloaders里面增加了对namespaceAutoloader的选择和判断，由于我们很少使用，直接跳过这里返回的loader打印出来是这样的
	</p>
	<p>
		Array ( [0] =&gt; Zend_Loader_Autoloader Object ( [_autoloaders:protected] =&gt; Array ( ) [_defaultAutoloader:protected] =&gt; Array ( [0] =&gt; Zend_Loader [1] =&gt; loadClass ) [_fallbackAutoloader:protected] =&gt; [_internalAutoloader:protected] =&gt; Array *RECURSION* [_namespaces:protected] =&gt; Array ( [Zend_] =&gt; 1 [ZendX_] =&gt; 1 [USVN_] =&gt; 1 [menus_] =&gt; 1 ) [_namespaceAutoloaders:protected] =&gt; Array ( ) [_suppressNotFoundWarnings:protected] =&gt; [_zfPath:protected] =&gt; ) [1] =&gt; _autoload )
	</p>
	<p>
		其实就是前面设置的_internalAutoloader。
	</p>
	<p>
		这里就会实际调用Zend_Loader_Autoloader:_autoload ("USVN_Config_Ini")
	</p>
	<p>
		好了，现在就看到了Zend_Loader_Autoloader:_autoload函数
	</p>
	<p>
		$callback = $this-&gt;getDefaultAutoloader();
	</p>
	<p>
		这里会获取默认的Autoloader，什么是默认的Autoloader? 看这个类初始定义，实际上是array('Zend_Loader', 'loadClass');
	</p>
	<p>
		下面自然就调用的是call_user_func($callback, $class);即Zend_Loader:loadClass("USVN_Config_Ini")
	</p>
	<p>
		首先Zend_Loader已经在AutoLoader.php中被require了
	</p>
	<p>
		其次我们看看Zend_Loader:loadClass方法，这个方法第一步是检查异常，跳过。第二步是将类分隔，拼凑成$file, 比如USVN/Config/Ini.php，下面就直接调用self::loadFile($file, null, true);
	</p>
	<p>
		接下来查看self::loadFile，首先_securityCheck看类名中是否有非法字符，没有，就include了这个$file。这里的$file当然是相对路径，需要拼接上include_path, 记得include_path是在哪里设置的吗？在程序的一开始就设置了！好了，这里就把USVN_Config_Ini这个类读取进来了。
	</p>
	<p>
		看到这里你就该明白了，如果你自己定义了一个类，并且注册了Namespace，比如USVN，那么你就应该在include_path下面创建一个同名文件夹（大小写必须区分），然后你要引入的相对的文件路径名就是以类名的_做分隔读入的。
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