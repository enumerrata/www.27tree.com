<div style="margin-bottom:5px;padding:10px 0;border-bottom:1px dashed #ccc;">
    <div style="font-size:15px;"><a href="<?php echo $obj_as->getURL() ?>"><?php echo $obj_as->getTitle() ?></a></div>
    <div style="margin-top:5px;color:#444;">
        <div style="float:left;">
            <b><?php echo $obj_as->getCommi() ?></b> 评论 <b><?php echo $obj_as->getReadi() ?></b> 阅读
        </div>
        <div style="float:right;">
            bY : <a href="/user/<?php echo $obj_as->getUID();?>"><?php echo $obj_as->getAuthor() ?></a> <?php echo $obj_as->getDatetime(Article::Defer_time) ?>
        </div>
        <div class="clear"></div>
    </div>
</div>