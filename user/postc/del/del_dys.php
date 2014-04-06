<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/con_mysql_query.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/dy_controlor.php';

$dyc = new dy_controlor($_COOKIE['_uid']);
$dyc->delDy($_POST[dy_id]);