<?php /* Smarty version Smarty-3.1.12, created on 2014-01-15 17:19:48
         compiled from "E:\_web\27tree\minbbs\templates\index\editor\default_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1663252d652b4b5cb24-96482248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '742b77f29a890743ef67fe1bf1cfe139625005cd' => 
    array (
      0 => 'E:\\_web\\27tree\\minbbs\\templates\\index\\editor\\default_editor.tpl',
      1 => 1363576552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1663252d652b4b5cb24-96482248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'INDEX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d652b4b609a6_30123933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d652b4b609a6_30123933')) {function content_52d652b4b609a6_30123933($_smarty_tpl) {?><div class="ps-items" id="ps-sm-wapper">
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>
" id="sid"/>
    <span class="sdText" style="margin-bottom:10px;">
        <input type="text" value="" id="post-sm-title" placeholder="请输入标题"/>
    </span>
    <textarea id="ps-editor" style="width:99.8%;display:none;margin-bottom:10px;"></textarea>
    <a class="next-cp" style="margin-top:10px;" href="javascript:;" id="ps-submit-btn">马上发表</a>
</div><?php }} ?>