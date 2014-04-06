<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        {include file={$PATH.nav_path}}
        <div class="sdCenter" style="width:1024px;margin-top:30px;">
            <input type="hidden" id="open_login" value="{$open_login}" />
            <div style="margin:5px auto;background:#fff;width:500px;border:1px solid #ccc;padding:25px;position:relative;" class="Shadow">
                <div style="position:absolute;width:100px;height:100px;left:-122px;top:72px;padding:10px;background:#fefefe;border:1px solid #ccc;">
                    <img src="{$open_info.figureurl_2}" class="block"/>
                </div>
                <div class="or-alert">
                    <span>您正在使用<b class="cRed">QQ</b>登陆本站,请补充个人信息</span>
                </div>
                <!--<img src="./testimg/signupi.png" class="block" id="img-sign" style="margin-top:10px;"/>-->
                <div id="data-wapper">
                    <div class="Gray" style="font-size:15px;margin:10px 0;">*用户名：</div>
                    <span class="sdText">
                        <input type="text" value="{$open_info.nickname}" id="data-usn" onkeyup="validate(this.value,0)" placeholder="用户名一般在3到10个字符之间"/>
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
        {include file={$PATH.stat_path}}
    </body>
</html>