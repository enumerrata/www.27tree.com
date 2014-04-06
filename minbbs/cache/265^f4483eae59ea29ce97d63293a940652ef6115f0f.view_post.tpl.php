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
  'unifunc' => 'content_52d4fa577cb6d1_18544832',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d4fa577cb6d1_18544832')) {function content_52d4fa577cb6d1_18544832($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>10个技巧，玩转PHP的关联数组</title>
        <meta name="description" content="10个技巧，玩转PHP的关联数组:
	关联数组是描述一组键及其关联值时经常使用的一种数据类型，可以说它是所有编程语言的支柱，当然，PHP也不例外，实际上，关联数组对是非常重要的，PHP支持多种操作关联数组的方法，对php开发人员来说，要从中找出最有效，最合适自己所开发程序的" />
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
            <input type=hidden value="265" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">10个技巧，玩转PHP的关联数组</h1>
                        <span id="vps-title-info">由 <a href="/user/201">Firing</a> 发表于 2012年12月5日 13:03</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	关联数组是描述一组键及其关联值时经常使用的一种数据类型，可以说它是所有编程语言的支柱，当然，<a href="http://www.itsrcs.com/bbs/Sector-1/" target="_blank">PHP</a>也不例外，实际上，关联数组对是非常重要的，PHP支持多种操作关联数组的方法，对php开发人员来说，要从中找出最有效，最合适自己所开发程序的方法来操纵这些数组才是最重要的。
</p>
<p>
	这篇文章将介绍10个操作PHP关联数组的技巧，熟练运用能帮助你提高开发效率。
</p>
<p>
	<strong>1、添加数组元素</strong>
</p>
<p>
	PHP是一种弱类型语言，这意味着你不需要显示声明一个数组及其大小，相反，你可以同时声明并填充数组
</p>
<p>
	<br />
</p>
<pre name="code" id="prettyprint" class="javascript">$capitals = array(  
  'Alabama' =&gt; 'Montgomery',  
  'Alaska'  =&gt; 'Juneau',  
  'Arizona' =&gt; 'Phoenix'  
); </pre>
额外的数组元素可以象下面这样追加：
<p>
	<br />
</p>
<p>
	$capitals['Arkansas'] = 'Little Rock';&nbsp;
</p>
<p>
	<br />
</p>
<p>
	如果你正在处理数字索引数组，你可能想使用显示命名的函数前置和追加元素，如array_push()和array_unshift()函数，但这些函数不能操作关联数组。
</p>
<p>
	<strong>2、删除数组元素</strong>
</p>
<p>
	如果要从数组中删除一个元素，请使用unset()函数，如：
</p>
<p>
	<br />
</p>
<p>
	unset($capitals['California']);&nbsp;
</p>
<p>
	<span style="line-height:1.5;">
	<p>
		使用数字索引数组时，删除数组元素的办法更多，更灵活，可以使用array_shift()和array_pop()函数分别从数组的开头和末尾删除一个元素。
	</p>
	<p>
		<strong>3、交换键和值</strong>
	</p>
	<p>
		假设你想创建一个名叫$states的新数组，使用州府作为索引，使用州名作为关联值，使用array_flip()函数很容易完成这个任务。
	</p>
	<p>
		<span style="line-height:1.5;">
<pre name="code" id="prettyprint" class="javascript">$capitals = array(  
  'Alabama' =&gt; 'Montgomery',  
  'Alaska'  =&gt; 'Juneau',  
  'Arizona' =&gt; 'Phoenix'  
);  
$states = array_flip($capitals);  
// $states = array(  
//  'Montgomery' =&gt; string 'Alabama',  
//  'Juneau'     =&gt; string 'Alaska',  
//  'Phoenix'    =&gt; string 'Arizona'  
// ); </pre>
		<p>
			<strong>4、合并数组</strong>
		</p>
		<p>
			假设前面的数组由一个基于Web的“FlashCard”服务使用，你想提供一种方法测试学生对美国各州首府的掌握情况，你可以使用array_merge()函数合并包含州和首府的数组。
		</p>
<pre name="code" id="prettyprint" class="javascript">$stateCapitals = array(  
  'Alabama' =&gt; 'Montgomery',  
  'Alaska'  =&gt; 'Juneau',  
  'Arizona' =&gt; 'Phoenix'  
);  
$countryCapitals = array (  
  'Australia' =&gt; 'Canberra',  
  'Austria'   =&gt; 'Vienna',  
  'Algeria'   =&gt; 'Algiers'  
);  
$capitals = array_merge($stateCapitals, $countryCapitals); </pre>
		<p>
			<strong>5、编辑数组的值</strong>
		</p>
		<p>
			假设在数组中的数据存在大小写错误，在插入到数据库之前，你想纠正这些错误，你可以使用array_map()函数给每个数组元素应用一个回调。
		</p>
