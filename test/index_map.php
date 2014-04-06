<?php

define("ROOT", "../search/");
include ROOT . 'class/css.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/book.class.php';
//include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
$api = new CloudSearchApi();
$SQL = sprintf('SELECT bookid FROM book_list LIMIT %s,20;', $_GET['p']);
$mysql = Conn_mysql::getInstance();
$Re = $mysql->query($SQL);
$itemsArr = array();
$itemsArr_s = array();
$index = $api->getIndex('book');
while ($row = mysql_fetch_array($Re)) {
    $B = new Book($row['bookid']);
    echo $row['bookid'], '<br />';
    $itemsArr = array("cmd" => "add", "fields" => array("id" => $row['bookid'], "title" => $B->getTitle(), "body" => strip_tags(G::article_content_conv($B->getIntro(), $B->parseVersion)), "url" => $B->getURL(), "author" => $B->getBookAuthor(), "thumbnail" => $B->getImg_link()));
    array_push($itemsArr_s, $itemsArr);
}
//rint_r($itemsArr_s);
$index->addDocuments($itemsArr_s);
?>
