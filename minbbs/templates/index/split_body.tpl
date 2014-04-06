

<div class="ps-left" style="width:750px;float:left;z-index:0;position:relative;">

    <!--编辑器-->
    {include file=$EDITOR}
    <!--编辑器-->
    <!-- 帖子列表 -->
    <div class="ps-items Shadow" id="ps-post-list">
        <div class="or-alert">
            <span>{$REMARK}</span>
        </div>
        <!--页码 start-->
        <div class="sp-page-wapp" id="pg-top">{$Pages}</div>
        <!--页码 end-->
        <div id="ps-list">
            {strip}{section name=index loop=$P_DATA}
                    <div class="ps-list-items">
                        <a class="headwapper" href="/user/visit/{$P_DATA[index].uid}">
                            <img src="{$P_DATA[index].ush}" width="45px" height="45px"/>
                        </a>
                        <div class="ps-lt-wapp">
                            <div  class="ps-lt-wapp-l">
                                <span class="block Elipsis">
                                    <a class="ps-lt-title" target="_blank" href="{$P_DATA[index].href}">{$P_DATA[index].title}</a>
                                </span>
                                <span class="Gray">由 <a href="/user/visit/{$P_DATA[index].uid}">{$P_DATA[index].usn}</a> 发布于 {$P_DATA[index].datetime}</span>
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

    {include file=$guss_path}
    
    <div class="ps-items borderR5">
        <span class="RedBar">
            <span class="RedBar-in">热门主题</span>
        </span>
        {strip}{section name=index loop=$HOT_DATA}
                <div style="margin:10px 0;height:38px;">
                    <a class="headwapper" href="/user/visit/{$HOT_DATA[index].uid}">
                        <img src="{$HOT_DATA[index].ush}" width="32px" height="32px"/>
                    </a>
                    <div style="margin-left:42px;line-height:20px;">
                        <div class="Elipsis"><a href="{$HOT_DATA[index].href}">{$HOT_DATA[index].title}</a></div>
                        <span class="Gray">{$HOT_DATA[index].commi} / {$HOT_DATA[index].readi}</span>
                    </div>
                </div>
        {/section}{/strip}
    </div>
</div>
<div class="clear"></div>
</div>
{include file={$PATH.stat_path}}
</body>
</html>