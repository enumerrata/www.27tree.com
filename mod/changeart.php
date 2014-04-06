<?php
include 'con_mysql_query.php';
include 'article.class.php';
include 'art_Controlor.php';


$options = array();
$options['id'] = $_REQUEST['artid'];
$options['commandList'] = $_REQUEST['cl'];

if(isset($_REQUEST['ct'])) $options['Content'] = $_REQUEST['ct'];
if(isset($_REQUEST['tt'])) $options['Title'] = $_REQUEST['tt'];
if(isset($_REQUEST['ctx'])) $options['Contentx'] = $_REQUEST['ctx'];
if(isset($_REQUEST['cgt'])) $options['cType'] = $_REQUEST['cgt'];

$ct = art_Controlor::getInstance();
if($ct->changeArt($options)){
	echo 1;
} else echo 0;