<?php /* Smarty version Smarty-3.1.12, created on 2013-02-13 11:27:02
         compiled from "/www/users/itsrcs.com/user/templates/dy_s_i/main_comm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1763513151510c951b2f12f1-75670812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15db27bf1cc481420427a8b8b676592b357337db' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/dy_s_i/main_comm.tpl',
      1 => 1360725872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1763513151510c951b2f12f1-75670812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510c951b319f18_30844702',
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510c951b319f18_30844702')) {function content_510c951b319f18_30844702($_smarty_tpl) {?><span class="dy-items">
    <a class="headwapper Shadow" href="/user/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['uid'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['ush'];?>
" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['usn'];?>
</b>
        <span class="Gray">评论了您的文章：<a href='<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['url'];?>
'>《<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['art_title'];?>
》</a></span>并说：<br /><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['content'];?>

        <span class="Gray block"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['time'];?>
</span>
    </div>
    <div class="clear"></div>
</span><?php }} ?>