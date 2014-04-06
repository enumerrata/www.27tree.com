<?php /* Smarty version Smarty-3.1.12, created on 2013-05-03 11:33:38
         compiled from "/www/users/itsrcs.com/user/templates/split/rm/follows.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158927969510c95e240c914-75352894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c1ffee59d1ea80b39bef2f73562f5dad8d87b66' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/split/rm/follows.tpl',
      1 => 1367551982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158927969510c95e240c914-75352894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510c95e240d105_74067100',
  'variables' => 
  array (
    'fans_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510c95e240d105_74067100')) {function content_510c95e240d105_74067100($_smarty_tpl) {?><div id="main_body">
    <span class="RedBar">
        <span class="RedBar-in">我的关注</span>
    </span>
    <div style="margin-top:10px;">
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['fi'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['fi']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['name'] = 'fi';
$_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fans_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['fi']['total']);
?>
            <div class="rm-fans-wapp">
                <a class="headwapper" href="javascript:;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['fans_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fi']['index']]['ush'];?>
" width="45px" height="45px"/>
                </a>
                <div style="margin-left:55px;height:49px;">
                    <div class="Elipsis"><a href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['fans_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fi']['index']]['uid'];?>
?from=ucc"><?php echo $_smarty_tpl->tpl_vars['fans_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fi']['index']]['usn'];?>
</a></div>
                    <div class="Gray">关注 <?php echo $_smarty_tpl->tpl_vars['fans_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fi']['index']]['follows'];?>
 | 粉丝 <?php echo $_smarty_tpl->tpl_vars['fans_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fi']['index']]['fans'];?>
</div>
                    <div><a href="javascript:;" onclick="javascript:del_foll(<?php echo $_smarty_tpl->tpl_vars['fans_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['fi']['index']]['uid'];?>
,this);">取消关注</a></div>
                </div>
            </div>
        <?php endfor; endif; ?>
    </div>
</div><?php }} ?>