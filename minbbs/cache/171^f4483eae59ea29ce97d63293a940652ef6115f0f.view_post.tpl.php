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
  'unifunc' => 'content_52d542cf7b9cc4_88632652',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d542cf7b9cc4_88632652')) {function content_52d542cf7b9cc4_88632652($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>MySQL update 语句的正确用法</title>
        <meta name="description" content="MySQL update 语句的正确用法:
	以下的文章主要介绍的是MySQL


	update语句的实际用法，我们首先是以单表的UPDATE语句来引出实现MySQLupdate


	语句的实际方案，以下就是文章的详细内容描述，望你看完之后会有收获。


	单表的MySQLUP" />
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
            <input type=hidden value="171" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">MySQL update 语句的正确用法</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2012年10月23日 00:15</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	以下的文章主要介绍的是MySQL
</p>
<p>
	update 语句的实际用法，我们首先是以单表的UPDATE语句来引出实现MySQL update
</p>
<p>
	语句的实际方案，以下就是文章的详细内容描述，望你看完之后会有收获。
</p>
<p>
	单表的MySQL UPDATE语句：
</p>
<pre name="code" id="prettyprint" class="javascript">UPDATE [LOW_PRIORITY] [IGNORE] tbl_name  SET col_name1=expr1 [, col_name2=expr2 ...]  [WHERE where_definition]  [ORDER BY ...]  [LIMIT row_count] </pre>
多表的UPDATE语句：
<pre name="code" id="prettyprint" class="javascript">UPDATE [LOW_PRIORITY] [IGNORE] table_references  SET col_name1=expr1 [, col_name2=expr2 ...]  [WHERE where_definition] </pre>
<p>
	UPDATE语法可以用新值更新原有表行中的各列。SET子句指示要修改哪些列和要给予哪些值。WHERE子句指定应更新哪些行。如果没有WHERE子句，则更新所有的行。如果指定了ORDER
</p>
<p>
	BY子句，则按照被指定的顺序对行进行更新。LIMIT子句用于给定一个限值，限制可以被更新的行的数目。
</p>
<p>
	<br />
</p>
<p>
	<strong>MySQL UPDATE语句支持以下修饰符：</strong> 
</p>
<p>
	如果您使用LOW_PRIORITY关键词，则UPDATE的执行被延迟了，直到没有其它的客户端从表中读取为止。
</p>
<p>
	如果您使用IGNORE关键词，则即使在更新过程中出现错误，更新语句也不会中断。如果出现了重复关键字冲突，则这些行不会被更新。如果列被更新后，新值会导致数据转化错误，则这些行被更新为最接近的合法的值。
</p>
<p>
	如果您在一个表达式中通过tbl_name访问一列，则UPDATE使用列中的当前值。例如，以下语句把年龄列设置为比当前值多一：
</p>
MySQL&gt; UPDATE persondata SET ageage=age+1;&nbsp;
<p>
	MySQL UPDATE赋值被从左到右评估。例如，以下语句对年龄列加倍，然后再进行增加：
</p>
<p>
	MySQL&gt; UPDATE persondata SET ageage=age*2, ageage=age+1;&nbsp;
</p>
<p>
	<br />
</p>
<p>
	如果您把一列设置为其当前含有的值，则MySQL会注意到这一点，但不会更新。
</p>
<p>
	如果您把被已定义为NOT&nbsp;NULL的列更新为NULL，则该列被设置到与列类型对应的默认值，并且累加警告数。对于数字类型，默认值为0；对于字符串类型，默认值为空字符串('')；对于日期和时间类型，默认值为“zero”值。
</p>
<p>
	UPDATE会返回实际被改变的行的数目。MySQL_info() C&nbsp;API函数可以返回被匹配和被更新的行的数目，以及在UPDATE过程中产生的警告的数量。
</p>
<p>
	<strong>您可以使用LIMIT</strong> 
</p>
<p>
	row_count来限定UPDATE的范围。LIMIT子句是一个与行匹配的限定。只要发现可以满足WHERE子句的row_count行，则该语句中止，不论这些行是否被改变。
</p>
<p>
	如果一个UPDATE语句包括一个ORDER BY子句，则按照由子句指定的顺序更新行。
</p>
<p>
	您也可以执行包括多个表的UPDATE操作。table_references子句列出了在联合中包含的表。以下是一个例子：
</p>
<p>
	<br />
</p>
<pre name="code" id="prettyprint" class="javascript">SQL&gt;UPDATE items,month SET items.price=month.price  WHERE items.id=month.id; </pre>
<p>
	以上的例子显示出了使用逗号操作符的内部联合，但是multiple-table&nbsp;UPDATE语句可以使用在SELECT语句中允许的任何类型的联合，比如LEFT JOIN。
</p>
<p>
	注释：您不能把ORDER BY或LIMIT与multiple-table UPDATE同时使用。
</p>
<p>
	在一个被更改的multiple-table UPDATE中，有些列被引用。您只需要这些列的MySQL
</p>
<p>
	UPDATE权限。有些列被读取了，但是没被修改。您只需要这些列的SELECT权限。
</p>
<p>
	如果您使用的multiple-table&nbsp;UPDATE语句中包含带有外键限制的InnoDB表，则MySQL优化符处理表的顺序可能与上下层级关系的顺序不同。在此情况下，语句无效并被
</p>
<p>
	回滚。同时，更新一个单一表，并且依靠ON UPDATE功能。该功能由InnoDB提供，用于对其它表进行相应的修改。
</p>
<p>
	目前，您不能在一个子查询中更新一个表，同时从同一个表中选择。
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