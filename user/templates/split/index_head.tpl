<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{$top_data.usn}的个人中心 - IT人的社交网络 - 二叉树社区</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="author" content="koodo@qq.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php?v=5-5" />
        <link rel="stylesheet" type="text/css" href="/static/css/user_main_style_{$conf.usr_theme}.css?v=5-23" />
        <script src="/jss/dojo/dojo.js"></script>
        <script src="/jss/jquery-min.js"></script>
        <script src="/sources-gz/coref.js.php?v=5-23"></script>
        <script src="/jss/com.x.js"></script>
        <script src="/sources-gz/user.main.js.php?v=5-23"></script>
    </head>
    <body>
        {include file=$PATH.nav_path}
        <div class="sdCenter" id="usr-main-wapper">
            <input type="hidden" value="0" id="dy-pl"/>
            <input type="hidden" value="{$conf.action}" id="action"/>
            <input type="hidden" value="{$conf.sub_action}" id="sub_action"/>
            <input type="hidden" value="{$conf.tc_val_code}" id="tc-val"/>
            <div style="width:150px;float:left;">
                <div style="background:#FFF;">

                    <!--levf-nav-->
                    {if $left_nav_opt}
                        {include file='./nav/left_nav.tpl'}
                    {else}
                        {include file='./nav/left_nav_admin.tpl'}
                    {/if}
                    <!--@levf-nav-->

                </div>
            </div>
            <div style="margin-left:149px;background:#fdfdfd;border:1px solid #ddd;border-top-right-radius:10px;border-bottom-right-radius:10px;border-bottom-left-radius:5px;"><!--break_point-->