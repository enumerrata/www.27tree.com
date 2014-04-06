<?php /* Smarty version Smarty-3.1.12, created on 2013-02-13 13:33:17
         compiled from "/www/users/itsrcs.com/user/templates/dy_s_i/main_levw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:952322846510c951b386c18-97276270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2e0f2330f10b0e68770684f11be22d23c0860c7' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/dy_s_i/main_levw.tpl',
      1 => 1360725873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '952322846510c951b386c18-97276270',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510c951b3a82d9_03279575',
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510c951b3a82d9_03279575')) {function content_510c951b3a82d9_03279575($_smarty_tpl) {?><span class="dy-items">
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