<?php

if (!class_exists(Conn_mysql))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';

class Qa_command {

    public function __construct() {
        ;
    }

    public function voteQa($qid, $uid) {
        $qid = mysql_real_escape_string($qid);
        $uid = mysql_real_escape_string($uid);
        $mysql = Conn_mysql::getInstance();
        if (false !== $mysql->query(sprintf("INSERT INTO `qa_vote_his` (`key`,`uid`,`qid`) VALUES ('%s-%s',%s,'%s');", $uid, $qid, $uid, $qid))) {
            //vote成功
            if ($mysql->query(sprintf("UPDATE `qa_question_list` SET `vote` = `vote` + 1 WHERE `id` = %s;", $qid))) {
                return true;
            } else
                return false;
        } else {
            //插入数据失败，错误或记录已经存在
            return false;
        }
    }

}

?>
