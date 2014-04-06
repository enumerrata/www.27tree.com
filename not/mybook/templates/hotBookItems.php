<div class="spec-book-list">
    <em>
        <img src="<?php echo $sp_book->getBookImgURL(128); ?>"/>
    </em>
    <span class="Elipsis spec-book-title" >
        <a target="_blank" href="/bookLib/<?php echo $sp_book->getBookid(); ?>">《<?php echo $sp_book->getTitle(); ?>》</a>
    </span>
    <div class="autowarp spec-book-intro">
        <?php echo trim($sp_book->getIntro()); ?>
    </div>
    <span class="spec-book-bar">
        <?php $bookPrice = $sp_book->getBookPrice(); ?>
        分享者：<a href="/user/<?php echo $sp_book->getSuid(); ?>"><?php echo $sp_book->getSharerName(); ?></a> | <a href="<?php echo $bookPrice['PdfDownloadpage']; ?>" target="_blank">下载该电子书</a>
    </span>
    <div class="clear"></div>
</div>