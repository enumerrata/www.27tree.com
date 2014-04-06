<?php /* Smarty version Smarty-3.1.12, created on 2013-02-10 12:09:07
         compiled from "D:\inetpub\www\user\templates\dy_s_i\main_amp-bla.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1996351171d63df5332-72631522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f597cba0069d250fbe86c7755349484cd1dbb925' => 
    array (
      0 => 'D:\\inetpub\\www\\user\\templates\\dy_s_i\\main_amp-bla.tpl',
      1 => 1359624164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1996351171d63df5332-72631522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51171d63e6eaf5_91121203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51171d63e6eaf5_91121203')) {function content_51171d63e6eaf5_91121203($_smarty_tpl) {?><span class="dy-items">
    <a class="headwapper Shadow" href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['uid'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['ush'];?>
" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['usn'];?>
</b>
        <span class="Gray">在文章：<a href="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['art_title'];?>
</a>提到了你</span>
        <br />并说：<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['content'];?>

        <span class="Gray block"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['time'];?>
</span>
    </div>
</span><?php }} ?>