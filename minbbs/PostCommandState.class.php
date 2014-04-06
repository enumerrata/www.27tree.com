<?php

if (!class_exists('Conn_mysql'))
    require $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
if (!class_exists('Auth'))
    require $_SERVER['DOCUMENT_ROOT'] . '/user/data/mod/Auth.php';

class PostCommandState {

    const Owner_only = 1;
    const Admin = 3;
    const banAdmin = 2;
    const Visitor = 0;

    public static function get($psid, $uid) {
        /*
         * <? @param CommandS ?>
         * 1 : Owner_only
         * 3 : Admin lev <3,+>
         * 2 : banAdmin  <0,2>
         * 4 : Owner
         * 0 : Visitor
         */
        if ($uid == null || $uid == -1)
            return array("CommandS" => PostCommandState::Visitor, "lev" => null);
        $mysql = Conn_mysql::getInstance();
        $_re = mysql_fetch_array($mysql->query("SELECT uid FROM bbs_posts WHERE postid = $psid;"));
        $_bool_isOwner = intval($_re['uid']) == $uid ? true : false;
        $Auth = new Auth($uid);
        $level = intval($Auth->getLevel());
        if ($Auth->getIsAdmin()) {
            if ($level <= 2) {
                return array("CommandS" => PostCommandState::banAdmin, "lev" => $level , "owner" => $_bool_isOwner);
            } elseif ($level > 2) {
                return array("CommandS" => PostCommandState::Admin, "lev" => $level , "owner" => $_bool_isOwner);
            }
        } else {
            if ($_bool_isOwner) {
                return array("CommandS" => PostCommandState::Owner_only, "lev" => $level);
            } else
                return array("CommandS" => PostCommandState::Visitor, "lev" => $level);
        }
    }

}

?>
