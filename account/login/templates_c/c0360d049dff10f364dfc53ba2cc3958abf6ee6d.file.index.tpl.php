<?php /* Smarty version Smarty-3.1.12, created on 2013-04-14 07:24:05
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:804424133511f3e398433e8-70086437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1365895440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '804424133511f3e398433e8-70086437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511f3e39891e32_21569854',
  'variables' => 
  array (
    'PATH' => 0,
    'relogin' => 0,
    'val_code' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511f3e39891e32_21569854')) {function content_511f3e39891e32_21569854($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>登陆 - 二叉树社区欢迎你</title>
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/account/login/main.css?v=4-1" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js?v=4-1"></script>
        <script src="/account/md5.js"></script>
        <script src="/account/login/logIn.js"></script>
    </head>
    <body>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['nav_path'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div class="sdCenter" style="width:1024px;margin-top:50px;">
            <div id="lg-wapp" class="borderR10">
                <?php if ($_smarty_tpl->tpl_vars['relogin']->value){?>
                    <div class="or-alert">
                        <span>对不起,登陆状态异常,请重新登陆!</span>
                    </div>
                <?php }?>
                <img src="/account/login/logo-280.png" style="margin:25px auto;display:block;"/>
                <input id="login-val" value="<?php echo $_smarty_tpl->tpl_vars['val_code']->value;?>
" type="hidden"/>
                <div id="data-wapper">

                    <div class="data-tip">*用户名：</div>
                    <span class="sdText">
                        <input type="text" value="" id="username" placeholder="请输入用户名"/>
                    </span>

                    <div class="data-tip">*密码：</div>
                    <span class="sdText">
                        <input type="password" value="" id="password" placeholder="请输入密码"/>
                    </span>

                    <div id="dp-lock-m">
                        <div class="data-tip">*滑动解锁你懂得：</div>
                        <span class="sdText">
                            <div id="dp-lock-wapp">
                                <a id="dp-lock-btn"></a>
                            </div>
                        </span>
                    </div>

                    <a class="next-cp" id="login-btn" href="javascript:;">马上登陆</a>

                    <div class="data-tip">第三方登陆：</div>
                    <div>
                        <a href="/account/open_tencent/login"><img src="/account/login/Connect_logo_3.png" class="block"/></a>
                    </div>

                    <!--<div style="position:absolute;right:-152px;top:25px;border:1px solid #ccc;width:120px;padding:15px;background:url('/img/br_r.png') -2px repeat-y #fefefe;">
                        <a href="/account/open_tencent/login"><img src="http://qzonestyle.gtimg.cn/qzone/vas/opensns/res/img/Connect_logo_3.png" class="block"/></a>
                    </div>-->

                </div>
            </div>
        </div>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['stat_path'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp2, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </body>
</html><?php }} ?>