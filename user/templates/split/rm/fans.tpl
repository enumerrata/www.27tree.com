<div id="main_body">
    <span class="RedBar">
        <span class="RedBar-in">我的粉丝</span>
    </span>
    <div style="margin-top:10px;">
        {section name=fi loop=$fans_list}
            <div class="rm-fans-wapp">
                <a class="headwapper" href="javascript:;">
                    <img src="{$fans_list[fi].ush}" width="45px" height="45px"/>
                </a>
                <div style="margin-left:55px;height:49px;">
                    <div class="Elipsis"><a href="/user/visit/{$fans_list[fi].uid}?from=ucc">{$fans_list[fi].usn}</a></div>
                    <div class="Gray">关注 {$fans_list[fi].follows} | 粉丝 {$fans_list[fi].fans}</div>
                    <div><a href="javascript:;" onclick="javascript:add_foll({$fans_list[fi].uid},this);">关注TA</a></div>
                </div>
            </div>
        {/section}
    </div>
</div>