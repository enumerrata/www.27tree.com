<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/mod/Conn_mysql.class.php";
$mysql = Conn_mysql::getInstance(Conn_mysql::bulid_pdo);

$sta_getUID = $mysql->prepare("SELECT co.uid,cl.username AS usn,cl.passwordx FROM `client_openid` co LEFT JOIN `client` cl ON co.uid = cl.uid WHERE co.`openid` = ? LIMIT 1;");
?> 
