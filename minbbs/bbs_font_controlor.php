<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
include_once "./bbs_G.php";
include "./post.class.php";

//global static function

class bbs_conf {

    const PageLite = 20;
    const PageLite_Default = 0;
    const Post_state_Default = 0;

}

class bbs_font_controlor {

    private $mysql;
    private $pageLite;
    private $sector_id;

    public function __construct($sector_id, $pageLite) {
        $this->mysql = Conn_mysql::getInstance();
        #$this->sector = simplexml_load_file(dirname(__FILE__) . '/data/bbs-sector.xml');
        $this->pageLite = $pageLite;
        $this->sector_id = $sector_id;
    }

    public function get_hot_post($sector, $limit = 5) {
        if(NULL == $sector){
            $SQL = sprintf("SELECT postid FROM bbs_posts ORDER BY commi DESC LIMIT %s;", $limit);
        } else {
            $SQL = sprintf("SELECT postid FROM bbs_posts WHERE sector_id = %s ORDER BY commi DESC LIMIT %s;", $sector, $limit);
        }
        $re = $this->mysql->query($SQL);
        $DATA = array();
        while ($p = mysql_fetch_array($re)) {
            $post = new Post($p['postid']);
            if (!$post->error) {
                $_tmp = array('title' => $post->getTitle(), 'ush' => G::getHeadimg($post->getUid(), 32), 'uurl' => '/user/' . $post->getUid(), 'url' => $post->getURL(), 'readi' => $post->getReadi() - 1, 'commi' => $post->getCommi());
                array_push($DATA, $_tmp);
            } else {
                continue;
            }
        }
        return $DATA;
    }

    public function pushCreditRanks() {
        $SQL = "SELECT uid,credit FROM `client_credit` ORDER BY `credit` DESC LIMIT 9;";
        $re = $this->mysql->query($SQL);
        while ($p = mysql_fetch_array($re)) {
            $p['ush'] = G::getHeadimg($p['uid'], 64);
            include './templates/credit-ranks-items.php';
        }
    }

    public function pushNewestShuoshuo() {
        $SQL = "SELECT * FROM `shuoshuo` ORDER BY `datetime` DESC LIMIT 1;";
        $p = mysql_fetch_array($this->mysql->query($SQL));
        $p['ush'] = G::getHeadimg($p['uid']);
        include './templates/new-shuoshuo-items.php';
    }

    public function getNewsestBlog() {
        include $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';
        $SQL = "SELECT blogid FROM `blog_list` ORDER BY `datetime` DESC LIMIT 1";
        $_re_bid = mysql_fetch_array($this->mysql->query($SQL));
        $_b = new Blog($_re_bid['blogid']);
        return array('title' => $_b->getTitle(), 'href' => $_b->getURL());
    }

    public function pushNewestPost() {
        $_res = $this->mysql->query("SELECT postid,post_date,sector_id,uid FROM bbs_posts ORDER BY postid DESC LIMIT 2;");
        while ($row = mysql_fetch_array($_res)) {
            $_post = new post($row['postid']);
            if (!$_post->error) {
                $href = $_post->getURL();
                $title = $_post->getTitle();
                $uid = $_post->getUid();
                $_time = G::tTimeFormat_vs($_post->getDatetime());
                $username = G::getUserName($uid);
                echo "<a style=\"font-size:13px;\" href=\"$href\">$title</a>&nbsp;by&nbsp;<a href=\"/user/$uid\">$username</a>&nbsp;<span class=\"Gray\">$_time</span>";
                break;
            } else
                continue;
        }
    }

    public function pushSectorAdminList($num) {
        /**
         * @author koodo
         */
        $admin_1 = bbs_G::getSvbandAdmin($num);
        foreach ($admin_1 as $a_uid)
            echo "<a href=\"/user/$a_uid\">" . G::getUserName($a_uid) . "</a> ";
    }

    public function pushPublicBoard() {
        /**
         * @Author koodo
         */
        $_bpb_re = $this->mysql->query("SELECT `postid` FROM `bbs_posts` WHERE `sector_id` = 7 ORDER BY postid DESC LIMIT 1;");
        if (false !== $_bpb_re) {
            $_bpb_re = mysql_fetch_object($_bpb_re);
            $_bpb_post = new Post($_bpb_re->postid);
            $_pbp_p = array('title' => $_bpb_post->getTitle(), 'href' => $_bpb_post->getURL(), 'content' => $_bpb_post->getContent());
            include './templates/bbs-public-board.phtml';
        }
    }

