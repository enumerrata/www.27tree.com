<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'];
require './mod/Conn_mysql.class.php';
require './index.class.php';
$randPa = array(
    '嘿, 说你呢, 盯着显示屏看的那个, 还在等什么',
    '程序员是个神圣的职业！程序员，请昂起你高贵的头！',
    '21世纪最有价值，最富创造力的人们——"程序员"'
);
$index = new Front_index();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include $ROOT . '/templates/index/index_head.php'; ?>
    </head>
    <body>
        <?php include $ROOT . '/templates/nav_v3.php' ?>
        <!--@body-->
        <div class="sdCenter Shadow" style="width:940px;margin-bottom:15px;">
            <div class="borderR5" style="background:#fff;padding:15px;border:1px solid #ccc;">
                <div id="f-s1">
                    <img class="block" style="margin:0 auto;" src="/img/i/f/<?php echo rand(1, 4); ?>.png" width="100%"/>
                    <div style="background:url('/img/i/f-bi-gb.png') 0 0 repeat-x;height:50px;margin-top:-50px;position:relative;padding:0 15px;text-align:right;color:#fff;font-size:20px;line-height:50px;">
                        <?php echo $randPa[rand(0, 2)]; ?><a class="sign-btn borderR15" href="/account/register/">马上注册</a>
                    </div>
                </div>
                <div id="f-s2">
                    <div id="f-s2-l">
                        <span class="RedBar">
                            <span class="RedBar-in">我们都是程序员</span>
                        </span>
                        <div style="margin-top:4px;margin-bottom:5px;line-height:22px;font-size:14px;color:#444;">
                            二叉树是一个IT技术社交网络，在这里你可以找到志同道合的朋友，交流技术。发掘你所不知道的，分享你所知道的。<br />世界上最遥远的距离，是我在二叉树，你却在Debug。
                        </div>
                        <span class="RedBar">
                            <span class="RedBar-in">合作伙伴</span>
                        </span>
                        <div style="margin-top:6px;">
                            <a href="http://www.toutoupiao.com/" target="_blank">&#25237;&#31080;&#32593;</a> |
                            <a href="http://www.chm-pdf.com/" target="_blank">E书家</a> |
                            <a href="http://www.ticmy.com/" target="_blank">Ticmy</a> |
                            <a href="http://www.qiguodu.com/" target="_blank">岐山</a> |
                            <a href="http://www.lgups.com/" target="_blank">ups</a> |
                            <a href="http://www.godorders.com/" target="_blank">天旨信息</a>
                        </div>
                    </div>
                    <div id="f-s2-r">
                        <span class="RedBar">
                            <span class="RedBar-in">他们刚刚加入了二叉树</span>
                        </span>
                        <div style="margin-top:5px;">
                            <?php $index->pushNewsUser(); ?>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--@body-->
        <span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>
    </body>
</html>