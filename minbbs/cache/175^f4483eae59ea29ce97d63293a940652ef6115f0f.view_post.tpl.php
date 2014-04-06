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
  'unifunc' => 'content_52d5d6398b2138_39755090',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d5d6398b2138_39755090')) {function content_52d5d6398b2138_39755090($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Delphi好书推荐</title>
        <meta name="description" content="Delphi好书推荐:
	1、《Delphi技术手册》RayLiscbner著632页　65元中国电力出版社


	2、《Delphi5开发人员指南》Steve&nbsp;Teixeira&amp;XavierPacheco著1263页138元机械工业出版社

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
            <input type=hidden value="175" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">Delphi好书推荐</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2012年10月23日 12:53</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	1、《Delphi 技术手册》 Ray Liscbner著 632页　65元 中国电力出版社
</p>
<p>
	2、《Delphi 5 开发人员指南》 Steve&nbsp;Teixeira &amp; Xavier Pacheco著 1263页 138元 机械工业出版社
</p>
<p>
	3、《Delphi COM 深入编程》 Eric
</p>
<p>
	Harmon著 473页 48元 机械工业出版社
</p>
<p>
	4、《Delphi DirectX图形与游戏程序设计》 John Ayres著 445页 45元
</p>
<p>
	电子科技大学出版社
</p>
<p>
	5、《Delphi 4 编程技术内幕》 Charlie Calvert著 985页 110元
</p>
<p>
	机械工业出版社
</p>
<p>
	6、《Delphi/Klyix 数据库开发》 Eric Harmon著 277页 29元 机械工业出版社
</p>
<p>
	7、《Delphi 5.x&nbsp;分布式多层应用》（三个系列） 李维著 机械工业出版社 （三本全买的话至少要260元）
</p>
<p>
	8、《Delphi 6/Klyix 2 Soap/Web
</p>
<p>
	Service 程序设计篇》　李维著 404页 65元 机械工业出版社
</p>
<p>
	9、《Delphi 深度探索》 陈省著 481页 49.8元
</p>
<p>
	华中科技大学出版社
</p>
<p>
	10、《Delphi 深度历险》 陈宽达著 422页 47元 科学出版社
</p>
<p>
	11、《Delphi 5.X&nbsp;ADO/MTS/COM+高级程序设计篇》　李维著　600页　机械工业出版社(90RMB)
</p>
<p>
	12、《DELPHI 5 企业级解决方案及应用剖析》
</p>
<p>
	13、《Advanced Delphi Developer's Guide to ADO》 Federov, Alex, Natalia&nbsp;Elmanova
</p>
<p>
	14、《Delphi5从入门到精通》，Marco Cantu著，电子工业出版社。在Delphi世界中，Marco Cantu&nbsp;作为书籍作者可说是人人皆知，Delphi从入门到精通系列更是绝对的经典。这本书虽然并不面向高端用户，但它全面地论述了Delphi编程中的各个方面，象组件开发、多线程、图象处理、报表打印、I/O、数据库、Inter-net应用等等，是亟待提高的初学者的不二之选。
</p>
<p>
	15、《Delphi4编程技术内幕》，CharlieCalvert著，机械工业出版社。作者是一位经验极其丰富的高级程序员，用深入浅出的语言，将Delphi中的许多复杂问题一一道来，令人豁然开朗。丰富的内容和独特的风格让这本书的读者不但有技术上的收获，而且有阅读上的快乐。很多人吐血推荐的东东，高手案头必备之物。
</p>
<p>
	16、《Delphi3开发使用手册》，机械工业出版社。由Delphi的内部开发人员所著，权威性可见一斑。
</p>
<p>
	虽然它的可读性并不是很好，但其全面、深入、权威的介绍，使得本书可以当作Delphi的使用手册来读。哪怕在
</p>
<p>
	Delphi5已经发布的今天，这本书仍然有其不可替代的位置。
</p>
<p>
	---------------------------------------
</p>
<p>
	为什么Delphi的好书这么少？
</p>
<p>
	喔，偶回答你，因为烂书太多了！！（不要丢偶……:)
</p>
<p>
	看着现在大把的Delphi书还在一本一本接着出，真是一片繁荣，社会形式一片大好！！
