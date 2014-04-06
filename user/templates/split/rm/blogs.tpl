<div id="main_body">
    <span class="RedBar">
        <span class="RedBar-in">我的博客文章</span>
    </span>
    <div style="text-align:right;">{$page_bar}</div>
    {section loop=$blog_list name=bi}
        <div id="bg-wapp-{$blog_list[bi].bid}" class="borderR5 Shadow bg-wapp">
            <div class="bg-title"><a href="{$blog_list[bi].url}" target="_blank">{$blog_list[bi].title}</a></div>
            <div class="bg-content" id="bg-content-{$blog_list[bi].bid}">{$blog_list[bi].ctx}...</div>
            <div class="bg-bar">
                <a href="{$blog_list[bi].url}" target="_blank">查看原文</a> | <a href="javascript:;" class="bg-delbtn" data-blogid="{$blog_list[bi].bid}">删除</a> | <a href="javascript:;" class="bg-editbtn" data-blogid="{$blog_list[bi].bid}">编辑</a> | {$blog_list[bi].datetime}
            </div>
        </div>
    {/section}
    <div style="text-align:right;margin-top:10px;">{$page_bar}</div>
</div>