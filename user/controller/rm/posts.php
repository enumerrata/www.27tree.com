<?php

class uc_posts extends uc_Controller {

    //put your code here
    private $action;
    private $PARAM;

    const PageLite = 15;

    public function __construct($smarty, $action, $action_mod, $PARAM) {
        $this->PARAM = $PARAM;
        $this->action = $action;
        parent::__construct($smarty, $action_mod);
    }

    public function display() {
        include 'bbs_linker.php';
        include 'client_stat.php';
        $Smarty = parent::getSmarty();
        
        $cur_pg = parent::fliter_page($_GET['pg']);
        
        $post_list = bbs_linker::get_usrPosts($this->PARAM['uid'], $cur_pg - 1, self::PageLite);
        $page_bar = $this->genPageBar($cur_pg);
        $Smarty->assign('post_list', $post_list);
        $Smarty->assign('page_bar', $page_bar);
        parent::display($this->action);
    }

    private function pushPagesItem($pageI, $page_title, $cur = false) {
        $url = sprintf("/user/%s/posts/%s", $this->PARAM['uid'], $pageI);
        if ($cur) {
            return sprintf("<a href=\"%s\" class=\"s-pages-i s-pages-cur borderR10 Shadow\">%s</a>", $url, $page_title);
        } else {
            return sprintf("<a href=\"%s\" class=\"s-pages-i borderR10 Shadow\">%s</a>", $url, $page_title);
        }
    }

    public function genPageBar($curpage) {
        $str_pages = '';
        $client_Stat = new client_stat($this->PARAM['uid']);

        $P_CUR_PAGES = (int) $curpage;
        if ($client_Stat->post_count <= self::PageLite)
            return NULL;

        $P_SP = round(($client_Stat->post_count - 1) / self::PageLite + 0.5);

        $P_CUR_PAGES >= 2 && $str_pages .= self::pushPagesItem($P_CUR_PAGES - 1, '上一页');

        for ($i = 1; $i <= $P_SP; $i++) {
            $str_pages .= self::pushPagesItem($i, $i, $i == $P_CUR_PAGES);
        }
        $P_SP > $P_CUR_PAGES && $str_pages .= self::pushPagesItem($P_CUR_PAGES + 1, '下一页');

        return $str_pages; //返回页码模板
    }

}

?>
