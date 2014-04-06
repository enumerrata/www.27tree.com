<?php

class view_qa_controller {

    private $qid;
    private $mysql;

    public function __construct($qid) {
        $this->qid = $qid;
        $this->mysql = Conn_mysql::getInstance();
    }

    public function pushCommList() {
        $comm_List = Qa_G::getQa_commList($this->qid);
        if (false !== $comm_List) {
            $i_max = count($comm_List);
            for ($i = 0; $i < $i_max; $i++) {
                $_p = &$comm_List[$i];
                $_p['dt'] = G::tTimeFormat_vs($_p['dt']);
                $_p['ush'] = G::getHeadimg($_p['uid']);
                $_p['content'] = G::article_content_conv($_p['content'], 1.1);
                require './templates/answer_list.phtml';
            }
        }
    }

    public function pushRelQuestion() {
        $SQL = "SELECT
	ql.id,
	ql.title,
	ql.uid,
	ql.readi,
	ql.ansi,
  cl.username AS usn
FROM
	`qa_question_list` ql
LEFT JOIN client cl ON cl.uid = ql.uid AND ql.id <> $this->qid
ORDER BY
	rand() DESC
LIMIT 6;";

        $re = $this->mysql->query($SQL);

        if (false !== $re) {
            while ($Qa_moreList = mysql_fetch_object($re)) {
                $Qa_moreList->ush = G::getHeadimg($Qa_moreList->uid,45);
                include './templates/more_question_list.phtml';
            }
        }
    }

    public function TagsHandle($tagStr) {
        $tagStr = str_replace('技术问题|', '', $tagStr);
        $tagStr = str_replace('|', ' ', $tagStr);
        return $tagStr;
    }

}

?>
