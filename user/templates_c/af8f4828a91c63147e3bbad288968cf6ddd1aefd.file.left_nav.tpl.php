<?php /* Smarty version Smarty-3.1.12, created on 2013-05-03 11:33:06
         compiled from "/www/users/itsrcs.com/user/templates/split/nav/left_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:625463148511b0806e19890-77776738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af8f4828a91c63147e3bbad288968cf6ddd1aefd' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/split/nav/left_nav.tpl',
      1 => 1367551981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '625463148511b0806e19890-77776738',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511b0806e6afd5_01576984',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511b0806e6afd5_01576984')) {function content_511b0806e6afd5_01576984($_smarty_tpl) {?><a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
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