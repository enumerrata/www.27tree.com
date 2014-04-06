<?php

class view_book_list_controller {

    private $MySQL = null;
    private $bookType;
    private $area_count;
    private $cur_page;

    const PageLite = 10;

    public function __construct($bookType, $curPage) {
        $this->bookType = $bookType;
        $this->MySQL = Conn_mysql::getInstance();
        $this->cur_page = $curPage;
        // 读取统计数据
        $_TMP = mysql_fetch_array($this->MySQL->query(sprintf('SELECT `count` FROM `book_stat` WHERE `book_type` = \'%s\';', $this->bookType)));
        //echo sprintf('SELECT `count` FROM `book_stat` WHERE `book_type` = %s;', $this->bookType);
        $this->area_count = $_TMP['count'];

        unset($_TMP);
    }

    public function getClickRank($limit = 15) {
        $_re = $this->MySQL->query("SELECT title,bookid,click FROM book_list WHERE area = '" . $this->bookType . "' ORDER BY click DESC LIMIT $limit;");
        $data = array();
        while ($b = mysql_fetch_array($_re)) {
            array_push($data, array(
                'click' => $b['click'],
                'url' => sprintf('/bookLib/%s', $b['bookid']),
                'title' => $b['title']
            ));
        }
        return $data;
    }

    public function getBookList() {
        $PAGE_P = sprintf('%s,%s', ($this->cur_page - 1) * self::PageLite, self::PageLite);
        $sql = sprintf("SELECT bookid FROM book_list WHERE area = '%s' ORDER BY bookid DESC LIMIT %s", $this->bookType, $PAGE_P);
        $_RE = $this->MySQL->query($sql);
        $date_to = G::getDate();
        $_data = array();
        while ($b = mysql_fetch_array($_RE)) {
            $book = new book($b['bookid']);
            array_push($_data, array(
                'url' => '/bookLib/' . $b['bookid'],
                'img' => $book->getBookImgURL(130),
                'author' => $book->getBookAuthor(),
                'title' => $book->getTitle(),
                'intro' => G::article_content_conv(G::Ctruncate(strip_tags($book->getIntro()), 200), 1.1),
                'click' => $book->getClickStat(),
                'has_download' => $book->getBookDownLoadURL(),
                'new_add' => G::convDateTime2Date($book->getDatetime()) === $date_to ? true : false
            ));
        }
        //mb_substr(strip_tags($book->getIntro()), 0, 200, 'utf-8'),
        return $_data;
    }

    public function pushBookType() {
        $_xml = simplexml_load_file('./booktype.xml');
        foreach ($_xml->xpath('b') as $b) {
            echo sprintf("<a class=\"BookTypesItem\" href=\"/bookLib-%s\">%s</a>\n", $b['type'], $b['desc']);
        }
    }

    private function pushPagesItem($pageI, $page_title, $cur = false) {
        $url = sprintf("/bookLib/%s/%s.html", $this->bookType, $pageI);
        if ($cur) {
            return sprintf("<a href=\"%s\" class=\"s-pages-i s-pages-cur borderR10 Shadow\">%s</a>", $url, $page_title);
        } else {
            return sprintf("<a href=\"%s\" class=\"s-pages-i borderR10 Shadow\">%s</a>", $url, $page_title);
        }
    }

    public function generate_page_bar() {
        $str_pages = '';
        $P_CUR_PAGES = $this->cur_page;
        if ($this->area_count <= self::PageLite)
            return $str_pages;
        $P_SP = round(($this->area_count - 1) / self::PageLite + 0.5);

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
