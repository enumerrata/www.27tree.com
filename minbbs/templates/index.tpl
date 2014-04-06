<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>{$BBS_NAME}</title>
        {include file='./bbshead.tpl'}
        <script charset="utf-8" src="/minbbs/bbs-font.js?v=bbs_2"></script>
        <link rel="stylesheet" type="text/css" href="/minbbs/static/css/postList.css" />
    </head>
    <body>
        {include file={$PATH.nav_path}}
        <div class="sdCenter" style="margin-top:55px;">
            <div style="position:absolute;top:-41px;z-index:1;left:0;right:0;height:50px;">
                <a class="ps-tab-btn ps-tab-btn-cur" href="/minbbs/qa/">技术问答</a>
                <a class="ps-tab-btn-m" href="/minbbs/tech/">技术分享</a>
            </div>

            <div class="ps-left" style="width:750px;float:left;z-index:0;position:relative;">

                <!--编辑器-->
                <div class="ps-items" id="ps-sm-wapper">
                    <input type="hidden" value="{$SID}" id="sid"/>
                    <span class="sdText" style="margin-bottom:10px;">
                        <input type="text" value="" id="post-sm-title" placeholder="请输入标题"/>
                    </span>
                    <textarea id="ps-editor" style="width:99.8%;display:none;margin-bottom:10px;"></textarea>
                    <a class="next-cp" style="margin-top:10px;" href="javascript:;" id="ps-submit-btn">马上发表</a>
                </div>
                <!--编辑器-->
                <!-- 帖子列表 -->
                <div class="ps-items Shadow" id="ps-post-list">
                    <span class="RedBar">
                        <span class="RedBar-in">所有主题列表</span>
                    </span>

                    <!--页码 start-->
                    <div class="sp-page-wapp">{$Pages}</div>
                    <!--页码 end-->
                    <div id="ps-list">
                        {strip}{section name=index loop=$P_DATA}
                                <div class="ps-list-items">
                                    <a class="headwapper" href="{$P_DATA[index].uurl}">
                                        <img src="{$P_DATA[index].hd}" width="45px" height="45px"/>
                                    </a>
                                    <div class="ps-lt-wapp">
                                        <div  class="ps-lt-wapp-l">
                                            <span class="block Elipsis">
                                                <a class="ps-lt-title" href="{$P_DATA[index].url}">{$P_DATA[index].title}</a>
                                            </span>
                                            <span class="Gray">By <a href="{$P_DATA[index].uurl}">{$P_DATA[index].author}</a> at {$P_DATA[index].date}</span>
                                        </div>
                                        <div class="ps-lt-wapp-r">
                                            <span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">{$P_DATA[index].readi}</b>阅读</span>
                                            <span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">{$P_DATA[index].commi}</b>回复</span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                        {/section}{/strip}
                        <div class="clear"></div>
                    </div>
                    <!--页码 start-->
                    <div class="sp-page-wapp">{$Pages}</div>
                    <!--页码 end-->
                </div>
            </div>
            <div class="ps-right" style="margin-left:760px;">

                {*include file='./join.tpl'*}

                <div class="ps-items Shadow" style="text-align:center;line-height:25px;">
                    <a class="next-cp" href="javascript:;" id="ps-newpost-btn">
                        <span style="display:inline-block;padding-left:20px;background:url('/minbbs/static/img/add.png') left 46.5% no-repeat;">发新帖子</span>
                    </a>
                </div>

                <div class="ps-items">
                    <span class="RedBar">
                        <span class="RedBar-in">热门帖子</span>
                    </span>
                    {strip}{section name=index loop=$HOT_DATA}
                            <div style="margin:10px 0;height:38px;">
                                <a class="headwapper" href="{$HOT_DATA[index].uurl}">
                                    <img src="{$HOT_DATA[index].ush}" width="32px" height="32px"/>
                                </a>
                                <div style="margin-left:42px;line-height:20px;">
                                    <div class="Elipsis"><a href="{$HOT_DATA[index].url}">{$HOT_DATA[index].title}</a></div>
                                    <span class="Gray">{$HOT_DATA[index].commi} / {$HOT_DATA[index].readi}</span>
                                </div>
                            </div>
                    {/section}{/strip}
                </div>
            </div>
            <div class="clear"></div>
        </div>
        </script>
        {include file={$PATH.stat_path}}
    </body>
</html>