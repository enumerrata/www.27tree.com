<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $P_QUERY; ?> - 的搜索结果页 - IT技术资源搜索引擎|电子书搜索引擎|博客文章搜索引擎</title>
        <meta name="description" content="亿柿网是一个IT技术社区,专业于提供IT技术资讯、编程开发技术资源。在这里你可以认识许多志同道合的朋友,通过交流提升自身技术水平。" />
        <meta name="robots" content="all" />
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <link rel="stylesheet" type="text/css" href="/search/main.css?v=2.0" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
    </head>
    <body>
        <div style="background:#111;" class="Shadow">
            <div style="width:1024px;margin:0 auto;">
                <div>
                    <a class="top-btn" href="/">主页</a>
                    <a class="top-btn <?php switch_tab($P_TYPE, 0); ?>" href="<?php echo dataHelper::packQueryURL(array('t' => 0, 'p' => 0)) ?>">PDF</a>
                    <a class="top-btn <?php switch_tab($P_TYPE, 1); ?>" href="<?php echo dataHelper::packQueryURL(array('t' => 1, 'p' => 0)) ?>">博客</a>
                    <a class="top-btn <?php switch_tab($P_TYPE, 2); ?>" href="<?php echo dataHelper::packQueryURL(array('t' => 2, 'p' => 0)) ?>">技术</a>
                    <a class="top-btn <?php switch_tab($P_TYPE, 3); ?>" href="<?php echo dataHelper::packQueryURL(array('t' => 3, 'p' => 0)) ?>">问答</a>
                </div>
            </div>
        </div>
        <div id="snav-2">
            <div style="width:1024px;margin:0 auto;">
                <input type="hidden" value="<?php echo $_GET['t']; ?>" id="s_t"/>
                <a href="/" style="display:block;background:url('/search/logo-s.png') no-repeat center;width:100px;height:28px;float:left;margin-left:15px;"></a>
                <span class="sdText-search">
                    <input type="text" value="<?php echo mysql_escape_string($_GET['q']); ?>" id="query" placeholder="请输入搜索内容" onkeydown="javascript:search_enter(event);"/>
                </span>
                <a class="borderR3 Shadow btn-search" href="javascript:;" onclick="javascript:go_search($('#query').val());"></a>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear" style="height:3px;margin-bottom:15px;background:url('/img/shadow.png') bottom repeat-x;"></div>