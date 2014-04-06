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
  'unifunc' => 'content_52d427963d02f1_01847728',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d427963d02f1_01847728')) {function content_52d427963d02f1_01847728($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>提高内存使用效能的几种方法</title>
        <meta name="description" content="提高内存使用效能的几种方法:
	尽管现在计算机的内存一般都比较大，一般都有1GB的内存，有的甚至达到2GB，还有的更高达4GB的内存，但是由于用户运行的软件本身较大，或者打开的文件窗口较多，或者上网时打开的窗口较多，也会影响系统运行的速度，严重地将会影响系统的运行性能" />
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
            <input type=hidden value="328" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">提高内存使用效能的几种方法</h1>
                        <span id="vps-title-info">由 <a href="/user/453">wangliuwei</a> 发表于 2013年4月17日 12:50</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p style="text-indent:2em;">
	尽管现在计算机的内存一般都比较大，一般都有1GB的内存，有的甚至达到2GB，还有的更高达4GB的内存，但是由于用户运行的软件本身较大，或者打开的文件窗口较多，或者上网时打开的窗口较多，也会影响系统运行的速度，严重地将会影响系统的运行性能。那么，如何优化内存的管理，提高内存的使用效能，尽可能地提高运行速度，是我们所关心的问题。
</p>
<p style="text-indent:2em;">
	下面介绍一下在Windows操作系统的使用中，如何提高其内存的使用效能，优化内存管理的几种方法。
</p>
<p style="text-indent:2em;">
	方法一、调整高速缓存区域的大小。所谓高速缓存，是指系统在读取磁盘、光盘上的数据时，采取“预读取”技术，也就是将估计即将要读取的数据预先读取到内存的高速缓冲存储器中，这样cpu在高速缓冲存储器中读取数据时就较快，从而提高运行速度。在内存中设置高速缓冲存储器，可以明显地加快读取数据的速度。Windows可以根据内存的大小自动地设置高速缓存的大小，当然用户也可以根据自己使用内存的情况，在内存中设置高速缓存的大小，以优化内存的使用。方法如下：在桌面上用鼠标右击“我的电脑”；在弹出的菜单中单击“属性”；在弹出的窗口中单击“性能”标签；单击下面的“文件系统”按钮；单击“硬盘”标签；拖动“预读式优化”调节杆，设置预读取条件；在“计算机的主要用途”栏设置系统利用高速缓存的比例；如果系统的内存较多，可选择“网络服务器”，这样系统将用较多的内存作为高速缓存；在CD－ROM标签中，可以直接调节系统用多少内存作为CD－xviii)ROM光盘读写的高速缓存，注意要在“最佳访问方式”中选择“四倍速或更高速”，这样系统将根据情况设置缓存的大小；也可以调节“追加的高速缓存大小”栏中的调节杆，xxii)追加高速缓存。
</p>
<p style="text-indent:2em;">
	方法二、监视内存。系统的内存不管有多大，总是会用完的，虽然有虚拟内存，但由于硬盘的读写速度无法与内存的速度相比，大量、频繁地使用虚拟内存将使计算机操作变得无法忍受，所以在使用内存时，就要时刻监视内存的使用情况。Windows操作系统中提供了一个系统监视器，可以监视内存的使用情况。
</p>
<p style="text-indent:2em;">
	另外还有一个简单方法，就是在任何一个文件窗口中，选择“帮助/关于Windows”菜单，在打开的窗口中就可以看到目前内存使用的情况，一般如果只有60%的内存资源可用，这时你就要注意调整内存了，不然就会严重影响你的运行速度和系统性能。
</p>
<p style="text-indent:2em;">
	方法三、及时释放内存。如果你发现系统的内存不多了，就要注意释放内存。所谓释放内存，就是将驻留在内存中的数据从内存中释放出来。释放内存最简单、最有效的方法，就是重新启动计算机；另外就是关闭暂时不用的正在运行的程序，包括在后台运行的程序。平时就要养成这样的好习惯，随时关闭那些暂时不用的程序、文件或窗口。有些应用程序不能用一般的方法关闭，这时就要进行热启动，如按下“CTRL+ALT+DEL”；另外要注意剪贴板中如果存储了一幅图片或图像，图片或图像是要占用大量内存的，这时只要剪贴几个字，就可以把内存中剪贴板上原有的图片冲掉，从而将它所占用的大量的内存释放出来；还有，在后台打印文件，也会占用大量的内存空间。
</p>
<p style="text-indent:2em;">
	方法四、优化内存中的数据。在Windows中，驻留内存中的数据越多，如桌面上的快捷图标、任务栏中的图标、系统托盘中的时间等，都要占用内存资源。所以，桌面上和任务栏中的快捷图标不要设置得太多。如果内存资源较为紧张，可以考虑优化这些项目，尽量少用各种后台驻留的程序，特别是设计不好的程序，要占用大量内存资源。平时在操作电脑时，不要打开太多的文件或窗口，或者在程序中打开太多的数据文件，如果打开了，不再用时要及时关闭这些文件或窗口。
</p>
<p style="text-indent:2em;">
	另外，长时间地使用计算机后，如果没有重新启动计算机，内存中的数据排列就有可能比较混乱而导致系统的性能下降，这时你就要考虑重新启动计算机。
</p>
<p style="text-indent:2em;">
	方法五、提高提高系统其它部件的性能。计算机其它部件的性能，对内存的使用也有较大的影响，如总线类型、cpu、硬盘、显存等。如果显存太小，而显示的数据量很大，再多的内存也是不可能提高其运行速度和系统的效能的。如果硬盘的速度太慢，特别是平均寻道时间和速度太慢，则会严重影响系统的虚拟内存的读写速度和使用效能，导致整个系统的效能下降。
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