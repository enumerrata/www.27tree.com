<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';

class VisitHistory {

    /**
     * @author koodo@qq.com
     * @desc 用户展示页面访问记录，同时缓存头像
     */
    private $mysql;

    public function __construct() {
        $this->mysql = Conn_mysql::getInstance(Conn_mysql::bulid_pdo);
    }

    public function set($uid, $target) {
        /**
         * @param int $uid
         * @param int $target
         * @SQL INSERT INTO client_visit_history (uid,target,time,head_cache) VALUES (#,#,#,#);
         */
        $uid = (int) mysql_escape_string($uid);
        $target = (int) mysql_escape_string($target);

        $stm = $this->mysql->prepare(sprintf("REPLACE INTO `client_visit_history` (`uid`,`target`,`time`,`ush`) VALUES (:uid,:target,NOW(),:ush);"));
        #echo $stm->queryString;
        $stm->bindParam(':uid', $uid, PDO::PARAM_INT);
        $stm->bindParam(':target', $target, PDO::PARAM_INT);
        $stm->bindParam(':ush', G::getHeadimg($uid, 45), PDO::PARAM_STR);

        if ($stm->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function get($uid) {
        /**
         * @param int $uid
         */
        $uid = (int) mysql_escape_string($uid);
        $result = $this->mysql->query(sprintf("SELECT `uid`,`ush` FROM `client_visit_history` WHERE `target` = %s ORDER BY `time` DESC LIMIT 10;", $uid));

        $return = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            array_push($return, $row);
        }
        return $return;
    }

}