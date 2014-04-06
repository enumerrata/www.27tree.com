<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';

class S_book_control {

    public static function submitBook($fuid, $title, $author, $info, $area, $filetype, $imglink, $downloadpage) {

        $mysql = Conn_mysql::getInstance();
        $submit_datetime = G::getDatetime();

        $sql = "INSERT INTO `book_list_verify`
                 (`s_datetime`, `s_uid`, `title`, `author`, `area`, `file_type`, `img_name`) VALUES
                 ('$submit_datetime', $fuid, '$title', '$author', '$area', '$filetype', '$imglink');";

        if ($mysql->query($sql)) {

            $bookid = $mysql->getLastId();
            $path = $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/data/book_lib/tmp/';

            $xml = new XMLWriter();
            $xml->openURI($path . "book_id_$bookid.xml");
            $xml->setIndentString("  ");
            $xml->setIndent(true);
            $xml->startDocument("1.0", "UTF-8");
            $xml->startElement("root");

            $xml->startElement("title");
            $xml->writeCdata($title);
            $xml->endElement();

            $xml->startElement("author");
            $xml->writeRaw($author);
            $xml->endElement();

            $xml->startElement("submiter-uid");
            $xml->writeRaw($fuid);
            $xml->endElement();

            $xml->startElement("submit-date-time");
            $xml->writeRaw($submit_datetime);
            $xml->endElement();

            $xml->startElement("img-link");
            $xml->writeRaw($imglink);
            $xml->endElement();

            $xml->startElement("book-area");
            $xml->writeRaw($area);
            $xml->endElement();

            $xml->startElement("book-intro");
            $xml->writeCdata($info);
            $xml->endElement();

            $xml->startElement("parseVersion");
            $xml->writeRaw('1.1');
            $xml->endElement();

            $xml->endElement();
            $xml->endDocument();
            $xml->flush();

            $path = $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/data/book_price_lib/tmp/';
            file_put_contents($path . "p_$bookid.json", json_encode(array("PdfDownloadpage" => $downloadpage)));

            return array('bookid' => $bookid);
        } else
            return false;
    }

    public static function newOfficalBook($Bookidlist) {
        //很乱，有待调整 @ koodo
        $mysql = Conn_mysql::getInstance();
        foreach (explode(",", $Bookidlist) as $bookid) {

            //从临时表 新增书本数据
            @$mysql->query("INSERT INTO book_list(s_datetime,s_uid,title,author,area,file_type,img_name,click) SELECT s_datetime,s_uid,title,author,area,file_type,img_name,click FROM book_list_verify WHERE bookid = $bookid;");

            $newBookId = intval($mysql->getLastId()); // 获取自增ID

            $book_data = mysql_fetch_object($mysql->query(sprintf('SELECT `area` FROM `book_list` WHERE `bookid` = %s;', $newBookId))); // 数据回调

            $path = $_SERVER['DOCUMENT_ROOT'] . "/not/mybook/data/book_lib/tmp/book_id_$bookid.xml";
            $_re = mysql_fetch_array($mysql->query("SELECT * FROM book_list_verify WHERE bookid = $bookid;"));
            $imgpath = $_SERVER['DOCUMENT_ROOT'] . "/not/mybook/data/book_image_lib/tmp/$_re[img_name]";
            if (is_file($path)) {
                rename($path, str_replace("book_id_$bookid.xml", "book_id_$newBookId.xml", str_replace("/tmp", "", $path)));
            }
            $pricePath = $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/data/book_price_lib/tmp/' . "p_$bookid.json";
            if (is_file($pricePath)) {
                rename($pricePath, $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/data/book_price_lib/' . "p_$newBookId.json");
            }
            if (is_file($imgpath)) {
                // 图片上传到 又拍云存储 :)
                require_once($_SERVER['DOCUMENT_ROOT'] . '/mod/upyun.class.php');
                $upyun = new UpYun("itsrcs", "koodo", "613158");
                $fh = fopen($imgpath, 'r');
                $upyun->writeFile("/bookimg/" . $_re['img_name'], $fh);
                fclose($fh);
                rename($imgpath, str_replace("/tmp", "", $imgpath));
            }
            @$mysql->query("DELETE FROM book_list_verify WHERE bookid = $bookid;");
            @$mysql->query(sprintf("UPDATE `book_stat` SET `count` = `count` + 1 WHERE `book_type` = '%s';", $book_data->area));
        }
        return true;
    }

    public static function delBook() {
        
    }

    public static function delBookApp($Bookidlist) {
        $mysql = Conn_mysql::getInstance();
        foreach (explode(",", $Bookidlist) as $bookid) {
            $path = $_SERVER['DOCUMENT_ROOT'] . "/not/mybook/data/book_lib/tmp/book_id_$bookid.xml";
            $_re = mysql_fetch_array($mysql->query("SELECT img_name FROM book_list_verify WHERE bookid = $bookid;"));
            $imgpath = $_SERVER['DOCUMENT_ROOT'] . "/not/mybook/data/book_image_lib/tmp/$_re[img_name];";
            if (is_file($path))
                @unlink($path);
            if (is_file($imgpath))
                @unlink($imgpath);
            @$mysql->query("DELETE FROM book_list_verify WHERE bookid = $bookid;");
        }
        return true;
    }

    public static function alterBook() {
        
    }

    public static function commBook($bookid, $fuid, $content) {
        if (!class_exists(book))
            include_once $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/book.class.php';

        $_comm = array();
        $_comm['fu'] = $fuid; //uid_from
        $_comm['ct'] = $content; //content
        $_comm['dt'] = G::getDatetime(); //date_time
        $_comm['un'] = G::getUserName($fuid); //username

        $_book = new book($bookid);
        $_path_comm = $_book->getBookCommPath();
        $data = file_exists($_path_comm) ? json_decode(file_get_contents($_path_comm), true) : array();
        array_push($data, $_comm);
        if (file_put_contents($_path_comm, json_encode($data))) {

            $_comm['bt'] = $_book->getTitle();
            $_comm['bl'] = $_book->getURL();

            $_path_ncomm = $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/newEstComm2Book.json';

            $_ncommData = array_reverse(array_slice(array_reverse(file_exists($_path_ncomm) ? json_decode(file_get_contents($_path_ncomm), true) : array()), 0, 15));

            array_push($_ncommData, $_comm);
            if (file_put_contents($_path_ncomm, json_encode($_ncommData)))
                return true;
        }
        else
            return false;
    }

}

?>
