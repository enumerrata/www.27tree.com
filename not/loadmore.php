<?php
error_reporting(0);
include $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/mod/article.class.php';
$mysql = Conn_mysql::getInstance();
$result  = $mysql->query("SELECT uid,id_artlist AS id FROM artlist WHERE id_artlist <> $_POST[rawdata] ORDER BY RAND() LIMIT 3;");
$json = array();
while($row = mysql_fetch_array($result)) {
	$list = array();
        $_a = new Article($row['id']);
	array_push($list,$row['id']);
	$list['href'] = $_a->getURL();
	$list['title'] = $_a->getTitle();
	$list['date'] = G::tTimeFormat_vs($_a->getDatetime());
        $list['headimg'] = G::getHeadimg($_a->getUid());
	$list['id'] = $_a->getArtid();
        $list['uid'] = $_a->getUid();
	array_push($json, $list);
}
print_r(json_encode($json));