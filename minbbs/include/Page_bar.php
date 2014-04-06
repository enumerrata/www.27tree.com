<?php

class PageBar {

    public $tpl_link = '';
    
    public function __construct($tpl_link) {
        $this->tpl_link = $tpl_link;
    }

    private function pushPagesItem($pageI, $page_title, $cur = false) {
        $url = sprintf($this->tpl_link, $pageI);
        if ($cur) {
            return sprintf("<a href=\"%s\" class=\"s-pages-i s-pages-cur borderR10 Shadow\">%s</a>", $url, $page_title);
        } else {
            return sprintf("<a href=\"%s\" class=\"s-pages-i borderR10 Shadow\">%s</a>", $url, $page_title);
        }
    }

    public function gen($Current_page, $Total_items, $Page_lite) {
        $str_pages = '';

        if ($Total_items <= $Page_lite)
            return $str_pages;
        $P_SP = round(($Total_items - 1) / $Page_lite + 0.5);

        $Current_page >= 2 && $str_pages .= self::pushPagesItem($Current_page - 1, '&#19978;&#19968;&#39029;'); // 上一页
        //产生页码
        for ($i = 1; $i <= $P_SP; $i++) {
            $str_pages .= self::pushPagesItem($i, $i, $i == $Current_page);
        }
        $P_SP > $Current_page && $str_pages .= self::pushPagesItem($Current_page + 1, '&#19979;&#19968;&#39029;');// 下一页

        return $str_pages; //返回页码模板
    }

}