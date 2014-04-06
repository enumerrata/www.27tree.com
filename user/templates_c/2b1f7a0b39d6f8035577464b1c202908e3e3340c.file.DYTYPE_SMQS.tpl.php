<?php /* Smarty version Smarty-3.1.12, created on 2013-05-23 00:16:02
         compiled from "/www/users/itsrcs.com/user/templates/dylist/DYTYPE_SMQS.tpl" */ ?>
<?php /*%%SmartyHeaderCode:639102922519cef42158614-70693898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b1f7a0b39d6f8035577464b1c202908e3e3340c' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/dylist/DYTYPE_SMQS.tpl',
      1 => 1369239053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '639102922519cef42158614-70693898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_519cef421c2cf8_09944134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519cef421c2cf8_09944134')) {function content_519cef421c2cf8_09944134($_smarty_tpl) {?><span class="dy-items">
    <a class="headwapper Shadow" href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['uid'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['ush'];?>
" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['musn'];?>
</b>
        <b class="dy-ac">提问</b>：<a href='<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['art_url'];?>
'>《<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['art_title'];?>
》</a>
        <div class="dy-bcont borderR5"><div class="snbal"></div><div class="snbai"></div><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['content'];?>
 ......</div>
        <span class="Dy-dt block"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['time'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['art_url'];?>
" target="_blank">去看看</a></span>
    </div>
    <div class="clear"></div>
</span><?php }} ?>