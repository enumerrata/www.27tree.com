<?php

class Data_loader {
    /**
     * $index_list_data = array(uid,usn,ush,title,datetime,href,readi,commi);
     */

    const pageLite = 15;

    private $mysql;
    private $page;

    public function __construct($page,$mysql = false) {
        if ($mysql)
            $this->mysql = $mysql;
        else
            $this->mysql = Conn_mysql::getInstance();
        $this->page = $page;
    }

    //put your code here
    public function loadQa_Data() {
        $_return = array();
        
        $limit = sprintf('%s,%s', ($this->page - 1) * self::pageLite, self::pageLite);
        
        $sql = sprintf("SELECT ql.uid,ql.readi,ql.title,ql.datetime,ql.ansi AS commi,cl.username AS usn FROM `qa_question_list` ql LEFT JOIN client cl ON cl.uid = ql.uid ORDER BY `datetime` DESC,`vote` DESC LIMIT %s;", $limit);
        
        $re = $this->mysql->query($sql);
        while ($_resultSet = mysql_fetch_array($re)) {
            $_resultSet['ush'] = G::getHeadimg($_resultSet['uid'], 45);
            $_return[] = $_resultSet;
        }
        
        return $_return;
    }

}
