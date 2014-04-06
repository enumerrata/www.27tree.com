<?php

define("SP", DIRECTORY_SEPARATOR);

function require_MySQL_Class() {
    if (!class_exists('Conn_mysql'))
        include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
}

class Qa_G {

    public static function getQa_ssd($qid) {
        return sprintf("%s-%s-%s", (int) ($qid % 5), (int) ($qid % 10), (int) ($qid % 3));
    }

    public static function getQa_commList($qid) {
        $ssid = Qa_G::getQa_ssd($qid);
        $ans_Json_path = $_SERVER['DOCUMENT_ROOT'] . SP . 'q_a' . SP . 'data' . SP . $ssid . SP . "ansi_$qid.json";
        if (is_file($ans_Json_path)) {
            return json_decode(file_get_contents($ans_Json_path), true);
        } else
            return false;
    }

    public static function upAnsi($qid, $increment = 1) {
        require_MySQL_Class();
        $mysql = Conn_mysql::getInstance();
        $qid = mysql_real_escape_string($qid);
        $increment = mysql_real_escape_string($increment);
        if ($mysql->query("UPDATE `qa_question_list` SET `ansi` = `ansi` + $increment WHERE `id` = $qid;")) {
            return true;
        } else {
            return false;
        }
    }

    public static function upReadi($qid, $increment = 1) {
        require_MySQL_Class();
        $mysql = Conn_mysql::getInstance();
        $qid = mysql_real_escape_string($qid);
        $increment = mysql_real_escape_string($increment);
        if ($mysql->query("UPDATE `qa_question_list` SET `readi` = `readi` + $increment WHERE `id` = $qid;")) {
            return true;
        } else {
            return false;
        }
    }

    public static function getQa_href($qid) {
        return sprintf("/q_a/question/%s-%s.html", Qa_G::getQa_ssd($qid), $qid);
    }

}

?>