</p>
<p>
	But，随便翻开一本，准把你呕死！什么精通，宝典，原来是一周通的傻瓜书；什么高级技巧，深入底层，
</p>
<p>
	原来是控件使用手册；什么最新数据库指南，网络开发指南，原来是BDE入门加HTML入门……
</p>
<p>
	真TMD暴烂！！！！呕死人不偿命！！！
</p>
<p>
	本来兄弟们银子就不多，又被这些鸟人赚去，岂不“一书在手，每看必呕”，辗转反侧，不得入睡，那个是
</p>
<p>
	难受啊！！偶每想起偶买的第一本书，心头就隐隐做痛，于是边怀抱经典，做仰天太息状，边横眉冷对，怒
</p>
<p>
	目烂书，“呔！！！那里跑！！！”
</p>
<p>
	为了兄弟们好购书，本想”做个烂书通缉令“，转念一想，便做罢，不用我说你也知道不行了，总不能把90%的
</p>
<p>
	书都列出来吧:)
</p>
<p>
	so，还是把经典的列出来，供兄弟们参考：
</p>
<p>
	国外经典：
</p>
<p>
	1.Mastering Delphi X　Marco Cantu
</p>
<p>
	国内译做”Delphi X 从入门到精通“，机工版，从3到5，偶都有了:),
</p>
<p>
	6没买是因为没必要了，其实一本就
</p>
<p>
	足够了，小弟当年奉Marco哥为偶像，见了就买了，可怜了偶的腰包:( ，再说偶不做大哥-噢，不做D已经
</p>
<p>
	很多月了，偶现在正细细品味coffee呢!
</p>
<p>
	2. Delphi X Developer's Guide　Steve Teixeira,Xavier
</p>
<p>
	Pacheco
</p>
<p>
	国内译做”Delphi X 开发人员指南“，机工版，以上两本毋庸多说，每个兄弟应该人手两本:)
</p>
<p>
	3. Charlie&nbsp;Calvert's Delphi 4 Unleashed Charlie Calvert
</p>
<p>
	国内译做”Delphi
</p>
<p>
	4编程技术内幕“，当年的经典，不过偶认为现在没必要买了，理由后叙。
</p>
<p>
	4. Delphi in a Nutshell Ray Lischner
</p>
<p>
	国内译做”Delphi技术手册“，电力版，偶认为也是必备之书。
</p>
<p>
	5. Delphi com programming　Eric Harmon
</p>
<p>
	国内译做”Delphi com 深入编程“，机工版，当时号称”唯一一本Delphi Com书“ :)
</p>
<p>
	6. Delphi/Kylix Database&nbsp;Development　Eric Harmon
</p>
<p>
	国内译做“Delphi/Kylix数据库开发”，机工版，主要讲述DBExpress，当时也是唯一一本，看来Eric兄就
</p>
<p>
	好这口:)
</p>
<p>
	//others
</p>
<p>
	7. Building Delphi 6 Applications Paul Kimmel
</p>
<p>
	国内译做”Delphi 6 应用开发指南“，清华版，虽然不能跟Mastering系列比，但还是不错。
</p>
<p>
	8. Delphi Developer's&nbsp;Guide to XML　Keith Wood
</p>
<p>
	国内译做”Delphi&nbsp;XML权威指南“，电力版，好不好你自己看看先，反正Delphi讲XML的就这本。
</p>
<p>
	<br />
</p>
<p>
	国内好书：
</p>
<p>
	1. 李维系列
</p>
<p>
	大家应该没多大异议吧。
</p>
<p>
	2. Delphi深度历险
</p>
<p>
	3. 参透Delphi/Kylix
</p>
<p>
	4. Delphi深度探索
</p>
<p>
	<br />
</p>
<p>
	入门好书：不可否人，台湾的入门书往往质量要高些
</p>
<p>
	1.Delphi6 彻底研究
</p>
<p>
	2.Delphi6实务经典
</p>
<p>
	3.Delphi进销存程序设计
</p>
<p>
	4.Delphi 深度编程及其项目应用开发
</p>
<p>
	5.Delphi&nbsp;高手突破
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