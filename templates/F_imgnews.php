<div style="margin-bottom:10px;padding-bottom:10px;line-height:19px;">
    <h1 class="Elipsis"><a href="<?php echo str_replace('http://www.itsrcs.com', '', $news->href); ?>" target="_blank"><?php echo $news->title ?></a></h1>
    <div>
        <a class="headwapper"><img src="<?php echo $news->imglink; ?>" width="90px" height="70px" alt="<?php echo $news->title ?>"/></a>
        <div style="margin-left:105px;color:#444;">
            <?php echo mb_substr($news->desc, 0, 88, 'utf-8') . '...'; ?>
        </div>
        <div class="clear"></div>
    </div>
</div>