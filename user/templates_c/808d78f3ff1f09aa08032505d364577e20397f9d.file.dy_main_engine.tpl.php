<?php /* Smarty version Smarty-3.1.12, created on 2013-02-09 17:03:07
         compiled from "D:\inetpub\www\user\templates\dy_main_engine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31897511610cb5af1c0-73535122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '808d78f3ff1f09aa08032505d364577e20397f9d' => 
    array (
      0 => 'D:\\inetpub\\www\\user\\templates\\dy_main_engine.tpl',
      1 => 1359779707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31897511610cb5af1c0-73535122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511610cb5cd140_84337356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511610cb5cd140_84337356')) {function content_511610cb5cd140_84337356($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dyi'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['name'] = 'dyi';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dy_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']['total']);
?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['tpl'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php endfor; endif; ?><?php }} ?>