<?php /* Smarty version Smarty-3.1.12, created on 2013-05-03 12:05:27
         compiled from "/www/users/itsrcs.com/user/templates/split/nav/left_nav_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1197490075511b0825a26ee1-13724951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '196949f105bf45476afebc81b630abd5cc2d6099' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/split/nav/left_nav_admin.tpl',
      1 => 1367551982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1197490075511b0825a26ee1-13724951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511b0825a9e7e2_66565014',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511b0825a9e7e2_66565014')) {function content_511b0825a9e7e2_66565014($_smarty_tpl) {?><a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/index.html" class="left-nav-btn">个人主页</a>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/admin/index.html" class="left-nav-btn <?php if ($_smarty_tpl->tpl_vars['conf']->value['sub_action']=="index"){?>left-nav-btn-ac<?php }?>">管理首页</a>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/admin/submit_blog.html" class="left-nav-btn <?php if ($_smarty_tpl->tpl_vars['conf']->value['sub_action']=="submit_blog"){?>left-nav-btn-ac<?php }?>">发表文章</a>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/admin/alter_info.html" class="left-nav-btn <?php if ($_smarty_tpl->tpl_vars['conf']->value['sub_action']=="alter_info"){?>left-nav-btn-ac<?php }?>">修改资料</a>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/admin/alter_head.html" class="left-nav-btn <?php if ($_smarty_tpl->tpl_vars['conf']->value['sub_action']=="alter_head"){?>left-nav-btn-ac<?php }?>">修改头像</a><?php }} ?>