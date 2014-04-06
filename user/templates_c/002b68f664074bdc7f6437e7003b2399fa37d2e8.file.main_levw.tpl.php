<?php /* Smarty version Smarty-3.1.12, created on 2013-02-09 17:03:07
         compiled from "D:\inetpub\www\user\templates\dy_s_i\main_levw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18773511610cb6ebc78-91135704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '002b68f664074bdc7f6437e7003b2399fa37d2e8' => 
    array (
      0 => 'D:\\inetpub\\www\\user\\templates\\dy_s_i\\main_levw.tpl',
      1 => 1359193343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18773511610cb6ebc78-91135704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511610cb7248d4_41563417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511610cb7248d4_41563417')) {function content_511610cb7248d4_41563417($_smarty_tpl) {?><span class="dy-items">
    <a class="headwapper Shadow" href="/user/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['fuid'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['ush'];?>
" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['usn'];?>
</b><span class="Gray">给你留言了</span> : <?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['content'];?>

        <span class="Gray block"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['time'];?>
</span>
    </div>
    <div class="clear"></div>
</span><?php }} ?>