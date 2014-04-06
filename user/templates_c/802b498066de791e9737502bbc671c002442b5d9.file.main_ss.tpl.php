<?php /* Smarty version Smarty-3.1.12, created on 2013-02-13 11:27:02
         compiled from "/www/users/itsrcs.com/user/templates/dy_s_i/main_ss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296321027510c951b25d0d1-86816104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '802b498066de791e9737502bbc671c002442b5d9' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/dy_s_i/main_ss.tpl',
      1 => 1360725873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296321027510c951b25d0d1-86816104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510c951b2b7672_94151550',
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510c951b2b7672_94151550')) {function content_510c951b2b7672_94151550($_smarty_tpl) {?><span class="dy-items">
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