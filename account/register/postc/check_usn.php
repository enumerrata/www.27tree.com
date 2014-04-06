<?php
error_reporting(0);
if($_POST){
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
    $mysql = Conn_mysql::getInstance();
    $SQL = sprintf('SELECT count(uid) AS count FROM client WHERE username = \'%s\'', mysql_real_escape_string(urldecode($_POST['usn']),$mysql->getConnectionHandle()));
    $re = mysql_fetch_array($mysql->query($SQL));
    echo $re['count'];
}
