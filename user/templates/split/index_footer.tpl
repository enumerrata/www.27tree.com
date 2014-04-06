<!--break_point-->
<div id="main_right">
    <div id="main_right-in">
        <div class="bottom10">
            <div id="usr-head-wapp">
                <div id="usr-head-l">
                    <img src="{$top_data.ush}" id="uc-ush" class="block borderR5 Shadow" alt="{$top_data.usn}的个人头像" width="100px" height="100px"/>
                    <a id="usr-h-btn" href="/user/{$conf.uid}/admin/alter_head.html"></a>
                </div>
                <div id="usr-head-r">
                    <span class="sn-field Elipsis" id="sn-usn">{$top_data.usn}</span>
                    <span class="sn-field" id="sn-us-foll">关注 <a href="/user/{$conf.uid}/follows.html">{$top_data.count.foll}</a></span>
                    <span class="sn-field" id="sn-us-fans">粉丝 <a href="/user/{$conf.uid}/fans.html">{$top_data.count.fans}</a></span>
                    <span class="sn-field" id="sn-us-toca">吐槽 <a href="/user/{$conf.uid}/mytc.html">{$top_data.count.toca}</a></span>
                </div>
            </div>
            <div class="borderR3 expbar-w">
                <div class="expbar-m">{$top_data.count.expc}</div>
                <div class="expbar-i borderR3"></div>
            </div>
        </div>

        <a class="next-cp ucBtn borderR3" href="/user/{$conf.uid}/admin/submit_blog.html">
            <span style="padding-left:40px;display:inline-block;background:url('/user/sources/img/edit.png') left center no-repeat;">发表博文</span>
        </a>

        <a class="next-cp ucBtn borderR3" href="/user/{$conf.uid}/admin/alter_head.html">
            <span style="padding-left:40px;display:inline-block;background:url('/user/sources/img/wallpapers.png') left center no-repeat;">修改头像</span>
        </a>

        <div class="bottom10">
            <span class="RedBar">
                <span class="RedBar-in">程序员们</span>
            </span>
            {section loop=$usr_sugg name=usi}
                <div class="usg-wapp">
                    <a class="headwapper" href="/user/visit/{$usr_sugg[usi].uid}">
                        <img src="{$usr_sugg[usi].ush}" height="36px" width="36px"/>
                    </a>
                    <div class="usg-right">
                        <div class="Elipsis usg-right-il">
                            <a href="/user/visit/{$usr_sugg[usi].uid}">{$usr_sugg[usi].usn}</a><br>
                            <span>{$usr_sugg[usi].job}</span>
                        </div>
                        <div class="usg-right-ir">
                            <a href="javascript:;" class="Gbtn addfoll-btn borderR3" rel="{$usr_sugg[usi].uid}">加关注</a>
                        </div>
                    </div>
                </div>
            {/section}
        </div>

        <div class="bottom10">
            <span class="RedBar">
                <span class="RedBar-in">社区热点</span>
            </span>
            {section loop=$hot_posts_list name=pi}
                <a class="sn-hot-items Elipsis" href="{$hot_posts_list[pi].href}" target="_blank">{$hot_posts_list[pi].title}</a>
            {/section}
        </div>

        <div class="bottom10">
            <span class="RedBar">
                <span class="RedBar-in">最新问答</span>
            </span>
            {section loop=$newest_Qa_list name=qi}
                <a class="sn-hot-items Elipsis" href="{$newest_Qa_list[qi].href}" target="_blank">{$newest_Qa_list[qi].title}</a>
            {/section}
        </div>
    </div>
</div>
<div class="clear"></div></div>
<!--@Main_body-->
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
{* 加载统计代码 *}
{include file=$PATH.stat_path}
</body>
</html>