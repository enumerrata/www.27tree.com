<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'];
require $ROOT . '/inc/Cache/Lite.php';
require $ROOT . '/inc/Cache/Lite/Output.php';
require './config_mybook.php';
$cache = new Cache_Lite_Output(Cache_Lite::getSrcsOptions());
$cache->setLifeTime(3600);
//初始化缓存类
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>程序员必备好书推荐|精选好书|编程学习好书</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="编程好书,PDF下载,电子书下载,Java电子书,数据库电子书" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
        <link rel="stylesheet" type="text/css" href="/core.css?v=2.1" />
        <link rel="stylesheet" type="text/css" href="/not/mybook/sources/css/book.css?version=<?php echo $version_css_book ?>" />
    </head>
    <body>
        <?php include_once $ROOT . '/templates/ucenter.html'; ?>
        <?php if ($cache->start("index_font")) exit(0); ?>
        <?php
        //非缓存执行位
        //@INCLUDE_CLASS
        require $ROOT . '/templates/nav_v2.html';
        require $ROOT . '/not/mybook/bookLibFont_control.php';
        require $ROOT . '/not/mybook/book.class.php';
        require $ROOT . '/not/mybook/config_mybook.php';
        $sugg = array(207, 203);
        $c = new bookLibFont_control();
        $mysql = Conn_mysql::getInstance();
        ?>
        </div>
        <div style="margin:2px auto;width:1060px;">
            <div id="FsectorLeft">
                <div style="margin-bottom:10px;margin-top:-3px;position:relative;">
                    <?php $c->pushBookType(); ?>
                </div>
                <!--<div style="margin-top:10px;border:1px solid #ccc;background-color:#FFF;">
                    <a href="/not/mybook/api"><img src="/img/dl-api.png" class="block" style="width:100%;"/></a>
                </div>-->
                <div class="Shadow borderR5 b-f-newbooks-wapper">
                    <span class="tipS-blocked" style="background-color:#15B300;">最新添加书目</span>
                    <ul class="sdULpatch b-f-newbooks"><?php $c->pushNewAddBook() ?></ul>
                </div>

                <div style="margin:10px 0;border:1px solid #ccc;border-top:none;" class="Shadow borderR5">
                    <span class="tipS-blocked" style="background-color:#BF0A10;">最新书评</span>
                    <div style="background-color:#FFF;">
                        <?php $c->pushNewestBookComm(); ?>
                    </div>
                </div>
            </div>
            <div id="FsectorCenter">
                <div id="spec-book-list-outterwapper" class="Shadow borderR5">
                    <span class="tipS-blocked" style="background-color:#1b89e3;">IT技术精选好书&Alpha;</span>
                    <div id="spec-book-list-wapper">
                        <?php
                        $sp_book = new book($sugg[0]);
                        include './templates/hotBookItems.php';
                        ?>
                    </div>
                </div>

                <div id="spec-book-list-outterwapper" class="Shadow borderR5">
                    <span class="tipS-blocked" style="background-color:#1b89e3;">IT技术精选好书&Beta;</span>
                    <div id="spec-book-list-wapper">
                        <?php
                        $sp_book = new book($sugg[1]);
                        include './templates/hotBookItems.php';
                        ?>
                    </div>

                </div>

                <div style="border:1px solid #ccc;margin:10px;padding:2px;background:#FFF;">
                    <a href="/minbbs/"><img src="/img/bbs-post-prm.jpg" class="block" width="556px" style="margin:0 auto;"/></a>
                </div>

                <div class="bookShows">
                    <span class="tipS-blocked" style="background-color:#06B9D1;">C/C++</span>
                    <div>
                        <?php $c->pushBookSector("cocpp"); ?>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="bookShows">
                    <span class="tipS-blocked" style="background-color:#06B9D1;">JAVA技术</span>
                    <div>
                        <?php $c->pushBookSector("java"); ?>
                        <div class="clear"></div>
                    </div>
                </div>      
                <div class="bookShows">
                    <span class="tipS-blocked" style="background-color:#06B9D1;">PHP</span>
                    <div>
                        <?php $c->pushBookSector("php"); ?>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="bookShows">
                    <span class="tipS-blocked" style="background-color:#06B9D1;">Android 移动开发</span>
                    <div>
                        <?php $c->pushBookSector("android"); ?>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>

            <div id="FsectorRight">
                <div id="FclickRank" class="Shadow">
                    <span class="RedBar">
                        <span class="RedBar-in">热书排行榜</span>
                    </span>
                    <ul>
                        <?php $c->pushClickRank(15); ?>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <?php include_once $ROOT . '/templates/footer.html'; ?>
    </body>
</html>
<?php $cache->end(); ?>