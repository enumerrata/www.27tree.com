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
        <link rel="stylesheet" type="text/css" href="/account/register/signUp.css?v=2-16" />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
        <script src="/jss/dojo/dojo.js"></script>
        <script src="/account/register/js/add_foll.js?b=b"></script>
    </head>
    <body>
        {include file={$PATH.nav_path}}
        <div class="sdCenter Shadow borderR10" style="width:740px;padding:30px 20px;border:1px solid #ccc;margin-top:30px;background:#fefefe;">
            <span class="RedBar" style="margin:0 10px;margin-right:20px;">
                <span class="RedBar-in">活跃的程序员们,关注他们吧</span>
                <span class="RedBar-in-r"><a href="/user/{$UID}" id="skip-btn" class="Gbtn">跳过</a></span>
            </span>
            <div>
                {section loop=$sugg_list name=si}
                    <div class="ug-mapp" rel="{$sugg_list[si].uid}">
                        <a class="headwapper">
                            <img src="{$sugg_list[si].ush}" height="64px" width="64px"/>
                        </a>
                        <div class="ug-wapp">
                            <b class="ug-usn">{$sugg_list[si].usn}</b>
                            <span class="ug-job">{$sugg_list[si].address}</span>
                            <span class="ug-job">{$sugg_list[si].job}</span>
                        </div>
                    </div>
                {/section}
                <div class="clear"></div>
            </div>
            <div style="margin-top:15px;">
                <a class="next-cp borderR5" id="add-fol-btn" href="javascript:;"><span>一键关注</span></a>
            </div>
        </div>
        {include file={$PATH.stat_path}}
    </body>
</html>