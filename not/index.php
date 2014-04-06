<?php
//error_reporting(0);
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
include ROOT . '/inc/mCache/CacheLite.php';

$Param_pages = isset($_GET['pages']) ? mysql_escape_string($_GET['pages']) : "";
$Param_nottype = mysql_escape_string($_GET['nottype']);
$Param_stype = isset($_GET['stype']) ? mysql_escape_string($_GET['stype']) : false;

$Cache = new Cache_M(Cache_M::ZIP_GZIP);
$ckey = $Param_pages . $Param_nottype;

$Reged_band = array("java", "php", "news", "c", "mobile", "database", "web");
if (!in_array($_GET['nottype'], $Reged_band)) {
    echo "<meta http-equiv=refresh content='0; url=/not/404.php'>";
    exit(0);
}//硬编码防止GET参数注入

$stype_key = $Param_stype ? $Param_stype : 'bas';

if (!$Cache->is_cached($ckey)) {
    include ROOT . '/not/index_controlor.php';
    include ROOT . '/mod/G.php';
    include ROOT . '/not/info/sbanconv.class.php';
    include ROOT . '/mod/article.class.php';
    include ROOT . '/not/info/conver.php';
    $page_lite = 15;
    $conver = new conver_convlist();
    $type_c = $conver->conv($Param_nottype);
    $mysql = Conn_mysql::getInstance();
    $c = new index_controlor();
    $Cache->cache_start($ckey);
} else {
    $Cache->read_cache_file($ckey, true);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>
            <?php echo $type_c; ?>_二叉树社区_www.27tree.com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/jss/dojo/resources/dojo.css" />
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <link rel="stylesheet" type="text/css" href="/not/not.css" />

    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav_v3.php' ?>
        <div class="atr" style="margin-top:15px;"><div class="atr-bac-left"></div>
            <div id="nav2">
                <div id="nav-posi" class="borderR5">
                    <!-- Pages_data -->
                    <input type="hidden" id="content" value=0 />
                    <input type="hidden" id="type" value=<?php echo $Param_nottype; ?> />
                    <input type="hidden" id="pages" value=<?php echo $Param_pages == "" ? "0" : $Param_pages ?>/>
                    <!-- Pages_data -->
                    <strong><a href="/">主页</a></strong>&nbsp;<strong>&gt;</strong>
                    <em><a href='/art/<?php echo $Param_nottype; ?>/'><?php echo $type_c; ?></a></em>
                </div>
                <!-- Likethis IN log_f_js.js-->
                <div id="like-this" style="display: none;">
                    <input type="hidden" value="false" id="colok"/>
                    <a style="width:32px;height:32px;background-image: url('/img/star.png');float:right;" title="收藏该板块" href="javascript:like_this()"></a>
                </div>
                <!-- Likethis -->
                <div class="clear"></div>
            </div>
            <div style="margin:10px;">
                <div style="margin:10px;width:512px;line-height:18px;padding:5px;background-color:#fff;border:1px solid #ccc;float:left;" class="borderR5" id="bandinfo">
                    <em class="stdImgWapper" style="display:inline-block;padding:5px;margin:5px;float:left;">
                        <img src="/img/<?php echo $Param_nottype ?>.png" width="55px" height="55px" />
                    </em>
                    <span style="border-left:2px solid #ccc;height:108px;overflow:hidden;text-overflow:ellipsis;padding-left:10px;display:inline-block;float:left;width:425px;text-indent:2em;"><?php $c->pushBandInfo($Param_nottype); ?></span>
                    <span class="clear"></span>
                </div>
                <div class="hotComment">
                    <span class="tipS">热门评论</span>
                    <ul class="sdULPatch">
                        <?php
                        $hotComm_re = $mysql->query("SELECT id_artlist FROM artlist WHERE type_artlist = '$Param_nottype' ORDER BY commi DESC LIMIT 3;");
                        $_template_hotComm = "./templates/hotComm-items.phtml";
                        while ($rowid = mysql_fetch_array($hotComm_re)) {
                            $_comm_a = new Article($rowid['id_artlist']);
                            $param['stype'] = $_comm_a->getStypeWithLink();
                            $param['title'] = $_comm_a->getTitle();
                            $param['href'] = $_comm_a->getURL();
                            $param['commlist'] = $_comm_a->getArticleComm();
                            $param['commi'] = $_comm_a->getCommi();
                            include $_template_hotComm;
                        }
                        ?>
                    </ul>
                </div>
                <div class="info-not"><!--@sub_band-->
                    <?php $c->pushSband($Param_nottype) ?>
                    <span class="clear"></span>
                </div>
                <span class="clear"></span>
            </div>
            <div id="art-item-container">
                <?php
                $templates_nottype = $Param_nottype;
                ?>
                <div id="art-item-left">
                    <?php
                    $limit_t = ($Param_pages != "" ? $Param_pages : 0) * $page_lite;
                    $sql_f = false !== $Param_stype ? "SELECT id_artlist,stype_artlist FROM artlist WHERE type_artlist='$Param_nottype' AND stype_artlist = '$Param_stype' ORDER BY lastModify DESC limit $limit_t,$page_lite;" : "SELECT id_artlist,stype_artlist FROM artlist WHERE type_artlist='$Param_nottype' ORDER BY lastModify DESC limit $limit_t,$page_lite;";
                    $atr_list = $mysql->query($sql_f);
                    unset($limit_t);
                    $i = 1;
                    while ($row = mysql_fetch_array($atr_list)) {
                        $_a = new Article($row['id_artlist']);
                        if ($_a->getStype() != '0') {
                            $stype = sbanconv::conv($_a->getStype());
                            $stype = "<a class=\"stype\" href=/art/$Param_nottype-$row[stype_artlist]/>[$stype]</a>";
                        } else
                            $stype = '';
                        $dateTime = G::tTimeFormat_vs($_a->getDatetime());
                        echo <<<EM
                  <div class="art-log borderR5">
                     <div class="art-log-h"><h1>{$stype}&nbsp;<a href={$_a->getURL()}>{$_a->getTitle()}</a></h1></div>
                     <div class="art-log-ct">
                        <p class="art-log-ctp">{$_a->getContentx()}</p>
                        <span class="art-log-ctif">
                           <span>由&nbsp;<a href='/user/{$_a->getUid()}'>{$_a->getAuthor()}</a>&nbsp;发表于</span>
                           <span><img src='/img/comm.png' align='absmiddle' />(<strong>{$_a->getCommi()}</strong>) / <img src='/img/read.png' align='absmiddle' />({$_a->getReadi()})</span>
                           <em>{$dateTime}</em>
                        </span>
                     </div>
                  </div>
EM;
                        if ($i++ == ceil($page_lite / 2))
                            echo "</div><div id=\"art-item-right\">\n";
                    }
                    ?>
                </div>
                <div class="clear"></div>
            </div>
            <?php $c->pushMoreRelativeBook($Param_nottype, $type_c); ?>
            <div style="margin:10px;">
                <?php $c->pushPageLite($Param_nottype, $Param_stype, $page_lite) ?>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
        <script src="/log/md5.js"></script>
        <script src="/not/js/log_f_js.js"></script>
        <script language="javascript">
            $(function() {
                $(".nav-subBar").show();
                $(".art-log").hover(function(){
                    $(this).css("border-color","#F5AB00");
                    $(this).addClass("Shadow");
                },function(){$(this).css("border-color","#ccc");
                    $(this).removeClass("Shadow");
                });
                ul = $('#slide_ul>li:not(.endofli):not(#prev-c):not(#next-c)');
                var length = ul.length;
                var curr = parseInt($('#pages').val());
                ul.eq(curr).addClass('curr');
                pages_ref(curr);
                $('#next-c,.next-cp').click(function() {
                    var curr = parseInt($('#pages').val());
                    if (curr == length - 1) return;
                    location.href = ul.eq(curr + 1).find('a').attr('href');
                    curr=null;
                });
                $('#prev-c').click(function() {
                    var curr = parseInt($('#pages').val());
                    if (curr == 0) return;
                    location.href = ul.eq(curr - 1).find('a').attr('href');
                    curr=null;
                });
                if($.browser.msie) $(".hotcomm-items").css("list-style","none");
                $(".hotcomm-items").mouseover(function(){
                    $(this).find("ul").slideDown(300);
                }).eq(0).find("ul").fadeIn(500);
                load_ban_coll();
            });
        </script>
        <span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script><span>
    </body>
</html>
<?php $Cache->cache_end(); ?>