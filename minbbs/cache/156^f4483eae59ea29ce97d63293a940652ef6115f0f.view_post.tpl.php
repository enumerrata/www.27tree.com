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
  'unifunc' => 'content_52d501b0556b35_39116945',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d501b0556b35_39116945')) {function content_52d501b0556b35_39116945($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>常用网站颜色代码</title>
        <meta name="description" content="常用网站颜色代码:
	#FFB6C1LightPink浅粉红


	#FFC0CBPink粉红


	#DC143CCrimson深红/猩红


	#FFF0F5


	LavenderBlush淡紫红


	#DB7093PaleVioletRed弱紫罗兰" />
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
            <input type=hidden value="156" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">常用网站颜色代码</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2012年10月17日 14:14</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	#FFB6C1 LightPink 浅粉红
</p>
<p>
	#FFC0CB Pink 粉红
</p>
<p>
	#DC143C Crimson 深红/猩红
</p>
<p>
	#FFF0F5
</p>
<p>
	LavenderBlush 淡紫红
</p>
<p>
	#DB7093 PaleVioletRed 弱紫罗兰红
</p>
<p>
	#FF69B4 HotPink 热情的粉红
</p>
<p>
	#FF1493 DeepPink 深粉红
</p>
<p>
	#C71585 MediumVioletRed 中紫罗兰红
</p>
<p>
	#DA70D6 Orchid
</p>
<p>
	暗紫色/兰花紫
</p>
<p>
	#D8BFD8 Thistle 蓟色
</p>
<p>
	#DDA0DD Plum 洋李色/李子紫
</p>
<p>
	#EE82EE Violet 紫罗兰
</p>
<p>
	#FF00FF Magenta 洋红/玫瑰红
</p>
<p>
	#FF00FF Fuchsia 紫红/灯笼海棠
</p>
<p>
	#8B008B DarkMagenta
</p>
<p>
	深洋红
</p>
<p>
	#800080 Purple 紫色
</p>
<p>
	#BA55D3 MediumOrchid 中兰花紫
</p>
<p>
	#9400D3 DarkViolet
</p>
<p>
	暗紫罗兰
</p>
<p>
	#9932CC DarkOrchid 暗兰花紫
</p>
<p>
	#4B0082 Indigo 靛青/紫兰色
</p>
<p>
	#8A2BE2
</p>
<p>
	BlueViolet 蓝紫罗兰
</p>
<p>
	#9370DB MediumPurple 中紫色
</p>
<p>
	#7B68EE MediumSlateBlue
</p>
<p>
	中暗蓝色/中板岩蓝
</p>
<p>
	#6A5ACD SlateBlue 石蓝色/板岩蓝
</p>
<p>
	#483D8B DarkSlateBlue 暗灰蓝色/暗板岩蓝
</p>
<p>
	#E6E6FA Lavender 淡紫色/熏衣草淡紫
</p>
<p>
	#F8F8FF GhostWhite 幽灵白
</p>
<p>
	#0000FF Blue 纯蓝
</p>
<p>
	#0000CD MediumBlue 中蓝色
</p>
<p>
	#191970 MidnightBlue 午夜蓝
</p>
<p>
	#00008B DarkBlue 暗蓝色
</p>
<p>
	#000080 Navy 海军蓝
</p>
<p>
	#4169E1 RoyalBlue 皇家蓝/宝蓝
</p>
<p>
	#6495ED CornflowerBlue
</p>
<p>
	矢车菊蓝
</p>
<p>
	#B0C4DE LightSteelBlue 亮钢蓝
</p>
<p>
	#778899 LightSlateGray 亮蓝灰/亮石板灰
</p>
<p>
	#708090 SlateGray 灰石色/石板灰
</p>
<p>
	#1E90FF DodgerBlue 闪兰色/道奇蓝
</p>
<p>
	#F0F8FF
</p>
<p>
	AliceBlue 爱丽丝蓝
</p>
<p>
	#4682B4 SteelBlue 钢蓝/铁青
