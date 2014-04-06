<?php

//include $_SERVER['DOCUMENT_ROOT'] . '/mod/session/session_db.php';

class Session_helper {

    private static $session_db;
    private $uid;

    public function __construct($uid) {
        $this->uid = is_int($uid) ? $uid : (int) $uid;
        self::$session_db = Conn_mysql::getInstance();
    }

    public function writeData($key, $content) {

        $update = time();
        $data = array();

        # 检查是否存在

        $sql_select = sprintf("SELECT `data` FROM `session_auth` WHERE `uid` = %s", $this->uid);

        $s_re = self::$session_db->query($sql_select);

        if (false !== $s_re) {
            # 数据存在
            $_data_set = mysql_fetch_array($s_re);
            $data = unserialize($_data_set['data']);
        }

        $data[$key] = $content;
        $data = serialize($data); // 序列化数据

        $sql_insert = sprintf("REPLACE INTO `session_auth` (`data`, `update`, `uid`) VALUES('%s', %s ,%s)", $data, $update, $this->uid);

        self::$session_db->query($sql_insert);
        return true;
    }

    public function getData($key) {
        $id = mysql_real_escape_string($id);
        $sql = sprintf("SELECT `data` FROM `session_auth` WHERE `uid` = %s;", $this->uid);
        if (false !== $result = self::$session_db->query($sql)) {
            if (mysql_num_rows($result)) {
                $record = mysql_fetch_assoc($result);
                $data = unserialize($record['data']); // 反序列化数据
                return $data[$key];
            }
        }
        return '';
    }

    public function disctoryData($key) {
        //$sql = sprintf("DELETE FROM `session` WHERE `sid` = '%s'", $id);
        //return self::$session_db->query($sql);
    }

    private static function sinHash($j) {
        # sin_hash 算法
        $j = (int) $j;
        return $d = (int) (sin($j / 1000) * 100000);
    }

}

?>
