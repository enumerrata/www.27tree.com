<?php /* Smarty version Smarty-3.1.12, created on 2013-02-02 21:46:32
         compiled from "/www/users/itsrcs.com/user/templates/left_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1096151374510c92ceb93e35-10821658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83f1ecf2d84432bcf96c0ed4f0ec2b12e5778b03' => 
    array (
      0 => '/www/users/itsrcs.com/user/templates/left_nav.tpl',
      1 => 1359812784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1096151374510c92ceb93e35-10821658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_510c92cec03cd5_70364769',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510c92cec03cd5_70364769')) {function content_510c92cec03cd5_70364769($_smarty_tpl) {?><a href="/user/<?php echo $_smarty_tpl->tpl_vars['conf']->value['uid'];?>
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