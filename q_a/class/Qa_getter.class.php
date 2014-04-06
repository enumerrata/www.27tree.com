<?php

if (!class_exists('Conn_mysql'))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
if (!class_exists('Qa'))
    include $_SERVER['DOCUMENT_ROOT'] . '/q_a/class/Qa.class.php';

class Qa_getter extends Conn_mysql {

    const GET_P_BYQID = 0;
    const GET_P_BYUID = 1;
    const GET_P_BYGROUP = 2;
    const GET_P_BYNEW = 3;

    public function __construct() {
        parent::getInstance();
    }

    public function get($type = Qa_getter::GET_P_BYQID, $dataId = null, $limit = 10) {
        $_return = array();

        //assembly
        switch ($type) {
            case Qa_getter::GET_P_BYQID:
                $_return[] = new Qa($dataId);
                return $_return;
            case Qa_getter::GET_P_BYUID:
                $sql = sprintf("SELECT id FROM `qa_question_list` WHERE `uid` = %s ORDER BY datetime DESC LIMIT %s;", $dataId, $limit);
                break;
            case Qa_getter::GET_P_BYGROUP:
                $sql = sprintf("SELECT id FROM `qa_question_list` ORDER BY `datetime` DESC,`vote` DESC LIMIT %s;", $limit);
                break;
            case Qa_getter::GET_P_BYNEW:
                $sql = sprintf("SELECT id FROM `qa_question_list` ORDER BY `last_modify` DESC,`vote` DESC LIMIT %s;", $limit);
                break;
        }
        $re = self::query($sql);
        while ($_resultSet = mysql_fetch_object($re)) {
            //object pack

            array_push($_return,new Qa($_resultSet->id));
        }
        return $_return;
    }

}

?>
