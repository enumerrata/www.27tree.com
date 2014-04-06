<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>程序员必备好书推荐 | 精选好书 | 编程学习好书 | IT技术好书推荐 | PDF下载</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="IT技术,编程好书,PDF下载,电子书下载,Java电子书,数据库电子书,Web开发电子书,C/C++编程电子书" />
        <meta name="description" content="二叉树社区电子书库,各种编程学习图书分享平台,各种Java电子书,数据库电子书,Web开发电子书,C/C++编程电子书资源分享。" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
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
                <div id="index-right-in-l" class="borderR5">
                    <!--中-->

                    <div class="ct-wapper"><!--一周好书推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">一周好书推荐</span>
                        </span>
                        <div>
                            {strip}
                                {section name=sidx loop=$SEC.sugg}
                                    <a href="/bookLib/{$SEC.sugg[sidx].id}" title="{$SEC.java[idx].title}" class="Bookwapper {if $smarty.section.sidx.first == 1}clearMarginL{/if}">
                                        <img src="{$SEC.sugg[sidx].img}" width="110px" height="145px" alt="{$SEC.sugg[sidx].title}"/>
                                    </a>
                                {/section}
                            {/strip}
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--JAVA推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">Web开发 - 最新分享</span>
                        </span>
                        <div>
                            {strip}
                                {section name=wdx loop=$SEC.web}
                                    <a href="/bookLib/{$SEC.web[wdx].id}" title="{$SEC.web[wdx].title}" class="Bookwapper {if $smarty.section.wdx.first == 1}clearMarginL{/if}">
                                        <img src="{$SEC.web[wdx].img}" width="110px" height="145px" alt="{$SEC.web[wdx].title}"/>
                                    </a>
                                {/section}
                            {/strip}
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--JAVA推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">JAVA - 最新分享</span>
                        </span>
                        <div>
                            {strip}
                                {section name=idx loop=$SEC.java}
                                    <a href="/bookLib/{$SEC.java[idx].id}" title="{$SEC.java[idx].title}" class="Bookwapper {if $smarty.section.idx.first == 1}clearMarginL{/if}">
                                        <img src="{$SEC.java[idx].img}" width="110px" height="145px" alt="{$SEC.java[idx].title}"/>
                                    </a>
                                {/section}
                            {/strip}
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--NoSQL推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">NoSQL  - 最新分享</span>
                        </span>
                        <div>
                            {strip}
                                {section name=nidx loop=$SEC.nosql}
                                    <a href="/bookLib/{$SEC.nosql[nidx].id}" title="{$SEC.nosql[nidx].title}" class="Bookwapper {if $smarty.section.nidx.first == 1}clearMarginL{/if}">
                                        <img src="{$SEC.nosql[nidx].img}" width="110px" height="145px" alt="{$SEC.nosql[nidx].title}"/>
                                    </a>
                                {/section}
                            {/strip}
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--C/C++推荐-->
                        <span class="RedBar">
                            <span class="RedBar-in">C/C++  - 最新分享</span>
                        </span>
                        <div>
                            {strip}
                                {section name=cidx loop=$SEC.cocpp}
                                    <a href="/bookLib/{$SEC.cocpp[cidx].id}" title="{$SEC.cocpp[cidx].title}" class="Bookwapper {if $smarty.section.cidx.first == 1}clearMarginL{/if}">
                                        <img src="{$SEC.cocpp[cidx].img}" width="110px" height="145px" alt="{$SEC.cocpp[cidx].title}"/>
                                    </a>
                                {/section}
                            {/strip}
                            <div class="clear"></div>
                        </div>
                    </div>

                    <div class="ct-wapper"><!--数据库-->
                        <span class="RedBar">
                            <span class="RedBar-in">数据库 - 最新分享</span>
                        </span>
                        <div>
                            {strip}
                                {section name=didx loop=$SEC.database}
                                    <a href="/bookLib/{$SEC.database[didx].id}" title="{$SEC.database[didx].title}" class="Bookwapper {if $smarty.section.didx.first == 1}clearMarginL{/if}">
                                        <img src="{$SEC.database[didx].img}" width="110px" height="145px" alt="{$SEC.database[didx].title}"/>
                                    </a>
                                {/section}
                            {/strip}
                            <div class="clear"></div>
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
                                <span class="RedBar-in">分享动态</span>
                            </span>
                            {strip}
                                {section loop=$Dy name=di}
                                    <div class="bk-dy-items">
                                        <a class="headwapper" href="/blogm/usr-{$Dy[di].uid}.html">
                                            <img src="{$Dy[di].ush}" width="32px" height="32px" alt="{$Dy[di].usn} 的博客专栏">
                                        </a>
                                        <div style="margin-left:45px;line-height:20px;">
                                            <a href="/bookLib/{$Dy[di].bookid}">{$Dy[di].title}</a>
                                            <span class="Gray block">分享于 {$Dy[di].time}</span>
                                        </div></div>
                                    {/section}
                                {/strip}
                        </div>
                        <!--排行榜-->
                    </div>

                    <!--<div class="Shadow bright-in-i">
                        <div class="ct-wapper">
                            <span class="RedBar">
                                <span class="RedBar-in">排行榜</span>
                            </span>
                    {strip}
                        {section loop=$Rank name=ri}
                            <div class="bk-rank-items">
                                <b class="bk-rank-b borderR5">{$smarty.section.ri.iteration}</b>
                                <a class="Elipsis" href="/bookLib/{$Rank[ri].id}" title="{$Rank[ri].title}">《{$Rank[ri].title}》</a>
                            </div>
                        {/section}
                    {/strip}
                </div>
            </div>-->

                    <div class="Shadow bright-in-i">
                        <!--热心会员-->
                        <div class="ct-wapper">
                            <span class="RedBar">
                                <span class="RedBar-in">会员贡献榜</span>
                            </span>
                            {strip}
                                {section name=ct loop=$cont}
                                    <div style="margin-top:10px;">
                                        <a class="headwapper" href="/blogm/usr-{$cont[ct].uid}.html">
                                            <img src="{$cont[ct].ush}" width="45px" height="45px" alt="{$cont[ct].usn} 的博客专栏"/>
                                        </a>
                                        <div style="margin-left:58px;line-height:25px;">
                                            <div class="Elipsis"><a style="font-size:16px;" href="/blogm/usr-{$cont[ct].uid}.html">{$cont[ct].usn}</a></div>
                                            <span class="Gray">分享了 {$cont[ct].count} 本书</span>
                                        </div>
                                    </div>
                                {/section}
                            {/strip}
                        </div>
                        <!--热心会员-->
                    </div>
                    <!--右边栏-->
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        {include file={$PATH.stat_path}}
    </body>
</html>