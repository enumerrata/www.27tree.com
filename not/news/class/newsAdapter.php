<?php

if(!class_exists('Conn_mysql'))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';

class newsAdapter {

    const nA_NORMAL = 0;
    const nA_WIMG = 1;

    private $mysql;

    public function __construct() {
        $this->mysql = Conn_mysql::getInstance();
    }

    public function getNewsApp() {
        $_Return = array();
        $_re = $this->mysql->query("SELECT * FROM `new_norm_list_app` ORDER BY `sdate` DESC;");
        while ($obj = mysql_fetch_object($_re)) {
            array_push($_Return, $obj);
        }
        return $_Return;
    }

    public function getNews($ntype = self::nA_NORMAL, $type = null, $limit = 1) {
        $_return = array();
        $table = $ntype == self::nA_NORMAL ? '`new_norm_list`' : '`new_hash_wimg`';
        if ($ntype == self::nA_NORMAL) {
            // 普通文字新闻
            $sql = sprintf("SELECT * FROM `new_norm_list` WHERE id NOT IN (SELECT nid FROM `new_hash_wimg`) ORDER BY `sdate` DESC LIMIT %s;", $limit);
        } else if ($ntype == self::nA_WIMG) {
            // 带图片新闻 <SELECT * FROM itsrcs.new_hash_wimg>;
            // 使用 $obj->imglink 调用图片地址
            $sql = sprintf("SELECT nl.*, nimg.imgpath AS imglink
                FROM new_norm_list nl RIGHT JOIN new_hash_wimg nimg ON nimg.nid = nl.id
                %s
                ORDER BY sdate DESC LIMIT %s;", null !== $type ? sprintf('WHERE nl.type = \'%s\'', $type) : null, $limit);
        }
        $_Re = $this->mysql->query($sql);
        while ($oR = mysql_fetch_object($_Re)) {
            array_push($_return, $oR);
        }
        return $_return;
    }

    public function is_news_Maped($bid) {
        /**
         * TODO 性能优化 ： 当数据表量大查询速度缓慢，考虑将数据写入xml文件，提升性能。
         */
        $sql_1 = sprintf("SELECT COUNT(`bid`) AS count FROM `new_norm_list` WHERE `bid` = %s", $bid);
        $sql_2 = sprintf("SELECT COUNT(`bid`) AS count FROM `new_norm_list_app` WHERE `bid` = %s", $bid);
        $Re = mysql_fetch_object($this->mysql->query($sql_1));
        if ($Re->count == 1) {
            return false;
        } else {
            $Re = mysql_fetch_object($this->mysql->query($sql_2));
            if ($Re->count == 1) {
                return false;
            } else
                return true;
        }
    }

}

?>