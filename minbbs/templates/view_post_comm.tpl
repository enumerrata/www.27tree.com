<span class="RedBar">
    <span class="RedBar-in">说几句吧</span><span class="Gray RedBar-in-mr">水水更健康</span>
</span>
<div id="vps-comm-wapper">
    {strip}
        {section name=ci loop=$BD.comm}
            <div class="vps-wapper">
                <a class="headwapper"><img src="{$BD.comm[ci].comment_ush}" class="Shadow"/></a>
                <div class="Shadow vps-wapper-i">
                    <s></s><i></i>
                    <div class="Gray">{$BD.comm[ci].index} / <a href="{$BD.comm[ci].comment_uurl}">{$BD.comm[ci].comment_usn}</a> / {$BD.comm[ci].comment_date_time} <a href="javascript:;" onclick="javascript:rep(this,1);" rel="{$BD.comm[ci].r_index}" actUID="{$BD.comm[ci].comment_uid}">回复</a></div>
                    {$BD.comm[ci].comment_content}
                    <div class="cms">
                        {if $BD.comm[ci].has_sub}
                            {section name=si loop=$BD.comm[ci].sub}
                                <div class="sub-comm-item"><tx></tx><t></t>
                                    <em class="ct-t-whw"><img src="{$BD.comm[ci].sub[si].ush}" width="32px" height="32px"/></em>
                                    <div style="margin-left:45px;line-height:20px;">
                                        <a href="/user/{$BD.comm[ci].sub[si].fu}">{$BD.comm[ci].sub[si].fun}</a> @ <a href="/user/{$BD.comm[ci].sub[si].2u}">{$BD.comm[ci].sub[si].2un}</a>&nbsp;：{$BD.comm[ci].sub[si].ct}
                                        <span class="block Gray">{$BD.comm[ci].sub[si].dt} / <a href="javascript:;" rel="{$BD.comm[ci].sub[si].sindex}" actUID="{$BD.comm[ci].sub[si].fu}" onclick="javascript:rep(this,2);">回复</a>
                                        </span>
                                    </div>
                                </div>
                            {/section} 
                        {/if}
                    </div>
                </div>
            </div>
        {/section}
    {/strip}
</div>