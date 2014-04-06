<?php /* Smarty version Smarty-3.1.12, created on 2013-05-07 23:36:46
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81214344750e50803bbc6a0-24909349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1367938674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81214344750e50803bbc6a0-24909349',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e50803c0eab6_89064019',
  'variables' => 
  array (
    'PATH' => 0,
    'codex' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e50803c0eab6_89064019')) {function content_50e50803c0eab6_89064019($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
    </head>
    <body>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['nav_path'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="sdCenter" style="width:974px;margin-top:30px;">
            <div style="float:right;width:450px;background:#fff;border:1px solid #ccc;padding:25px;" class="Shadow">
                <input type="hidden" id="open_login" value="0" />
                <img src="./testimg/signupi.png" class="block" id="img-sign"/>
                <div id="data-wapper">
                    <div class="data-tip">*用户名：</div>
                    <span class="sdText">
                        <input type="text" value="" id="data-usn" onkeyup="validate(this.value,0)" placeholder="用户名一般在3到10个字符之间"/>
                    </span>
                    <div class="data-tip">*密码：</div>
                    <span class="sdText">
                        <input type="password" value="" id="data-psw" onkeyup="validate(this.value,1)"/>
                    </span>
                    <div class="data-tip">*再次输入密码：</div>
                    <span class="sdText">
                        <input type="password" value="" id="data-psws" onkeyup="validate(this.value,2)"/>
                    </span>
                    <div class="data-tip">*电子邮箱：</div>
                    <span class="sdText">
                        <input type="text" value="" id="data-email" onkeyup="validate(this.value,3)"/>
                    </span>
                    <a class="next-cp" id="sign-btn" href="javascript:;">确认注册</a>

                    <div class="data-tip">第三方登陆：</div>
                    <div>
                        <a href="/account/open_tencent/login"><img src="/account/login/Connect_logo_3.png" class="block"/></a>
                    </div>

                </div>
            </div>
            <div style="margin-right:500px;padding-top:25px;">
                <div id="alert-bar"></div>
                <div style="border:1px solid #ccc;background:url('/img/br_l.png') repeat-y right center #fff;padding:15px;">
                    <img src="./testimg/ts-py.png" class="block" id="ts-img"/>
                    <div class="data-tip">*运行结果：
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
        <script src="/jss/coref.js?v=4-1"></script>
        <script src="/account/register/js/signUp.js?v=3-8"></script>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['stat_path'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp2, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </body>
</html><?php }} ?>