<?php /* Smarty version Smarty-3.1.12, created on 2014-01-15 18:20:09
         compiled from ".\templates\split\index_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20498511610cb2e7c24-21735550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06c7e440fa52b3d55a649e5ee0ea418fbf369809' => 
    array (
      0 => '.\\templates\\split\\index_head.tpl',
      1 => 1369239336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20498511610cb2e7c24-21735550',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511610cb46c3f3_93700455',
  'variables' => 
  array (
    'top_data' => 0,
    'conf' => 0,
    'PATH' => 0,
    'left_nav_opt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511610cb46c3f3_93700455')) {function content_511610cb46c3f3_93700455($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['top_data']->value['usn'];?>
的个人中心 - IT人的社交网络 - 二叉树社区</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="author" content="koodo@qq.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php?v=5-5" />
        <link rel="stylesheet" type="text/css" href="/static/css/user_main_style_<?php echo $_smarty_tpl->tpl_vars['conf']->value['usr_theme'];?>
.css?v=5-23" />
        <script src="/jss/dojo/dojo.js"></script>
        <script src="/jss/jquery-min.js"></script>
        <script src="/sources-gz/coref.js.php?v=5-23"></script>
        <script src="/jss/com.x.js"></script>
        <script src="/sources-gz/user.main.js.php?v=5-23"></script>
    </head>
    <body>
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['PATH']->value['nav_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="sdCenter" id="usr-main-wapper">
            <input type="hidden" value="0" id="dy-pl"/>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['conf']->value['action'];?>
" id="action"/>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['conf']->value['sub_action'];?>
" id="sub_action"/>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['conf']->value['tc_val_code'];?>
" id="tc-val"/>
            <div style="width:150px;float:left;">
                <div style="background:#FFF;">

                    <!--levf-nav-->
                    <?php if ($_smarty_tpl->tpl_vars['left_nav_opt']->value){?>
                        <?php echo $_smarty_tpl->getSubTemplate ('./nav/left_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->getSubTemplate ('./nav/left_nav_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    <?php }?>
                    <!--@levf-nav-->

                </div>
            </div>
            <div style="margin-left:149px;background:#fdfdfd;border:1px solid #ddd;border-top-right-radius:10px;border-bottom-right-radius:10px;border-bottom-left-radius:5px;"><!--break_point--><?php }} ?>