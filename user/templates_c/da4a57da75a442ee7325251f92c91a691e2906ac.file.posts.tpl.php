<?php /* Smarty version Smarty-3.1.12, created on 2013-05-03 11:33:37
         compiled from "/www/users/itsrcs.com/user/templates/split/rm/posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1821166014510c95c8cd5c85-76260569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da4a57da75a442ee7325251f92c91a691e2906ac' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/split/rm/posts.tpl',
      1 => 1367551983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1821166014510c95c8cd5c85-76260569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510c95c8cd6478_16084345',
  'variables' => 
  array (
    'page_bar' => 0,
    'post_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510c95c8cd6478_16084345')) {function content_510c95c8cd6478_16084345($_smarty_tpl) {?><div id="main_body">
    <span class="RedBar">
        <span class="RedBar-in">我发表的帖子</span>
    </span>
    <div style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['page_bar']->value;?>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['bi'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['post_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['name'] = 'bi';
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['total']);
?>
        <div style="margin-top:10px;border:1px solid #ccc;padding:10px;background:#fff;" class="borderR5 Shadow">
            <div><a href="<?php echo $_smarty_tpl->tpl_vars['post_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['url'];?>
" style="font-size:14px;" target="_blank"><?php echo $_smarty_tpl->tpl_vars['post_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['title'];?>
</a></div>
            <div style="line-height:20px;margin-top:4px;color:#444;"><?php echo $_smarty_tpl->tpl_vars['post_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['ctx'];?>
...</div>
            <div style="border-top:1px dashed #ccc;margin-top:5px;padding-top:5px;"><a href="<?php echo $_smarty_tpl->tpl_vars['post_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['url'];?>
" target="_blank">查看原文</a> | <a href="javascript" target="_blank">删除</a> | <?php echo $_smarty_tpl->tpl_vars['post_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['datetime'];?>
</div>
        </div>
    <?php endfor; endif; ?>
    <div style="text-align:right;margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['page_bar']->value;?>
</div>
</div><?php }} ?>