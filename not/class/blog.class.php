<?php

//interface ref
include_once dirname(__FILE__) . '/interfaces_blog.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
//userInfo ref
include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/userInfo.class.php';

class Blog implements BlogClass {

    private $XML = null;
    private static $blogId = null;
    private $title = null;
    private $content = null;
    private $contentx = null;
    private $uid = null;
    private $author = null;
    private $usn = null;
    private $readi = null;
    private $commi = null;
    private $Submit_datetime = null;
    private $Submit_date = null;
    private $mysql = null;
    private $path = null;
    private $full = true;
    private $type = null;
    private $stype = null;
    private $lastModify = null;
    private $parseVersion;
    public $error = false;

    public function __construct($blogId, $full = true) {
        if (!$full)
            $this->full = false;
        $this->mysql = Conn_mysql::getInstance();
        self::$blogId = $blogId;
        self::initXMLData();
    }

    public function getContent() {
        if (null == $this->content) {
            $_tmp_content = @$this->XML->xpath("//content");
            $this->content = G::article_content_conv((string) $_tmp_content[0], $this->parseVersion);
            unset($_tmp_content);
        }
        return $this->content;
    }

    public function getContentx() {
        if (null == $this->contentx) {
            $_tmp_content = @$this->XML->xpath("//contentx");
            $this->contentx = (string) $_tmp_content[0];
            unset($_tmp_content);
        }
        return $this->contentx;
    }

    public function getUserName() {
        return $this->usn;
    }

    public function getAuthor() {
        if (null == $this->author) {
            $this->author = new userInfo($this->uid);
        }
        return $this->author;
    }

    public function getTitle() {
        if (null == $this->title) {
            $_tmp_content = @$this->XML->xpath("//title");
            $this->title = G::article_content_conv((string) $_tmp_content[0], $this->parseVersion);
            unset($_tmp_content);
        }
        return $this->title;
    }

    public function getReadi() {
        return $this->readi;
    }

    public function getCommi() {
        return $this->commi;
    }

    public function getSubmit_datetime() {
        return $this->Submit_datetime;
    }

    public function getSubmit_date() {
        return $this->Submit_date;
    }

    public function getDatetime($format = false) {
        if ($format) {
            return G::tTimeFormat_vs($this->Submit_datetime);
        }
    }

    public function getUid() {
        return $this->uid;
    }

    public function getURL() {
        return '/blog/' . self::getSubmit_date() . '/content_' . self::$blogId . '.html';
    }

    public function getPath() {
        return $this->path;
    }

    public function getLastModify() {
        return $this->lastModify;
    }

    public function getType() {
        return $this->type;
    }

    public function getStype() {
        return $this->stype;
    }

    public function upReadi() {
        $this->mysql->query("UPDATE blog_list SET `readi` = `readi` + 1 WHERE blogid = " . self::$blogId . ";");
    }

    public function getComms() {
        $_json_path = str_replace(".xml", ".json", $this->path);
        if (file_exists($_json_path))
            return json_decode(@file_get_contents($_json_path), true);
        else
            return null;
    }

    private final function initXMLData() {

        $_re = mysql_fetch_array($this->mysql->query(sprintf("SELECT bl.*,cl.username FROM blog_list bl LEFT JOIN client cl ON bl.uid = cl.uid WHERE blogid = %s;", self::$blogId)));
        $this->Submit_datetime = $_re['datetime'];
        //echo $this->Submit_datetime;
        $this->Submit_date = preg_replace("/ \d{2}:\d{2}:\d{2}/i", "", $_re['datetime']);
        $this->uid = $_re['uid'];
        $this->commi = $_re['commi'];
        $this->readi = $_re['readi'];
        $this->stype = $_re['stype'];
        $this->type = $_re['type'];
        $this->lastModify = $_re['lastModify'];
        $this->usn = $_re['username'];

        $this->path = $_SERVER['DOCUMENT_ROOT']
                . DIRECTORY_SEPARATOR . 'not'
                . DIRECTORY_SEPARATOR . 'blog_file'
                . DIRECTORY_SEPARATOR . $this->Submit_date
                . DIRECTORY_SEPARATOR . 'blog_' . self::$blogId . '.xml';

        if ($this->full) {
            if (!@$this->XML = simplexml_load_file($this->path)) {
                $this->error = true;
                //$this->mysql->query("DELETE FROM blog_list WHERE blogid = " . self::$blogId . ";");
                //$this->mysql->query("DELETE FROM map_artlist_blogid_conv WHERE blogid = " . self::$blogId . ";");
                //@unlink($this->path);
                //echo 'u---1';
                //throw new XMLNotFoundException;
            } else {
                $_parseVersion = $this->XML->xpath("parseVersion");
                $this->parseVersion = (double) $_parseVersion[0];
            }
        }
    }

}

class XMLNotFoundException extends Exception {
    
}
