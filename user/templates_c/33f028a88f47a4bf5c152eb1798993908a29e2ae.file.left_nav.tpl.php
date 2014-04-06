<?php /* Smarty version Smarty-3.1.12, created on 2013-02-09 17:03:07
         compiled from "D:\inetpub\www\user\templates\split\nav\left_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16864511610cb48b019-67212667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33f028a88f47a4bf5c152eb1798993908a29e2ae' => 
    array (
      0 => 'D:\\inetpub\\www\\user\\templates\\split\\nav\\left_nav.tpl',
      1 => 1359910273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16864511610cb48b019-67212667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511610cb544c89_82691796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511610cb544c89_82691796')) {function content_511610cb544c89_82691796($_smarty_tpl) {?><a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
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