    public function pushSectors($main) {
        $node = $this->sector->xpath("//main[@type='$main']/sub");
        foreach ($node as $sub) {
            $this->pushSector($main, $sub['type']);
        }
    }

    public function push_mobile_Sectors($main) {
        $node = $this->sector->xpath("//main[@type='$main']/sub");
        foreach ($node as $sub) {
            $node = $this->sector->xpath("//main[@type='$main']/sub[@type='" . $sub['type'] . "']");
            $sbandAreaItem = array();
            $sbandAreaItem['sband-title'] = $node[0]['desc'];
            $sbandAreaItem['sband-img'] = $node[0]['img'];
            $sbandAreaItem['sband-today'] = self::countPostDataToday($node[0]['id']);
            $sbandAreaItem['sband-url'] = "/bbs/Sector-" . $node[0]['id'] . '/';
            $sbandAreaItem['sband-stat-zt'] = self::countPostData($node[0]['id']);
            $sbandAreaItem['sband-stat-tz'] = self::countPostData($node[0]['id']);
            $res = mysql_fetch_array($this->mysql->query('select postid from bbs_posts WHERE sector_id = ' . $node[0]['id'] . ' order by post_date desc limit 1;'));
            $_p = new post($res['postid']);
            $sbandAreaItem['newPostTitle'] = $_p->getTitle();
            $sbandAreaItem['newPostURL'] = $_p->getURL();
            $sbandAreaItem['newPostDate'] = G::tTimeFormat_vs($_p->getDatetime());
            include dirname(__FILE__) . '/templates/sband-area-items.html';
        }
    }

    public function pushSub_stat_top($sid) {
        $param = array();

        $param['today'] = self::countPostDataToday($sid);
        $param['total'] = self::countPostData($sid);
        $param['totalr'] = $param['total'];
        $param['admin'] = '';

        include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/minbbs/bbs_G.php';

        $admin_0 = bbs_G::getSbandAdmin($sid);
        foreach ($admin_0 as $a_uid)
            $param['admin'] .= "<a href=\"/user/$a_uid\">" . G::getUserName($a_uid) . "</a>" . " ";

        include dirname(__FILE__) . '/templates/sub-stat-top.html';
    }

    public function pushTotalRs($sid = -1) {

        $sql = "SELECT count(postid) AS count FROM bbs_posts";
        $sql .= $sid == -1 ? ";" : " WHERE sector_id = $sid;";

        $count = mysql_fetch_array($this->mysql->query($sql));
        echo $count['count'];
    }

    public function pushTotalPostsToday($sid = -1) {

        $sql = "SELECT count(postid) AS count FROM bbs_posts WHERE DATE_FORMAT(post_date,'%Y-%m-%d') = CURRENT_DATE()";
        $sql .= $sid == -1 ? ";" : " WHERE sector_id = $sid;";

        $count = mysql_fetch_array($this->mysql->query($sql));
        echo $count['count'];
    }

    public function pushTotalLastToday($sid = -1) {

        $sql = "SELECT count(postid) AS count FROM bbs_posts WHERE DATE_FORMAT(post_date,'%Y-%m-%d') = DATE_ADD(CURRENT_DATE(),INTERVAL -1 DAY)";
        $sql .= $sid == -1 ? ";" : " WHERE sector_id = $sid;";

        $count = mysql_fetch_array($this->mysql->query($sql));
        echo $count['count'];
    }

    public function pushTotalPosts($sid = -1) {
        $sql = "SELECT count(postid) AS count FROM bbs_posts";
        $sql .= $sid == -1 ? ";" : " WHERE sector_id = $sid;";
        $count = mysql_fetch_array($this->mysql->query($sql));
        echo $count['count'];
    }

    public function pushTotalUser() {
        $count = mysql_fetch_array($this->mysql->query("SELECT count(uid) AS count FROM client;"));
        echo $count['count'];
    }

