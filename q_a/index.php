<?php
require './index_controller.class.php';
$page = isset($_GET['p']) ? ctype_digit($_GET['p']) ? $_GET['p'] > 0 ? (int) $_GET['p'] : 1  : 1  : 1;
$idx = new index_controller();
$page_bar = $idx->genPageBar($page);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>在线问答|编程技术交流问答|IT技术问答</title>
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <link rel="stylesheet" type="text/css" href="/q_a/qa_data_sources/style.css?v=3-12" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
    </head>
    <body>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/nav_v3.php' ?>
        <div class="sdCenter"><div class="atr-bac-left"></div>

            <div class="Shadow" id="qa-ix-l">

                <span class="RedBar">
                    <span class="RedBar-in">最新问题,快来解答吧</span>
                </span>

                <div class="qa_page_bar"><?php echo $page_bar; ?></div>

                <div style="">
                    <!-- 问题列表 -->
                    <?php $idx->pushQaList($page); ?>
                    <!-- @问题列表 -->
                </div>

                <div class="qa_page_bar" style="border-top:1px dashed #ccc;padding-top:8px;"><?php echo $page_bar; ?></div>

            </div>

            <div id="qa-ix-r">
                <a class="Shadow" id="smq-sugg-btn" href="/q_a/s_question/"></a>

                <div style="background:#FFF;border:1px solid #ccc;padding:10px;">
                    <span class="RedBar">
                        <span class="RedBar-in">热点问题</span>
                    </span>
                </div>

            </div>

            <div class="clear"></div><!-- clear-fix -->
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/stat_code.php' ?>
        </div>
    </body>
</html>