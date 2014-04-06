<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/sns/sns_stat.php';

class follow_manager {

    private $mysql;

    public function __construct($mysql = false) {
        if (false !== $mysql)
            $this->mysql = $mysql;
        else
            $this->mysql = Conn_mysql::getInstance();
    }

    public function add_follow($uid, $target) {
        /**
         * @desc 添加关注
         * @author koodo
         * @return array()
         * @param $_return s=>0 对象已经关注
         * @param $_return s=>1 添加关注成功
         * @param $_return s=>2 未知错误
         * @param $_return s=>3 $uid == $target
         */
        $mysql = Conn_mysql::getInstance();
        $_return = array('s' => 0);

        if ($uid == $target) {
            $_return['s'] = 3;
            return $_return;
        }
        // 检查是否已经关注
        $SQL_1 = sprintf("SELECT count(`uid`) AS count FROM `client_link_friend` WHERE (`target` = %s AND `uid` = %s) LIMIT 1;", $target, $uid);

        $re_check_link = @mysql_fetch_array($this->mysql->query($SQL_1));

        if ($re_check_link['count'] == 0) {
            // 未关注 下面进行处理
            // 添加关系
            $SQL_2 = sprintf("INSERT INTO `client_link_friend` (`uid`,`target`) VALUES (%s,%s);", $uid, $target);

            $re_add_relation = $this->mysql->query($SQL_2);

            if (false !== $re_add_relation) {
                // 关系添加成功 下面更新粉丝数量
                sns_stat::update_fans_nums($target, $mysql);
                sns_stat::update_follows_nums($uid, $mysql);
                $_return['s'] = 1;
            } else {
                $_return['s'] = 2;
            }
        } else {
            // 已关注
            $_return['s'] = 0;
        }
        return $_return;
    }

    public function del_follow($uid, $target) {
        // 删除关注
        // $mysql = Conn_mysql::getInstance();
        $_return = array('s' => 0);
        $mysql = Conn_mysql::getInstance();
        $SQL_1 = sprintf("DELETE FROM `client_link_friend` WHERE (`target` = %s AND `uid` = %s);", $target, $uid);
        $_Re = $this->mysql->query($SQL_1);
        if (false !== $_Re) {
            // success !
            // 刷新粉丝数量
            sns_stat::update_fans_nums($target, $mysql);
            sns_stat::update_follows_nums($uid, $mysql);
            $_return['s'] = 1;
        } else {
            // failed !
        }
        return $_return;
    }

}

?>
