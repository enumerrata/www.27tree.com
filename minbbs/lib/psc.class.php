<?php

if (!@class_exists(Conn_mysql))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
if (!@class_exists(G))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';

class psc extends Conn_mysql {

    private $uid;
    private $datetime;
    private $sid;
    private $postid;
    private $postType;

    public function __construct($uid) {
        $this->datetime = G::getDatetime();
        $this->uid = mysql_escape_string($uid);
        parent::getInstance();
    }

    public function addPost($title, $content, $sid, $postType) {
        include $_SERVER['DOCUMENT_ROOT'] . '/mod/validate_cookie.class.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/minbbs/include/bbs_stat.php';
        $validate = new validate_cookie(); //用户验证
        if (false !== $validate->check($_COOKIE['username'], $_COOKIE['_uid'])) {
            include $_SERVER['DOCUMENT_ROOT'] . '/user/data/UserCommand.class.php';
            $USC = new UserCommand($this->uid,true);
            $this->sid = mysql_escape_string($sid);
            $this->postType = mysql_escape_string($postType);
            $postId = self::writeBase();
            if ($postId !== false) {
                $this->postid = mysql_escape_string($postId);
                $dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . preg_replace("/ \d{2}:\d{2}:\d{2}/i", "", self::getDatetime());
                if (!is_dir($dir))
                    mkdir($dir, 0755);
                $path = $dir . DIRECTORY_SEPARATOR . "data_$this->postid.xml";
                //写入xml数据文件
                if (true === self::writeXML($path, self::getUid(), $title, $content)) {
                    //积分操作
                    bbs_stat::upCountData_bySID($sid);
                    $USC->upCredit(2);
                    $USC->upExp(2);
                    return true;
                } else
                    return false;
            } else
                return false;
        } else
            return false;
    }

    public function getPostid() {
        return $this->postid;
    }

    private function getSid() {
        return $this->sid;
    }

    public function getUid() {
        return $this->uid;
    }

    public function getDatetime() {
        return $this->datetime;
    }

    public function setUid($uid) {
        $this->uid = $uid;
    }

    public function setDatetime($datetime) {
        $this->datetime = $datetime;
    }

    private function writeBase() {
        $sql = "INSERT INTO `bbs_posts` (`uid`, `post_date`, `sector_id`, `lastModify`, `type`) VALUES (" . self::getUid() . ", '" . self::getDatetime() . "', " . self::getSid() . ", now(), '" . $this->postType . "');";
        #echo $sql;
        if (self::query($sql)) {
            return self::getLastId();
        }
        else
            return false;
    }

    private function writeXML($path, $uid, $title, $content) {

        $xml = new XMLWriter();
        $xml->openURI($path);
        $xml->setIndentString("  ");
        $xml->setIndent(true);
        $xml->startDocument("1.0", "UTF-8");
        $xml->startElement("root");

        $xml->startElement("uid");
        $xml->writeRaw($uid);
        $xml->endElement(); //uid

        $xml->startElement("datetime");
        $xml->writeRaw(self::getDatetime());
        $xml->endElement(); //datetime

        $xml->startElement("title");
        $xml->writeRaw("<![CDATA[" . $title . "]]>");
        $xml->endElement(); //title

        $xml->startElement("content");
        $xml->writeRaw("<![CDATA[" . $content . "]]>");
        $xml->endElement(); //content

        $xml->startElement("parseVersion");
        $xml->writeRaw("1.1"); // @ TODO
        $xml->endElement(); //tags

        $xml->startElement("state");
        $xml->writeRaw("0");
        $xml->endElement(); //state

        $xml->endElement(); //root
        $xml->endDocument(); //document
        $xml->flush();
        return true;
    }

}

?>
