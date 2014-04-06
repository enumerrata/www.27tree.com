<?php /* Smarty version Smarty-3.1.12, created on 2013-02-11 12:01:34
         compiled from "D:\inetpub\www\user\templates\dy_s_i\main_amp-bbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1893351171d63c6b271-42394230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a24210e0284c7458921a03fce1ed08fa632ee8d' => 
    array (
      0 => 'D:\\inetpub\\www\\user\\templates\\dy_s_i\\main_amp-bbs.tpl',
      1 => 1360555292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1893351171d63c6b271-42394230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51171d63d82672_44942927',
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51171d63d82672_44942927')) {function content_51171d63d82672_44942927($_smarty_tpl) {?><span class="dy-items">
    <a class="headwapper Shadow" href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['uid'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['ush'];?>
" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['musn'];?>
</b>
        <span class="Gray">在论坛帖子：<a href="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['art_title'];?>
</a>提到了你</span>
        <br />并说：<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['content'];?>

        <span class="Gray block"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['time'];?>
</span>
    </div>
</span><?php }} ?>