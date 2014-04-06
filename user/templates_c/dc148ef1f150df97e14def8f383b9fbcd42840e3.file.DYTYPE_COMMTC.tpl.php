<?php /* Smarty version Smarty-3.1.12, created on 2013-05-13 09:57:55
         compiled from "/www/users/itsrcs.com/user/templates/dy_s_i/DYTYPE_COMMTC.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5544094685184ebb562dd68-18491435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc148ef1f150df97e14def8f383b9fbcd42840e3' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/dy_s_i/DYTYPE_COMMTC.tpl',
      1 => 1368410273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5544094685184ebb562dd68-18491435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5184ebb5691302_89065879',
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5184ebb5691302_89065879')) {function content_5184ebb5691302_89065879($_smarty_tpl) {?><span class="dy-items">
    <a class="headwapper Shadow" href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['fuid'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['ush'];?>
" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['usn'];?>
</b> <span class="Gray">评论：</span><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['content'];?>

        <div style="margin-top:5px;margin-bottom:5px;padding:7px;border:1px solid #eee;color:#777;background:#fdfdfd;">
            <b class="dy_usn" style="display:inline-block;"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['musn'];?>
</b>：<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['tcontent'];?>

        </div>
        <div style="font-size:12px;">
            <span class="Dy-dt"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['time'];?>
</span>
        </div>
    </div>
    <div class="clear"></div>
</span><?php }} ?>