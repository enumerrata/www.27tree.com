<?php

class index {

    private $isMobile;
    private $mysql;
    private $sector;

    public function __construct($isMobile = false) {
        $this->isMobile = $isMobile;
        $this->mysql = Conn_mysql::getInstance();
        $this->sector = simplexml_load_file(dirname(__FILE__) . '/data/bbs-sector.xml');
    }

    public function getFreshMan() {
        $SQL = "SELECT `uid`,`username` FROM `client` ORDER BY `uid` DESC LIMIT 1;";
        return @mysql_fetch_array($this->mysql->query($SQL));
    }

    public function getCreditRanks() {
        /**
         * @DATA = array(uid,credit,ush);
         */
        $SQL = "SELECT uid,credit FROM `client_credit` ORDER BY `credit` DESC LIMIT 13;";
        $re = $this->mysql->query($SQL);
        $DATA = array();
        while ($p = mysql_fetch_array($re)) {
            $p['ush'] = G::getHeadimg($p['uid'], 45);
            array_push($DATA, $p);
        }
        return $DATA;
    }

    public function getSectors($main) {
        $node = $this->sector->xpath("//main[@type='$main']/sub");
        $main_node = $this->sector->xpath("//main[@type='$main']");
        $arr_data = array();
        $arr_data['desc'] = $main_node[0]['desc'];
        $arr_data['stitle'] = $main_node[0]['stitle'];
        $arr_data['sec'] = array();
        foreach ($node as $sub) {
            array_push($arr_data['sec'], $this->genSector($main, $sub['type']));
        }
        return $arr_data;
    }

    private function genSector($main, $type) {
        $node = $this->sector->xpath("//main[@type='$main']/sub[@type='$type']");
        $sbandAreaItem = array();
        $sbandAreaItem['sid'] = (int) $node[0]['id'];
        $sbandAreaItem['title'] = $node[0]['desc'];
        $sbandAreaItem['img'] = $node[0]['img'];
        $sbandAreaItem['today'] = self::countPostDataToday($node[0]['id']);
        $sbandAreaItem['url'] = "/bbs/Sector-" . $node[0]['id'] . '/';
        $sbandAreaItem['statzt'] = self::countPostData($node[0]['id']);
        $res = mysql_fetch_array($this->mysql->query('select postid from bbs_posts WHERE sector_id = ' . $node[0]['id'] . ' order by post_date desc limit 1;'));
        $_p = new post($res['postid']);
        $sbandAreaItem['newPostTitle'] = $_p->getTitle();
        $sbandAreaItem['newPostURL'] = $_p->getURL();
        $sbandAreaItem['newPostDate'] = G::tTimeFormat_vs($_p->getDatetime());
        return $sbandAreaItem;
    }

    private function countPostData($sid) {
        $re = mysql_fetch_array($this->mysql->query("SELECT count(postid) AS count FROM bbs_posts WHERE sector_id = $sid;"));
        return $re['count'];
    }

    private function countPostDataToday($sid) {
        $re = mysql_fetch_array($this->mysql->query("SELECT count(postid) AS count FROM bbs_posts WHERE DATE_FORMAT(post_date,'%Y-%m-%d') = CURRENT_DATE() AND sector_id = $sid;"));
        return $re['count'];
    }

    public function get_news_post($limit = 8) {
        $SQL = sprintf("SELECT postid FROM bbs_posts ORDER BY lastModify DESC LIMIT %s;", $limit);
        $re = $this->mysql->query($SQL);
        $DATA = array();
        while ($p = mysql_fetch_array($re)) {
            $post = new Post($p['postid']);
            if (!$post->error) {
                $_tmp = array('title' => $post->getTitle(), 'ush' => G::getHeadimg($post->getUid(), 32), 'uurl' => '/user/' . $post->getUid(), 'url' => $post->getURL(), 'lastm' => $post->getDatetime(true));
                array_push($DATA, $_tmp);
            } else {
                continue;
            }
        }
        return $DATA;
    }

}

?>
