<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/book.class.php';
$mysql = Conn_mysql::getInstance();
$_RE = $mysql->query("SELECT bookid FROM book_list WHERE area = '$_POST[libtype]' ORDER BY bookid DESC LIMIT $_POST[pagelite];");
$tpath = $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/templates/vbook-items.phtml';
while ($b = mysql_fetch_array($_RE)) {
    $book = new book($b['bookid']);
    $param = array(
        'bookid' => $b['bookid'],
        'bookimg' => $book->getBookImgURL(130),
        'author' => $book->getBookAuthor(),
        'title' => $book->getTitle(),
        'intro' => G::blog_summary(G::article_content_conv($book->getIntro()), 200) . '. . . . . .',
        'clickstat' => $book->getClickStat(),
        'has_download' => $book->getBookDownLoadURL()
    );
    include $tpath;
}
?>
