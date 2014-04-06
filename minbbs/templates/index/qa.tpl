
            
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
                        <span class="RedBar-in">问题列表</span>
                    </span>

                    <!--页码 start-->
                    <div class="sp-page-wapp">{$Pages}</div>
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
                                                <a class="ps-lt-title" href="{$P_DATA[index].href}">{$P_DATA[index].title}</a>
                                            </span>
                                            <span class="Gray">By <a href="/user/visit/{$P_DATA[index].uid}">{$P_DATA[index].usn}</a> at {$P_DATA[index].datetime}</span>
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
                        <span class="RedBar-in">热门问题</span>
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
        {include file={$PATH.stat_path}}
    </body>
</html>