</p>
<p>
	#87CEFA LightSkyBlue 亮天蓝色
</p>
<p>
	#87CEEB SkyBlue 天蓝色
</p>
<p>
	#00BFFF DeepSkyBlue 深天蓝
</p>
<p>
	#ADD8E6 LightBlue 亮蓝
</p>
<p>
	#B0E0E6 PowderBlue 粉蓝色/火药青
</p>
<p>
	#5F9EA0 CadetBlue 军兰色/军服蓝
</p>
<p>
	#F0FFFF Azure
</p>
<p>
	蔚蓝色
</p>
<p>
	#E0FFFF LightCyan 淡青色
</p>
<p>
	#AFEEEE PaleTurquoise 弱绿宝石
</p>
<p>
	#00FFFF Cyan 青色
</p>
<p>
	#00FFFF Aqua 浅绿色/水色
</p>
<p>
	#00CED1 DarkTurquoise 暗绿宝石
</p>
<p>
	#2F4F4F DarkSlateGray
</p>
<p>
	暗瓦灰色/暗石板灰
</p>
<p>
	#008B8B DarkCyan 暗青色
</p>
<p>
	#008080 Teal 水鸭色
</p>
<p>
	#48D1CC
</p>
<p>
	MediumTurquoise 中绿宝石
</p>
<p>
	#20B2AA LightSeaGreen 浅海洋绿
</p>
<p>
	#40E0D0 Turquoise 绿宝石
</p>
<p>
	#7FFFD4 Aquamarine 宝石碧绿
</p>
<p>
	#66CDAA MediumAquamarine 中宝石碧绿
</p>
<p>
	#00FA9A
</p>
<p>
	MediumSpringGreen 中春绿色
</p>
<p>
	#F5FFFA MintCream 薄荷奶油
</p>
<p>
	#00FF7F SpringGreen 春绿色
</p>
<p>
	#3CB371 MediumSeaGreen 中海洋绿
</p>
<p>
	#2E8B57 SeaGreen 海洋绿
</p>
<p>
	#F0FFF0 Honeydew
</p>
<p>
	蜜色/蜜瓜色
</p>
<p>
	#90EE90 LightGreen 淡绿色
</p>
<p>
	#98FB98 PaleGreen 弱绿色
</p>
<p>
	#8FBC8F
</p>
<p>
	DarkSeaGreen 暗海洋绿
</p>
<p>
	#32CD32 LimeGreen 闪光深绿
</p>
<p>
	#00FF00 Lime 闪光绿
</p>
<p>
	#228B22
</p>
<p>
	ForestGreen 森林绿
</p>
<p>
	#008000 Green 纯绿
</p>
<p>
	#006400 DarkGreen 暗绿色
</p>
<p>
	#7FFF00
</p>
<p>
	Chartreuse 黄绿色/查特酒绿
</p>
<p>
	#7CFC00 LawnGreen 草绿色/草坪绿
</p>
<p>
	#ADFF2F GreenYellow 绿黄色
</p>
<p>
	#556B2F DarkOliveGreen 暗橄榄绿
</p>
<p>
	#9ACD32 YellowGreen 黄绿色
</p>
<p>
	#6B8E23
</p>
<p>
	OliveDrab 橄榄褐色
</p>
<p>
	#F5F5DC Beige 米色/灰棕色
</p>
<p>
	#FAFAD2 LightGoldenrodYellow 亮菊黄
</p>
<p>
	#FFFFF0 Ivory 象牙色
</p>
<p>
	#FFFFE0 LightYellow 浅黄色
</p>
<p>
	#FFFF00 Yellow 纯黄
</p>
<p>
	#808000 Olive 橄榄
</p>
<p>
	#BDB76B DarkKhaki 暗黄褐色/深卡叽布
</p>
<p>
	#FFFACD LemonChiffon
</p>
<p>
	柠檬绸
</p>
<p>
	#EEE8AA PaleGoldenrod 灰菊黄/苍麒麟色
