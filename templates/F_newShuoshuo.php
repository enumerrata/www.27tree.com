<div class="f-newshuoshuo">
    <a class="headwapper" style="margin-top:5px;" href="/user/<?php echo $row_ss['uid']?>" title="<?php echo $row_ss['usn']?>">
        <img src="<?php echo $row_ss['ush']?>" width="32px" height="32px" alt="<?php echo $row_ss['usn']?>" title="<?php echo $row_ss['usn']?>"/>
    </a>
    <div style="margin-left:44px;line-height:22px;font-size:13px;min-height:49px;color:#333;">
        <div><a href="/user/<?php echo $row_ss['uid']?>"><?php echo $row_ss['usn']?></a> : <?php echo $row_ss['content']?></div>
        <span class="Gray" style="font-size:12px;"><?php echo $row_ss['dt']?> |&nbsp;<a href="/user/vistc/?s=<?php echo $row_ss['sid']?>">评论(<?php echo $row_ss['commi']?>)</a></span>
    </div>
</div>