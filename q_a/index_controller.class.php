<?php

require './class/Qa_getter.class.php';
require '../mod/G.php';

class index_controller {

    const page_lite = 15;
    private $mysql;
    
    public function __construct() {
        $this->mysql = Conn_mysql::getInstance();
    }

    public function pushQaList($page = 1) {
        $page--;
        $limit = sprintf('%s,%s', $page * self::page_lite, self::page_lite);
        $qG = new Qa_getter();
        $question_list = $qG->get(Qa_getter::GET_P_BYGROUP, null, $limit);
        foreach ($question_list as $qs) {
            $p['usn'] = $qs->usn;
            $p['uid'] = $qs->uid;
            $p['href'] = $qs->href;
            $p['datetime'] = G::tTimeFormat_vs($qs->datetime);
            $p['title'] = $qs->title;
            $p['readi'] = $qs->readi;
            $p['ansi'] = $qs->ansi;
            $p['vote'] = $qs->vote;
            $p['ush'] = G::getHeadimg($qs->uid, 45);
            $p['tags'] = str_replace('|', ' / ', $qs->tags);
            include './templates/question_list.phtml';
        }
    }

        private function pushPagesItem($pageI, $page_title, $cur = false) {
        $url = sprintf("/q_a/?p=%s",$pageI);
        if ($cur) {
            return sprintf("<a href=\"%s\" class=\"s-pages-i s-pages-cur borderR10 Shadow\">%s</a>", $url, $page_title);
        } else {
            return sprintf("<a href=\"%s\" class=\"s-pages-i borderR10 Shadow\">%s</a>", $url, $page_title);
        }
    }

    public function genPageBar($P_CUR_PAGES) {
        $str_pages = '';
        
        $PostNum_mysql_obj = mysql_fetch_object($this->mysql->query("select count(*) AS count from qa_question_list;"));
        $post_num = false == $PostNum_mysql_obj ? 0 : (int) $PostNum_mysql_obj->count;

        if ($post_num <= self::page_lite)
            return $str_pages;
        $P_SP = round(($post_num - 1) / self::page_lite + 0.5);

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
