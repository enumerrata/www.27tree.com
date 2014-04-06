<?php /* Smarty version Smarty-3.1.12, created on 2013-02-09 21:40:38
         compiled from "D:\inetpub\www\user\templates\split\nav\left_nav_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:893511651d64dd004-08106354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de28ce02518674a325aa74c7cffb3a7579924ddb' => 
    array (
      0 => 'D:\\inetpub\\www\\user\\templates\\split\\nav\\left_nav_admin.tpl',
      1 => 1359911187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '893511651d64dd004-08106354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511651d67c43c4_05390556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511651d67c43c4_05390556')) {function content_511651d67c43c4_05390556($_smarty_tpl) {?><a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/index.html" class="left-nav-btn">个人主页</a>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/admin/index.html" class="left-nav-btn <?php if ($_smarty_tpl->tpl_vars['conf']->value['sub_action']=="index"){?>left-nav-btn-ac<?php }?>">管理首页</a>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/admin/submit_blog.html" class="left-nav-btn <?php if ($_smarty_tpl->tpl_vars['conf']->value['sub_action']=="submit_blog"){?>left-nav-btn-ac<?php }?>">发表文章</a>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/admin/alter_info.html" class="left-nav-btn <?php if ($_smarty_tpl->tpl_vars['conf']->value['sub_action']=="alter_info"){?>left-nav-btn-ac<?php }?>">修改资料</a>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/admin/alter_head.html" class="left-nav-btn <?php if ($_smarty_tpl->tpl_vars['conf']->value['sub_action']=="alter_head"){?>left-nav-btn-ac<?php }?>">修改头像</a><?php }} ?>