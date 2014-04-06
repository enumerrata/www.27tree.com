<?php /* Smarty version Smarty-3.1.12, created on 2014-01-15 18:20:09
         compiled from "E:\_web\27tree\user\templates\dy_main_engine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2952952d660d9949d88-87528360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32eb007f950575d56c7e0afda10cf233027fe5a6' => 
    array (
      0 => 'E:\\_web\\27tree\\user\\templates\\dy_main_engine.tpl',
      1 => 1367551984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2952952d660d9949d88-87528360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d660d9961481_50469797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d660d9961481_50469797')) {function content_52d660d9961481_50469797($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dyi'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dyi']);
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