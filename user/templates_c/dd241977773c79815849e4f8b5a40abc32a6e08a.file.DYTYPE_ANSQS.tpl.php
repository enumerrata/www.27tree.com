<?php /* Smarty version Smarty-3.1.12, created on 2013-05-13 10:00:16
         compiled from "/www/users/itsrcs.com/user/templates/dy_s_i/DYTYPE_ANSQS.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1760896073519049302d6b11-44446765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd241977773c79815849e4f8b5a40abc32a6e08a' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/dy_s_i/DYTYPE_ANSQS.tpl',
      1 => 1367577446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1760896073519049302d6b11-44446765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5190493035bbd2_26014169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5190493035bbd2_26014169')) {function content_5190493035bbd2_26014169($_smarty_tpl) {?><span class="dy-items">
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