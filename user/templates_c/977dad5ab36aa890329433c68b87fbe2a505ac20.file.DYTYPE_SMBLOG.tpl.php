<?php /* Smarty version Smarty-3.1.12, created on 2013-05-23 00:11:09
         compiled from "/www/users/itsrcs.com/user/templates/dylist/DYTYPE_SMBLOG.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1065448955519cee1dabfbc8-77372686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '977dad5ab36aa890329433c68b87fbe2a505ac20' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/dylist/DYTYPE_SMBLOG.tpl',
      1 => 1369239053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1065448955519cee1dabfbc8-77372686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_519cee1db29af6_53760922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519cee1db29af6_53760922')) {function content_519cee1db29af6_53760922($_smarty_tpl) {?><span class="dy-items">
    <a class="headwapper Shadow" href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['uid'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['ush'];?>
" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['musn'];?>
</b>
        <b class="dy-ac">发表新博文</b>：<a href='<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['art_url'];?>
'>《<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['art_title'];?>
》</a>
        <div class="dy-bcont borderR5"><div class="snbal"></div><div class="snbai"></div><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['content'];?>
 ......</div>
        <span class="Dy-dt block"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['time'];?>
 <a href="javascript:;">评论</a></span>
    </div>
    <div class="clear"></div>
</span><?php }} ?>