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
  'unifunc' => 'content_52d5ebf1f128e3_24286895',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d5ebf1f128e3_24286895')) {function content_52d5ebf1f128e3_24286895($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>html+jQ实现滑动解锁功能</title>
        <meta name="description" content="html+jQ实现滑动解锁功能:
	二话不说放代码,有什么不懂得在下面回帖吧!


&lt;!DOCTYPEhtml&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;&lt;/title&gt;
&lt;metahttp-equiv=" />
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
            <input type=hidden value="313" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">html+jQ实现滑动解锁功能</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2013年2月15日 22:27</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	二话不说放代码,有什么不懂得在下面回帖吧!
</p>
<p>
<pre name="code" id="prettyprint" class="javascript">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;&lt;/title&gt;
        &lt;meta http-equiv="Content-Type" content="text/html; charset=UTF-8"&gt;
        &lt;style type="text/css"&gt;
            body{
                background:#fbfbfb;
            }
            #dp-lock-wapp{
                height:29px;position:relative;text-align:left;background:#fff;padding:3px;border:1px solid #ccc;
            }
            #dp-lock-btn{
                background-attachment:fixed;
                display:inline-block;height:29px;width:40px;border-left:1px solid #ccc;cursor:pointer;background:url('./arr-btn.png') -42px 0px no-repeat;
            }
            #dp-lock-btn:hover{
                background-position-y:-48px;
            }
        &lt;/style&gt;
        &lt;script src="./jquery-min.js"&gt;&lt;/script&gt;
        &lt;script type="text/javascript"&gt;
            $(function(){
                /**
                 * @author koodo koodo@qq.com 二叉树社区出品
                 * @qq 420175369
                 * 预览 http://www.27tree.com/account/login/
                 */
                var fin = false; // 解锁完成判断
                var i_x = 0;  // 初始鼠标x坐标
                var max = $('#dp-lock-wapp').width() - $('#dp-lock-btn').width();
                // 滑动解锁脚本
                $('#dp-lock-btn').mousedown(function(){
                    if(!fin) listen = true; // 如果解锁未完成 监听鼠标
                    document.onmousemove = function(e){
                        if(listen){
                            if(i_x == 0) i_x = e.x; // 初始化x坐标
                            var ml = e.x - i_x; // 移动距离
                            ml = ml &gt; 0 ? ml &gt; max ? max : ml : 0; // 距离判断
                            $('#dp-lock-btn').css('margin-left',ml + 'px');
                            
                            // ML == ,ax 时完成解锁
                            if(ml == max) {
                                fin = true;
                                listen = false;
                                
                                // 解锁完毕,下面你爱干嘛干嘛
                                // do something ...
                            }
                        }
                    }
                    $(document).mouseup(function(){
                        listen = false;
                    });
                });
            });
        &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div style="width:300px;margin:300px auto;"&gt;
            &lt;div id="dp-lock-wapp"&gt;
                &lt;a id="dp-lock-btn"&gt;&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
http://www.27tree.com/account/login/
</p>
<p>
	本站登陆界面可以试用一下哦
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
    <div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/341_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x6C99;&#x53D1; / <a href="/user/341">baby</a> / 2013年2月16日 13:45 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="0" actUID="341">回复</a></div>好厉害<img src="/mod/kd/plugins/emoticons/images/jx2/j_0002.gif" border="0" alt="" /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/2_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x677F;&#x51F3; / <a href="/user/2">koodo</a> / 2013年2月16日 14:43 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="1" actUID="2">回复</a></div>要完整源代码的留邮箱吧,我发个压缩包<div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/22_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x5730;&#x677F; / <a href="/user/22">malloc</a> / 2013年2月16日 16:08 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="2" actUID="22">回复</a></div><p>
	在ie下出现问题 代码修改如下
</p>
<p>
<pre name="code" id="prettyprint" class="javascript"><!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            body{
                background:#fbfbfb;
            }
            #dp-lock-wapp{
                height:29px;position:relative;text-align:left;background:#fff;padding:3px;border:1px solid #ccc;
            }
            #dp-lock-btn{
                background-attachment:fixed;
                display:inline-block;height:29px;width:40px;border-left:1px solid #ccc;cursor:pointer;background:url(\'./arr-btn.png\') -42px 0px no-repeat;
            }
            #dp-lock-btn:hover{
                background-position-y:-48px;
            }
        </style>
        <script src="./jquery-min.js"></script>
        <script type="text/javascript">
            $(function(){
                /**
                 * @author koodo koodo@qq.com 二叉树社区出品
                 * @qq 420175369
                 * 预览 http://www.27tree.com/account/login/
                 */
                var fin = false; // 解锁完成判断
                var i_x = 0;  // 初始鼠标x坐标
                var max = $(\'#dp-lock-wapp\').width() - $(\'#dp-lock-btn\').width();
                // 滑动解锁脚本
                $(\'#dp-lock-btn\').mousedown(function(){
                    if(!fin) listen = true; // 如果解锁未完成 监听鼠标
                    document.onmousemove = function(e){
                        if(listen){
                            var x = getMouseX(e);
                            if(i_x == 0) i_x = x; // 初始化x坐标
                            var ml = x - i_x; // 移动距离
                            ml = ml > 0 ? ml > max ? max : ml : 0; // 距离判断
                            $(\'#dp-lock-btn\').css(\'margin-left\',ml + \'px\');
                            
                            // ML == ,ax 时完成解锁
                            if(ml == max) {
                                fin = true;
                                listen = false;
                                
                                // 解锁完毕,下面你爱干嘛干嘛
                                // do something ...
                            }
                        }
                    }
                    $(document).mouseup(function(){
                        listen = false;
                    });
                });
                function getMouseX(ev){
                    ev=ev || window.event;
                    if(ev.pageX){
                        return ev.pageX;
                    }
                    return ev.clientX + document.body.scrollLeft - document.body.clientLeft
                }
            });
        </script>
    </head>
    <body>
        <div style="width:300px;margin:300px auto;">
            <div id="dp-lock-wapp">
                <a id="dp-lock-btn"></a>
            </div>
        </div>
    </body>
</html>
</pre>
</p><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/151_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">4&#x697C; / <a href="/user/151">鸡仔食饭米</a> / 2013年2月17日 16:33 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="3" actUID="151">回复</a></div>都看不懂啊肿么办...<div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/2_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">5&#x697C; / <a href="/user/2">koodo</a> / 2013年2月17日 20:34 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="4" actUID="2">回复</a></div>好简单的啊<div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/img/tavatar.gif" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">6&#x697C; / <a href="/user/371">johnma</a> / 2013年2月27日 11:26 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="5" actUID="371">回复</a></div>e.x错误，e.pageX吧？？？<div class="cms"><div class="sub-comm-item"><tx></tx><t></t><em class="ct-t-whw"><img src="/user/data/head-img/2_head.jpg" width="32px" height="32px"/></em><div style="margin-left:45px;line-height:20px;"><a href="/user/2">koodo</a> @ <a href="/user/371">johnma</a>&nbsp;：嗯,是e.pageX<span class="block Gray">2013年2月28日 18:28 / <a href="javascript:;" rel="0" actUID="2" onclick="javascript:rep(this,2);">回复</a></span></div></div></div></div></div></div>
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