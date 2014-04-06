<?php

class bbs_stat {

    public static function getCountData_bySID($sid, $mysql = false) {
        if (!$mysql)
            $mysql = Conn_mysql::getInstance();
        $SQL = sprintf('SELECT count FROM bbs_stat WHERE sid = %s;', $sid);
        $re = mysql_fetch_array($mysql->query($SQL));
        return (int) $re['count'];
    }

    public static function upCountData_bySID($sid, $increment = 1, $mysql = false) {
        if (!$mysql)
            $mysql = Conn_mysql::getInstance();
        $SQL = sprintf('UPDATE bbs_stat SET `count` = `count` + %s WHERE sid = %s;', $increment, $sid);
        $mysql->query($SQL);
    }

}