<?php /* Smarty version Smarty-3.1.12, created on 2013-05-18 17:52:34
         compiled from "./templates/v_booklist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13927393675169ea539263b4-18192271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6c77164a324239cc73e173a3752afe41c6e6944' => 
    array (
      0 => './templates/v_booklist.tpl',
      1 => 1368870575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13927393675169ea539263b4-18192271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5169ea539e1004_43970234',
  'variables' => 
  array (
    'book_area' => 0,
    'PATH' => 0,
    'left_nav' => 0,
    'Pages' => 0,
    'book_list' => 0,
    'book_rank' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5169ea539e1004_43970234')) {function content_5169ea539e1004_43970234($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['book_area']->value;?>
 - 程序员必备好书推荐 | 精选好书 | 编程学习好书 | PDF下载</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="编程好书,PDF下载,电子书下载,Java电子书,数据库电子书,Web开发电子书,C/C++编程电子书" />
        <meta name="description" content="二叉树社区电子书库,各种编程学习图书分享平台,各种Java电子书,数据库电子书,Web开发电子书,C/C++编程电子书资源分享。" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <script language="javascript" src="/sources-gz/coref.js.php"></script>
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/static/css/book_single.css" />
    </head>
    <body>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['nav_path'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                <div id="index-right-in-l">
                    <!--中-->
                    <span class="RedBar">
                        <span class="RedBar-in"><?php echo $_smarty_tpl->tpl_vars['book_area']->value;?>
 / 最新网友分享</span>
                    </span>
                    <div>

                        <div class="sp-page-wapp" id="sp-page-wapp-top">
                            <?php echo $_smarty_tpl->tpl_vars['Pages']->value;?>

                        </div>

                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['li'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['li']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['name'] = 'li';
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['book_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total']);
?>
                            <div class="vbook-items">
                                <div class="Bookwapper clearMarginL">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['img'];?>
" width="130px">
                                </div>
                                <div class="vbook-items-cont">
                                    <h1 class="Elipsis<?php if ($_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['new_add']==true){?> book-new-add<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['url'];?>
" target="_blank">《<?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['title'];?>
》</a></h1>
                                    <span style="display:block;"><span class="Gray">作者&nbsp;:&nbsp;</span><?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['author'];?>
</span>
                                    <div class="vcont autowarp">
                                        <?php echo $_smarty_tpl->tpl_vars['book_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['intro'];?>

                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        <?php endfor; endif; ?>

                        <div class="sp-page-wapp">
                            <?php echo $_smarty_tpl->tpl_vars['Pages']->value;?>

                        </div>

                    </div>
                    <!--中-->
                </div>
                <div id="index-right-in-r">
                    <!--右边栏-->
                    <div class="Shadow bright-in-i" style="margin-top:20px;">
                        <!--排行榜-->
                        <?php echo $_smarty_tpl->getSubTemplate ('./share_prom.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    </div>

                    <div class="Shadow bright-in-i">
                        <div class="ct-wapper">
                            <span class="RedBar">
                                <span class="RedBar-in">排行榜</span>
                            </span>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ri'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ri']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ri']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['book_rank']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
</b><a class="Elipsis" href="<?php echo $_smarty_tpl->tpl_vars['book_rank']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ri']['index']]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['book_rank']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ri']['index']]['title'];?>
 - [<?php echo $_smarty_tpl->tpl_vars['book_rank']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ri']['index']]['click'];?>
]">《<?php echo $_smarty_tpl->tpl_vars['book_rank']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ri']['index']]['title'];?>
》</a></div><?php endfor; endif; ?>
                        </div>
                        <!--排行榜-->
                    </div>
                    <!--右边栏-->
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>
    </body>
</html><?php }} ?>