</p>
<p>
	#F0E68C Khaki 黄褐色/卡叽布
</p>
<p>
	#FFD700
</p>
<p>
	Gold 金色
</p>
<p>
	#FFF8DC Cornsilk 玉米丝色
</p>
<p>
	#DAA520 Goldenrod 金菊黄
</p>
<p>
	#B8860B
</p>
<p>
	DarkGoldenrod 暗金菊黄
</p>
<p>
	#FFFAF0 FloralWhite 花的白色
</p>
<p>
	#FDF5E6 OldLace 老花色/旧蕾丝
</p>
<p>
	#F5DEB3 Wheat 浅黄色/小麦色
</p>
<p>
	#FFE4B5 Moccasin 鹿皮色/鹿皮靴
</p>
<p>
	#FFA500 Orange 橙色
</p>
<p>
	#FFEFD5 PapayaWhip 番木色/番木瓜
</p>
<p>
	#FFEBCD BlanchedAlmond 白杏色
</p>
<p>
	#FFDEAD
</p>
<p>
	NavajoWhite 纳瓦白/土著白
</p>
<p>
	#FAEBD7 AntiqueWhite 古董白
</p>
<p>
	#D2B48C Tan 茶色
</p>
<p>
	#DEB887
</p>
<p>
	BurlyWood 硬木色
</p>
<p>
	#FFE4C4 Bisque 陶坯黄
</p>
<p>
	#FF8C00 DarkOrange 深橙色
</p>
<p>
	#FAF0E6
</p>
<p>
	Linen 亚麻布
</p>
<p>
	#CD853F Peru 秘鲁色
</p>
<p>
	#FFDAB9 PeachPuff 桃肉色
</p>
<p>
	#F4A460 SandyBrown
</p>
<p>
	沙棕色
</p>
<p>
	#D2691E Chocolate 巧克力色
</p>
<p>
	#8B4513 SaddleBrown 重褐色/马鞍棕色
</p>
<p>
	#FFF5EE
</p>
<p>
	Seashell 海贝壳
</p>
<p>
	#A0522D Sienna 黄土赭色
</p>
<p>
	#FFA07A LightSalmon 浅鲑鱼肉色
</p>
<p>
	#FF7F50
</p>
<p>
	Coral 珊瑚
</p>
<p>
	#FF4500 OrangeRed 橙红色
</p>
<p>
	#E9967A DarkSalmon 深鲜肉/鲑鱼色
</p>
<p>
	#FF6347
</p>
<p>
	Tomato 番茄红
</p>
<p>
	#FFE4E1 MistyRose 浅玫瑰色/薄雾玫瑰
</p>
<p>
	#FA8072 Salmon 鲜肉/鲑鱼色
</p>
<p>
	#FFFAFA
</p>
<p>
	Snow 雪白色
</p>
<p>
	#F08080 LightCoral 淡珊瑚色
</p>
<p>
	#BC8F8F RosyBrown 玫瑰棕色
</p>
<p>
	#CD5C5C
</p>
<p>
	IndianRed 印度红
</p>
<p>
	#FF0000 Red 纯红
</p>
<p>
	#A52A2A Brown 棕色
</p>
<p>
	#B22222 FireBrick
</p>
<p>
	火砖色/耐火砖
</p>
<p>
	#8B0000 DarkRed 深红色
</p>
<p>
	#800000 Maroon 栗色
</p>
<p>
	#FFFFFF White 纯白
</p>
<p>
	#F5F5F5 WhiteSmoke 白烟
</p>
<p>
	#DCDCDC Gainsboro 淡灰色
</p>
<p>
	#D3D3D3 LightGrey 浅灰色
</p>
<p>
	#C0C0C0 Silver 银灰色
</p>
<p>
	#A9A9A9 DarkGray 深灰色
</p>
<p>
	#808080 Gray 灰色
</p>
<p>
	#696969
</p>
<p>
	DimGray 暗淡灰
</p>
<p>
	#000000 Black 纯黑
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