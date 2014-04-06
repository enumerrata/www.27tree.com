<?php

if (!class_exists(Conn_mysql)) {
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
}
if (!class_exists(dy_controlor)) {
    include $_SERVER['DOCUMENT_ROOT'] . '/user/data/dy_controlor.php';
}
date_default_timezone_set('PRC');

class FriendLinker {

    public static function bulid_friendShip($uid, $target, $dyId = null) {
        $uid = mysql_real_escape_string($uid);
        $target = mysql_real_escape_string($target);
        $mysql = Conn_mysql::getInstance();
        $re = $mysql->query("SELECT `target` FROM `client_link_friend_app` WHERE (`target` = $target AND uid = $uid) OR (`target` = $uid AND uid = $target);");
        //echo "SELECT `target` FROM `client_link_friend_app` WHERE `target` = $target AND uid = $uid;";
        if (mysql_num_rows($re) != 0) {
            if ($mysql->query("INSERT INTO `client_link_friend` (`uid`,`target`) VALUES ($uid,$target);")) {
                $mysql->query("DELETE FROM `client_link_friend_app` WHERE (`target` = $target AND uid = $uid) OR (`target` = $uid AND uid = $target);");
                $dyc = new dy_controlor($target);
                $dyc->pushNewFriendDy($uid, date('Y-m-d H:i:s'));
                $dyc2 = new dy_controlor($uid);
                $dyc2->pushNewFriendDy($target, date('Y-m-d H:i:s'));
                if (null !== $dyId) {
                    $dyc->sdDelDy($dyId);
                }
                return true;
            } else
                return false;
        }else
            return false;
    }

    public static function app_friend($uid, $target) {
        $uid = mysql_real_escape_string($uid);
        $target = mysql_real_escape_string($target);
        $mysql = Conn_mysql::getInstance();
        $re = $mysql->query("SELECT `target` FROM `client_link_friend_app` WHERE `target` = $target AND uid = $uid;");
        if (mysql_num_rows($re) == 0) {
            if ($mysql->query("INSERT INTO `client_link_friend_app` (`uid`,`target`) VALUES ($uid,$target);")) {
                $dyc = new dy_controlor($target);
                $dyc->pushFriendAppDy($uid, date("Y-m-d H:i:s"));
                return true;
            } else
                return false;
        } else {
            return false;
        }
    }

    public static function break_friendShip($uid, $target) {
        $uid = mysql_real_escape_string($uid);
        $target = mysql_real_escape_string($target);
        $mysql = Conn_mysql::getInstance();
        return true;
    }

    public static function is_friend($uid, $suid) {
        $mysql = Conn_mysql::getInstance();
        $uid = mysql_real_escape_string($uid);
        $suid = mysql_real_escape_string($suid);
        $Re = $mysql->query("SELECT * from `client_link_friend` WHERE (uid = " . $uid . " AND target = " . $suid . ") OR (target = " . $uid . " AND uid = " . $suid . ");");
        //echo "SELECT * from `client_link_friend` WHERE (uid = " . $uid . " AND target = " . $suid . ") OR (target = " . $uid . " AND uid = " . $suid . ");";
        if (mysql_num_rows($Re) == 0) {
            return false;
        } else {
            $row = mysql_fetch_object($Re);
            if ($uid == $row->uid && $suid == $row->target || $suid == $row->uid && $uid == $row->target) {
                return true;
            }
        }
    }

}
?>
