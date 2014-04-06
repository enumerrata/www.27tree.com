<?php

class carr_cont extends bs_Controller {

    public $fram;
    private $page;

    const pageLite = 20;
    const SID = 2;

    public function __construct($smarty, $mysql, $fram, $page) {
        parent::__construct($smarty, $mysql);
        $this->fram = $fram;
        $this->page = $page;
    }

    public function display() {
        $Smarty = parent::getSmarty();

        parent::$Smarty->assign('P_DATA', $this->getPostListItem(self::SID, $this->page));

        $Pager = new PageBar('/minbbs/tech/%s.html');
        parent::$Smarty->assign('Pages', $Pager->gen($this->page, bbs_stat::getCountData_bySID(self::SID), self::pageLite));
        parent::$Smarty->assign('HOT_DATA', parent::get_hot_post(self::SID));
        parent::display();
    }

    private function getPostListItem($sid, $page = 1) {
        $DATA = array();

        $page_min = ($page - 1) * self::pageLite;

        $page_max = self::pageLite;

        $mysql = Conn_mysql::getInstance();

        if (NULL == $sid) {
            $result = $mysql->query("SELECT b.uid,b.sector_id,b.postid,b.post_date,b.uid,b.readi,b.commi,c.username FROM bbs_posts b INNER JOIN client c ON b.uid = c.uid GROUP BY lastModify DESC LIMIT $page_min,$page_max;");
        } else {
            $result = $mysql->query("SELECT b.uid,b.sector_id,b.postid,b.post_date,b.uid,b.readi,b.commi,c.username FROM bbs_posts b INNER JOIN client c ON b.uid = c.uid WHERE b.sector_id = $sid GROUP BY lastModify DESC LIMIT $page_min,$page_max;");
        }

        $_tmp = array();
        while ($re = mysql_fetch_array($result)) {
            $_xmlpath = $_SERVER['DOCUMENT_ROOT'] . "/minbbs/lib/" . preg_replace("/ \d{2}:\d{2}:\d{2}/i", "", $re['post_date']) . "/data_$re[postid].xml";
            if (!$xml = @simplexml_load_file($_xmlpath)) {
                continue;
            }
            $node = $xml->xpath("//root/title");
            $_tmp['uid'] = $re['uid'];
            $_tmp['title'] = $node[0];
            $_tmp['readi'] = $re['readi'];
            $_tmp['commi'] = $re['commi'];
            $_tmp['datetime'] = G::tTimeFormat_vs($re['post_date']);
            $_tmp['usn'] = $re['username'];
            $_tmp['href'] = "/minbbs/topic/$re[postid].html";
            $_tmp['postid'] = $re['postid'];
            $_tmp['ush'] = G::getHeadimg($re['uid']);
            array_push($DATA, $_tmp);
        }
        return $DATA;
    }

}