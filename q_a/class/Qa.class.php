<?php

if (!class_exists('Conn_mysql'))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';

class Qa extends Conn_mysql {

    public $qid;
    public $title;
    public $uid;
    public $usn;
    public $vote;
    public $readi;
    public $ansi;
    public $cont;
    public $tags;
    public $href;
    public $datetime;

    const WITH_CT = true;
    const WITHOUT_CT = false;

    private $wct;

    public function __construct($qid, $wct = Qa::WITHOUT_CT) {
        $this->wct = $wct;
        $this->qid = mysql_escape_string($qid);
        parent::getInstance();
        $this->__loadData();
    }

    private function __loadData() {
        $_resultSet = self::query("SELECT ql.*,cl.username AS usn FROM `qa_question_list` ql LEFT JOIN client cl ON cl.uid = ql.uid WHERE ql.`id` = $this->qid;");
        if (FALSE !== $_resultSet) {
            $_data = mysql_fetch_object($_resultSet);
            $this->uid = $_data->uid;
            $this->usn = $_data->usn;
            $this->title = $_data->title;
            $this->ansi = $_data->ansi;
            $this->readi = $_data->readi;
            $this->vote = $_data->vote;
            $this->tags = $_data->tags;
            $this->datetime = $_data->datetime;
            $this->href = sprintf("/q_a/question/%s-%s-%s-%s.html", (int) ($this->qid % 5), (int) ($this->qid % 10), (int) ($this->qid % 3), $this->qid);
            if ($this->wct == Qa::WITH_CT) {
                @define("SP", DIRECTORY_SEPARATOR);
                $addonId = sprintf("%s-%s-%s", (int) ($this->qid % 5), (int) ($this->qid % 10), (int) ($this->qid % 3));
                $file_path = $_SERVER['DOCUMENT_ROOT'] . SP . 'q_a' . SP . 'data' . SP . $addonId . SP . $this->qid . '.xml';
                if (false !== @$XMLFile = simplexml_load_file($file_path)) {
                    $cont_tmp = $XMLFile->xpath("//content");
                    $this->cont = (string) $cont_tmp[0];
                    unset($cont_tmp);
                } else {
                    $this->cont = false;
                }
            }
        }
    }

}

?>
