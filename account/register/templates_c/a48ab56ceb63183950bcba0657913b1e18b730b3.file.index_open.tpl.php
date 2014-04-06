<?php /* Smarty version Smarty-3.1.12, created on 2013-05-08 16:14:42
         compiled from "./templates/index_open.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3552667725132150baf7908-03639551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a48ab56ceb63183950bcba0657913b1e18b730b3' => 
    array (
      0 => './templates/index_open.tpl',
      1 => 1367938674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3552667725132150baf7908-03639551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5132150bb52f47_58913539',
  'variables' => 
  array (
    'PATH' => 0,
    'open_login' => 0,
    'open_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5132150bb52f47_58913539')) {function content_5132150bb52f47_58913539($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>注册 - 二叉树社区欢迎你</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/account/register/signUp.css" />
        <!--<link rel="stylesheet" type="text/css" href="/account/register/signUp-open.css" />-->
    </head>
    <body>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['nav_path'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="sdCenter" style="width:1024px;margin-top:30px;">
            <input type="hidden" id="open_login" value="<?php echo $_smarty_tpl->tpl_vars['open_login']->value;?>
" />
            <div style="margin:5px auto;background:#fff;width:500px;border:1px solid #ccc;padding:25px;position:relative;" class="Shadow">
                <div style="position:absolute;width:100px;height:100px;left:-122px;top:72px;padding:10px;background:#fefefe;border:1px solid #ccc;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['open_info']->value['figureurl_2'];?>
" class="block"/>
                </div>
                <div class="or-alert">
                    <span>您正在使用<b class="cRed">QQ</b>登陆本站,请补充个人信息</span>
                </div>
                <!--<img src="./testimg/signupi.png" class="block" id="img-sign" style="margin-top:10px;"/>-->
                <div id="data-wapper">
                    <div class="Gray" style="font-size:15px;margin:10px 0;">*用户名：</div>
                    <span class="sdText">
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['open_info']->value['nickname'];?>
" id="data-usn" onkeyup="validate(this.value,0)" placeholder="用户名一般在3到10个字符之间"/>
                    </span>
                    <div class="Gray" style="font-size:15px;margin:10px 0;">*电子邮箱：</div>
                    <span class="sdText">
                        <input type="text" value="" id="data-email" onkeyup="validate(this.value,3)" placeholder="留个邮箱吧 , 中了500万一定提醒你"/>
                    </span>
                    <a class="next-cp" id="sign-btn" href="javascript:;">下一步</a>
                </div>
                <div id="succ-wapper">
                    <a class="Shadow sign-succ-btn" href="/">返回首页</a>
                    <a class="Shadow sign-succ-btn" href="/" id="usrc">个人中心</a>
                    <a class="Shadow sign-succ-btn" href="/minbbs/">论坛灌水</a>
                    <a class="Shadow sign-succ-btn" href="/q_a/">解答问题</a>
                    <a class="Shadow sign-succ-btn" href="/blog/index.html">阅读博客</a>
                </div>
            </div>
        </div>
        <script src="/jss/jquery-min.js"></script>
        <script src="/account/md5.js"></script>
        <script src="/jss/coref.js"></script>
        <script src="/account/register/js/signUp.js?v=3-8"></script>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['stat_path'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp2, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </body>
</html><?php }} ?>