<?php /* Smarty version Smarty-3.1.12, created on 2013-03-01 16:20:38
         compiled from "./templates/index_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1563973702513064d671f062-82429305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4385639cb28b0bec38b302a7a859388d08743a81' => 
    array (
      0 => './templates/index_1.tpl',
      1 => 1362126005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1563973702513064d671f062-82429305',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'codex' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_513064d6778089_24548983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513064d6778089_24548983')) {function content_513064d6778089_24548983($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>注册 - 二叉树社区欢迎你</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <link rel="stylesheet" type="text/css" href="/account/register/signUp.css?v=2-21" />
    </head>
    <body>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['nav_path'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="sdCenter" style="width:1024px;margin-top:30px;">
            <div style="float:right;width:450px;margin-right:50px;background:#fff;border:1px solid #ccc;padding:25px;" class="Shadow">
                <img src="./testimg/signupi.png" class="block" id="img-sign"/>
                <div id="data-wapper">
                    <div class="Gray" style="font-size:15px;margin:10px 0;">*用户名：</div>
                    <span class="sdText">
                        <input type="text" value="" id="data-usn" onkeyup="validate(this.value,0)" placeholder="用户名一般在3到10个字符之间"/>
                    </span>
                    <div class="Gray" style="font-size:15px;margin:10px 0;">*密码：</div>
                    <span class="sdText">
                        <input type="password" value="" id="data-psw" onkeyup="validate(this.value,1)"/>
                    </span>
                    <div class="Gray" style="font-size:15px;margin:10px 0;">*再次输入密码：</div>
                    <span class="sdText">
                        <input type="password" value="" id="data-psws" onkeyup="validate(this.value,2)"/>
                    </span>
                    <div class="Gray" style="font-size:15px;margin:10px 0;">*电子邮箱：</div>
                    <span class="sdText">
                        <input type="text" value="" id="data-email" onkeyup="validate(this.value,3)"/>
                    </span>
                    <a class="next-cp" id="sign-btn" href="javascript:;">确认注册</a>
                </div>
                <div id="succ-wapper">
                    <a class="Shadow sign-succ-btn" href="/">返回首页</a>
                    <a class="Shadow sign-succ-btn" href="/" id="usrc">个人中心</a>
                    <a class="Shadow sign-succ-btn" href="/minbbs/">论坛灌水</a>
                    <a class="Shadow sign-succ-btn" href="/q_a/">解答问题</a>
                    <a class="Shadow sign-succ-btn" href="/blog/index.html">阅读博客</a>
                </div>
            </div>
            <div style="margin-right:550px;padding-top:25px;">
                <div id="alert-bar"></div>
                <div style="border:1px solid #ccc;background:url('/img/br_l.png') repeat-y right center #fff;padding:15px;">
                    <img src="./testimg/ts-py.png" class="block" id="ts-img"/>
                    <div class="Gray" style="font-size:15px;margin:10px 0;">*运行结果：
                        <span style="font-size:12px;">
                            <a onclick="switchLang('js')" href="javascript:;">Javascript</a>
                            <a onclick="switchLang('php')" href="javascript:;">Php</a>
                            <a onclick="switchLang('py')" href="javascript:;">Python</a> 
                            <a onclick="switchLang('sh')" href="javascript:;">Shell</a>
                        </span>
                    </div>
                    <span class="sdText">
                        <input type="text" value="" id="data-code" onkeyup="validate(this.value,4)"/>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['codex']->value;?>
" id="data-code-x"/>
                    </span>
                </div>
            </div>
        </div>
        <script src="/jss/jquery-min.js"></script>
        <script src="/account/md5.js"></script>
        <script src="/jss/coref.js"></script>
        <script src="/account/register/js/signUp.js"></script>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['stat_path'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp2, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </body>
</html><?php }} ?>