<?php
include './index_controller.class.php';
$cc = new index_controller();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>坚持18秒_应用中心_亿柿网</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <style type="text/css">
            .nav-v3{
                width:1200px;
            }
        </style>
    </head>
    <body>
        <script>
            var finalTime = null;
        </script>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav_v3.php' ?>
        <div class="atr borderR5" style="width:1200px;margin-top:15px;"><div class="atr-bac-left"></div>
            <div id="gameFrame" style="margin:25px;float:left;">
                <iframe src="./tpl/game_main.htm" width="450px" height="450px" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
            </div>
            <div style="margin-top:25px;margin-left:500px;margin-right:25px;">
                <b class="block Gray" style="margin-bottom:5px;border:1px solid #ccc;background:#fff;text-align:center;font-size:35px;" id="countTime">0.000</b>
                <a class="next-cp" id="record_submit_btn" href="javascript:;" onclick="javascript:postRecord();" style="display:none;">上传结果</a>
                <div style="margin-top:5px;border:1px solid #ccc;background:#fff;padding:15px 0;">
                    <div style="width:300px;margin-left:10px;float:left;text-indent:2em;">
                        <span class="block" style="text-align:center;color:#666;font-size:25px;padding-bottom:5px;border-bottom:1px solid #ccc;">坚持18秒！</span>
                        <span class="block" style="margin-top:10px;">鼠标移动到 <b style="color:red;">红色</b> 部分</span>
                        <span class="block" style="margin-top:10px;">点击 <b style="color:red;">红色</b> 部分马上开始,不用按住鼠标左键。</span>
                        <span class="block" style="margin-top:10px;">避免碰到 <b style="color:blue;">蓝色</b> <b style="color:black;">黑色</b> 部分</span>
                        <span class="block" style="margin-top:10px;"><a href="/log/signprom.php">注册</a> / <a href="/log/">登录</a>后才可以参加排名哦</span>
                        <span class="block" style="margin-top:10px;">是男人就给我坚持 <b>18秒</b> 以上</span>
                        <b class="block" style="margin-top:10px;">游戏交流群 56117503 </b>
                        <div class="bshare-custom" style="margin-top:10px;"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到豆瓣" class="bshare-douban"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a></div>
                    </div>
                    <div style="margin-left:320px;border-left:2px solid #ccc;">
                        <?php $cc->pushRank(); ?>
                    </div>
                </div>
                <a class="next-cp" href="javascript:;" onclick="javascript:window.location = window.location;" style="margin-top:5px;margin-bottom:25px;">重置游戏</a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="atr borderR5" style="width:1200px;">
            <div style="margin:10px;">
                <?php $cc->pushLastRank(); ?>
                <div class="clear"></div>
            </div>
        </div>
        <script src="/jss/jquery-min.js" type="text/javascript"></script>
        <script src="/jss/coref.js" type="text/javascript"></script>
        <script src="./main.js?v=1.12" type="text/javascript"></script>
        <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=3&amp;lang=zh"></script>
        <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
        <script type="text/javascript" charset="utf-8">
            bShare.addEntry({
                title: "是男人就坚持18秒_应用中心_亿柿网",
                pic:"http://www.itsrcs.com/img/305x801340682452.png"
            });
        </script>
        <span style="display:none;"><script src="http://s25.cnzz.com/stat.php?id=4085403&web_id=4085403" language="JavaScript"></script></span>
    </body>
</html>