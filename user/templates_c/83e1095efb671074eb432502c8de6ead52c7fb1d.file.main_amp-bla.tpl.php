<?php /* Smarty version Smarty-3.1.12, created on 2013-02-16 14:33:09
         compiled from "/www/users/itsrcs.com/user/templates/dy_s_i/main_amp-bla.tpl" */ ?>
<?php /*%%SmartyHeaderCode:573020230510c9a58446df0-27506541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83e1095efb671074eb432502c8de6ead52c7fb1d' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/dy_s_i/main_amp-bla.tpl',
      1 => 1360725871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '573020230510c9a58446df0-27506541',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510c9a5846fb93_63416682',
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510c9a5846fb93_63416682')) {function content_510c9a5846fb93_63416682($_smarty_tpl) {?><span class="dy-items">
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