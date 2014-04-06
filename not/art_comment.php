<?php

include_once '../mod/con_mysql_query.php';
include_once '../mod/G.php';
require_once './file/add_news_Comment.php';
include_once '../user/data/dy_controlor.php';
date_default_timezone_set('PRC');
$date = date("Y-m-d H:i:s");

$fuid = $_POST['vis'] == '1'? -1 : $_COOKIE['_uid'];
$fusername = $_POST['vis'] == '1'? "游客" : $_COOKIE['username'];

$_path_xml = $_POST['path'] . ".xml";
$_raw_path = explode("/", $_POST['path']);
$doc = new DOMDocument();
$doc->formatOutput = true;
$doc->load($_path_xml);
$path_json = $_POST['path'] . ".json";
$json = @json_decode(@file_get_contents($path_json), true);

$mysql = new con_mysql_query();

$urldate = preg_replace("/ \d{2}:\d{2}:\d{2}/i", "", $json[date]);

$pathnum = preg_replace("/.xml$/i", "", $json['path']);

if ($json['uid'] != $fuid) {
     $url = "/art/$json[type]/content/$urldate/$pathnum.html";
     $dy = new dy_controlor($json['uid']);
     $dy->pushCommDy($fuid, $json['uid'], $json['title'], substr($_POST['comment'], 0, 120), $date, $url);
     unset($dy);
}



$infos = explode('*', $json['readInfo']);
$infos[0] = strval(intval($infos[0]) + 1);
$commi = $infos[0];
$infos = implode('*', $infos);
$json['readInfo'] = $infos;
$mysql->query("UPDATE `artlist` SET `commi`=$commi WHERE `id_artlist`='$json[artid]';");
$json = @json_encode($json);
@file_put_contents($path_json, $json);

$comment_list = $doc->getElementsByTagName('c')->item(0);
$newNode = $comment_list->cloneNode(true);
$newNode->getElementsByTagName('locked')->item(0)->firstChild->nodeValue = "false";
$newNode->getElementsByTagName('author-c')->item(0)->firstChild->nodeValue = $fusername;
$newNode->getElementsByTagName('uid-c')->item(0)->firstChild->nodeValue = $fuid;
$newNode->getElementsByTagName('date-c')->item(0)->firstChild->nodeValue = urlencode(iconv("gb2312", "utf-8", $date));
$newNode->getElementsByTagName('conf-c')->item(0)->firstChild->nodeValue = $_POST['comment'];
$pend = $doc->getElementsByTagName('comment-list')->item(0);
$pend->appendChild($newNode);

$adder = new add_news_comment();
$adder->add($_POST['type'], $fusername, $date, $_POST['comment']);
$doc->save($_path_xml);

if($fuid != -1){
     @G::upCredit($fuid, 1);
}
//del the cache file
//@exp not/cache/cache_c_1336186409
@unlink("./cache/cache_$_raw_path[2]_$_raw_path[4]");

print_r(json_encode(array(
    'STATE' => 'SUCCESS',
    'DATE' => $date,
    'head-img' => G::getHeadimg($fuid)
    )));