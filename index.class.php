<?php

class Front_index {

    private $mysql;

    public function __construct() {
        $this->mysql = Conn_mysql::getInstance();
    }

    public function pushNewsUser() {
        $SQL = 'select uid,username from client ORDER BY uid desc LIMIT 27;';
        $nclient_res = $this->mysql->query($SQL);
        while ($cl_r = mysql_fetch_object($nclient_res)) {
            echo sprintf('<a class="headwapper newUser" href="/user/visit/%s" title="%s"><img src="%s" alt="%" width="45px" height="45px"></a>', $cl_r->uid, $cl_r->username, G::getHeadimg($cl_r->uid, 45), $cl_r->username);
        }
    }

    public function pushNewsQa() {
        $QA_TEMPLATES = './templates/F_newQa.php';
        require './q_a/class/Qa_getter.class.php';
        $qG = new Qa_getter();
        $question_list = $qG->get(Qa_getter::GET_P_BYNEW, null, 5);
        foreach ($question_list as $qs) {
            $qs_ush = G::getHeadimg($qs->uid, 45);
            include $QA_TEMPLATES;
        }
        unset($question_list);
        unset($qs_ush);
        unset($QA_TEMPLATES);
    }

    public function pushNewsBlog() {
        $BLOG_TEMPLATES = './templates/F_newBlog.php';
        $SQL = "SELECT `blogid` AS id FROM `blog_list` ORDER BY `blogid` DESC LIMIT 5;";
        $_pnb_rslist = $this->mysql->query($SQL);
        while ($row_id = mysql_fetch_array($_pnb_rslist)) {
            $_pnb_b = new Blog($row_id['id']);
            include $BLOG_TEMPLATES;
        }
    }

    public function pushNewsShuoshuo($limit = 6) {
        $SS_TEMPLATES = './templates/F_newShuoshuo.php';
        $SQL = "SELECT ss.sid,ss.content,ss.uid,cl.username AS usn,ss.datetime,(SELECT COUNT(*) FROM ss_comment WHERE sid = ss.sid) AS commi FROM shuoshuo ss LEFT JOIN client cl ON ss.uid = cl.uid ORDER BY ss.`sid` DESC LIMIT $limit;";
        $_pns_rslist = $this->mysql->query($SQL);
        while ($row_ss = mysql_fetch_array($_pns_rslist)) {
            $row_ss['ush'] = G::getHeadimg($row_ss['uid'], 45);
            $row_ss['dt'] = G::tTimeFormat_vs($row_ss['datetime']);
            $row_ss['content'] = str_replace("&amp;nbsp;", " ", $row_ss['content']);
            include $SS_TEMPLATES;
        }
    }

    public function pushArticleSugg() {
        $AS_TEMPLATES = './templates/F_article_sugg.php';
        $pna_rslist = $this->mysql->query("SELECT id_artlist AS id FROM `artlist` WHERE path_artlist IN (1341277334,1340106441,1353069068,1339599144,1352783040,1338711759) ORDER BY `readi` DESC LIMIT 7;");
        while ($row_as = mysql_fetch_array($pna_rslist)) {
            $obj_as = new Article($row_as['id'], Article::DESC);
            include $AS_TEMPLATES;
        }
    }

    public function pushHeadLine() {

    }

    public function pushIMGnews($limit = 3) {
        $na = new newsAdapter();
        $n_list = $na->getNews(newsAdapter::nA_WIMG, null, $limit);
        foreach ($n_list as $index => $news) {
            require './templates/F_imgnews.php';
        }
    }

    public function pushNews($limit = 5) {
        $na = new newsAdapter();
        $n_list = $na->getNews(newsAdapter::nA_NORMAL, null, $limit);
        foreach ($n_list as $index => $news) {
            require './templates/F_news.php';
        }
    }

}

?>