    private function pushSector($main, $type) {
        $node = $this->sector->xpath("//main[@type='$main']/sub[@type='$type']");
        $sbandAreaItem = array();
        $sbandAreaItem['sband-title'] = $node[0]['desc'];
        $sbandAreaItem['sband-img'] = $node[0]['img'];
        $sbandAreaItem['sband-today'] = self::countPostDataToday($node[0]['id']);
        $sbandAreaItem['sband-url'] = "/bbs/Sector-" . $node[0]['id'] . '/';
        $sbandAreaItem['sband-stat-zt'] = self::countPostData($node[0]['id']);
        $sbandAreaItem['sband-stat-tz'] = self::countPostData($node[0]['id']);
        $res = mysql_fetch_array($this->mysql->query('select postid from bbs_posts WHERE sector_id = ' . $node[0]['id'] . ' order by post_date desc limit 1;'));
        $_p = new post($res['postid']);
        $sbandAreaItem['newPostTitle'] = $_p->getTitle();
        $sbandAreaItem['newPostURL'] = $_p->getURL();
        $sbandAreaItem['newPostDate'] = G::tTimeFormat_vs($_p->getDatetime());
        include dirname(__FILE__) . '/templates/sband-area-items.html';
    }

    private function countPostDataToday($sid) {
        $re = mysql_fetch_array($this->mysql->query("SELECT count(postid) AS count FROM bbs_posts WHERE DATE_FORMAT(post_date,'%Y-%m-%d') = CURRENT_DATE() AND sector_id = $sid;"));
        return $re['count'];
    }

    private function countPostData($sid) {
        $re = mysql_fetch_array($this->mysql->query("SELECT count(postid) AS count FROM bbs_posts WHERE sector_id = $sid;"));
        return $re['count'];
    }

    public function pushPostListItem($sid, $pageLite = 1, $state = bbs_conf::Post_state_Default) {
        if (!class_exists('Conn_mysql'))
            include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
        include_once dirname(__FILE__) . '/RenderConv.class.php';
        $DATA = array();
        $page_min = ($pageLite - 1) * bbs_conf::PageLite;
        $page_max = bbs_conf::PageLite;
        //echo "$page_min,$page_max";
        $mysql = Conn_mysql::getInstance();
        if(NULL == $sid){
            $result = $mysql->query("SELECT b.sector_id,b.postid,b.post_date,b.uid,b.readi,b.commi,b.state,c.username FROM bbs_posts b INNER JOIN client c ON b.uid = c.uid WHERE state = $state GROUP BY lastModify DESC LIMIT $page_min,$page_max;");
        } else {
            $result = $mysql->query("SELECT b.sector_id,b.postid,b.post_date,b.uid,b.readi,b.commi,b.state,c.username FROM bbs_posts b INNER JOIN client c ON b.uid = c.uid WHERE b.sector_id = $sid AND state = $state GROUP BY lastModify DESC LIMIT $page_min,$page_max;");
        }
        
        //$_xml_state = simplexml_load_file(dirname(__FILE__) . "/info/postsState.xml");
        //$_xmlPostType = simplexml_load_file(dirname(__FILE__) . '/data/postType.xml');
        $TEMPLATES = dirname(__FILE__) . '/templates/bbs-post-list.phtml';
        while ($re = mysql_fetch_array($result)) {
            
            $_xmlpath = dirname(__FILE__) . "/lib/" . preg_replace("/ \d{2}:\d{2}:\d{2}/i", "", $re['post_date']) . "/data_$re[postid].xml";
            $_addOnPath = dirname(__FILE__) . "/lib/" . preg_replace("/ \d{2}:\d{2}:\d{2}/i", "", $re['post_date']) . "/AddOnFor_$re[postid].json";
            if (!@$xml = simplexml_load_file($_xmlpath)) {
                continue;
            }
            $node = $xml->xpath("//root/title");
            //$postType = $_xmlPostType->xpath("//type[@desc='$re[postType]']");
            $template_data = array();
            if (file_exists($_addOnPath) && $_Addon = json_decode(file_get_contents($_addOnPath), true)) {
                if (isset($_Addon['Render']))
                    $template_data['Rd'] = RenderConv::rend($_Addon['Render']);
            }
            $template_data['title'] = $node[0];
            //$template_data['postType'] = (string) $postType[0]['name'];
            $template_data['readi'] = $re['readi'];
            $template_data['commi'] = $re['commi'];
            $template_data['date'] = G::tTimeFormat_vs($re['post_date']);
            $template_data['author'] = $re['username'];
            $template_data['uurl'] = "/user/$re[uid]";
            $template_data['url'] = "/bbs/Sector-$re[sector_id]/Post-$re[postid].html";
            $template_data['postid'] = $re['postid'];
            $template_data['hd'] = G::getHeadimg($re['uid']);
            array_push($DATA, $template_data);
        }
        return $DATA;
    }

