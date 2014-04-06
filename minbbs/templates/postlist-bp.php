</div>
<!--<div class="atr borderR5">
    <div id="bbs-sub-nav">
        <div id="bbs-sub-nav-position">
            <span><a href="/minbbs/">论坛主页</a></span>
            <strong>&nbsp;&gt;&nbsp;</strong>
            <span>
                <input type="hidden" value="<?php echo $_GET['sid']; ?>" id="sid" />
                <a href="/bbs/Sector-<?php echo $_GET['sid']; ?>/"><?php echo bbs_G::bbs_bandconv($_GET['sid']); ?></a>
            </span>
        </div>
<?php $c->pushSub_stat_top($_GET['sid']); ?>
        <div class="clear"></div>
    </div>
</div>-->

<div class="atr borderR5">
    <div id="bbs-sub-rule" class="borderR5">
        <?php echo bbs_G::getSbandInfo($_GET['sid']); ?>
        <!--<a style="text-align:right;" id="adminAlterBaninfo" href="javascript:;">编辑</a>-->
    </div>
    <div class="autowarp" id="bbs-randSugg">
        <span class="x-tip">随机推荐主题</span>
        <ul class="sdULpatch">
            <?php $c->pushPostRandSugg(); ?>
        </ul>
    </div>
    <span class="clear"></span>
</div>
<div id="tips-list-toped" class="atr borderR5">
    <strong class="postListHeader">置顶帖子</strong>
    <?php $c->pushPostListItem($_GET['sid'], bbs_conf::PageLite_Default, 1); ?>
</div>

<?php
$buttonTitle = '发新帖子';
require './templates/bbs-ins-lite.html';
?>
<div id="tips-list-notop" class="atr borderR5">
    <strong class="postListHeader">最新帖子</strong>
    <div id="post-list-wapper">
        <?php $c->pushPostListItem($_GET['sid'], $page_lite); ?>
    </div>
</div>
<?php $c->generate_page_bar($page_lite); ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.html'; ?>