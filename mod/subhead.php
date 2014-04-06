<?php
include 'con_mysql_query.php';
include 'art_Controlor.php';
include 'article.class.php';

$cont = art_Controlor::getInstance();
$cont->changeArt(array('id'=>$_REQUEST['id'],'lt'=>$_REQUEST['h'],'tt'=>$_REQUEST['tt']));