<span class="dy-items">
    <a class="headwapper Shadow" href="{if $dy_list[dyi].fuid}/user/{$dy_list[dyi].fuid}{else}javascript:;{/if}">
        <img src="{$dy_list[dyi].ush}" width="45px" height="45px"/>
    </a>
    <div class="dy-i-r">
        <b class="dy_usn">{$dy_list[dyi].usn}</b>
        <b class="dy-ac">评论了您分享的书 : </b><a href='{$dy_list[dyi].art_url}'>《{$dy_list[dyi].art_title}》</a>
        <br></span>{$dy_list[dyi].content}
        <span class="dy-ac block">{$dy_list[dyi].time}</span>
    </div>
    <div class="clear"></div>
</span>