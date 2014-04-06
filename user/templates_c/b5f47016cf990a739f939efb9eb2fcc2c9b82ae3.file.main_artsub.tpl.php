<?php /* Smarty version Smarty-3.1.12, created on 2013-02-13 11:28:45
         compiled from "/www/users/itsrcs.com/user/templates/dy_s_i/main_artsub.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2058755535510c951b3acec3-95130900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5f47016cf990a739f939efb9eb2fcc2c9b82ae3' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/dy_s_i/main_artsub.tpl',
      1 => 1360725872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2058755535510c951b3acec3-95130900',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510c951b3d6d05_98911417',
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510c951b3d6d05_98911417')) {function content_510c951b3d6d05_98911417($_smarty_tpl) {?><span class="dy-items">
    <a class="headwapper Shadow" href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['uid'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['ush'];?>
" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['musn'];?>
</b>
        <span class="Gray">发表新博文</span>：<a href='<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['url'];?>
'>《<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['art_title'];?>
》</a>
        <div class="dy_ct">
            <?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['content'];?>
 ......
        </div>
        <span class="Gray block"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['time'];?>
</span>
    </div>
    <div class="clear"></div>
</span><?php }} ?>