<div style="margin-top:10px;">
    <a class="headwapper" href="/user/visit/<?php echo $_pnb_b->getUID()?>" title="<?php echo $_pnb_b->getUserName() ?>的博客专栏">
        <img src="<?php echo G::getHeadimg($_pnb_b->getUid(), 45) ?>" width="45px" alt="<?php echo $_pnb_b->getUserName() ?>的博客专栏"/>
    </a>
    <div style="margin-left:60px;">
        <div class="Elipsis"><a style="font-weight:bold;font-size:15px;" href="<?php echo $_pnb_b->getURL() ?>"><?php echo $_pnb_b->getTitle() ?></a></div>
        <a><?php echo $_pnb_b->getUserName() ?></a>
        <span class="block Gray"><?php echo $_pnb_b->getDatetime(true); ?></span>
    </div>
</div>