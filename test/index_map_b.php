<?php

define("ROOT", "../search/");
include ROOT . 'class/css.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/book.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';
//include $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
//include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
$api = new CloudSearchApi();
$SQL = sprintf('SELECT blogid AS id FROM blog_list LIMIT %s,20;', $_GET['p']);
$mysql = Conn_mysql::getInstance();
$Re = $mysql->query($SQL);
$itemsArr = array();
$itemsArr_s = array();
$index = $api->getIndex('blog');
while ($row = mysql_fetch_array($Re)) {
    $B = new Blog($row['id']);
    echo $row['id'], '<br />';
    $itemsArr = array("cmd" => "add", "fields" => array("id" => $row['id'], "title" => $B->getTitle(), "body" => strip_tags($B->getContent()), "url" => $B->getURL(), "author" => $B->getUid() . '-' . $B->getUserName(), "create_timestamp" => strtotime($B->getSubmit_datetime())));
    array_push($itemsArr_s, $itemsArr);
}
//print_r($itemsArr_s);
$index->addDocuments($itemsArr_s);
?>
