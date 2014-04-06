<?php /* Smarty version Smarty-3.1.12, created on 2013-05-23 00:11:09
         compiled from "/www/users/itsrcs.com/user/templates/dylist/DYTYPE_COMMTC.tpl" */ ?>
<?php /*%%SmartyHeaderCode:510366590519cee1dbf04e0-48473041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6651b931a2cb2c14a5b00fa3d010157d6603ff70' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/dylist/DYTYPE_COMMTC.tpl',
      1 => 1369239053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '510366590519cee1dbf04e0-48473041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_519cee1dc19063_74118607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519cee1dc19063_74118607')) {function content_519cee1dc19063_74118607($_smarty_tpl) {?><span class="dy-items">
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