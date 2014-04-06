<?php include './index_controller.class.php';
$cc = new news_index_controller();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>IT前沿资讯|软件发布信息</title>
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <link rel="stylesheet" type="text/css" href="/not/news/sources/style.css?v=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
    </head>
    <body>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav_v2.html' ?>
        <div style="margin:10px auto;width:1040px;padding:10px;background:#fff;border:1px solid #ccc;" class="Shadow"><div class="atr-bac-left"></div>
            <div>
                <div style="float:left;width:300px;">
                    <div style="background:#000;text-align:center;margin-bottom:10px;padding:5px 0;border:1px solid #ccc;">
                        <img style="display:block;margin:0px auto;" src="/not/news/imgdisplay/1348716391929.png" />
                        <a style="display:block;color:#fff;margin-top:5px;" href="javascript:;">消息称编程语言PHP即将推出移动版</a>
                    </div>
                    <div class="BRT-gre" style="margin-bottom:10px;">
                        <h3 style="margin:0;padding:0;border-bottom:1px solid #ccc;margin-left:10px;line-height:25px;font-size:15px;">电子商务 <span style="font-size:12px;color:#666;">Electronic Commerce</span></h1>
                            <ul class="sdULPatch Dotted" style="line-height:24px;font-size:13px;">
<?php $cc->pushNews(news_index_controller::Nt_Electronic_Commerce); ?>
                            </ul>
                    </div>
                    <div class="BRT-gre" style="margin-bottom:10px;">
                        <h3 style="margin:0;padding:0;border-bottom:1px solid #ccc;margin-left:10px;line-height:25px;font-size:15px;">物联网 <span style="font-size:12px;color:#666;">Internet of things</span></h1>
                            <ul class="sdULPatch Dotted" style="line-height:24px;font-size:13px;">
<?php $cc->pushNews(news_index_controller::Nt_Internet_of_things); ?>
                            </ul>
                    </div>
                </div>
                <div style="margin-left:310px;">
                    <div style="float:left;width:400px;border:1px solid #ccc;border-top:3px solid #6397CB;">
                            <?php $cc->pushTodayHead(); ?>
                        <ul class="sdULPatch Dotted" style="border-top:1px dashed #ccc;line-height:24px;font-size:13px;padding-top:10px;">
<?php $cc->pushMoreHeadNew(0); ?>
                        </ul>
                        <ul class="sdULPatch Dotted" style="border-top:1px dashed #ccc;line-height:24px;font-size:13px;padding-top:10px;">
<?php $cc->pushMoreHeadNew(1); ?>
                        </ul>
                        <ul class="sdULPatch Dotted" style="border-top:1px dashed #ccc;line-height:24px;font-size:13px;padding-top:10px;">
<?php $cc->pushMoreHeadNew(2); ?>
                        </ul>
                    </div>
                    <div style="margin-left:410px;">
                        <div class="BRT-red" style="margin-bottom:10px;">
                            <h3 style="margin:0;padding:0;border-bottom:1px solid #ccc;margin-left:10px;line-height:25px;font-size:15px;">推荐资讯</h1>
                                <ul class="sdULPatch Dotted" style="line-height:24px;font-size:13px;">
<?php $cc->pushNews(news_index_controller::Nt_CoderSuff); ?>
                                </ul>
                        </div>
                        <div class="BRT-gre" style="margin-bottom:10px;">
                            <h3 style="margin:0;padding:0;border-bottom:1px solid #ccc;margin-left:10px;line-height:25px;font-size:15px;">软件发布消息</h1>
                                <ul class="sdULPatch Dotted" style="line-height:24px;font-size:13px;">
<?php $cc->pushNews(news_index_controller::Nt_SoftPublish); ?>
                                </ul>
                        </div>
                        <a href="./submitNews.php" class="btn-v2" style="margin-bottom:10px;">资讯投稿</a>
                        <div class="BRT-gre" style="margin-bottom:10px;">
                            <h3 style="margin:0;padding:0;border-bottom:1px solid #ccc;margin-left:10px;line-height:25px;font-size:15px;">程序员的那些事</h1>
                                <ul class="sdULPatch Dotted" style="line-height:24px;font-size:13px;">
<?php $cc->pushNews(news_index_controller::Nt_CoderSuff); ?>
                                </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div> 
            <div class="clear"></div>
        </div>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.html'; ?>
    </body>
</html>