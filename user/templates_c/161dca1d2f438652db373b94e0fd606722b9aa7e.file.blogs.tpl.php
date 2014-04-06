<?php /* Smarty version Smarty-3.1.12, created on 2013-05-03 11:33:36
         compiled from "/www/users/itsrcs.com/user/templates/split/rm/blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:345006391510c95c80df3f3-43764419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '161dca1d2f438652db373b94e0fd606722b9aa7e' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/split/rm/blogs.tpl',
      1 => 1367551982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '345006391510c95c80df3f3-43764419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510c95c80dfbf5_09473277',
  'variables' => 
  array (
    'page_bar' => 0,
    'blog_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510c95c80dfbf5_09473277')) {function content_510c95c80dfbf5_09473277($_smarty_tpl) {?><div id="main_body">
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
        <div id="bg-wapp-<?php echo $_smarty_tpl->tpl_vars['blog_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['bid'];?>
" class="borderR5 Shadow bg-wapp">
            <div class="bg-title"><a href="<?php echo $_smarty_tpl->tpl_vars['blog_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['blog_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['title'];?>
</a></div>
            <div class="bg-content" id="bg-content-<?php echo $_smarty_tpl->tpl_vars['blog_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['bid'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['ctx'];?>
...</div>
            <div class="bg-bar">
                <a href="<?php echo $_smarty_tpl->tpl_vars['blog_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['url'];?>
" target="_blank">查看原文</a> | <a href="javascript:;" class="bg-delbtn" data-blogid="<?php echo $_smarty_tpl->tpl_vars['blog_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['bid'];?>
">删除</a> | <a href="javascript:;" class="bg-editbtn" data-blogid="<?php echo $_smarty_tpl->tpl_vars['blog_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['bid'];?>
">编辑</a> | <?php echo $_smarty_tpl->tpl_vars['blog_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['bi']['index']]['datetime'];?>

            </div>
        </div>
    <?php endfor; endif; ?>
    <div style="text-align:right;margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['page_bar']->value;?>
</div>
</div><?php }} ?>