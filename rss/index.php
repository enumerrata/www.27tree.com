<?php
define(ROOT, $_SERVER['DOCUMENT_ROOT']);
$vali = array('about', 'book', 'blog', 'news');
$type = in_array($_GET['p'], $vali) ? $_GET['p'] : 'blog';
/*if($type == 'book'){
    $book_type = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/not/mybook/booktype.xml');
    $book_type = $book_type->xpath('//@desc');
    $b_type = '';
    foreach($book_type as $v){
        $b_type .= ' , '.$v;
    }
}*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>RSS-订阅中心</title>
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <link rel="stylesheet" type="text/css" href="/not/f_style/BlogList.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/rss/main.css" />
    </head>
    <body>
        <?php include ROOT . '/templates/nav_v3.php' ?>
        <div class="sdCenter" id="main-wapp">
            <div id="w-left">
                <a class="BookTypesItem" href="/rss/?p=blog">最新博客</a>
                <a class="BookTypesItem" href="/rss/?p=book">图书快报</a>
                <a class="BookTypesItem about-rss" style="margin-bottom:0;" href="/rss/?p=about">关于RSS</a>
            </div>
            <div id="w-right">
                <?php include './templates/index_' . $type . '.html'; ?>
            </div>
            <div class="clear"></div>
        </div>
        <span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script><span>
    </body>
</html>