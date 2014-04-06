<?php /* Smarty version Smarty-3.1.12, created on 2014-01-15 18:12:43
         compiled from "E:\_web\27tree\minbbs\templates\index\editor\ques_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3074552d65f1b043207-02111046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b511f2a7191a1bba2fe3ee4552d4c3adb7a72d1a' => 
    array (
      0 => 'E:\\_web\\27tree\\minbbs\\templates\\index\\editor\\ques_editor.tpl',
      1 => 1363576552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3074552d65f1b043207-02111046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'INDEX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d65f1b085897_48391030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d65f1b085897_48391030')) {function content_52d65f1b085897_48391030($_smarty_tpl) {?><div class="ps-items" id="ps-sm-wapper">
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>
" id="sid"/>
    <span class="sdText" style="margin-bottom:10px;">
        <input type="text" value="" id="post-sm-title" placeholder="请输入标题"/>
    </span>
    <textarea id="ps-editor" style="width:99.8%;display:none;margin-bottom:10px;"></textarea>
    <a class="next-cp" style="margin-top:10px;" href="javascript:;" id="ps-submit-btn">发布问题</a>
</div><?php }} ?>