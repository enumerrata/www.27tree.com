<?php

class index_module {

    private $mysql;

    public function __construct() {
        $this->mysql = Conn_mysql::getInstance();
    }

    public function getUserExpCounts($rawlev,$exp) {
        /*
         * @param $rawlev 用户级别
         * @param $exp 用户当前经验值
         */
        $_xml_auth = simplexml_load_file("./data/info/user_group_convlist.xml");
        $levelNext = $_xml_auth->xpath("//ug[@lev=" . $rawlev . " + 1 ][1]");
        return $exp . ' / ' . $levelNext[0]['creditR'];
    }

    public function getFollowSugg() {
        /**
         * @desc 对粉丝少的用户进行关注推荐
         * @param array $_sel 随机用户组
         */
        $pre_usr = array(
            array(2, 201, 19, 32),
            array(73, 340, 66, 29)
        );

        $_sel = $pre_usr[(int) rand(0, count($pre_usr) - 1)];
        $uid_list = implode(',', $_sel);
        $SQL = sprintf('SELECT cl.uid,cl.username AS usn,cl.job FROM client cl WHERE cl.uid <> 2 AND job IS NOT NULL ORDER BY rand() DESC LIMIT 4', $uid_list);

        $q_re = $this->mysql->query($SQL);

        if (false !== $q_re) {
            $return = array();
            // 遍历数据集合
            while ($_w = mysql_fetch_array($q_re)) {
                // 打包
                $_w['ush'] = G::getHeadimg($_w['uid'], 45);
                array_push($return, $_w);
            }
            return $return;
        } else {
            return false;
        }
    }

    public function get_hot_posts($limit) {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/minbbs/post.class.php";
        $SQL = sprintf("SELECT postid,readi FROM bbs_posts WHERE DATEDIFF(CURRENT_DATE(),post_date) < 30 ORDER BY commi DESC LIMIT %s;", $limit);
        $re = $this->mysql->query($SQL);
        $DATA = array();
        while ($p = mysql_fetch_array($re)) {
            $post = new Post($p['postid']);
            if (!$post->error) {
                $_tmp = array('title' => $post->getTitle(), 'href' => $post->getURL());
                array_push($DATA, $_tmp);
            } else {
                continue;
            }
        }
        return $DATA;
    }

    public function get_hot_blogs() {

    }

    public function get_newest_question() {
        require $_SERVER['DOCUMENT_ROOT'] . '/q_a/class/Qa_getter.class.php';
        $Qa_g = new Qa_getter();
        $Qa_list = $Qa_g->get(Qa_getter::GET_P_BYNEW, null, 5);
        $data = array();
        foreach ($Qa_list as $Qa) {
            array_push($data, array('title' => $Qa->title, 'href' => $Qa->href));
        }
        return $data;
    }

}

?>
