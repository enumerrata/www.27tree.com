<div id="main_body">
    <span class="RedBar">
        <span class="RedBar-in">我的吐槽</span>
    </span>
    <div style="margin-top:10px;">
        {section name=si loop=$ss_list}
            <div style="margin-bottom:10px;padding:5px;">
                <a class="headwapper">
                    <img src="{$top_data.ush}" width="45px" height="45px"/>
                </a>
                <div class="borderR5 Shadow" style="border:1px solid #ccc;background:#FFF;color:#444;margin-left:65px;padding:10px;position:relative;">
                    <l></l><m></m>
                    <div style="font-size:14px;">
                        <a style="color:#946652;" href="/user/visit/{$conf.uid}">{$top_data.usn}</a>  {$ss_list[si].content}
                    </div>
                    <div style="border-top:1px dashed #ddd;margin-top:5px;padding-top:5px;"><a href="javascript:;">删除</a> | {$ss_list[si].datetime}</div>
                </div>
                <div class="clear"></div>
            </div>
        {/section}
    </div>
</div>