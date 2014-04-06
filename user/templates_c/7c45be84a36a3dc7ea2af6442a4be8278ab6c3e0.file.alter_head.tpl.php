<?php /* Smarty version Smarty-3.1.12, created on 2013-02-09 21:40:44
         compiled from "D:\inetpub\www\user\templates\split\am\alter_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23161511651dcbfddf2-77832755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c45be84a36a3dc7ea2af6442a4be8278ab6c3e0' => 
    array (
      0 => 'D:\\inetpub\\www\\user\\templates\\split\\am\\alter_head.tpl',
      1 => 1360242624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23161511651dcbfddf2-77832755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511651dcef8d67_49816540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511651dcef8d67_49816540')) {function content_511651dcef8d67_49816540($_smarty_tpl) {?><div id="main_body"><span class="RedBar"><span class="RedBar-in">修改个人头像</span></span><div id="alert-bar" class="borderR5">请在下面裁剪图片</div><div class="uc-btn-wapper"><a class="uc-btn" href="javascript:;" id="am-head-sw"><span id="am-head-ultip">上传自定义头像</span></a></div><div class="uc-btn-wapper" style="display:none;"><a class="uc-btn" href="javascript:;" id="am-head-sm"><img src="/img/up-load-16.png" align="absmiddle" style="margin-top:-2px;"/>上传一张图片</a></div><div id="al-head-lbar"></div><div id="al-head-list"><?php echo $_smarty_tpl->tpl_vars['head_list']->value;?>
<div class="clear"></div></div><div id="al-head-pl" style="display:none;"><div><img id="am-imgpre" src="/user/sources/img/uc_ush_upload_bg.png" width="100%" name="src" class="Shadow block" style="margin:0 auto;" /></div><form id="cropdata"><input type="hidden" size="10" id="x1" name="x" value="0" readonly="readonly"/><!-- 起始位置的y坐标 --><input type="hidden" size="10" id="y1" name="y" value="0" readonly="readonly"/><!-- 宽 --><input type="hidden" size="10" id="w" name="w" value="120" readonly="readonly"/><!-- 高 --><input type="hidden" size="10" id="h" name="h" value="120" readonly="readonly"/><input type="hidden" size="10" id="al-imgn" name="al-imgn" readonly="readonly"/><input type="hidden" size="10" id="al-src" name="al-src" readonly="readonly"/><input type="hidden" size="10" id="al-scale" name="al-scale" readonly="readonly"/></from><div class="uc-btn-wapper" style="margin-top:5px;display:none;"><a class="uc-btn" href="javascript:;" id="am-head-save">确认裁剪并保存</a></div></div></div><?php }} ?>