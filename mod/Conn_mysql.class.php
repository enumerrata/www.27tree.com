<?php

/**
 * @author KOODO
 * @lastModify 2012-3-2 22:56
 * @数据库连接类
 */
class Conn_mysql {

    protected static $_instance = NULL;
    private $con;
    private $lastid;
    private $affected_rows;

    private static $_db_host = 'localhost';
    private static $_db_user = 'root';
    private static $_db_pasw = '';
    private static $_db_dbname = '27tree';

    const bulid_pdo = 0;
    const bulid_nom = 1;

    private function __construct() {
        $this->con = @mysql_connect(self::$_db_host, self::$_db_user, self::$_db_pasw);
        mysql_select_db(self::$_db_dbname, $this->con);
        mysql_query("SET NAMES 'UTF8';"); // 设置 utf-8 编码
    }

    public static function getInstance($construc_mod = self::bulid_nom) {
        switch ($construc_mod) {
            case self::bulid_nom:
                // 传统 模式
                if (!self::$_instance instanceof self) {
                    self::$_instance = new Conn_mysql(self::bulid_nom);
                }
                break;
            case self::bulid_pdo:
                // pdo 模式
                if (!self::$_instance instanceof PDO) {
                    self::$_instance = new PDO(sprintf('mysql:host=%s;dbname=%s', self::$_db_host, self::$_db_dbname), self::$_db_user, self::$_db_pasw);
                    self::$_instance->exec("SET NAMES 'UTF8';");
                }
                break;
        }
        return self::$_instance;
    }

    public final function query($sql) {
        $result = mysql_query($sql);
        if (preg_match("/INSERT/is", $sql)) {
            //匹配数据插入操作，获取自增列最新id
            $this->lastid = @mysql_insert_id($this->con);
            if ($this->lastid == null) {
                //极端自增id提取
                $result_lastid = mysql_fetch_array(mysql_query("SELECT LAST_INSERT_ID() as ID;"));
                $this->lastid = intval($result_lastid['ID']);
            }
        }
        if (preg_match("/INSERT|UPDATE|DELETE/is", $sql)) {
            //匹配影响列
            $this->affected_rows = @mysql_affected_rows($this->con);
        }
        return $result; //返回数据查询结果集
    }

    public function getLastId() {
        return $this->lastid;
    }

    public function close() {
        mysql_close($this->con);
    }

    public function get_affected_rows() {
        return $this->affected_rows;
    }

    public function getConnectionHandle() {
        //返回数据库连接句柄
        return $this->con;
    }

}