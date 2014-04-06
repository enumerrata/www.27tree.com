<?php
define("ROOT", "../");

$Param_date = $_GET['date'];
$Param_id = $_GET['id'];

include_once ROOT . 'inc/mCache/CacheLite.php';
$Cache = new Cache_M(Cache_M::ZIP_GZIP);
$Cache->setCacheDir('./blog_cache');
$Cache->setCacheLifeTime(1);

$ckey = $Param_id . $Param_date;
if (!$Cache->is_cached($ckey)) {
    $Cache->cache_start($ckey);

    include_once ROOT . 'not/controllers/view_blog.php';
    include_once ROOT . 'mod/Conn_mysql.class.php';
    include_once ROOT . 'mod/G.php';
    include_once ROOT . 'user/data/Blog.php';
    include_once ROOT . 'user/data/includes/blog_controller.class.php';

    $path = ROOT . "not/blog_file/$Param_date/blog_$Param_id" . '.xml';

    if (!file_exists($path)) {
        G::NhFush404();
        exit();
    } // 文件读取错误 -> 404 页面

    $blog = new Blog($Param_id);

    $blog->upReadi();
    $usr = $blog->getAuthor();
    $c = new view_blog_controlor($blog->getUid(), $Param_id);

    $usr_data_job = $usr->getJob() == '' ? '未知职业' : $usr->getJob();
    $usr_data_addr = $usr->getAddress() == '' ? '未知地区' : str_replace('/', ' - ', $usr->getAddress());
} else {
    $Cache->read_cache_file($ckey, true);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo "<title>", $blog->getTitle(), "_技术博客</title>"; ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/static/css/blog_single.css" />
        <link rel="stylesheet" type="text/css" href="/mod/kd/SyntaxHighlighter/Styles/SyntaxHighlighter.css" />
    </head>
    <body>
        <ins id="COMMTYPE" rel="blog"></ins>
        <ins id="COMMID" rel="<?php echo $_GET['id']; ?>"></ins>
        <?php include ROOT . 'templates/nav_v3.php' ?>
        <div class="sdCenter" style="margin-bottom:25px;">
            <!-- left -->
            <div id="b-left-wapp">
                <a class='toTopbtn' href='javascript:;' onclick='goTop()'></a>
                <!--<div id="b-sugg-img"></div>-->
                <div class="autowarp" id="b-left-in">
                    <div id="b-left-title-wapp">
                        <h1 id="blog-title"><a href="<?php echo $_SERVER['REQUEST_URI'];?>"><?php echo $blog->getTitle(); ?></a></h1>
                        <div>
                            <span class="Gray">由 <a href="/user/visit/<?php echo $usr->getUid(); ?>"><?php echo $usr->getUserName(); ?></a> 发表于</span>
                            <span class="Gray"><?php echo G::tTimeFormat_vs($blog->getSubmit_datetime()); ?></span>
                            &nbsp;<span class="Gray"><?php echo $blog->getCommi(); ?>评 / <?php echo $blog->getReadi(); ?>阅</span>
                        </div>
                    </div>
                    <!-- 正文 -->
                    <div id="blog_content">
                        <?php echo $blog->getContent(); ?>
                    </div>
                    <!-- @正文 -->
                </div>
                <div class="sdCommWapp" style="margin:10px 0;" onmouseover="javascript:$('#comment-content-wapper',this).show();">
                    <div id="comment-cast">
                        <div id="comment-content-wapper">
                            <span class="sdText" style="width:auto;margin-top:10px;">
                                <textarea id="comment-content" rows="3"
                                          onfocus="javascript:if(this.value=='&#36755;&#20837;&#20320;&#30340;&#35780;&#35770;&#46;&#46;&#46') this.value = '';"
                                          onblur="javascript:if(this.value=='') this.value = '&#36755;&#20837;&#20320;&#30340;&#35780;&#35770;&#46;&#46;&#46;';">&#36755;&#20837;&#20320;&#30340;&#35780;&#35770;&#46;&#46;&#46;</textarea>
                            </span>
                        </div>
                        <a href="javascript:;" onclick="javascript:submit_log();" id="next-cp-comm" class="next-cp" style="margin:0;">&#x70B9;&#x6211;&#x53D1;&#x8868;&#x6587;&#x7AE0;&#x8BC4;&#x8BBA;&nbsp;</a>
                    </div>
                    <?php
                    include './COMM/commListBulider.class.php';
                    commListBulider::loadCommList($_GET['id'], "blog");
                    ?>
                </div>
            </div>
            <!-- @left -->

            <!-- right -->
            <div id="b-right-wapp">
                <div class="btn10">
                    <a id="bl-usr-wapp" class="next-cp" href="/user/visit/<?php echo $usr->getUid(); ?>">
                        <div id="bl-usr-left">
                            <img class="Shadow" src="<?php echo G::getHeadimg($usr->getUid()); ?>" width="80px" height="80px"/>
                        </div>
                        <div id="bl-usr-right">
                            <div id="bl-usn"><?php echo $usr->getUsn(); ?></div>
                            <div id="bl-job"><?php echo $usr_data_job ?></div>
                            <div id="bl-add"><?php echo $usr_data_addr ?></div>
                        </div>
                    </a>
                </div>
                <div class="btn10">
                    <span class="RedBar">
                        <span class="RedBar-in"><?php echo $usr->getUserName(); ?>其他文章</span>
                    </span>
                    <ul id="ul-usr-bl"><?php echo $c->pushNewUserBlog() ?></ul>
                </div>
                <div style="padding-top:10px;border-top:1px dashed #ccc;text-align:center;">
                    <a target="_blank" href="http://list.qq.com/cgi-bin/qf_invite?id=9b0c452f6c46c22a827ba90f5f993d2096986e226074231c"><img border="0" alt="填写您的邮件地址，订阅我们的精彩内容：" src="http://rescdn.list.qq.com/zh_CN/htmledition/images/qunfa/manage/picMode_light_l.png" /></a>
                </div>
            </div>
            <!-- @right -->
            <div class="clear"></div>

        </div>
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js?v=4-1"></script>
        <script src="/not/js/vBlog.js?v=5-3"></script>
        <script src="/jss/templates.js"></script>
        <script src="/mod/kd/SyntaxHighlighter/Scripts/shCore.js"></script>
        <script language="javascript">
            $(function() {
                dp.SyntaxHighlighter.ClipboardSwf = '/mod/kd/SyntaxHighlighter/Scripts/clipboard.swf';
                dp.SyntaxHighlighter.HighlightAll("code");
            });
        </script>
        <script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=1&amp;mini=1&amp;pos=left&amp;uid=6441257" ></script>
        <script type="text/javascript" id="bdshell_js"></script>
        <script type="text/javascript">
            var bds_config={"bdTop":43};
            document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
        </script>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/stat_code.php' ?>
    </body>
</html>
<?php $Cache->cache_end(); ?>