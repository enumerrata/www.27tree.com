<?php /* Smarty version Smarty-3.1.12, created on 2014-01-15 17:19:28
         compiled from ".\templates\view_blog_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81652d652a046ab02-47944353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a5c219c8f377b1d1880303aaef272e99a0d0279' => 
    array (
      0 => '.\\templates\\view_blog_list.tpl',
      1 => 1367937644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81652d652a046ab02-47944353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Config' => 0,
    'Opt_blogprom' => 0,
    'PATH' => 0,
    'ClickRank' => 0,
    'BlogM' => 0,
    'sugg_jobs' => 0,
    'sugg_tech' => 0,
    'PAGES' => 0,
    'main_BlogList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d652a05f1564_11773142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d652a05f1564_11773142')) {function content_52d652a05f1564_11773142($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>博客广场 - 二叉树程序员社区</title>
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/not/css/blog_list.css?v=5-7" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
    </head>
    <body>
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['Config']->value['pagelite'];?>
" id="maxpagelite" />
        <input type="hidden" value="0,<?php echo $_smarty_tpl->tpl_vars['Config']->value['pagelite'];?>
" id="pagelite" />
        <input type="hidden" id="option_blogprom" value="<?php echo $_smarty_tpl->tpl_vars['Opt_blogprom']->value;?>
" />
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['nav_path'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="sdCenter">
            <div class="blog-list-wapper-left">
                <div style="border:1px solid #ccc;border-top:3px solid #6d9906;background-color:#fff;position:relative;padding:10px 15px;width:256px;background:url('/img/br_l.png') repeat-y right center #fff;">
                    <div class="atr-bac-left"></div>

                    <div class="blw-wapper">
                        <a href="http://www.27tree.com/rss/" rel="nofollow" target="_blank">
                            <img src="/not/sources/img/rss.png" class="borderR3 block Shadow"/>
                        </a>
                    </div>

                    <div class="blw-wapper">
                        <span class="RedBar">
                            <span class="RedBar-in">热门<a href="/blog/index.html">博文</a></span>
                        </span>
                        <ul class="sdULpatch">
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['name'] = 'index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ClickRank']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['index']['total']);
?><li class="Elipsis"><a href="<?php echo $_smarty_tpl->tpl_vars['ClickRank']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['ClickRank']->value[$_smarty_tpl->getVariable('smarty')->value['section']['index']['index']]['title'];?>
</a></li><?php endfor; endif; ?>
                        </ul>
                    </div>
                    <div class="blw-wapper">
                        <span class="RedBar">
                            <span class="RedBar-in">推荐<a>博主</a></span>
                        </span>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['BlogM']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
                            <div style="margin-top:10px;">
                                <a class="headwapper" href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['BlogM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['uid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['BlogM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['usn'];?>
 - 的博客专栏">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['BlogM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['ush'];?>
" height="45px" width="45px"/>
                                </a>
                                <div style="margin-left:55px;line-height:18px;" class="Gray">
                                    <a href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['BlogM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['BlogM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['usn'];?>
</a>
                                    <div class="Elipsis">最新文章：<a href="<?php echo $_smarty_tpl->tpl_vars['BlogM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['BlogM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['title'];?>
</a></div>
                                    <div>访问量：<?php echo $_smarty_tpl->tpl_vars['BlogM']->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['readi'];?>
</div>
                                </div>
                            </div>
                        <?php endfor; endif; ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <!-- blog_list_right -->
            <div class="blog-list-wapper Shadow">
                <a class='toTopbtn' href='javascript:;' onclick='goTop()'></a>
                <div>
                    <div id="w-item-l">
                        <span class="RedBar">
                            <span class="RedBar-in">技术 - 推荐博文</span>
                        </span>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sij'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sij']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['name'] = 'sij';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sugg_jobs']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sij']['total']);
?>
                            <div>
                                <h1 class="Elipsis"><a href="<?php echo $_smarty_tpl->tpl_vars['sugg_jobs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sij']['index']]['href'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['sugg_jobs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sij']['index']]['title'];?>
</a></h1>
                            </div>
                        <?php endfor; endif; ?>
                    </div>

                    <div id="w-item-r">
                        <span class="RedBar">
                            <span class="RedBar-in">职场 - 推荐博文</span>
                        </span>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sit'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sit']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['name'] = 'sit';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sugg_tech']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sit']['total']);
?>
                            <div>
                                <h1 class="Elipsis"><a href="<?php echo $_smarty_tpl->tpl_vars['sugg_tech']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sit']['index']]['href'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['sugg_tech']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sit']['index']]['title'];?>
</a></h1>
                            </div>
                        <?php endfor; endif; ?>
                    </div>
                </div>

                <div id="nblog-list-wapp">
                    <span class="RedBar">
                        <span class="RedBar-in">最新博文</span>
                        <span class="Gray RedBar-in-mr">今天你博起了吗</span>
                    </span>
                    <div style="margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['PAGES']->value;?>
</div>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['main_BlogList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?><div class="blog-list-item"><div class="headwapper"><a href="/user/visit/<?php echo $_smarty_tpl->tpl_vars['main_BlogList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['uid'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['main_BlogList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ush'];?>
?<?php ?>>_64x" width="64px" height="64px"/></a></div><div class="ItemContentx"><h1 class="bl-head1"><a class="<?php if ($_smarty_tpl->tpl_vars['main_BlogList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['origin']){?>bs-origin<?php }else{ ?>bs-transmit<?php }?>" style="" href="<?php echo $_smarty_tpl->tpl_vars['main_BlogList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['main_BlogList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</a></h1><p><?php echo $_smarty_tpl->tpl_vars['main_BlogList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contentx'];?>
</p><a href="<?php echo $_smarty_tpl->tpl_vars['main_BlogList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['href'];?>
" target="_blank">查看全文</a>&nbsp;<?php echo $_smarty_tpl->tpl_vars['main_BlogList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time'];?>
</div></div><?php endfor; endif; ?>
                    <div style="margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['PAGES']->value;?>
</div>
                </div>
                <div class="clear"></div>
            </div>
            <!-- @blog_list_right -->
            <div class="clear"></div>
        </div>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['stat_path'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp2, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js?v=4-1"></script>
        <script src="/common.config.js"></script>
    </body>
</html>
<?php }} ?>