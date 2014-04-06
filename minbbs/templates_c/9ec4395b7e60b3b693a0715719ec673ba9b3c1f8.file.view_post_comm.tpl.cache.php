<?php /* Smarty version Smarty-3.1.12, created on 2014-01-15 17:20:31
         compiled from "E:\_web\27tree\minbbs\templates\view_post_comm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153052d652dfeb6027-64480374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ec4395b7e60b3b693a0715719ec673ba9b3c1f8' => 
    array (
      0 => 'E:\\_web\\27tree\\minbbs\\templates\\view_post_comm.tpl',
      1 => 1363699358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153052d652dfeb6027-64480374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d652e0027755_40261173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d652e0027755_40261173')) {function content_52d652e0027755_40261173($_smarty_tpl) {?><span class="RedBar">
    <span class="RedBar-in">说几句吧</span><span class="Gray RedBar-in-mr">水水更健康</span>
</span>
<div id="vps-comm-wapper">
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ci'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ci']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['name'] = 'ci';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['BD']->value['comm']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ci']['total']);
?><div class="vps-wapper"><a class="headwapper"><img src="<?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['comment_ush'];?>
" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray"><?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['index'];?>
 / <a href="<?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['comment_uurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['comment_usn'];?>
</a> / <?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['comment_date_time'];?>
 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="<?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['r_index'];?>
" actUID="<?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['comment_uid'];?>
">回复</a></div><?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['comment_content'];?>
<div class="cms"><?php if ($_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['has_sub']){?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['si'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['si']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['name'] = 'si';
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['sub']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total']);
?><div class="sub-comm-item"><tx></tx><t></t><em class="ct-t-whw"><img src="<?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['sub'][$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['ush'];?>
" width="32px" height="32px"/></em><div style="margin-left:45px;line-height:20px;"><a href="/user/<?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['sub'][$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['fu'];?>
"><?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['sub'][$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['fun'];?>
</a> @ <a href="/user/<?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['sub'][$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['2u'];?>
"><?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['sub'][$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['2un'];?>
</a>&nbsp;：<?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['sub'][$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['ct'];?>
<span class="block Gray"><?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['sub'][$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['dt'];?>
 / <a href="javascript:;" rel="<?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['sub'][$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['sindex'];?>
" actUID="<?php echo $_smarty_tpl->tpl_vars['BD']->value['comm'][$_smarty_tpl->getVariable('smarty')->value['section']['ci']['index']]['sub'][$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['fu'];?>
" onclick="javascript:rep(this,2);">回复</a></span></div></div><?php endfor; endif; ?><?php }?></div></div></div><?php endfor; endif; ?>
</div><?php }} ?>