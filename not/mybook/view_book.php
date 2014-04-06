<?php
define("ROOT", "../../");
$PARAM['bookid'] = intval(mysql_escape_string($_GET['b']));
require ROOT . '/inc/mCache/CacheLite.php';
require ROOT . '/mod/Conn_mysql.class.php';
require ROOT . '/not/mybook/GForBook.php';
$Cache = new Cache_M(Cache_M::ZIP_GZIP);
$ckey = sprintf('view-book-id-%s', $PARAM['bookid']);
$Cache->setCacheLifeTime(1000);
if (!$Cache->is_cached($ckey)) {
    $Cache->cache_start($ckey);
    require ROOT . '/mod/G.php';
    require ROOT . '/not/mybook/book.class.php';
    $B = new book($PARAM['bookid']);
    if ($B->ERROR) {
        header('HTTP/1.0 404 Not Found');
        G::NhFush404();
        exit(0);
    } else {
        require ROOT . '/not/mybook/config_mybook.php';
        require ROOT . '/not/mybook/bookTypeConv.php';
        GForBook::upClick($PARAM['bookid']);
        $mysql = Conn_mysql::getInstance();
        $SEO_AUTHOR = preg_replace('/[\[\]()]/is', '', $B->getBookAuthor());
        $SEO_AREA = bookTypeConv::conV($B->getBook_area());
        $DATA_USH = G::getHeadimg($B->getSuid(), 45);
        $DATA_IMG = $B->getBookImgURL(0);
        $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $bookPrice = $B->getBookPrice();
        $BookDownload = array();
        $BookDownload['href'] = $bookPrice['PdfDownloadpage'];
        $BookDownload['amazon'] = $bookPrice['priceInAmazon'] == '' ? "javascript:;" : $bookPrice['priceInAmazon'];
        if ($bookPrice['PdfDownloadpage'] !== "javascript:;" && $bookPrice['PdfDownloadpage'] !== "")
            $BookDownload['tip'] = "&#19979;&#36733;&#30005;&#23376;&#20070;";
        else
            $BookDownload['tip'] = "&#26242;&#26102;&#27809;&#26377;&#19979;&#36733;&#36164;&#28304;&#44;&#25964;&#35831;&#20851;&#27880;<e id=\"dls\" ref=\"no\"></e>";
    }
} else {
    GForBook::upClick($PARAM['bookid']);
    $Cache->read_cache_file($ckey, true);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>《<?php echo $B->getTitle(); ?>》- PDF下载 / <?php echo $SEO_AUTHOR; ?> - 程序员必备</title>
        <meta name="keywords" content="<?php echo $B->getTitle(); ?>,<?php echo $SEO_AUTHOR; ?>,<?php echo $SEO_AREA; ?>,PDF下载,电子书下载,好书分享,程序员必备好书" />
        <meta name="description" content="<?php echo $B->getTitle(); ?>-<?php echo $SEO_AUTHOR; ?>：二叉树社区电子书库,分享各种编程学习电子书下载" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <script language="javascript" src="/jss/jquery-min.js"></script>
        <script language="javascript" src="/sources-gz/coref.js.php"></script>
        <script src="/jss/templates.js"></script>
        <script src="/static/js/book_single.js"></script>
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/static/css/book_single.css" />
    </head>
    <body>
        <ins id="COMMTYPE" rel="book"></ins>
        <ins id="COMMID" rel="<?php echo $PARAM['bookid']; ?>"></ins>
        <input type="hidden" value="<?php echo $PARAM['bookid']; ?>" id="bookid"/>
        <?php include ROOT . '/templates/nav_v3.php' ?>
        <div class="sdCenter" style="margin-bottom:50px;">
            <div id="vbookLeft">
                <div id="vbookLeft-in">
                    <div id="vbook-imgwu">
                        <img src="<?php echo $DATA_IMG ?>" class="Shadow" alt="<?php echo $B->getTitle(); ?>"/>
                    </div>
                    <div style="margin-top:10px;background:#fff;border:1px solid #ccc;border-right:none;padding:10px;">
                        <a class="headwapper">
                            <img src="<?php echo $DATA_USH; ?>" width="45px" height="45px"/>
                        </a>
                        <div style="margin-left:60px;">
                            <b class="Elipsis block"><?php echo $B->getTitle(); ?></b>
                            <div>由 <?php echo $B->getSharerName(); ?> 分享于 <?php echo G::tTimeFormat_vs($B->getDatetime()); ?></div>
                            <span class="Gray">浏览量：<?php echo $B->getClickStat(); ?></span>
                        </div>
                        <a class="s-pages-i borderR10" style="display:block;margin-top:10px;text-align:center;" href="/not/mybook/share/">我也分享一本</a>
                        <div class="clear"></div>
                    </div>
                    <!--<a class="vBookButtonMore" href="/bookLib/<?php echo $B->getBook_area(); ?>/">查看更多关于<?php echo $SEO_AREA; ?>的书</a>-->
                </div>
            </div>
            <div id="vbookRight" class="Shadow borderR5">
                <!--<a style="position:absolute;top:25px;right:15px;" href="javascript:;" onclick="javascript:usr_collect_book(<?php //echo $PARAM['bookid']      ?>,this);">喜欢这本书</a>-->

                <!--TOTOP-btn--><a class="toTopbtn" href="javascript:;" onclick="goTop()"></a><!--TOTOP-btn-->

                <h1 id="book-name"><?php echo $B->getTitle(); ?></h1>

                <p id="book-author">作者：<?php echo $B->getBookAuthor(); ?></p>
                <div class="autowarp" id="book-intro">
                    <div id="book-intro-content"><?php echo G::article_content_conv($B->getIntro(), $B->parseVersion); ?></div>
                    <div id="book-intro-open"><a class="Gbtn" href="javascript:;">展开详细介绍 >> </a></div>
                </div>

                <!--  购买 / 下载 按钮 -->
                <div class="bookBDbar">
                    <a class="Gbtn dlButton download" href="<?php echo $BookDownload['href'];?>" rel="nofollow" target="_blank">
                        <span><?php echo $BookDownload['tip'];?></span>
                    </a>
                    <a class="Gbtn dlButton favor" id="favor-book-btn" href="javascript:;">
                        <span>收藏这本书</span>
                    </a>
                    <a class="Gbtn dlButton amazon" href="<?php echo $BookDownload['amazon']?>" rel="nofollow" target="_blank">
                        <span>抱它回家</span>
                    </a>
                </div>

                <div class="borderR3" id="fsalert">
                    本站提供的所有资源均是网上搜集或私下交流学习之用。禁止利用本站资源涉及任何商业盈利目的，否则产生的一切后果将由您自己承担！本站仅仅提供一个观摩学习的环境，将不对任何资源负法律责任！本站所有资源请在下载后24小时内删除。如果您觉得满意,请购买正版！本站严厉谴责和鄙夷一切利用本站资源进行牟利的盗版行为！
                    <div id="book-intro-href">本书永久地址 : <a href="<?php echo $url; ?>"><?php echo $url; ?></a></div>
                </div>

                <div id="vbook-suggBar">
                    <div id="vbookd-sugg-tip"></div>
                    <div id="vbookd-sugg-wapp">
                        <?php
                        $_re_more = $mysql->query("SELECT bookid FROM book_list ORDER BY RAND() LIMIT 6;");
                        if (mysql_num_rows($_re_more) !== 0) {
                            while (@$row = mysql_fetch_array($_re_more)) {
                                $Rbook = new book($row['bookid']);
                                echo sprintf('<a class="headwapper vbook-sugg-list" href="%s" title="%s"><img alt="%s" src="%s"/></a>', $Rbook->getURL(), $Rbook->getTitle(), $Rbook->getTitle(), $Rbook->getBookImgURL(110));
                            }
                        }
                        ?>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="sdCommWapp" onmouseover="javascript:$('#comment-content-wapper',this).slideDown(300);">
                    <div id="comment-cast">
                        <div id="comment-content-wapper">
                            <span class="sdText" style="width:auto;margin-top:10px;">
                                <textarea id="comment-content" rows="3"
                                          onfocus="javascript:if(this.value=='&#36755;&#20837;&#20320;&#30340;&#35780;&#35770;&#46;&#46;&#46') this.value = '';"
                                          onblur="javascript:if(this.value=='') this.value = '&#36755;&#20837;&#20320;&#30340;&#35780;&#35770;&#46;&#46;&#46;';">&#36755;&#20837;&#20320;&#30340;&#35780;&#35770;&#46;&#46;&#46;</textarea>
                            </span>
                        </div>
                        <a href="javascript:;" onclick="javascript:submit_log();" id="next-cp-comm" class="next-cp">&#x70B9;&#x6211;&#x53D1;&#x8868;&#x8BC4;&#x8BBA;</a>
                    </div>
                    <?php
                    include '../COMM/commListBulider.class.php';
                    commListBulider::loadCommList($_GET['b'], "book");
                    ?>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <!-- Baidu Button BEGIN -->
        <script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=1&amp;mini=1&amp;pos=left&amp;uid=6441257" ></script>
        <script type="text/javascript" id="bdshell_js"></script>
        <script type="text/javascript">
            var bds_config={"bdTop":43,'bdPic':'<?php echo $DATA_IMG ?>'};
            document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
        </script>
        <!-- Baidu Button END -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/stat_code.php' ?>
    </body>
</html>
<?php $Cache->cache_end(); ?>