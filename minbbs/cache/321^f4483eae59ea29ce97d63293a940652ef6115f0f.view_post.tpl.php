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
  'unifunc' => 'content_52d60caf121085_62608617',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d60caf121085_62608617')) {function content_52d60caf121085_62608617($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>《Java RMI》流</title>
        <meta name="description" content="《Java RMI》流:
	读取字节和写入字节有两个基本的类，分别是InuputStream和OutputStream。两个类里的方法都很直接，具体含义方法及可直接参考API文档。


	有个比较有趣的地方可能会让新手疑惑，在InputStream里有一个方法：p" />
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
            <input type=hidden value="321" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/300"><img src="/minbbs/default/headimg/default16.jpg"/><span id="author-nickname">rewsss</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">《Java RMI》流</h1>
                        <span id="vps-title-info">由 <a href="/user/300">rewsss</a> 发表于 2013年3月20日 15:37</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	读取字节和写入字节有两个基本的类，分别是InuputStream和OutputStream。两个类里的方法都很直接，具体含义方法及可直接参考API文档。
</p>
<p>
	有个比较有趣的地方可能会让新手疑惑，在InputStream里有一个方法：public int read() throws IOException；这个方法表示读取一个字节，并返回。很多人会问，为什么返回值不是byte，而是一个int？原因在于“如果到达流的末尾，则返回 -1”。byte类型的-1的二进制补码是1111 1111，若使用byte类型作为返回值，则无法区分数据中的1111 1111还是流达到末尾的指示符。使用int后，所有数据中的字节反应到int中都是一个非负值，而只有流到达末尾的指示符是负值（-1）。与此对应的是OutputStream中的public abstract void write(int b) throws IOException方法，该方法写入一个字节，按理说这里不需要什么标识之类的东西，为什么要传入一个int呢？实际上，传入的int的有效范围只有[0,255]（一个byte能表示的范围），如果超出这个范围，则会截断成一个byte。声明参数类型为int，是为了个前面说的read方法相对应，很可能你需要从InuputStream读取一个字节后将其写入到另外一个OutputStream，因为InuputStream那个read的返回值是int，若write的参数不是int，就需要做强制转换，将其参数声明为int就避免了这个麻烦。
</p>
<p>
	InputStream中的available方法使用的时候是需要注意的。该类中available的实现如下：
</p>
<p>
<pre name="code" id="prettyprint" class="javascript">public int available() throws IOException {
    return 0;
}</pre>
	<p>
		仅仅只是简单的返回一个0，在使用其子类的available时，要先确认其是否有一个有意义的实现。
	</p>
	<p>
		另外一个需要注意的方法是skip，我们看一下大部分skip的实现：
	</p>
<pre name="code" id="prettyprint" class="javascript">public long skip(long n) throws IOException {
    long remaining = n;
    int nr;
    if (skipBuffer == null)
        skipBuffer = new byte[SKIP_BUFFER_SIZE];
 
    byte[] localSkipBuffer = skipBuffer;
 
    if (n &lt;= 0) {
        return 0;
    }
    while (remaining &gt; 0) {
        nr = read(localSkipBuffer, 0,
              (int) Math.min(SKIP_BUFFER_SIZE, remaining));
        if (nr &lt; 0) {
        break;
        }
        remaining -= nr;
    }
    return n - remaining;
}</pre>
	<p>
		大部分skip的实现都是重复读取数据，然后丢弃。在这种实现下，如果需要skip的数据少于当前available的数据，skip方法将会阻塞，这一点需要意识到。
	</p>
	<p>
		在流不在需要的时候，需要显式调用close进行关闭。通常流都与jvm外部的资源相关联，如文件、网络连接等，使用流通常需要操作系统为其分配内存之外的资源。大部分操作系统，都限制了同时能打开的文件或网络连接的数量。为什么不能等待垃圾回收来关闭这些资源？垃圾回收是不确定性的，一个jvm实现甚至可以不实现垃圾回收部分，只是在内存不足的时候报出一个OutOfMemoryError错误。垃圾回收主要有以下几个问题：
	</p>
	<p>
		1、没法控制一个对象不需要到被垃圾回收之间的时间。
	</p>
	<p>
		2、无法控制哪个对象会被回收。
	</p>
	<p>
		3、内存可用量与文件句柄可用量之间没有必然的联系。可能内存还非常富余，而文件句柄可用数已不多。
	</p>
	<p>
		所以，一定要在流不在使用的时候显式地关闭它。
	</p>
	<p>
		在读取和写入字节的时候使用Buffered…Stream包装一下，虽然操作系统可能已经缓冲了流的读写，但从操作系统读取字节和写入字节到操作系统使用的是native方法，其开销相比java读写还是很大，所以应当使用缓冲流。
	</p>
	<p>
		与Socket相关的输出流在调用flush和close方法，其行为会传播到socket，也就是说，如果关闭了与socket相关的流，也就关闭了socket。
	</p>
	<p>
		与压缩相关的输出流，如GZIPOutputStream，DeflaterOutputStream等，其flush方法只是简单的调用了下底层流的flush方法，这可能不会将所有字节写到底层流中，比如一个56位（7个byte）的数据压缩后只有51位（6个字节+3位），flush方法只会将6个字节写出去，但是剩余的3位仍然没有写出。所以DeflaterOutputStream提供了finish方法，其可以写出所有的位数。<span style="line-height:1.5;"></span>
	</p>
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