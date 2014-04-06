<span class="dy-items" data-dt="tc">
    <a class="headwapper Shadow" href="/user/visit/{$dy_list[dyi].uid}">
        <img src="{$dy_list[dyi].ush}" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn">{$dy_list[dyi].musn}</b>
        <div>{$dy_list[dyi].content}</div>
        <div><span class="Dy-dt">{$dy_list[dyi].time}</span></div>
        {if $dy_list[dyi].comm}
            <div class="tc-commlist">
                <div class="arr-top"></div>
                {section loop=$dy_list[dyi].comm name=cmmi}
                    <div class="tc-commlist-items">
                        <a class="headwapper">
                            <img src="{$dy_list[dyi].comm[cmmi].ush}" height="32px" width="32px"/>
                        </a>
                        <div style="margin-left:40px;">
                            <b class="dy_usn inline-block"><a href="/user/visit/{$dy_list[dyi].comm[cmmi].uid}" target="_blank">{$dy_list[dyi].comm[cmmi].usn}</a></b> : {$dy_list[dyi].comm[cmmi].content}
                            <div class="Dy-dt">{$dy_list[dyi].comm[cmmi].datetime}</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                {/section}
            </div>
        {/if}
        <div class="tccmm-wapp" data-tcmom="{$dy_list[dyi].artid}">
            <span>我也说一句</span>
        </div>
    </div>
    <div class="clear"></div>
</span>