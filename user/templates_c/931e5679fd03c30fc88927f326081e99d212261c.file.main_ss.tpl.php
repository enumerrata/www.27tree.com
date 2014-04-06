<?php /* Smarty version Smarty-3.1.12, created on 2013-02-09 17:03:07
         compiled from "D:\inetpub\www\user\templates\dy_s_i\main_ss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23390511610cb5d9864-37746202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '931e5679fd03c30fc88927f326081e99d212261c' => 
    array (
      0 => 'D:\\inetpub\\www\\user\\templates\\dy_s_i\\main_ss.tpl',
      1 => 1359695644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23390511610cb5d9864-37746202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511610cb609b65_43566366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511610cb609b65_43566366')) {function content_511610cb609b65_43566366($_smarty_tpl) {?><span class="dy-items">
    <a class="headwapper Shadow" href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['uid'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['ush'];?>
" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['musn'];?>
</b> <span class="Gray">吐槽说：</span>
        <div><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['content'];?>
</div>
        <span class="Gray block"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['time'];?>
</span>
    </div>
    <div class="clear"></div>
</span><?php }} ?>