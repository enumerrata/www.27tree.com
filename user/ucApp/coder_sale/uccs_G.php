<?php

class uccs_G {

    public static function upStatus($uid, $increment = 1) {
        $uid = mysql_real_escape_string($uid);
        $mysql = Conn_mysql::getInstance();
        @$mysql->query("UPDATE `app_codersale_stat` SET status = status + $increment WHERE uid = $uid;");
    }

    public static function calStatus($uid) {
        
    }

    public static function hasRelation($uid, $target) {
        $mysql = Conn_mysql::getInstance();
        $_re = $mysql->query("SELECT COUNT(uid) AS count FROM `app_codersale_link` WHERE `uid` = $target AND `master` = $uid;");
        if (false !== $_re) {
            $_reObj = mysql_fetch_object($_re);
            if (intval($_reObj->count) == 1)
                return true;
            else
                return false;
        } else {
            return false;
        }
    }

}

?>
