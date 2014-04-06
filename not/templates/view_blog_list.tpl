<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>博客广场 - 二叉树程序员社区</title>
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/not/css/blog_list.css?v=5-7" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
    </head>
    <body>
        <input type="hidden" value="{$Config.pagelite}" id="maxpagelite" />
        <input type="hidden" value="0,{$Config.pagelite}" id="pagelite" />
        <input type="hidden" id="option_blogprom" value="{$Opt_blogprom}" />
        {include file={$PATH.nav_path}}
        <div class="sdCenter">
            <div class="blog-list-wapper-left">
                <div style="border:1px solid #ccc;border-top:3px solid #6d9906;background-color:#fff;position:relative;padding:10px 15px;width:256px;background:url('/img/br_l.png') repeat-y right center #fff;">
                    <div class="atr-bac-left"></div>

                    <div class="blw-wapper">
                        <a href="http://www.27tree.com/rss/" rel="nofollow" target="_blank">
                            <img src="/not/sources/img/rss.png" class="borderR3 block Shadow"/>
                        </a>
                    </div>

                    <div class="blw-wapper">
                        <span class="RedBar">
                            <span class="RedBar-in">热门<a href="/blog/index.html">博文</a></span>
                        </span>
                        <ul class="sdULpatch">
                            {strip}{section name=index loop=$ClickRank}
                                    <li class="Elipsis"><a href="{$ClickRank[index].url}" target="_blank">{$ClickRank[index].title}</a></li>
                            {/section}{/strip}
                        </ul>
                    </div>
                    <div class="blw-wapper">
                        <span class="RedBar">
                            <span class="RedBar-in">推荐<a>博主</a></span>
                        </span>
                        {section name=j loop=$BlogM}
                            <div style="margin-top:10px;">
                                <a class="headwapper" href="/user/visit/{$BlogM[j].uid}" title="{$BlogM[j].usn} - 的博客专栏">
                                    <img src="{$BlogM[j].ush}" height="45px" width="45px"/>
                                </a>
                                <div style="margin-left:55px;line-height:18px;" class="Gray">
                                    <a href="/user/visit/{$BlogM[j].uid}">{$BlogM[j].usn}</a>
                                    <div class="Elipsis">最新文章：<a href="{$BlogM[j].href}">{$BlogM[j].title}</a></div>
                                    <div>访问量：{$BlogM[j].readi}</div>
                                </div>
                            </div>
                        {/section}
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <!-- blog_list_right -->
            <div class="blog-list-wapper Shadow">
                <a class='toTopbtn' href='javascript:;' onclick='goTop()'></a>
                <div>
                    <div id="w-item-l">
                        <span class="RedBar">
                            <span class="RedBar-in">技术 - 推荐博文</span>
                        </span>
                        {section name=sij loop=$sugg_jobs}
                            <div>
                                <h1 class="Elipsis"><a href="{$sugg_jobs[sij].href}" target="_blank">{$sugg_jobs[sij].title}</a></h1>
                            </div>
                        {/section}
                    </div>

                    <div id="w-item-r">
                        <span class="RedBar">
                            <span class="RedBar-in">职场 - 推荐博文</span>
                        </span>
                        {section name=sit loop=$sugg_tech}
                            <div>
                                <h1 class="Elipsis"><a href="{$sugg_tech[sit].href}" target="_blank">{$sugg_tech[sit].title}</a></h1>
                            </div>
                        {/section}
                    </div>
                </div>

                <div id="nblog-list-wapp">
                    <span class="RedBar">
                        <span class="RedBar-in">最新博文</span>
                        <span class="Gray RedBar-in-mr">今天你博起了吗</span>
                    </span>
                    <div style="margin-top:10px;">{$PAGES}</div>
                    {strip}
                        {section name=i loop=$main_BlogList}
                            <div class="blog-list-item">
                                <div class="headwapper">
                                    <a href="/user/visit/{$main_BlogList[i].uid}"><img src="{$main_BlogList[i].ush}?>_64x" width="64px" height="64px"/></a>
                                </div>
                                <div class="ItemContentx">
                                    <h1 class="bl-head1">
                                        <a class="{if $main_BlogList[i].origin}bs-origin{else}bs-transmit{/if}" style="" href="{$main_BlogList[i].href}" target="_blank">{$main_BlogList[i].title}</a>
                                    </h1>
                                    <p>{$main_BlogList[i].contentx}</p>
                                    <a href="{$main_BlogList[i].href}" target="_blank">查看全文</a>&nbsp;{$main_BlogList[i].time}
                                </div>
                            </div>
                        {/section}
                    {/strip}
                    <div style="margin-top:10px;">{$PAGES}</div>
                </div>
                <div class="clear"></div>
            </div>
            <!-- @blog_list_right -->
            <div class="clear"></div>
        </div>
        {include file={$PATH.stat_path}}
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js?v=4-1"></script>
        <script src="/common.config.js"></script>
    </body>
</html>