<pre name="code" id="prettyprint" class="javascript">function capitalize($element)  
{  
  $element = strtolower($element);  
  return ucwords($element);  
}  
$capitals = array(  
  'Alabama' =&gt; 'montGoMEry',  
  'Alaska'  =&gt; 'Juneau',  
  'Arizona' =&gt; 'phoeniX'  
);  
$capitals = array_map("capitalize", $capitals); </pre>
		<p>
			<strong>6、按</strong><strong>键</strong><strong>对数组进行排序</strong>
		</p>
		<p>
			FlashCard程序常常使用各种排序，如按字母顺序排序，你可以使用ksort()函数按键对关联数组进行排序。
		</p>
<pre name="code" id="prettyprint" class="javascript">$capitals = array(  
  'Arizona' =&gt; 'Phoenix',  
  'Alaska'  =&gt; 'Juneau',  
  'Alabama' =&gt; 'Montgomery'  
);  
ksort($capitals); </pre>
		<p>
			因为数组是通过参数传递给ksort()函数的，意味着你不再需要将排序结果分配给另一个变量。
		</p>
		<p>
			<strong>7、随机数组排序</strong>
		</p>
		<p>
			在FlashCard程序中还涉及到另一种随机排序技术，这时你要使用shuffle()函数实现数组项目的随机排序。
		</p>
<pre name="code" id="prettyprint" class="javascript">$capitals = array(  
  'Arizona' =&gt; 'Phoenix',  
  'Alaska'  =&gt; 'Juneau',  
  'Alabama' =&gt; 'Montgomery'  
);  
shuffle($capitals); </pre>
		<p>
			如果不需要打乱数组顺序，你只是想随机选择一个值，那么使用array_rand()函数即可。
		</p>
		<p>
			<strong>8、确定键和值是否存在</strong>
		</p>
		<p>
			你可以使用in_array()函数确定一个数组元素是否存在。
		</p>
		<p>
			<span style="line-height:1.5;">
<pre name="code" id="prettyprint" class="javascript">$capitals = array(  
  'Arizona' =&gt; 'Phoenix',  
  'Alaska'  =&gt; 'Juneau',  
  'Alabama' =&gt; 'Montgomery'  
);  
if (in_array("Juneau", $capitals))  
{  
  echo "Exists!";  
} else {  
  echo "Does not exist!";  
} </pre>
很少有人知道这个函数也可以确定一个数组键是否存在，在这一点上，它和array_key_exists()函数的功能一样。</span>
		</p>
		<p>
			<span style="line-height:1.5;">
<pre name="code" id="prettyprint" class="javascript">$capitals = array(  
  'Arizona' =&gt; 'Phoenix',  
  'Alaska'  =&gt; 'Juneau',  
  'Alabama' =&gt; 'Montgomery'  
);  
if (array_key_exists("Alaska", $capitals))  
{  
  echo "Key exists!";  
} else {  
  echo "Key does not exist!";  
} </pre>
			<p>
				<strong>9、搜索数组</strong>
			</p>
			<p>
				你可能想搜索数组资源，这样用户就可以方便地用一个特定的州府检索关联的州，可以通过array_search()函数实现数组搜索。
			</p>
<pre name="code" id="prettyprint" class="javascript">$capitals = array(  
  'Arizona' =&gt; 'Phoenix',  
  'Alaska'  =&gt; 'Juneau',  
  'Alabama' =&gt; 'Montgomery'  
);  
$state = array_search('Juneau', $capitals);  
// $state = 'Alaska' </pre>
			<p>
				<strong>10、SPL 标准PHP库</strong>
			</p>
			<p>
				标准PHP库（Standard PHP Library，SPL）为开发人员提供了许多数据结构，迭代器，接口，异常和其它以前PHP语言没有的功能，使用这些功能可以通过面向对象的语法遍历数组。
			</p>
<pre name="code" id="prettyprint" class="javascript">$capitals = array(  
  'Arizona' =&gt; 'Phoenix',  
  'Alaska'  =&gt; 'Juneau',  
  'Alabama' =&gt; 'Montgomery'  
);  
$arrayObject = new ArrayObject($capitals);  
foreach ($arrayObject as $state =&gt; $capital)  
{  
  printf("The capital of %s is %s&lt;br /&gt;", $state, $capital);  
}  
// The capital of Arizona is Phoenix  
// The capital of Alaska is Juneau  
// The capital of Alabama is Montgomery</pre>
</span>
		</p>
</span>
	</p>
</span>
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