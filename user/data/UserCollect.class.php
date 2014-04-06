<?php

if (@!class_exists(Conn_mysql))
    include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
/*
 * 用户图书收藏，各种收藏
 */

/**
 * Description of UserCollect
 *
 * @author koodo
 */
class UserCollect {

    private $uid;
    private $mysql;

    public function __construct($uid, $mysql = null) {
        $this->uid = mysql_real_escape_string($uid);
        if (null !== $mysql)
            $this->mysql = $mysql;
        else
            $this->mysql = Conn_mysql::getInstance();
    }

    public function collectBook($bookid) {
        $bookid = mysql_real_escape_string($bookid);
        if (!$this->checkBookCollected($bookid)) {
            //书籍的 col_type 设置为 0
            $SQL = sprintf("INSERT INTO `client_collect` (`uid`, `col_id`, `col_type`, `col_datetime`) VALUES (%s, %s, 0, NOW());", $this->uid, $bookid);
            $_Re = $this->mysql->query($SQL);
            if (false !== $_Re) {
                //收藏书籍插入成功
                return true;
            } else {
                //插入失败
                return false;
            }
        } else
            return false;
    }

    public function checkBookCollected($bookid) {
        $bookid = mysql_real_escape_string($bookid);
        $SQL = sprintf("SELECT `col_id` FROM `client_collect` WHERE `uid` = %s AND `col_id` = %s AND `col_type` = %s;", $this->uid, $bookid, 0);
        $_Re = $this->mysql->query($SQL);
        if (false === $_Re || mysql_num_rows($_Re) == 0) {
            return false;
        } else
            return true;
    }

    public function getBookCollected($limit = 5) {
        $SQL = sprintf("SELECT `col_id` FROM `client_collect` WHERE `uid` = %s AND `col_type` = %s ORDER BY `col_id` DESC LIMIT %s;", $this->uid, 0, $limit);
        $_Re = $this->mysql->query($SQL);
        if (false === $_Re || mysql_num_rows($_Re) == 0) {
            return null;
        } else {
            $_return = array();
            while ($_idrow = mysql_fetch_array($_Re)) {
                array_push($_return,(int)$_idrow['col_id']);
            }
            return $_return;
        }
    }

}

?>
