<?php /* Smarty version Smarty-3.1.12, created on 2013-05-23 00:11:09
         compiled from "/www/users/itsrcs.com/user/templates/dylist/DYTYPE_ANSQS.tpl" */ ?>
<?php /*%%SmartyHeaderCode:601171583519cee1dbc4591-10659869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcdac03ff4f001d04f1c0ddb579eed0ff8a9e708' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/dylist/DYTYPE_ANSQS.tpl',
      1 => 1369239049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '601171583519cee1dbc4591-10659869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_519cee1dbed1f4_42570466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519cee1dbed1f4_42570466')) {function content_519cee1dbed1f4_42570466($_smarty_tpl) {?><span class="dy-items">
    <a class="headwapper Shadow" href="/user/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['fuid'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['ush'];?>
" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['usn'];?>
</b>
        <b class="dy-ac">回答了你的问题</b>：<a href='<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['url'];?>
'>《<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['art_title'];?>
》</a></span>
        <br /><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['content'];?>

        <span class="dy-ac block"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['time'];?>
</span>
    </div>
    <div class="clear"></div>
</span><?php }} ?>