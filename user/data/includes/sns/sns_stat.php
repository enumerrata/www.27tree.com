<?php

class sns_stat {

    /**
     * @TODO 重写
     */

    public static function getTc_nums($uid, $mysql = false) {
        if (!$mysql) {
            $mysql = Conn_mysql::getInstance();
        }
        $SQL = sprintf('SELECT count(*) AS `tc_nums` FROM shuoshuo WHERE uid = %s;', mysql_escape_string($uid));
        $result = @mysql_fetch_array($mysql->query($SQL));
        if (false !== $result) {
            return (int) $result['tc_nums'];
        } else {
            return false;
        }
    }

    public static function getFan_nums($uid, $mysql = false) {
        if (!$mysql) {
            $mysql = Conn_mysql::getInstance();
        }
        $SQL = sprintf('SELECT fans_nums FROM sns_stat WHERE uid = %s;', mysql_escape_string($uid));
        $result = @mysql_fetch_array($mysql->query($SQL));
        if (false !== $result) {
            return (int) $result['fans_nums'];
        } else {
            return false;
        }
    }

    public static function getFollows_nums($uid, $mysql = false) {
        if (!$mysql) {
            $mysql = Conn_mysql::getInstance();
        }
        $SQL = sprintf('SELECT follows_nums FROM sns_stat WHERE uid = %s;', mysql_escape_string($uid));
        $result = @mysql_fetch_array($mysql->query($SQL));
        if (false !== $result) {
            return (int) $result['follows_nums'];
        } else {
            return false;
        }
    }

    public static function update_fans_nums($uid, $mysql = false) {
        if (!$mysql) {
            $mysql = Conn_mysql::getInstance();
        }
        $SQL = sprintf('UPDATE sns_stat st SET fans_nums = (SELECT count(cf.fid) FROM client_link_friend cf WHERE cf.target = st.uid) WHERE st.uid = %s;', $uid);
        @$mysql->query($SQL);
    }

    public static function update_follows_nums($uid, $mysql = false) {
        if (!$mysql) {
            $mysql = Conn_mysql::getInstance();
        }
        $SQL = sprintf('UPDATE sns_stat st SET follows_nums = (SELECT count(cf.fid) FROM client_link_friend cf WHERE st.uid = cf.uid) WHERE st.uid = %s;', $uid);
        @$mysql->query($SQL);
    }

}