<?php

if ($_POST['record']) {
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
    $mysql = Conn_mysql::getInstance();
    $uid = $_COOKIE['_uid'];
    $record = $_POST['record'];
    if (false !== $_R = mysql_fetch_object($mysql->query("SELECT COUNT(`uid`) AS count FROM `app_hold18_stat` WHERE `uid` = $uid;"))) {
        if ($_R->count == 1) {
            $R_record = mysql_fetch_object($mysql->query("SELECT `record` FROM `app_hold18_stat` WHERE `uid` = $uid;"));
            if ((doubleval($record) > doubleval($R_record->record))) {
                $mysql->query("UPDATE `app_hold18_stat` SET `record` = $record WHERE `uid` = $uid;");
            } else {
                //todo
            }
        } else {
            $mysql->query("INSERT INTO `app_hold18_stat` (uid,record) VALUES ($uid,$record);");
            echo "INSERT INTO `app_hold18_stat` (uid,record) VALUES ($uid,$record);";
        }
    }
}
?>
