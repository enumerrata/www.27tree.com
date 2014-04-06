<?php

include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';

class index_controller {

    private $mysql;

    public function __construct() {
        $this->mysql = Conn_mysql::getInstance();
    }

    public function pushRank() {
        $_Re = $this->mysql->query("SELECT * FROM `app_hold18_stat` ORDER BY record DESC LIMIT 5;");
        while ($record_obj = mysql_fetch_object($_Re)) {
            $param['usn'] = G::getUserName($record_obj->uid);
            $param['ush'] = G::getHeadimg($record_obj->uid);
            $param['uid'] = $record_obj->uid;
            $param['rec'] = $record_obj->record;
            include './tpl/ranklist.phtml';
        }
    }

    public function pushLastRank() {
        $_Re = $this->mysql->query("SELECT * FROM `app_hold18_stat` ORDER BY record DESC LIMIT 5,100;");
        while ($record_obj = mysql_fetch_object($_Re)) {
            $param['usn'] = G::getUserName($record_obj->uid);
            $param['ush'] = G::getHeadimg($record_obj->uid);
            $param['uid'] = $record_obj->uid;
            $param['rec'] = $record_obj->record;
            include './tpl/last_ranklist.phtml';
        }
    }

}

?>
