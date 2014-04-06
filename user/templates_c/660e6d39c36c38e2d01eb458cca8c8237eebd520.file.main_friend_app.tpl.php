<?php /* Smarty version Smarty-3.1.12, created on 2013-02-10 18:48:33
         compiled from "D:\inetpub\www\user\templates\dy_s_i\main_friend_app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265551177b011339d5-51462081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '660e6d39c36c38e2d01eb458cca8c8237eebd520' => 
    array (
      0 => 'D:\\inetpub\\www\\user\\templates\\dy_s_i\\main_friend_app.tpl',
      1 => 1359623402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265551177b011339d5-51462081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dy_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51177b01288685_81636969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51177b01288685_81636969')) {function content_51177b01288685_81636969($_smarty_tpl) {?><span class="dy-items">
    <span class="del-leaveword"><input type="hidden" name="dy-id" value="<<?php ?>?php echo $lev['dy-id'];?<?php ?>>" /></span>
    <em class="headwapper Shadow">
        <img src="<<?php ?>?php echo G::getHeadimg($lev['fuid'])?<?php ?>>" width="32px" height="32px"/>
    </em>
    <div style="margin-left:45px;">
        <a href='/user/<<?php ?>?php echo $lev['fuid'];?<?php ?>>' target="_blank"><<?php ?>?php echo $lev['fusername'];?<?php ?>></a>
        <span class="cRed">想添加你为好友</span>&nbsp;<a href="javascript:;" onclick="javascript:FriendAppCommand(this,1,<<?php ?>?php echo $lev['fuid'];?<?php ?>>,<<?php ?>?php echo $lev['dy-id'];?<?php ?>>);">接受</a> | <a href="javascript:;" onclick="javascript:FriendAppCommand(this,2,<<?php ?>?php echo $lev['fuid'];?<?php ?>>,<<?php ?>?php echo $lev['dy-id'];?<?php ?>>);">拒绝</a>
        <span class="block Gray"><<?php ?>?php echo $lev['time'];?<?php ?>></span>
    </div>
</span>
<span class="dy-items">
    <a class="headwapper Shadow" href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['uid'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['ush'];?>
" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['musn'];?>
</b> <span class="Gray">吐槽说：</span><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['content'];?>

        <span class="cRed">想添加你为好友</span>
        <a href="javascript:;" onclick="javascript:FriendAppCommand(this,1,<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['fuid'];?>
,<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['dy']-'id';?>
);">接受</a> | <a href="javascript:;" onclick="javascript:FriendAppCommand(this,2,<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['fuid'];?>
,<?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['dy']-'id';?>
);">拒绝</a>
        <span class="Gray block"><?php echo $_smarty_tpl->tpl_vars['dy_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dyi']['index']]['time'];?>
</span>
    </div>
    <div class="clear"></div>
</span><?php }} ?>