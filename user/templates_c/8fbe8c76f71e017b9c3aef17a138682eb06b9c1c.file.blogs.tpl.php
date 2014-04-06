<?php /* Smarty version Smarty-3.1.12, created on 2013-02-09 19:19:01
         compiled from "D:\inetpub\www\user\templates\split\rm\blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14327511630a54ad5a1-02986570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fbe8c76f71e017b9c3aef17a138682eb06b9c1c' => 
    array (
      0 => 'D:\\inetpub\\www\\user\\templates\\split\\rm\\blogs.tpl',
      1 => 1360321120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14327511630a54ad5a1-02986570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_bar' => 0,
    'blog_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511630a56a2518_32055283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511630a56a2518_32055283')) {function content_511630a56a2518_32055283($_smarty_tpl) {?><div id="main_body">
    <span class="RedBar">
        <span class="RedBar-in">我的博客文章</span>
    </span>
    <div style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['page_bar']->value;?>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['bi'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['bi']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bi']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['blog_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <div><a href="<?php echo $_smarty_tpl->tpl_vars['blog_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['url'];?>
" style="font-size:14px;" target="_blank"><?php echo $_smarty_tpl->tpl_vars['blog_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['title'];?>
</a></div>
            <div style="line-height:20px;margin-top:4px;color:#444;"><?php echo $_smarty_tpl->tpl_vars['blog_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['ctx'];?>
...</div>
            <div style="border-top:1px dashed #ccc;margin-top:5px;padding-top:5px;"><a href="<?php echo $_smarty_tpl->tpl_vars['blog_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['url'];?>
" target="_blank">查看原文</a> | <a href="javascript" target="_blank">删除</a> | <?php echo $_smarty_tpl->tpl_vars['blog_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['datetime'];?>
</div>
        </div>
    <?php endfor; endif; ?>
    <div style="text-align:right;margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['page_bar']->value;?>
</div>
</div><?php }} ?>