<?php /* Smarty version Smarty-3.1.12, created on 2013-05-07 22:58:27
         compiled from "../templates/add_foll.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9111050995124d11f31d613-12619665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ef67b058beac8eb80a4d96c3c0731d00c6b2e8a' => 
    array (
      0 => '../templates/add_foll.tpl',
      1 => 1367938673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9111050995124d11f31d613-12619665',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5124d11f3954e3_93532641',
  'variables' => 
  array (
    'PATH' => 0,
    'UID' => 0,
    'sugg_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5124d11f3954e3_93532641')) {function content_5124d11f3954e3_93532641($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>注册 - 二叉树社区欢迎你</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/account/register/signUp.css?v=2-16" />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
        <script src="/jss/dojo/dojo.js"></script>
        <script src="/account/register/js/add_foll.js?b=b"></script>
    </head>
    <body>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['nav_path'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="sdCenter Shadow borderR10" style="width:740px;padding:30px 20px;border:1px solid #ccc;margin-top:30px;background:#fefefe;">
            <span class="RedBar" style="margin:0 10px;margin-right:20px;">
                <span class="RedBar-in">活跃的程序员们,关注他们吧</span>
                <span class="RedBar-in-r"><a href="/user/<?php echo $_smarty_tpl->tpl_vars['UID']->value;?>
" id="skip-btn" class="Gbtn">跳过</a></span>
            </span>
            <div>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['si'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['si']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sugg_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['name'] = 'si';
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total']);
?>
                    <div class="ug-mapp" rel="<?php echo $_smarty_tpl->tpl_vars['sugg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['uid'];?>
">
                        <a class="headwapper">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['sugg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['ush'];?>
" height="64px" width="64px"/>
                        </a>
                        <div class="ug-wapp">
                            <b class="ug-usn"><?php echo $_smarty_tpl->tpl_vars['sugg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['usn'];?>
</b>
                            <span class="ug-job"><?php echo $_smarty_tpl->tpl_vars['sugg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['address'];?>
</span>
                            <span class="ug-job"><?php echo $_smarty_tpl->tpl_vars['sugg_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['job'];?>
</span>
                        </div>
                    </div>
                <?php endfor; endif; ?>
                <div class="clear"></div>
            </div>
            <div style="margin-top:15px;">
                <a class="next-cp borderR5" id="add-fol-btn" href="javascript:;"><span>一键关注</span></a>
            </div>
        </div>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['stat_path'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp2, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </body>
</html><?php }} ?>