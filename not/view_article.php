<?php
error_reporting(0);
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
include ROOT . '/inc/mCache/CacheLite.php';

$Param_id = mysql_escape_string($_GET['id']);
$Param_type = mysql_escape_string($_GET['type']);
$Param_date = mysql_escape_string($_GET['date']);

$Cache = new Cache_M(Cache_M::ZIP_GZIP);
$ckey = $Param_id . $Param_type;
$Cache->setCacheLifeTime(1);
if (!$Cache->is_cached($ckey)) {
    include_once ROOT . '/mod/Conn_mysql.class.php';
    include_once ROOT . '/mod/G.php';
    include_once ROOT . '/not/info/conver.php';
    include_once ROOT . '/not/info/sbanconv.class.php';
    include_once ROOT . '/mod/article.class.php';
    include_once ROOT . '/not/view_article_controlor.php';

    $conv = new conver_convlist();
    $mysql = Conn_mysql::getInstance();
    $c = new view_article_controlor();

    $_SQL = "SELECT id_artlist FROM artlist WHERE path_artlist = $Param_id AND type_artlist = '$Param_type';";
    if (false === $re = @mysql_fetch_array($mysql->query($_SQL))) {
        G::Fush404();
    } else {
        $art = new Article($re['id_artlist'], Article::FULL_CONTENT);
        if ($art->error)
            G::Fush404();
    }
    $type = $conv->conv($Param_type);
    $artid = $art->getArtid();
    $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $Cache->cache_start($ckey);
} else {
    $Cache->read_cache_file($ckey, true);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo "<title>", $art->getTitle(), "_$type", " - 亿柿网</title>"; ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="author" content="koodo" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <link rel="stylesheet" type="text/css" href="/not/not.css" />
        <link rel="stylesheet" type="text/css" href="/not/art-set/art-set.css" />
        <link rel="stylesheet" type="text/css" href="/mod/kd/SyntaxHighlighter/Styles/SyntaxHighlighter.css" />
        <script src="/jss/jquery-min.js"></script>
    </head>
    <body>
        <?php include ROOT . '/templates/nav_v3.php' ?>
        <div class="atr" style="margin-top:15px;"><div class="atr-bac-left"></div>
            <!-- Pages_data -->
            <ins id="COMMTYPE" rel="<?php echo $art->getBlink() == 0 ? "art" : "blog"; ?>"></ins>
            <ins id="COMMID" rel="<?php echo $art->getBlink() == 0 ? $artid : $art->getBlink(); ?>"></ins>
            <input type="hidden" id="content" value=1 />
            <input type="hidden" id="artid" value=<?php echo $artid; ?> />
            <input type="hidden" id="arttype" value=<?php echo $Param_type; ?> />
            <!-- Pages_data -->

            <div id="nav2" style="border-bottom:none;">
                <div id="nav-posi" class="borderR5 Shadow">
                    <!-- Position -->
                    <strong><a href="/">主页</a></strong>&nbsp;<strong>&gt;</strong>
                    <em id="art_type"><?php echo "<a href='/art/$Param_type/'>$type</a>"; ?></em>&nbsp;<strong>&gt;</strong>
                    <em id="art_stype"><?php echo "<a href='/art/$Param_type-", $art->getStype(), "/'>", sbanconv::conv($art->getStype()), "</a>"; ?></em>
                    <strong>&gt;</strong>&nbsp;<span id="state-d">&#x6B63;&#x6587;</span>
                    <input type="hidden" id="art-type" value="<?php echo $Param_type; ?>" />
                </div>
                <?php if (isset($_COOKIE['_uid']) && isset($_COOKIE['username']) && G::OwnerCheck($_COOKIE['_uid'], $artid, true)) G::INS_Tmplates('./templates/editbar.html', true); ?>
                <div class="clear"></div>
            </div><!--endof#nav2-->
            <div id="left-art">
                <div id="left-top">
                    <?php
                    list($date, $author, $uid) = array($art->getDate(), urldecode($art->getAuthor()), $art->getUid());
                    $art->upReadI();
                    $cont = G::article_content_conv($art->getContent());
                    $commi = &$art->getCommi();
                    $readi = &$art->getReadi();
                    $title = &$art->getTitle();
                    ?>
                    <div id="tit_div">
                        <input type="hidden" id="path_hidden" value="<?php echo $path; ?>" />
                        <h1 id='art-title' class="autowarp"><?php echo $title; ?></h1>
                        <input type='text' id='edit-h1' value='<?php echo $title; ?>' />
                        <h5>
                            <span class="Gray">由 <a href='/user/<?php echo $uid; ?>'><?php echo $author; ?></a></span>&nbsp;<span class="Gray">发布于</span>
                            <span class="Gray"><?php echo $date; ?></span>
                            <span class="Gray">评论</span>(<b><?php echo $commi; ?></b>) /
                            <span class="Gray">阅读</span>(<b><?php echo $readi; ?></b>)
                        </h5>
                        <div class="articleBar" style="">
                            <a href="javascript:like_this()" id="like-this" style="display:none;"><img src="/img/finished-work.png" align="absmiddle" style="margin-top:-4px;"/>&nbsp;收藏我吧</a>
                        </div>
                    </div>
                    <div id="submittype"></div>
                    <a href="javascript:loadStype()" id="loadst" class="next-cp" style="margin-bottom:5px;display:none;">更改分类</a>
                    <a href='javascript:editOk()' class='next-cp' id='edit-top'>修改好了就点我保存修改</a>
                    <div id='editarea' class='editarea'></div>
                    <a href='javascript:editOk()' class='next-cp' id='edit-bottom'>修改好了就点我保存修改</a>
                    <div class='art-content autowarp'>
                        <?php echo $cont; ?>
                        <div style="border:1px solid #ccc;padding:2px;margin:10px 5px;text-align:center;background:#fff;"><span class="Gray">本文地址</span> : <a href="<?php echo $url; ?>"><?php echo $url; ?></a></div>
                    </div>
                    <!--cnzz tui-->
                    <div style="margin:0 auto;width:728px;"><script  type="text/javascript" charset="utf-8"  src="http://tui.cnzz.net/cs.php?id=1000008439"></script></div>
                    <!--cnzz tui-->
                    <div class='dashed-div'></div>
                </div><!-- endof#left-top -->

                <div id="left-bottom" class="sdCommWapp" onmouseover="javascript:$('#comment-content-wapper',this).slideDown(300);">
                    <div id="comment-cast">
                        <div id="comment-content-wapper">
                            <span class="sdText" style="width:auto">
                                <textarea id="comment-content" rows="3"
                                          onfocus="javascript:if(this.value=='&#36755;&#20837;&#20320;&#30340;&#35780;&#35770;&#46;&#46;&#46') this.value = '';"
                                          onblur="javascript:if(this.value=='') this.value = '&#36755;&#20837;&#20320;&#30340;&#35780;&#35770;&#46;&#46;&#46;';">&#36755;&#20837;&#20320;&#30340;&#35780;&#35770;&#46;&#46;&#46;</textarea>
                            </span>
                        </div>
                        <a href="javascript:submit_log();" id="next-cp-comm" class="next-cp">&#x70B9;&#x6211;&#x53D1;&#x8868;&#x6587;&#x7AE0;&#x8BC4;&#x8BBA;&nbsp;</a>
                    </div>
                    <?php
                    include './COMM/commListBulider.class.php';
                    commListBulider::loadCommList($art->getBlink() == 0 ? $artid : $art->getBlink(), $art->getBlink() == 0 ? "art" : "blog");
                    ?>
                </div>

            </div>
            <div id="ad-right">
                <?php
                include_once '../user/data/userInfo.class.php';
                include_once '../user/data/nickconv.class.php';
                $usr = new userInfo($art->getUid());
                ?>
                <div class="art-usi">
                    <span id="usi-head">
                        <img class="borderR5" id="usi-head-img" src="<?php echo G::getHeadimg($usr->getUid()); ?>_64x" />
                        <span id="usi-head-nick"><?php echo nickconv::conv($usr->getProlev(), $usr->getIsAdmin()); ?></span>
                        <span id="usi-head-username"><?php echo $usr->getUsername(); ?></span>
                        <span class="clear"></span>
                    </span>
                    <span class="clear"></span>
                    <span class="usi-items">
                        <strong>擅长语言:</strong>
                        <span><?php echo str_replace("|", " ", $usr->getLan()); ?></span>
                    </span>
                    <span class="usi-items">
                        <strong>就职公司:</strong>
                        <span><?php echo $usr->getInc(); ?></span>
                    </span>
                    <span class="usi-items"">
                        <strong>所在地区:</strong>
                        <span><?php echo $usr->getAddress(); ?></span>
                    </span>
                    <span class="usi-items">
                        <strong>TA共发表了:</strong>
                        <span><?php echo $usr->getTotalArtNum(); ?> 篇文章</span>
                    </span>
                </div>
                <div class="borderR5" id="bbs-sugg-posts">
                    <span class="tipS-blocked">论坛推荐帖子</span>
                    <ul class="Dotted sdULpatch"><?php $c->pushRandBBsPost(); ?></ul>
                </div>
                <div id="randBooklist" class="borderR5">
                    <span class="tipS-blocked" style="background-color:#BF0A10;">最新资讯</span>
                    <ul class="Dotted sdULpatch"><?php $c->pushNews() ?></ul>
                </div>
                <div id="randBooklist" class="borderR5">
                    <span class="tipS-blocked" style="background-color:#15B300;">随机好书推荐</span>
                    <ul class="Dotted sdULpatch"><?php $c->pushRandBook() ?></ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <script src="/jss/coref.js"></script>
        <script src="/not/js/log_f_js.js"></script>
        <script src="/jss/templates.js"></script>
        <script src="/mod/kd/SyntaxHighlighter/Scripts/shCore.js"></script>
        <script language="javascript">
            $(function() {
                if(getCookie("username")!="" && getCookie("_uid")!="") {
                    $.post("/not/js/getinfo.php", {
                        uid:getCookie("_uid"),
                        type:"art"
                    },
                    function(data) {
                        var match_str=$("#artid:hidden").val();
                        if(data!="" && data.match(match_str)) {
                        } else {
                            $("#like-this").css("display","inline-block");
                            $("#colok").val("true");
                        }
                        match_str = null;
                    });
                }
                dp.SyntaxHighlighter.ClipboardSwf = '/mod/kd/SyntaxHighlighter/Scripts/clipboard.swf';
                dp.SyntaxHighlighter.HighlightAll("code");
            });
        </script>
        <span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script><span>
    </body>
</html>
<?php $Cache->cache_end(); ?>