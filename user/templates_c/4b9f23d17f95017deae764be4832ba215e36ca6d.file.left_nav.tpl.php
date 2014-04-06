<?php /* Smarty version Smarty-3.1.12, created on 2014-01-15 18:20:09
         compiled from "E:\_web\27tree\user\templates\split\nav\left_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2345652d660d95f2539-78448498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b9f23d17f95017deae764be4832ba215e36ca6d' => 
    array (
      0 => 'E:\\_web\\27tree\\user\\templates\\split\\nav\\left_nav.tpl',
      1 => 1367551980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2345652d660d95f2539-78448498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d660d9638a46_85426649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d660d9638a46_85426649')) {function content_52d660d9638a46_85426649($_smarty_tpl) {?><a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/index.html" class="left-nav-btn <?php if ($_smarty_tpl->tpl_vars['conf']->value['action']=="index"){?>left-nav-btn-ac<?php }?>">个人主页</a>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/mytc.html" class="left-nav-btn <?php if ($_smarty_tpl->tpl_vars['conf']->value['action']=="mytc"){?>left-nav-btn-ac<?php }?>">我的吐槽</a>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/blogs.html" class="left-nav-btn <?php if ($_smarty_tpl->tpl_vars['conf']->value['action']=="blogs"){?>left-nav-btn-ac<?php }?>">我的文章</a>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/posts.html" class="left-nav-btn <?php if ($_smarty_tpl->tpl_vars['conf']->value['action']=="posts"){?>left-nav-btn-ac<?php }?>">我的帖子</a>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/fans.html" class="left-nav-btn <?php if ($_smarty_tpl->tpl_vars['conf']->value['action']=="fans"){?>left-nav-btn-ac<?php }?>">我的粉丝</a>
<a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
/follows.html" class="left-nav-btn <?php if ($_smarty_tpl->tpl_vars['conf']->value['action']=="follows"){?>left-nav-btn-ac<?php }?>">我的关注</a><?php }} ?>