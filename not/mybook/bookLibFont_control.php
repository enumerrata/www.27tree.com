<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';

class bookLibFont_control extends Conn_mysql {

    public function __construct() {
        self::getInstance();
    }

    public function pushBookType() {
        $_xml = simplexml_load_file('./booktype.xml');
        foreach ($_xml->xpath('b') as $b) {
            echo sprintf("<a class=\"BookTypesItem bg-white\" href=\"/bookLib-%s\">%s</a>\n", $b['type'], $b['desc']);
        }
    }

    public function pushNewAddBook() {
        $_re = self::query("SELECT bookid FROM book_list ORDER BY s_datetime DESC LIMIT 15;");
        if (mysql_num_rows($_re)) {
            while (@$row = mysql_fetch_array($_re)) {
                $_book = new book($row['bookid']);
                echo sprintf("<li class='Elipsis'><a href=\"%s\">《%s》</a></li>",$_book->getURL(),$_book->getTitle());
            }
        }
    }

    public function pushNewestBookComm() {
        $_path = $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/newEstComm2Book.json';
        if (is_file($_path)) {
            $_tmp_path = $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/templates/newEstCommItems.html';
            $data = array_reverse(json_decode(file_get_contents($_path), true));
            foreach ($data as &$_comm) {
                $_comm['un'] = urldecode($_comm['un']);
                $_comm['ct'] = G::article_content_conv($_comm['ct']);
                require $_tmp_path;
            }
        }
    }

    public function pushBookSector($st) {
        $_re = self::query("SELECT bookid FROM book_list WHERE area = '$st' GROUP BY s_datetime DESC LIMIT 4;");
        $templates_path = $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/templates/book_items_font.phtml';
        while (@$row = mysql_fetch_array($_re)) {
            $b = new book($row['bookid']);
            $param['bookid'] = $row['bookid'];
            $param['bookimg'] = $b->getBookImgURL(110);
            $param['btitle'] = $b->getTitle();
            require $templates_path;
        }
    }

    public function pushClickRank($limit = 10) {
        $_re = self::query("select bookid,title,author,click from book_list group by click desc limit $limit;");
        $templates_path = $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/templates/BookClickRankForFont.html';
        $RankNum = 1;
        while (@$row = mysql_fetch_array($_re)) {
            $b = new book($row['bookid']);
            $param['bookid'] = $row['bookid'];
            $param['author'] = $b->getBookAuthor();
            $param['bookimg'] = $b->getBookImgURL(32);
            $param['title'] = $b->getTitle();
            $param['click'] = $b->getClickStat();
            $param['Rank'] = $RankNum++;
            require $templates_path;
        }
    }

}

?>
