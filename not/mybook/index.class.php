<?php

class Index extends Conn_mysql {

    private $conf;

    public function __construct($conf = null) {
        $this->conf = $conf;
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
                echo sprintf("<li class='Elipsis'><a href=\"%s\">《%s》</a></li>", $_book->getURL(), $_book->getTitle());
            }
        }
    }

    public function getContUsrList($limit = 5) {
        $SQL = "SELECT count(bl.bookid) AS count, bl.s_uid AS uid, cl.username AS usn FROM
	book_list bl
         LEFT JOIN client cl ON bl.s_uid = cl.uid GROUP BY s_uid ORDER BY count DESC LIMIT $limit";
        $_re = self::query($SQL);
        $data = array();
        while ($row = mysql_fetch_array($_re)) {
            $row['ush'] = G::getHeadimg($row['uid'], 45);
            array_push($data, $row);
        }
        return $data;
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

    public function getBookSugg() {
        $suggList = $this->conf['sugglist'];
        $data = array();
        $param = array();
        foreach ($suggList as $bookid) {
            $b = new book($bookid);
            $param['id'] = $bookid;
            $param['img'] = $b->getBookImgURL(110);
            $param['title'] = $b->getTitle();
            array_push($data, $param);
        }
        return $data;
    }

    public function getBookShare_dy($limit = 5) {
        $SQL = "SELECT bl.bookid,bl.s_datetime AS time,bl.s_uid AS uid,cl.username AS usn,bl.title FROM book_list bl 
LEFT JOIN client cl ON bl.s_uid = cl.uid ORDER BY s_datetime DESC LIMIT $limit";
        $_re = self::query($SQL);
        $data = array();
        while ($row = mysql_fetch_array($_re)) {
            $row['time'] = G::tTimeFormat_vs($row['time']);
            $row['ush'] = G::getHeadimg($row['uid']);
            array_push($data, $row);
        }
        return $data;
    }

    public function getBookSector($st) {
        $_re = self::query("SELECT bookid FROM book_list WHERE area = '$st' GROUP BY s_datetime DESC LIMIT 5;");
        //echo "SELECT bookid FROM book_list WHERE area = '$st' GROUP BY s_datetime DESC LIMIT 5;";
        $data = array();
        while (@$row = mysql_fetch_array($_re)) {
            $b = new book($row['bookid']);
            $param['id'] = $row['bookid'];
            $param['img'] = $b->getBookImgURL(110);
            $param['title'] = $b->getTitle();
            array_push($data, $param);
        }
        return $data;
    }

    public function getClickRank($limit = 10) {
        $_re = self::query("select bookid,title from book_list group by click desc limit $limit;");
        $data = array();
        while (@$row = mysql_fetch_array($_re)) {
            $param['id'] = $row['bookid'];
            $param['title'] = $row['title'];
            array_push($data, $param);
        }
        return $data;
    }

}

?>
