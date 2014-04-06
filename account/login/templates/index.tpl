<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        {include file={$PATH.nav_path}}
        <div class="sdCenter" style="width:1024px;margin-top:50px;">
            <div id="lg-wapp" class="borderR10">
                {if $relogin}
                    <div class="or-alert">
                        <span>对不起,登陆状态异常,请重新登陆!</span>
                    </div>
                {/if}
                <img src="/account/login/logo-280.png" style="margin:25px auto;display:block;"/>
                <input id="login-val" value="{$val_code}" type="hidden"/>
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
        {include file={$PATH.stat_path}}
    </body>
</html>