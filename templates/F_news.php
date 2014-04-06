<div>
    <h1 class="Elipsis"><a href="<?php echo str_replace('http://www.itsrcs.com', '', $news->href); ?>" target="_blank"><?php echo $news->title ?></a></h1>
    <div style="color:#444;"><?php echo mb_substr($news->desc, 0, 60, 'utf-8') . '...'; ?></div>
</div>