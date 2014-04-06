<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';

class book {

    const DPS_bookDet = 0;
    const DPS_bookList = 1;

    private $bookid;
    private $XMLFILE;
    private $suid;
    private $datetime;
    private $mysql;
    private $bookFilePath;
    private $title;
    private $intro;
    private $bookAuthor;
    private $img_link;
    private $book_area;
    private $downloadpage;
    private $click;
    private $V = false;
    private $file_type;
    private $susn;
    public $parseVersion = null;

    public function __construct($bookid, $verify = false) {
        $this->bookid = $bookid;
        $this->bookFilePath = $verify ? $_SERVER['DOCUMENT_ROOT'] . "/not/mybook/data/book_lib/tmp/book_id_$this->bookid.xml" : $_SERVER['DOCUMENT_ROOT'] . "/not/mybook/data/book_lib/book_id_$this->bookid.xml";
        $this->mysql = Conn_mysql::getInstance();
        if (true === $verify)
            $this->V = true;
        self::loadData();
    }

    private function loadData() {
        $table = $this->V ? 'book_list_verify' : 'book_list';
        $SQL = sprintf("SELECT title,s_uid as uid,s_datetime as datetime,cl.username as usn,author,click,file_type,img_name FROM %s bl INNER JOIN client cl ON cl.uid = bl.s_uid AND bl.bookid = %s;", $table, $this->bookid);
        if (!$_re = @mysql_fetch_array($this->mysql->query($SQL))) {
            //G::Fush404();
        }
        $this->file_type = $_re['file_type'];
        $this->suid = $_re['uid'];
        $this->susn = $_re['usn'];
        $this->datetime = $_re['datetime'];
        $this->click = intval($_re['click']);
        $this->img_link = $_re['img_name'];
        $this->title = $_re['title'];
        $this->bookAuthor = $_re['author'];
        if (file_exists($this->bookFilePath)) {
            $this->XMLFILE = simplexml_load_file($this->bookFilePath);
            $tmpForxpath = $this->XMLFILE->xpath("//book-area");
            //var_dump($tmpForxpath[0][0]);
            $this->book_area = (string) $tmpForxpath[0][0];
            $tmpForxpath = $this->XMLFILE->xpath("//book-intro");
            $this->intro = (string) $tmpForxpath[0][0];
            $tmpForxpath = $this->XMLFILE->xpath("//down-load-page");
            $this->downloadpage = (string) $tmpForxpath;
            $tmpForxpath = $this->XMLFILE->xpath("parseVersion");
            $this->parseVersion = (double) $tmpForxpath;
            unset($tmpForxpath);
        } else {
            
        }
        //G::Fush404();
    }

    public function getBookid() {
        return $this->bookid;
    }

    public function getRawDownLoadPage() {
        return $this->downloadpage;
    }

    public function getURL() {
        return $this->V ? DOMAIN . "/bookLib/v/" . $this->bookid : DOMAIN . "/bookLib/" . $this->bookid;
    }

    public function getSuid() {
        return $this->suid;
    }

    public function getDatetime() {
        return $this->datetime;
    }

    public function getBookFilePath() {
        return $this->bookFilePath;
    }

    public function getBookCommPath() {
        return $this->V ? false : $_SERVER['DOCUMENT_ROOT'] . "/not/mybook/data/book_lib/comment_" . $this->bookid . "_.json";
    }

    public function getFile_type() {
        return $this->file_type;
    }

    public function getClickStat() {
        return $this->click;
    }

    public function getSharerName() {
        return $this->susn;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getIntro() {
        return $this->intro;
    }

    public function getBookAuthor() {
        return $this->bookAuthor;
    }

    public function getImg_link() {
        return $this->img_link;
    }

    public function getBook_area() {
        return $this->book_area;
    }

    public function getBookImgURL($size) {
        if ($this->img_link == '') {
            switch ($this->file_type) {
                case 'pdf':
                    if ($size == 0)
                        return IMG_PATH_CL_BOOK . "default/pdfDefault.png";
                    else
                        return IMG_PATH_CL_BOOK . "default/pdfDefault.png" . "_vbook$size";
                    break;
                case 'chm':
                    return IMG_PATH_CL_BOOK . "default/chmDefault.png";
                    break;
                default:
                    return IMG_PATH_CL_BOOK . "default/def.png";
            }
        } else {
            if ($this->V)
                $URL = '/not/mybook/data/book_image_lib/tmp/' . $this->img_link;
            else
                $URL = '/not/mybook/data/book_image_lib/' . $this->img_link;
            return $URL;
            if (is_file($_SERVER['DOCUMENT_ROOT'] . $URL)) {
                // @todo 尺寸判断 > 256 切换尺寸
                if ($size == 0) {
                    return IMG_PATH_CL_BOOK . $this->img_link;
                } else {
                    return IMG_PATH_CL_BOOK . $this->img_link . "_vbook$size";
                }
            } else {
                if ($size == 0)
                    return IMG_PATH_CL_BOOK . "/default/bookDefault.png";
                else
                    return IMG_PATH_CL_BOOK . "/default/bookDefault.png" . "_vbook$size";
            }
        }
    }

    public function getBookDownLoadURL() {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/not/mybook/data/book_price_lib/p_$this->bookid.json";
        if (@file_exists($path)) {
            $_tmp_file = json_decode(file_get_contents($path), true);
            if ('javascript:;' !== $_tmp_file['PdfDownloadpage'] && '' !== $_tmp_file['PdfDownloadpage']) {
                return $_tmp_file['PdfDownloadpage'];
            } else
                return false;
        } else
            return false;
    }

    public function getBookPrice($display_set = book::DPS_bookDet) {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/not/mybook/data/book_price_lib/p_$this->bookid.json";
        if (@file_exists($path))
            return json_decode(file_get_contents($path), true);
        else {
            if ($display_set == book::DPS_bookDet) {
                return array(
                    "priceInAmazon" => "javascript:;",
                    "priceInDangDang" => "javascript:;",
                    "priceInChinaPub" => "javascript:;",
                    "PdfDownloadpage" => "javascript:;"
                );
            } else {
                return false;
            }
        }
    }

    public function getComm() {
        $bookccpath = $_SERVER['DOCUMENT_ROOT'] . "/not/mybook/data/book_lib/comment_" . $this->bookid . "_.json";
        return file_exists($bookccpath) ? json_decode(file_get_contents($bookccpath), true) : null;
    }

}

?>
