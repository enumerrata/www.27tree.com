<?php

class ques_cont extends bs_Controller {

    public $fram;
    private $page;

    const pageLite = 20;

    public function __construct($smarty, $mysql, $fram, $page) {
        parent::__construct($smarty, $mysql);
        $this->fram = $fram;
        $this->page = $page;
    }

    public function display() {
        $Smarty = parent::getSmarty();

        parent::$Smarty->assign('P_DATA', $this->loadQa_Data());

        $Pager = new PageBar('/minbbs/ques/%s.html');
        parent::$Smarty->assign('Pages', $Pager->gen($this->page, bbs_stat::getCountData_bySID(0), self::pageLite));
        parent::$Smarty->assign('HOT_DATA', $this->loadHOT_question());
        parent::display();
    }

    private function loadHOT_question() {

        $_return = array();

        $limit = parent::HOT_LIMIT;

        $sql = sprintf("SELECT ql.id,ql.uid,ql.readi,ql.title,ql.ansi AS commi FROM `qa_question_list` ql ORDER BY `commi` DESC,`vote` DESC LIMIT %s;", $limit);

        $re = parent::$MySQL->query($sql);
        while ($_resultSet = mysql_fetch_array($re)) {
            $_resultSet['ush'] = G::getHeadimg($_resultSet['uid'], 32);
            $_resultSet['href'] = $this->href = sprintf("/q_a/question/%s-%s-%s-%s.html", (int) ($_resultSet['id'] % 5), (int) ($_resultSet['id'] % 10), (int) ($_resultSet['id'] % 3), $_resultSet['id']);
            $_return[] = $_resultSet;
        }

        return $_return;
    }

    private function loadQa_Data() {
        $_return = array();

        $limit = sprintf('%s,%s', ($this->page - 1) * self::pageLite, self::pageLite);

        $sql = sprintf("SELECT ql.id,ql.uid,ql.readi,ql.title,ql.datetime,ql.ansi AS commi,cl.username AS usn FROM `qa_question_list` ql LEFT JOIN client cl ON cl.uid = ql.uid ORDER BY `last_modify` DESC,`vote` DESC LIMIT %s;", $limit);

        $re = parent::$MySQL->query($sql);
        while ($_resultSet = mysql_fetch_array($re)) {
            $_resultSet['datetime'] = G::tTimeFormat_vs($_resultSet['datetime']);
            $_resultSet['ush'] = G::getHeadimg($_resultSet['uid'], 45);
            $_resultSet['href'] = $this->href = sprintf("/q_a/question/%s-%s-%s-%s.html", (int) ($_resultSet['id'] % 5), (int) ($_resultSet['id'] % 10), (int) ($_resultSet['id'] % 3), $_resultSet['id']);
            $_return[] = $_resultSet;
        }

        return $_return;
    }

}