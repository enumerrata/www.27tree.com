<?php /* Smarty version Smarty-3.1.12, created on 2013-02-11 22:55:51
         compiled from "D:\inetpub\www\templates\nav_v3.php" */ ?>
<?php /*%%SmartyHeaderCode:17379511610cb47a206-35319993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ea42666e61fab0f19720b4a1d8af1751fb748bb' => 
    array (
      0 => 'D:\\inetpub\\www\\templates\\nav_v3.php',
      1 => 1360589138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17379511610cb47a206-35319993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511610cb47d716_95914487',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511610cb47d716_95914487')) {function content_511610cb47d716_95914487($_smarty_tpl) {?><div class="Shadow" id="navWapper">
    <div class="sdCenter nav-v3">
        <div style="float:left;">
            <a class="logo-v3" href="/" title="返回首页"></a>
            <div id="nav">
                <ul>
                    <li><a href="/">首页</a></li>
                    <li><a href="/blog/index.html">最新<b class="cRed">博客</b></a></li>
                    <li><a href="/q_a/">在线<b class="cRed">问答</b></a></li>
                    <li><a href="/bookLib/">技术宅必备<b class="cRed">好书</b></a></li>
                    <li style="border:none;"><a href="/minbbs/"><b class="cRed">讨论</b>区</a></li>
                </ul>
            </div>
        </div>
        <div id="nav-right">
            <span class="sdText-search Shadow borderR3">
                <input type="text" id="search-inp" class="borderR3" placeholder="请输入搜索内容" onkeydown="search_enter(event);">
            </span>
            <a class="s-pages-i search-btn borderR10" href="javascript:;" onclick="Search($('#search-inp').val())">GO</a>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div id="usr-bar">
    <div id="usr-bar-i">
        <div class="ms-l"></div>
        <div>
            <a class="ms-btn" id="ms-btn-top" href="javascript:;" onclick="javascript:goTop();" title="页面顶部"></a>
            <a class="ms-btn" id="ms-btn-ush"></a>
            <a class="ms-btn" id="ms-btn-log" href="/account/login/" title="登录你的帐号">Log</a>   
            <a class="ms-btn" id="ms-btn-reg" href="/account/register/" title="注册一个帐号">Reg</a>
            <a class="ms-btn" id="ms-btn-dy" href="javascript:;" title="动态"><b id="ms-btn-dym">9+</b></a>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]--><?php }} ?>