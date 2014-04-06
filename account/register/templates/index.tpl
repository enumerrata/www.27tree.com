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
    </head>
    <body>
        {include file={$PATH.nav_path}}
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
                        <input type="hidden" value="{$codex}" id="data-code-x"/>
                    </span>
                </div>
            </div>
        </div>
        <script src="/jss/jquery-min.js"></script>
        <script src="/account/md5.js"></script>
        <script src="/jss/coref.js?v=4-1"></script>
        <script src="/account/register/js/signUp.js?v=3-8"></script>
        {include file={$PATH.stat_path}}
    </body>
</html>