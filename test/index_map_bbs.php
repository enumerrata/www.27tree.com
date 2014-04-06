<?php

define("ROOT", "../search/");
include ROOT . 'class/css.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/minbbs/post.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/book.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';
//include $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
//include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
$api = new CloudSearchApi();
$SQL = sprintf('SELECT postid AS id FROM bbs_posts LIMIT %s,20;', $_GET['p']);
$mysql = Conn_mysql::getInstance();
$Re = $mysql->query($SQL);
$itemsArr = array();
$itemsArr_s = array();
$index = $api->getIndex('bbs');
while ($row = mysql_fetch_array($Re)) {
    $B = new Post($row['id']);
    if ($B->error)
        continue;
    echo $row['id'], '<br />';
    $itemsArr = array("cmd" => "add", "fields" => array("id" => $row['id'], "title" => $B->getTitle(), "body" => strip_tags($B->getContent()), "url" => $B->getURL(), "author" => $B->getUid() . '-' . $B->getAuthor(), "create_timestamp" => strtotime($B->getDatetime())));
    array_push($itemsArr_s, $itemsArr);
}
//print_r($itemsArr_s);
$index->addDocuments($itemsArr_s);
?>
