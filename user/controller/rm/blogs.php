<?php

class uc_blogs extends uc_Controller {

    //put your code here
    private $action;
    private $PARAM;
    private $blog_count;
    private $cacheLite;

    const PageLite = 20;

    public function __construct($smarty, $action, $action_mod, $PARAM) {
        $this->PARAM = $PARAM;
        $this->action = $action;

        parent::__construct($smarty, $action_mod);
        $this->cacheLite = parent::getCacheLite();
    }

    public function display() {
        $Smarty = parent::getSmarty();
        include $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/blog_controller.class.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/client_stat.php';

        $cur_pg = parent::fliter_page($_GET['pg']);

        $bcc = new blog_control();
        $page_bar = $this->genPageBar($cur_pg);
        $blog_list = $bcc->getBlogList_byUID($this->PARAM['uid'], $cur_pg - 1, self::PageLite);
        $Smarty->assign('blog_list', $blog_list);
        $Smarty->assign('page_bar', $page_bar);
        parent::display($this->action);
    }

    private function pushPagesItem($pageI, $page_title, $cur = false) {
        $url = sprintf("/user/%s/blogs/%s", $this->PARAM['uid'], $pageI);
        if ($cur) {
            return sprintf("<a href=\"%s\" class=\"s-pages-i s-pages-cur borderR10 Shadow\">%s</a>", $url, $page_title);
        } else {
            return sprintf("<a href=\"%s\" class=\"s-pages-i borderR10 Shadow\">%s</a>", $url, $page_title);
        }
    }

    public function genPageBar($curpage) {
        $str_pages = '';
        $client_Stat = new client_stat($this->PARAM['uid']);

        $P_CUR_PAGES = (int)$curpage;
        if ($client_Stat->blog_count <= self::PageLite)
            return NULL;

        $P_SP = round(($client_Stat->blog_count - 1) / self::PageLite + 0.5);

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
