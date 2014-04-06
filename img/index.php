<?php
error_reporting(0);
require './inc/Cache/Lite.php';
require './inc/Cache/Lite/Output.php';
require './mod/Conn_mysql.class.php';
require './not/news/class/newsAdapter.php';
require './mod/G.php';
require './not/Article.class.php';
require './index.class.php';
require './user/data/Blog.php';
$index = new itsrcs_font_index();
$cache = new Cache_Lite_Output(Cache_Lite::getSrcsOptions());
$cache->setLifeTime(1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>亿柿网_舒适的IT技术社区</title>
        <meta name="keywords" content="IT技术,IT技术社区,程序员好书推荐,编程好书推荐" />
        <meta name="description" content="亿柿网是一个IT技术社区,专业于提供IT技术资讯、编程开发技术资源。在这里你可以认识许多志同道合的朋友,通过交流提升自身技术水平。" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta property="qc:admins" content="464152416761432336375" />
        <meta name="chinaz-site-verification" content="89ec235c-38a8-49d0-84cb-d8429bb29041" />
        <meta name="ujianVerification" content="e327460f95e32bb03e92155c44c6f043" />
        <meta name="baidu-site-verification" content="8LpiEGHmcStKiCFg" />
        <meta name="baidu_union_verify" content="19c4a3ed94202380a4fbb2e395b47939" />
        <meta name="alexaVerifyID" content="VQ9ne6K29iHY0aiiZErNIuxWW5A" />
        <link rel="icon" href="/favicon.ico" type="image/x-icon" media="screen" />
        <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" media="screen" />
        <link rel="stylesheet" type="text/css" href="/core.css?v=1.64" />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
        <script src="/jss/sp_font.js"></script>
    </head>
    <body>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/ucenter.html'; ?>
        <?php if ($cache->start("index_font")) exit(0); ?>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav_v3.php' ?>
        <!--@body-->
        <div class="sdCenter">
            <!--@start-left-->
            <div class="Shadow" style="width:720px;float:left;border:1px solid #ccc;position:relative;background:#fff;padding:10px 15px;"><div class="atr-bac-left"></div>
                <div class="f-w-item">
                    <div class="f-w-item-l">
                        <span class="RedBar">
                            <span class="RedBar-in">图文资讯</span>
                        </span>
                        <?php $index->pushIMGnews(3); ?>
                    </div>
                    <div class="f-w-item-r">
                        <span class="RedBar">
                            <span class="RedBar-in">推荐新闻</span>
                        </span>
                        <?php $index->pushNews(5); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="f-w-item">
                    <span class="RedBar">
                        <span class="RedBar-in">今日头条</span>
                        <div class="RedBar-in-r">
                            <div style="margin-top:5px;*margin-top:7px;">
                                <a class="rb-btn rb-btn-active"></a><a class="rb-btn"></a><a class="rb-btn"></a>
                            </div>
                        </div>
                    </span>
                    <div class="f-headline-items">
                        <h1><a href="http://www.itsrcs.com/blog/2012-11-12/content_242.html">7个改变世界的Java项目</a></h1>
                        <div style="color:#666;">
                            <div class="f-headline-initems">
                                <img src="<?php echo IMG_PATH_ROOT; ?>fontBigt/9a232b1b8a3d4e0340232d106f012db3.jpg" />
                            </div>
                            <div style="margin-right:170px;">
                                Java的开源生态系统是强大而健康的，这是我们（Oreilly）创建OSCON Java（Open Source Convention Java）的主要原因之一。在过去10年中，一些项目已经被广泛接受，并且已经统治了Java软件开发世界，一些甚至影响到了用户的日常生活。
                                JUnit
                                Kent Beck先生关于Smalltalk的单元测试被Kent Beck 和Erich Gamma带进Java——JUnit。在这十年里，JUnit带来了测试驱动开发的普及浪潮。许多其它流行语言的单元测试版本也跟着被创造出来了，例如.NET、C、Python、Perl。
                                Eclipse
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="f-w-item">
                    <div style="float:left;width:360px;">
                        <span class="RedBar">
                            <span class="RedBar-in">最新<a class="rb-more-btn" href="/blog/index.html">博客</a></span>
                        </span>
                        <?php $index->pushNewsBlog(); ?>
                    </div>
                    <div style="margin-left:370px;">
                        <span class="RedBar">
                            <span class="RedBar-in">热门<a class="rb-more-btn" href="/q_a/index.html">问答</a></span>
                        </span>
                        <?php $index->pushNewsQa(); ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="f-w-item">
                    <span class="RedBar f-w-item">
                        <span class="RedBar-in">新会员</span>
                    </span>
                    <div style="float:left;width:360px;">
                        <div class="f-newus">
                            <?php $index->pushNewsUser(); ?>
                        </div>
                    </div>
                    <div style="margin-left:360px;">
                        <a id="signProm" class="borderR5" href="http://www.itsrcs.com/account/register/">马上加入我们吧</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="f-w-item">
                    <span class="RedBar">
                        <span class="RedBar-in">推荐文章</span>
                    </span>
                    <?php $index->pushArticleSugg(); ?>
                </div>
            </div><!--@end-left-->
            <!--@start-right-->
            <div class="Shadow" style="margin-left:752px;padding-top:40px;">
                <div style="border:1px solid #ccc;background:url('/img/br_r.png') repeat-y #fff;border-left:none;padding:10px 15px;border-top:3px solid #6d9906;">
                    <div class="f-w-item">
                        <span class="RedBar">
                            <span class="RedBar-in">大家在吐槽什么?</span>
                        </span>
                        <div id="wapper_ss_set">
                            <?php $index->pushNewsShuoshuo(); ?>
                        </div>
                        <div id="wapper_push_ss">
                            <div id="alert-bar"></div>
                            <div class="sdText" style="margin-top:-1px;">
                                <textarea class="Gray" id="f-ss-tra" onfocus="javascript:$(this).removeClass('Gray').html('');">我也来一段</textarea>
                            </div>
                            <a href="javascript:;" class="push_ss_now" onclick="pushShuoShuo();"></a>
                        </div>
                    </div>
                    <div class="f-w-item">
                        <span class="RedBar">
                            <span class="RedBar-in">Chrome浏览器下载</span>
                        </span>
                        <div style="margin-top:10px;">
                            <a href='http://xiazai.zol.com.cn/down.php?softid=327560&subcatid=69&site=10b&server=10&rand=5711360'><img src="/img/f-bit-ie.png" style="border:1px solid #aaa;width:275px;" class="block"/></a>
                        </div>
                    </div>
                </div>
            </div><!--@end-right-->
            <div class="clear"></div>
        </div>
        <!--@body-->
        <?php require './templates/footer-font.html'; ?>
    </body>
</html>
<?php $cache->end(); ?>