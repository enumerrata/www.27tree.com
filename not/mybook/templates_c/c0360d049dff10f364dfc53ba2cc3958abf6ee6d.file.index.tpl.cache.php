<?php /* Smarty version Smarty-3.1.12, created on 2013-05-25 09:39:23
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9351103495169e7f3043633-61756844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1368870575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9351103495169e7f3043633-61756844',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5169e7f322e6a7_82538234',
  'variables' => 
  array (
    'PATH' => 0,
    'left_nav' => 0,
    'SEC' => 0,
    'Dy' => 0,
    'Rank' => 0,
    'cont' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5169e7f322e6a7_82538234')) {function content_5169e7f322e6a7_82538234($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>程序员必备好书推荐 | 精选好书 | 编程学习好书 | IT技术好书推荐 | PDF下载</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="IT技术,编程好书,PDF下载,电子书下载,Java电子书,数据库电子书,Web开发电子书,C/C++编程电子书" />
        <meta name="description" content="二叉树社区电子书库,各种编程学习图书分享平台,各种Java电子书,数据库电子书,Web开发电子书,C/C++编程电子书资源分享。" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/static/css/book_single.css" />
    </head>
    <body>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['nav_path'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <div class="sdCenter">
            <div id="index-left">
                <!--左边栏-->
                <div style="margin-right:-1px;margin-top:20px;">
                    <?php echo $_smarty_tpl->tpl_vars['left_nav']->value;?>

                </div>
                <!--<div style="height:400px;background:url('/img/br_l.png') repeat-y right center #fff;">
                </div>-->
                <!--左边栏-->
            </div>
            <div id="index-right">
                <div id="index-right-in-l" class="borderR5">
                    <!--中-->

                    <div class="ct-wapper"><!--一周好书推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">一周好书推荐</span>
                        </span>
                        <div>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sidx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['name'] = 'sidx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['SEC']->value['sugg']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sidx']['total']);
?><a href="/bookLib/<?php echo $_smarty_tpl->tpl_vars['SEC']->value['sugg'][$_smarty_tpl->getVariable('smarty')->value['section']['sidx']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['java'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['title'];?>
" class="Bookwapper <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['sidx']['first']==1){?>clearMarginL<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['sugg'][$_smarty_tpl->getVariable('smarty')->value['section']['sidx']['index']]['img'];?>
" width="110px" height="145px" alt="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['sugg'][$_smarty_tpl->getVariable('smarty')->value['section']['sidx']['index']]['title'];?>
"/></a><?php endfor; endif; ?>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--JAVA推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">Web开发 - 最新分享</span>
                        </span>
                        <div>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['wdx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['name'] = 'wdx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['SEC']->value['web']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['wdx']['total']);
?><a href="/bookLib/<?php echo $_smarty_tpl->tpl_vars['SEC']->value['web'][$_smarty_tpl->getVariable('smarty')->value['section']['wdx']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['web'][$_smarty_tpl->getVariable('smarty')->value['section']['wdx']['index']]['title'];?>
" class="Bookwapper <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['wdx']['first']==1){?>clearMarginL<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['web'][$_smarty_tpl->getVariable('smarty')->value['section']['wdx']['index']]['img'];?>
" width="110px" height="145px" alt="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['web'][$_smarty_tpl->getVariable('smarty')->value['section']['wdx']['index']]['title'];?>
"/></a><?php endfor; endif; ?>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--JAVA推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">JAVA - 最新分享</span>
                        </span>
                        <div>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['name'] = 'idx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['SEC']->value['java']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['idx']['total']);
?><a href="/bookLib/<?php echo $_smarty_tpl->tpl_vars['SEC']->value['java'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['java'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['title'];?>
" class="Bookwapper <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['idx']['first']==1){?>clearMarginL<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['java'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['img'];?>
" width="110px" height="145px" alt="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['java'][$_smarty_tpl->getVariable('smarty')->value['section']['idx']['index']]['title'];?>
"/></a><?php endfor; endif; ?>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--NoSQL推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">NoSQL  - 最新分享</span>
                        </span>
                        <div>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['nidx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['name'] = 'nidx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['SEC']->value['nosql']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['nidx']['total']);
?><a href="/bookLib/<?php echo $_smarty_tpl->tpl_vars['SEC']->value['nosql'][$_smarty_tpl->getVariable('smarty')->value['section']['nidx']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['nosql'][$_smarty_tpl->getVariable('smarty')->value['section']['nidx']['index']]['title'];?>
" class="Bookwapper <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['nidx']['first']==1){?>clearMarginL<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['nosql'][$_smarty_tpl->getVariable('smarty')->value['section']['nidx']['index']]['img'];?>
" width="110px" height="145px" alt="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['nosql'][$_smarty_tpl->getVariable('smarty')->value['section']['nidx']['index']]['title'];?>
"/></a><?php endfor; endif; ?>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--C/C++推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">C/C++  - 最新分享</span>
                        </span>
                        <div>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cidx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['name'] = 'cidx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['SEC']->value['cocpp']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cidx']['total']);
?><a href="/bookLib/<?php echo $_smarty_tpl->tpl_vars['SEC']->value['cocpp'][$_smarty_tpl->getVariable('smarty')->value['section']['cidx']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['cocpp'][$_smarty_tpl->getVariable('smarty')->value['section']['cidx']['index']]['title'];?>
" class="Bookwapper <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['cidx']['first']==1){?>clearMarginL<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['cocpp'][$_smarty_tpl->getVariable('smarty')->value['section']['cidx']['index']]['img'];?>
" width="110px" height="145px" alt="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['cocpp'][$_smarty_tpl->getVariable('smarty')->value['section']['cidx']['index']]['title'];?>
"/></a><?php endfor; endif; ?>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--数据库-->
                        <span class="RedBar">
                            <span class="RedBar-in">数据库 - 最新分享</span>
                        </span>
                        <div>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['didx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['didx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['name'] = 'didx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['SEC']->value['database']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['didx']['total']);
?><a href="/bookLib/<?php echo $_smarty_tpl->tpl_vars['SEC']->value['database'][$_smarty_tpl->getVariable('smarty')->value['section']['didx']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['database'][$_smarty_tpl->getVariable('smarty')->value['section']['didx']['index']]['title'];?>
" class="Bookwapper <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['didx']['first']==1){?>clearMarginL<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['database'][$_smarty_tpl->getVariable('smarty')->value['section']['didx']['index']]['img'];?>
" width="110px" height="145px" alt="<?php echo $_smarty_tpl->tpl_vars['SEC']->value['database'][$_smarty_tpl->getVariable('smarty')->value['section']['didx']['index']]['title'];?>
"/></a><?php endfor; endif; ?>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <!--中-->
                </div>
                <div id="index-right-in-r">
                    <!--右边栏-->

                    <div class="Shadow bright-in-i" style="margin-top:20px;">
                        <!--排行榜-->
                        <?php echo $_smarty_tpl->getSubTemplate ('./share_prom.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                    </div>

                    <div class="Shadow bright-in-i">
                        <div class="ct-wapper">
                            <span class="RedBar">
                                <span class="RedBar-in">分享动态</span>
                            </span>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['di'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['di']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['di']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Dy']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['di']['name'] = 'di';
$_smarty_tpl->tpl_vars['smarty']->value['section']['di']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['di']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['di']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['di']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['di']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['di']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['di']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['di']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['di']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['di']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['di']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['di']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['di']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['di']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['di']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['di']['total']);
?><div class="bk-dy-items"><a class="headwapper" href="/blogm/usr-<?php echo $_smarty_tpl->tpl_vars['Dy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['di']['index']]['uid'];?>
.html"><img src="<?php echo $_smarty_tpl->tpl_vars['Dy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['di']['index']]['ush'];?>
" width="32px" height="32px" alt="<?php echo $_smarty_tpl->tpl_vars['Dy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['di']['index']]['usn'];?>
 的博客专栏"></a><div style="margin-left:45px;line-height:20px;"><a href="/bookLib/<?php echo $_smarty_tpl->tpl_vars['Dy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['di']['index']]['bookid'];?>
"><?php echo $_smarty_tpl->tpl_vars['Dy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['di']['index']]['title'];?>
</a><span class="Gray block">分享于 <?php echo $_smarty_tpl->tpl_vars['Dy']->value[$_smarty_tpl->getVariable('smarty')->value['section']['di']['index']]['time'];?>
</span></div></div><?php endfor; endif; ?>
                        </div>
                        <!--排行榜-->
                    </div>

                    <!--<div class="Shadow bright-in-i">
                        <div class="ct-wapper">
                            <span class="RedBar">
                                <span class="RedBar-in">排行榜</span>
                            </span>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ri'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ri']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Rank']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['name'] = 'ri';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['total']);
?><div class="bk-rank-items"><b class="bk-rank-b borderR5"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['ri']['iteration'];?>
</b><a class="Elipsis" href="/bookLib/<?php echo $_smarty_tpl->tpl_vars['Rank']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ri']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['Rank']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ri']['index']]['title'];?>
">《<?php echo $_smarty_tpl->tpl_vars['Rank']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ri']['index']]['title'];?>
》</a></div><?php endfor; endif; ?>
                </div>
            </div>-->

                    <div class="Shadow bright-in-i">
                        <!--热心会员-->
                        <div class="ct-wapper">
                            <span class="RedBar">
                                <span class="RedBar-in">会员贡献榜</span>
                            </span>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ct'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ct']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['name'] = 'ct';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cont']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ct']['total']);
?><div style="margin-top:10px;"><a class="headwapper" href="/blogm/usr-<?php echo $_smarty_tpl->tpl_vars['cont']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ct']['index']]['uid'];?>
.html"><img src="<?php echo $_smarty_tpl->tpl_vars['cont']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ct']['index']]['ush'];?>
" width="45px" height="45px" alt="<?php echo $_smarty_tpl->tpl_vars['cont']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ct']['index']]['usn'];?>
 的博客专栏"/></a><div style="margin-left:58px;line-height:25px;"><div class="Elipsis"><a style="font-size:16px;" href="/blogm/usr-<?php echo $_smarty_tpl->tpl_vars['cont']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ct']['index']]['uid'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['cont']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ct']['index']]['usn'];?>
</a></div><span class="Gray">分享了 <?php echo $_smarty_tpl->tpl_vars['cont']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ct']['index']]['count'];?>
 本书</span></div></div><?php endfor; endif; ?>
                        </div>
                        <!--热心会员-->
                    </div>
                    <!--右边栏-->
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['stat_path'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp2, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    </body>
</html><?php }} ?>