<?php

class bs_Controller {

    protected static $Smarty;
    protected static $MySQL;

    const HOT_LIMIT = 8;

    public function __construct($smarty, $mysql) {
        self::$Smarty = $smarty;
        self::$MySQL = $mysql;
    }

    protected function getMySQL() {
        return $this->MySQL;
    }

    protected function getSmarty() {
        return $this->Smarty;
    }

    protected function display($tpl = false) {
        if (!$tpl) {
            $tpl = $_SERVER['DOCUMENT_ROOT'] . '/minbbs/templates/index/split_body.tpl';
        } else {
            $tpl = sprintf($_SERVER['DOCUMENT_ROOT'] . '/minbbs/templates/index/%s', $tpl);
        }
        self::$Smarty->display($tpl);
    }

    protected function get_hot_post($sector, $limit = 8) {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/minbbs/post.class.php';

        if (NULL == $sector) {
            $SQL = sprintf("SELECT postid FROM bbs_posts ORDER BY commi DESC LIMIT %s;", $limit);
        } else {
            $SQL = sprintf("SELECT postid FROM bbs_posts WHERE sector_id = %s ORDER BY commi DESC LIMIT %s;", $sector, $limit);
        }

        $re = self::$MySQL->query($SQL);
        $DATA = array();
        while ($p = mysql_fetch_array($re)) {
            $post = new Post($p['postid']);
            if (!$post->error) {
                $_tmp = array('uid' => $post->getUid(), 'title' => $post->getTitle(), 'ush' => G::getHeadimg($post->getUid(), 32), 'href' => $post->getURL(), 'readi' => $post->getReadi() - 1, 'commi' => $post->getCommi());
                array_push($DATA, $_tmp);
            } else {
                continue;
            }
        }
        return $DATA;
    }

}