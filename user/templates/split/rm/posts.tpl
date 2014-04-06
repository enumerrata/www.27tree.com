<div id="main_body">
    <span class="RedBar">
        <span class="RedBar-in">我发表的帖子</span>
    </span>
    <div style="text-align:right;">{$page_bar}</div>
    {section loop=$post_list name=bi}
        <div style="margin-top:10px;border:1px solid #ccc;padding:10px;background:#fff;" class="borderR5 Shadow">
            <div><a href="{$post_list[bi].url}" style="font-size:14px;" target="_blank">{$post_list[bi].title}</a></div>
            <div style="line-height:20px;margin-top:4px;color:#444;">{$post_list[bi].ctx}...</div>
            <div style="border-top:1px dashed #ccc;margin-top:5px;padding-top:5px;"><a href="{$post_list[bi].url}" target="_blank">查看原文</a> | <a href="javascript" target="_blank">删除</a> | {$post_list[bi].datetime}</div>
        </div>
    {/section}
    <div style="text-align:right;margin-top:10px;">{$page_bar}</div>
</div>