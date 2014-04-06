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
  'unifunc' => 'content_52d3eacfa30980_01909749',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d3eacfa30980_01909749')) {function content_52d3eacfa30980_01909749($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>程序员老鸟写sql语句的经验之谈</title>
        <meta name="description" content="程序员老鸟写sql语句的经验之谈:
	做管理系统的，无论是bs结构的还是cs结构的，都不可避免的涉及到数据库表结构的设计，sql语句的编写等。因此在开发系统的时候，表结构设计是否合理，sql语句是否标准，写出的sql性能是否优化往往会成为公司衡量程序员技术水平的标准。


" />
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
            <input type=hidden value="170" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">程序员老鸟写sql语句的经验之谈</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2012年10月23日 00:11</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	做管理系统的，无论是bs结构的还是cs结构的，都不可避免的涉及到数据库表结构的设计，sql语句的编写等。因此在开发系统的时候，表结构设计是否合理，sql语句是否标准，写出的sql性能是否优化往往会成为公司衡量程序员技术水平的标准。
</p>
<p>
	我们程序员不是dba，不需要时刻关注sql运行时间，想方设法优化表结构，存储空间，优化表读取速度等等，但是在开发系统时，时刻保持优良的写sql语句的作风是很有必要的，这关乎到个人在公司的声誉，嘿嘿，你懂的。。。
</p>
<p>
	新来的程序员老鸟，在一个开发团队中，需要表现一下自己的水平，奠定在公司的地位，需要努力表现一把，最简单的从写的sql语句就很容易表现出来，曾经就有一次，一个老程序员，上面定位是要做团队领导的，先历练一下做个制单的模块，列表sql中有一列这位老鸟直接写了个select语句从别的表中取之，而不是用表之间关联得到，一下破坏自己程序员老鸟光辉形象。
</p>
<p>
	做技术的还是要注重自己的内涵，提升内功，哈哈。
</p>
<p>
	闲话少说，总结一点程序员老鸟写sql顺手拈来的功夫吧：
</p>
<p>
	1. 不论一个sql中涉及到多个表，每次都用两个表（结果集）操作，得到新的结果后，再和下一个表（结果集）操作。
</p>
<p>
	2. 避免在select f1,(select f2 from tableB ).... from tableA
</p>
<p>
	这样得到字段列。直接用tableA和tableB关联得到A.f1,B.f2就可以了。
</p>
<p>
	3.避免隐含的类型转换
</p>
<p>
	如
</p>
<p>
	select id from employee where emp_id='8' （错） &nbsp; select id from employee where emp_id=8 （对） &nbsp;
</p>
<p>
	emp_id是整数型，用'8'会默认启动类型转换，增加查询的开销。
</p>
<p>
	4. 尽量减少使用正则表达式，尽量不使用通配符。
</p>
<p>
	5. 使用关键字代替函数
</p>
<p>
	如：
</p>
<p>
	select id from employee where UPPER(dept) like 'TECH_DB' （错） &nbsp; select id from employee where SUBSTR(dept,1,4)='TECH' （错） &nbsp; select id from employee where dept like 'TECH%' （对） &nbsp;
</p>
<p>
	6.不要在字段上用转换函数，尽量在常量上用
</p>
<p>
	如：
</p>
<p>
	select id from employee where to_char(create_date,'yyyy-mm-dd')='2012-10-31' （错） &nbsp; select id from employee where create_date=to_date('2012-10-31','yyyy-mm-dd') （对） &nbsp;
</p>
<p>
	7.不使用联接做查询
</p>
<p>
	如：
</p>
<p>
	select id from employee where first_name || last_name like 'Jo%' （错）
</p>
<p>
	8. 尽量避免前后都用通配符
</p>
<p>
	如：
</p>
<p>
	select id from employee where dept like '%TECH%' (错） &nbsp; select id from employee where dept like 'TECH%' （对） &nbsp;
</p>
<p>
	9. 判断条件顺序
</p>
<p>
	如：
</p>
<p>
	select id from employee where creat_date-30&gt;to_date('2012-10-31','yyyy-mm-dd') （错） &nbsp; select id from employee where creat_date &gt;to_date('2012-10-31','yyyy-mm-dd')+30 （对） &nbsp;
</p>
<p>
	10. 尽量使用exists而非in
</p>
<p>
	当然这个也要根据记录的情况来定用exists还是用in, 通常的情况是用exists
</p>
<p>
	select id from employee where salary in (select salary from emp_level where....) （错） &nbsp; select id from employee where salary exists(select 'X' from emp_level where ....) （对） &nbsp;
</p>
<p>
	11. 使用not exists 而非not in
</p>
<p>
	和上面的类似
</p>
<p>
	12. 减少查询表的记录数范围
</p>
<p>
	13.正确使用索引
</p>
<p>
	索引可以提高速度，一般来说，选择度越高，索引的效率越高。
</p>
<p>
	14. 索引类型
</p>
<p>
	唯一索引，对于查询用到的字段，尽可能使用唯一索引。
</p>
<p>
	还有一些其他类型，如位图索引，在性别字段，只有男女的字段上用。
</p>
<p>
	15. 在经常进行连接，但是没有指定为外键的列上建立索引
</p>
<p>
	16. 在频繁进行排序会分组的列上建立索引，如经常做group by 或 order by 操作的字段。
</p>
<p>
	17.
</p>
<p>
	在条件表达式中经常用到的不同值较多的列上建立检索，在不同值少的列上不建立索引。如性别列上只有男，女两个不同的值，就没必要建立索引（或建立位图索引）。如果建立索引不但不会提高查询效率，反而会严重降低更新速度。
</p>
<p>
	18. 在值比较少的字段做order by时，翻页会出现记录紊乱问题，要带上id字段一起做order by.
</p>
<p>
	19. 不要使用空字符串进行查询
</p>
<p>
	如：
</p>
<p>
	select id from employee where emp_name like '%%' （错）
</p>
<p>
	20. 尽量对经常用作group by的关键字段做索引。
</p>
<p>
	21. 正确使用表关联
</p>
<p>
	利用外连接替换效率十分低下的not in运算，大大提高运行速度。
</p>
<p>
	如：
</p>
<p>
	select a.id from employee a where a.emp_no not in (select emp_no from employee1 where job ='SALE') （错）
</p>
<p>
	22. 使用临时表
</p>
<p>
	在必要的情况下，为减少读取次数，可以使用经过索引的临时表加快速度。
</p>
<p>
	如：
</p>
<p>
	select e.id from employee e ,dept d where e.dept_id=d.id and e.empno&gt;1000 order by e.id （错） &nbsp; &nbsp;select id,empno from employee into temp_empl where empno&gt;1000 order by id &nbsp; select m.id from temp_emp1 m,dept d where m.empno=d.id （对） &nbsp;
</p>
<p>
	对于大数据量sql语句性能优化更多的工作就交给dba去实践，我们程序员做好这些基本功就好了。
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