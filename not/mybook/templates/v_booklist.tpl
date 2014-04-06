<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{$book_area} - 程序员必备好书推荐 | 精选好书 | 编程学习好书 | PDF下载</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="编程好书,PDF下载,电子书下载,Java电子书,数据库电子书,Web开发电子书,C/C++编程电子书" />
        <meta name="description" content="二叉树社区电子书库,各种编程学习图书分享平台,各种Java电子书,数据库电子书,Web开发电子书,C/C++编程电子书资源分享。" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <script language="javascript" src="/sources-gz/coref.js.php"></script>
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/static/css/book_single.css" />
    </head>
    <body>
        {include file={$PATH.nav_path}}
        <div class="sdCenter">
            <div id="index-left">
                <!--左边栏-->
                <div style="margin-right:-1px;margin-top:20px;">
                    {$left_nav}
                </div>
                <!--<div style="height:400px;background:url('/img/br_l.png') repeat-y right center #fff;">
                </div>-->
                <!--左边栏-->
            </div>
            <div id="index-right">
                <div id="index-right-in-l">
                    <!--中-->
                    <span class="RedBar">
                        <span class="RedBar-in">{$book_area} / 最新网友分享</span>
                    </span>
                    <div>

                        <div class="sp-page-wapp" id="sp-page-wapp-top">
                            {$Pages}
                        </div>

                        {section name=li loop=$book_list}
                            <div class="vbook-items">
                                <div class="Bookwapper clearMarginL">
                                    <img src="{$book_list[li].img}" width="130px">
                                </div>
                                <div class="vbook-items-cont">
                                    <h1 class="Elipsis{if $book_list[li].new_add == true} book-new-add{/if}"><a href="{$book_list[li].url}" target="_blank">《{$book_list[li].title}》</a></h1>
                                    <span style="display:block;"><span class="Gray">作者&nbsp;:&nbsp;</span>{$book_list[li].author}</span>
                                    <div class="vcont autowarp">
                                        {$book_list[li].intro}
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        {/section}

                        <div class="sp-page-wapp">
                            {$Pages}
                        </div>

                    </div>
                    <!--中-->
                </div>
                <div id="index-right-in-r">
                    <!--右边栏-->
                    <div class="Shadow bright-in-i" style="margin-top:20px;">
                        <!--排行榜-->
                        {include file='./share_prom.html'}
                    </div>

                    <div class="Shadow bright-in-i">
                        <div class="ct-wapper">
                            <span class="RedBar">
                                <span class="RedBar-in">排行榜</span>
                            </span>
                            {strip}
                                {section loop=$book_rank name=ri}
                                    <div class="bk-rank-items">
                                        <b class="bk-rank-b borderR5">{$smarty.section.ri.iteration}</b>
                                        <a class="Elipsis" href="{$book_rank[ri].url}" title="{$book_rank[ri].title} - [{$book_rank[ri].click}]">《{$book_rank[ri].title}》</a>
                                    </div>
                                {/section}
                            {/strip}
                        </div>
                        <!--排行榜-->
                    </div>
                    <!--右边栏-->
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>
    </body>
</html>