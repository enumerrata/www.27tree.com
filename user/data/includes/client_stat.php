<?php

/**
 * 处理用户统计信息
 */
class client_stat {

    private $uid;
    private $mysql;
    public $post_count;
    public $blog_count;

    const DATA_POSTCOUNT = 'post_count';
    const DATA_BLOGCOUNT = 'blog_count';

    public function __construct($uid) {
        $this->uid = (int) mysql_escape_string($uid);
        $this->mysql = Conn_mysql::getInstance();
        $this->init_data();
    }

    private function init_data() {
        /**
         * 初始化统计数据
         */
        $SQL = sprintf('SELECT post_count,blog_count FROM client_stat WHERE uid = %s;', $this->uid);
        $re = $this->mysql->query($SQL);
        if (false !== $re) {
            $re = mysql_fetch_array($re);
            list($this->post_count, $this->blog_count) = $re;
        } else {
            echo $SQL;
            throw new Exception('mysql_error');
        }
    }

    public static function update_data($uid,$type = self::DATA_BLOGCOUNT,$increment){
        /**
         * 更新数据
         */
        $mysql = Conn_mysql::getInstance(Conn_mysql::bulid_pdo);
    }

}
