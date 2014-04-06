<?php
error_reporting(0);
$_tri_xml = simplexml_load_file(dirname(__FILE__) . '/tutorialLib/tri_' . $_GET['t'] . '.xml');
foreach ($_tri_xml->xpath("//atom") as $index => $atom) {
    if (($index + 1) == $_GET['p']) {
        $title = $atom['title'];
        break;
    };
}
$main_title = $_tri_xml->xpath("//tutorial-desc");
$main_title = $main_title[0];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title; ?>_<?php echo $main_title ?>_IT技术在线教程</title>
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <link rel="stylesheet" type="text/css" href="/not/online/cont/tutorial.css?v=3-13" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav_v3.php' ?>
        </div>
        <div class="atr" style="width:1024px;margin-top:25px;"><div class="atr-bac-left"></div>
            <div id="main-tri-list">
                <span class="tipS" style="margin:0;border-top:none;">教程目录</span>
                <ul class="triUL">
                    <?php
                    $I = 1;
                    foreach ($_tri_xml->xpath("//sector") as $fnu) {
                        echo "<li style=\"font-weight:bold;list-style:none;\">";
                        echo "<span style=\"cursor:pointer;\">{$fnu['desc']}</span>";
                        echo "<ul class=\"secUL\">";
                        foreach ($fnu->xpath("atom") as $sub) {
                            echo "<li style=\"list-style:none;\"><a href=\"/online/tri-{$_GET['t']}/sec-{$I}.html\">{$sub['title']}</a></li>";
                            $I++;
                        }
                        echo "</ul>";
                        echo "</li>";
                    }
                    ?>
                </ul>
            </div>
            <div class="Shadow" id="main_shower">
                <!--加载对应模板-->
                <?php include dirname(__FILE__) . '/cont/tri_' . $_GET['t'] . '/tplFor_' . $_GET['p'] . '.html'; ?>
            </div>
            <span class="clear"></span>
        </div>
        <span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>
    </body>
</html>