    public function pushPostRandSugg($limit = 5) {
        include_once dirname(__FILE__) . '/post.class.php';
        $_re = $this->mysql->query("select postid from bbs_posts order by rand() LIMIT $limit;");
        while ($p = mysql_fetch_array($_re)) {
            $post = new Post($p['postid']);
            $type = bbs_G::bbs_bandconv($post->getSid());
            echo <<<POST_LI
               <li style="list-style:circle inside;" class="Elipsis"><span class="Gray">[$type]</span>&nbsp;<a href="{$post->getURL()}">{$post->getTitle()}</a></li>
POST_LI;
        }
    }

    public function pushHOTpost() {
        $_re = $this->mysql->query("select postid from bbs_posts order by readi desc LIMIT 5;");
        $tmp = './templates/bbs-font-postItem.phtml';
        while ($post = mysql_fetch_array($_re)) {
            $p = new Post($post['postid']);
            if ($p->error)
                continue;
            $params['title'] = $p->getTitle();
            $params['href'] = $p->getURL();
            $params['uid'] = $p->getUid();
            $params['usn'] = G::getUserName($p->getUid());
            $params['headimg'] = G::getHeadimg($p->getUid());
            include $tmp;
        }
    }

    public function pushNEWpost() {
        $_re = $this->mysql->query("select postid from bbs_posts order by lastModify desc LIMIT 5;");
        $tmp = './templates/bbs-font-postItem.phtml';
        while ($post = mysql_fetch_array($_re)) {
            $p = new Post($post['postid']);
            if ($p->error)
                continue;
            $params['title'] = $p->getTitle();
            $params['uid'] = $p->getUid();
            $params['href'] = $p->getURL();
            $params['usn'] = G::getUserName($p->getUid());
            $params['headimg'] = G::getHeadimg($p->getUid());
            include $tmp;
        }
    }

    public function postCOMMpost() {
        $_re = $this->mysql->query("select postid from bbs_posts order by commi desc LIMIT 5;");
        $tmp = './templates/bbs-font-postItem.phtml';
        while ($post = mysql_fetch_array($_re)) {
            $p = new Post($post['postid']);
            if ($p->error)
                continue;
            $params['title'] = "[" . $p->getCommi() . "]" . $p->getTitle();
            $params['href'] = $p->getURL();
            $params['uid'] = $p->getUid();
            $params['usn'] = G::getUserName($p->getUid());
            $params['headimg'] = G::getHeadimg($p->getUid());
            include $tmp;
        }
    }

    private function pushPagesItem($pageI, $page_title, $cur = false) {
        $url = sprintf("/bbs/Sector-%s/Pages-%s.shtml", $this->sector_id, $pageI);
        if ($cur) {
            return sprintf("<a href=\"%s\" class=\"s-pages-i s-pages-cur borderR10 Shadow\">%s</a>", $url, $page_title);
        } else {
            return sprintf("<a href=\"%s\" class=\"s-pages-i borderR10 Shadow\">%s</a>", $url, $page_title);
        }
    }

    public function generate_page_bar($P_CUR_PAGES) {
        $str_pages = '';
        
        $PostNum_mysql_obj = @mysql_fetch_object($this->mysql->query("SELECT SUM(`postnum`) AS postnum FROM `bbs_stat`;"));
        $post_num = false == $PostNum_mysql_obj ? 0 : (int) $PostNum_mysql_obj->postnum;

        if ($post_num <= bbs_conf::PageLite)
            return $str_pages;
        $P_SP = round(($post_num - 1) / bbs_conf::PageLite + 0.5);

        $P_CUR_PAGES >= 2 && $str_pages .= self::pushPagesItem($P_CUR_PAGES - 1, '上一页');
        //产生页码
        for ($i = 1; $i <= $P_SP; $i++) {
            $str_pages .= self::pushPagesItem($i, $i, $i == $P_CUR_PAGES);
        }
        $P_SP > $P_CUR_PAGES && $str_pages .= self::pushPagesItem($P_CUR_PAGES + 1, '下一页');

        return $str_pages; //返回页码模板
    }

}

?>
