<?php /* Smarty version Smarty-3.1.12, created on 2013-02-02 12:15:10
         compiled from "/www/users/itsrcs.com/user/templates/dy_sub_items/main_levw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:689832111510c92ceca4cd9-78743873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '477e0333e9755827383f0766f76bd11a4615f16e' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/dy_sub_items/main_levw.tpl',
      1 => 1359777265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '689832111510c92ceca4cd9-78743873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510c92cecc2c14_96717033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510c92cecc2c14_96717033')) {function content_510c92cecc2c14_96717033($_smarty_tpl) {?><span class="dy-items">
    <a class="headwapper Shadow" href="/user/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['fuid'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['ush'];?>
" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['usn'];?>
</b><span class="Gray">给你留言了</span> : <?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['content'];?>

        <span class="Gray block"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['time'];?>
</span>
    </div>
    <div class="clear"></div>
</span><?php }} ?>