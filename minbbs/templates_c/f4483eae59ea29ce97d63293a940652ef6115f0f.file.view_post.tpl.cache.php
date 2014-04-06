<?php /* Smarty version Smarty-3.1.12, created on 2013-05-25 09:30:11
         compiled from "./templates/view_post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15708850551a0142387f8e8-44183512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4483eae59ea29ce97d63293a940652ef6115f0f' => 
    array (
      0 => './templates/view_post.tpl',
      1 => 1366293583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15708850551a0142387f8e8-44183512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BD' => 0,
    'SEO' => 0,
    'PATH' => 0,
    'postid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a014239164c8_94584154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a014239164c8_94584154')) {function content_51a014239164c8_94584154($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['BD']->value['title'];?>
</title>
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['BD']->value['title'];?>
:<?php echo $_smarty_tpl->tpl_vars['SEO']->value['desc'];?>
" />
        <meta name="keywords" content="Java编程 AJAX技术 PHP技术 WEB技术 IT技术社区" />
        <?php echo $_smarty_tpl->getSubTemplate ('./bbshead.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <link rel="stylesheet" type="text/css" href="/minbbs/static/css/postList.css" />
        <link rel="stylesheet" type="text/css" href="/minbbs/static/css/view_post.css?v=4-1" />
        <link rel="stylesheet" type="text/css" href="/mod/kd/themes/default/default.css" />
        <link rel="stylesheet" type="text/css" href="/mod/kd/SyntaxHighlighter/Styles/SyntaxHighlighter.css" />
    </head>
    <body>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['nav_path'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <div class="sdCenter" style="margin-top:15px;">
            <input type=hidden value="<?php echo $_smarty_tpl->tpl_vars['postid']->value;?>
" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="<?php echo $_smarty_tpl->tpl_vars['BD']->value['uurl'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BD']->value['ush'];?>
"/><span id="author-nickname"><?php echo $_smarty_tpl->tpl_vars['BD']->value['usn'];?>
</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title"><?php echo $_smarty_tpl->tpl_vars['BD']->value['title'];?>
</h1>
                        <span id="vps-title-info">由 <a href="<?php echo $_smarty_tpl->tpl_vars['BD']->value['uurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['BD']->value['usn'];?>
</a> 发表于 <?php echo $_smarty_tpl->tpl_vars['BD']->value['time'];?>
</span>
                    </div>

                    <div class="autowarp" id="vps-content"><?php echo $_smarty_tpl->tpl_vars['BD']->value['content'];?>
</div>
                </div>

                <!-- 编辑器 -->
                <div class="ps-items" id="ps-editor-wapper">
                    <textarea id="ps-editor" style="width:99.8%;display:none;margin-bottom:10px;"></textarea>
                    <a class="next-cp" style="margin-top:10px;" href="javascript:;" id="ps-submit-btn">马上发表</a>
                </div>
                <!-- 编辑器 -->

                <!-- 回复按钮 -->
                <div class="ps-items">
                    <?php echo $_smarty_tpl->getSubTemplate ('./view_post_comm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                    <a class="next-cp" id="loadEditor" style="margin-top:10px;">发表回复</a>
                </div>
                <!-- 回复按钮 -->
            </div>
            <div class="clear"></div>
        </div>
        <script charset="utf-8" src="/minbbs/bin_js/bbs-post.js?v=19"></script>
        <script charset="utf-8" src="/mod/kd/SyntaxHighlighter/Scripts/shCore.js"></script>
        <script language="javascript">$(function() {
            dp.SyntaxHighlighter.HighlightAll("code");
        });
        </script>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['stat_path'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp2, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    </body>
</html><?php }} ?>