<div style="margin-top:10px;">
    <a class="headwapper" href="/user/visit/<?php echo $qs->uid; ?>">
        <img src="<?php echo $qs_ush; ?>" width="45px" height="45px" alt="<?php echo urldecode($qs->usn); ?>的问题"/>
    </a>
    <div style="margin-left:60px;">
        <div class="Elipsis"><a style="font-weight:bold;font-size:15px;" href="<?php echo $qs->href ?>"><?php echo $qs->title ?></a></div>
        [ <b style="color:#900;"><?php echo $qs->ansi ?></b> ] 回答 [ <span style="color:#6d9906"><?php echo $qs->readi ?></span> ] 浏览
        <span class="block Gray">由 <a href="/user/<?php echo $qs->uid; ?>"><?php echo urldecode($qs->usn); ?></a> 发表于<?php echo G::tTimeFormat_vs($qs->datetime) ?></span>
    </div>
</div>