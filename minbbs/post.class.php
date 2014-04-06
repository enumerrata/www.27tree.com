<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';

class Post extends Conn_mysql {

    const NO_CONTENT = 1;

    private $nocontent;
    private $uid;
    private $psid;
    private $date;
    private $content;
    private $title;
    private $datetime;
    private $commi;
    private $readi;
    private $author;
    private $url;
    private $sid;
    public $parseVersion;
    public $postFilePath;
    public $postCommPath;
    public $error = false;

    public function getSid() {
        return $this->sid;
    }

    public function getURL($m = false) {
        if (!$m) {
            return "/minbbs/topic/$this->psid.html";
        } else
            return "/m/bbs/view_post.php?s=$this->sid&p=$this->psid";
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getUid() {
        return $this->uid;
    }

    public function setUid($uid) {
        $this->uid = $uid;
    }

    public function getCommi() {
        return $this->commi;
    }

    public function getReadi() {
        return $this->readi;
    }

    public function setCommi($commi) {
        $this->commi = $commi;
    }

    public function setReadi($readi) {
        $this->readi = $readi;
    }

    public static function upReadi_s($psid,$mysql = FALSE) {
        if(!$mysql) $mysql = Conn_mysql::getInstance();
        $psid = mysql_escape_string($psid);
        @$mysql->query("UPDATE `bbs_posts` SET `readi`= `readi` + 1 WHERE `postid`='$psid';");
    }

    public function upReadi() {
        self::query("UPDATE `bbs_posts` SET `readi`= `readi` + 1 WHERE `postid`='$this->psid';");
    }

    public function getDatetime($format = false) {
        return $format == false ? $this->datetime : G::tTimeFormat_vs($this->datetime);
    }

    public function setDatetime($datetime) {
        $this->datetime = $datetime;
    }

    public function getPsid() {
        return $this->psid;
    }

    public function getDate() {
        return $this->date;
    }

    public function getContent() {
        return $this->content;
    }

    public function getTitle() {
        return $this->title;
    }

    public function __construct($psid, $NO_content = 0) {
        $this->nocontent = $NO_content;
        $this->psid = $psid;
        parent::getInstance();
        self::loadData();
    }

    public function getAddOnPath() {
        return dirname(__FILE__) . "/lib/" . $this->date . "/AddOnFor_$$this->psid.json";
    }

    private function loadData() {
        $_q_re = self::query("SELECT p.*,c.username FROM bbs_posts p INNER JOIN client c ON p.uid = c.uid WHERE p.postid = $this->psid;");
        if (false !== $_q_re) {
            $_re = mysql_fetch_array($_q_re);
            $this->date = preg_replace("/ \d{2}:\d{2}:\d{2}/i", "", $_re['post_date']);
            $this->postCommPath = dirname(__FILE__) . "/lib/$this->date/data_$this->psid" . "_comm.json";
            if (!$this->nocontent) {
                $this->postFilePath = dirname(__FILE__) . "/lib/" . $this->date . "/data_$_re[postid].xml";
                if (false !== $_xml = @simplexml_load_file(dirname(__FILE__) . "/lib/" . $this->date . "/data_$_re[postid].xml")) {
                    $_title = $_xml->xpath("title");
                    $_content = $_xml->xpath("content");
                    $_parseVersion = $_xml->xpath("parseVersion");
                    $this->title = (string) $_title[0];
                    $this->content = (string) $_content[0];
                    $this->parseVersion = (string) $_parseVersion;
                    unset($_xml);
                } else {
                    $this->error = true;
                    return false;
                }
            }
            $this->author = $_re['username'];
            $this->commi = $_re['commi'];
            $this->readi = intval($_re['readi']) + 1;

            $this->datetime = $_re['post_date'];
            $this->uid = $_re['uid'];
            $this->sid = $_re['sector_id'];
            unset($_re);
        } else {
            $this->error = true;
            return false;
        }
    }

    public function delMyself() {
        //自身调用此方法，删除帖子
        self::query("DELETE FROM bbs_posts WHERE postid = $this->psid AND sector_id = $this->sid;");
        if (is_file($this->postCommPath))
            @unlink($this->postCommPath);
        @unlink($this->postFilePath);
        bbs_G::setStatPostNum($this->getSid(), -1);
    }

}

?>
