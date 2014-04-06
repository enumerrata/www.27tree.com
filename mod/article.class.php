<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';

class Article extends Conn_mysql {

     private $artid;
     private $uid;
     private $type;
     private $stype;
     private $path;
     private $datetime;
     private $date;
     private $title;
     private $author;
     private $content;
     private $url;
     private $contentx;
     private $jsonpath;
     private $xmlpath;
     private $ini;
     private $lastModify;
     private $commi;
     private $readi;
     private $commpath;
     private $blink;

     public $error = false;

     const FULL_CONTENT = 0;
     const DESC = 1;

     public $goChangeType = false;
     public $changeType = null;
     private static $mod;

     public function getLastModify() {
          return $this->lastModify;
     }

     public function setLastModify($lastModify) {
          $this->lastModify = $lastModify;
     }

     public function getStype() {
          return $this->stype;
     }

     public function setStype($stype) {
          $this->stype = $stype;
     }

     public function __construct($artid, $mod = Article::DESC) {
          parent::getInstance();
          if ($mod == Article::DESC || $mod == Article::FULL_CONTENT)
               self::$mod = $mod;
          else
               echo 'error MOD!';
          $this->artid = $artid;
          $this->ini = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/mod/config_itsrcs.php.ini", true);
          $this->loadData();
     }

     public function saveData() {
          if (self::dataExists()) {
               self::updateTime();
               self::tmpData();
          } else
               return false;

          if ($this->goChangeType) {
               $ctype = explode(",", $this->changeType);
               $root = $_SERVER['DOCUMENT_ROOT'];
               $npath = $root . "/not/file/" . $ctype[0] . "/" . self::getDate() . "/" . self::getPath();
               $mpath = $root . "/not/file/" . $ctype[0] . "/" . self::getDate();
               self::setType($ctype[0]);
               self::setStype($ctype[1]);
               self::query("UPDATE artlist SET stype_artlist = '" . $ctype[1] . "' WHERE id_artlist = " . self::getArtid() . ";");
               self::query("UPDATE artlist SET type_artlist = '" . $ctype[0] . "' WHERE id_artlist = " . self::getArtid() . ";");
          }

          $json_data = array(
              "author" => self::getAuthor(),
              "uid" => self::getUid(),
              "type" => self::getType(),
              "stype" => self::getStype(),
              "date" => self::getDateTime(),
              "artid" => self::getArtid(),
              "readInfo" => self::getReadInfo(),
              "title" => self::getTitle(),
              "path" => self::getPath() . ".xml",
              "contentx" => self::getContentx());

          $doc = new DOMDocument();
          $doc->formatOutput = true;

          switch ($this->mod) {
               case Article::FULL_CONTENT:
                    $doc->load(self::getXmlpath());
                    $doc->getElementsByTagName('title')->item(0)->firstChild->nodeValue = self::getTitle();
                    $doc->getElementsByTagName('content')->item(0)->firstChild->nodeValue = self::getContent();
                    $doc->getElementsByTagName('json-link')->item(0)->firstChild->nodeValue = "./file/"
                            . self::getType() . "/" . self::getDate() . "/"
                            . self::getPath() . ".json";
                    echo 's';
                    break;
          }
          if (file_put_contents(self::getJsonpath(), json_encode($json_data)) && $doc->save(self::getXmlpath())) {
               if ($this->goChangeType) {
                    if (!is_dir($mpath))
                         mkdir($mpath);
                    rename(self::getJsonpath(), $npath . ".json");
                    rename(self::getXmlpath(), $npath . ".xml");
               }
               return true;
          } else {
               unlink(self::getJsonpath());
               unlink(self::getXmlpath());
               self::tmpDataRev();
               return false;
          }
          // TODO: xml writer
     }

     public function distory() {
          $uid = self::getUid();
          $artid = self::getArtid();
          if ($this->blink !== 0)
               self::query("UPDATE blog_list SET `upfont` = 0 WHERE `blogid` = $this->blink;");
          if (self::query("DELETE FROM artlist WHERE uid=$uid AND id_artlist=$artid;", MYSQL_ASSOC)) {
               unlink(self::getJsonpath());
               unlink(self::getXmlpath());
               self::wipeCache();
               return true;
          } else
               return false;
     }

     private function updateTime() {
          $date = date("Y-m-d H:i:s");
          self::setLastModify($date);
          self::query("UPDATE artlist SET lastModify = '$date' WHERE id_artlist = " . self::getArtid() . ";");
     }

     private function wipeTmpData() {
          unlink(self::getJsonpath() . ".tmp");
          unlink(self::getXmlpath() . ".tmp");
     }

     private function tmpData() {
          copy(self::getJsonpath(), self::getJsonpath() . ".tmp");
          copy(self::getXmlpath(), self::getXmlpath() . ".tmp");
     }

     private function tmpDataRev() {
          rename(self::getJsonpath() . ".tmp", self::getJsonpath());
          rename(self::getXmlpath() . ".tmp", self::getXmlpath());
     }

     private function dataExists() {
          if (file_exists(self::getJsonpath()) && file_exists(self::getXmlpath()))
               return true;
          else
               return false;
     }

     private function unlinkdata() {
          if (file_exists(self::getJsonpath()))
               unlink(self::getJsonpath());
          if (file_exists(self::getXmlpath()))
               unlink(self::getXmlpath());
     }

     private function loadData() {
          include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
          if (!isset($this->artid))
               return false;
          $sql = "SELECT uid,date_artlist AS date,path_artlist AS path,type_artlist as type,stype_artlist as stype,commi,readi,blink "
                  . "FROM artlist WHERE id_artlist = $this->artid";
          if(false == $data = @mysql_fetch_array(self::query($sql), MYSQL_BOTH)){
               $this->error = true;
               return false;
          }
          unset($sql);
          $this->blink = $data['blink'];
          $this->lastModify = $data['lastModify'];
          $this->path = $data['path'];
          $this->uid = $data['uid'];
          $this->date = $data['date'];
          $this->type = $data['type'];
          $this->stype = $data['stype'];
          $this->url = "/art/" . $data['type'] . "/content/" . $data['date'] . "/" . $data['path'] . ".html";
          $this->commpath = $_SERVER['DOCUMENT_ROOT'] . "/not/file/$data[type]/$data[date]/comm_for_$data[path].json";
          self::setURL(DOMAIN . "/art/$data[type]/content/$data[date]/$data[path].html");
          if ($this->blink == 0) {
               $this->commi = $data['commi'];
               $this->readi = $data['readi'];
               $this->jsonpath = $this->ini['path']['artfilepath'] . "$data[type]/$data[date]/$data[path].json";
               $this->xmlpath = $this->ini['path']['artfilepath'] . "$data[type]/$data[date]/$data[path].xml";
               unset($data);
               switch ($this->mod) {
                    case Article::FULL_CONTENT:
                         $doc = new DOMDocument();
                         $doc->formatOutput = true;
                         if (!$doc->load($this->xmlpath))
                              $this->error = true;
                         $this->content = $doc->getElementsByTagName("content")->item(0)->nodeValue;
                         unset($doc);
                         break;
               }
               if (!$jsondata = json_decode(file_get_contents($this->jsonpath), true))
                    $this->error = true;
               $this->datetime = $jsondata['date'];
               $this->contentx = $jsondata['contentx'];
               $this->author = $jsondata['author'];
               $this->title = $jsondata['title'];
          } else {
               include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';
               $blogdata = new Blog($this->blink);
               $this->error = $blogdata->error;
               if ($this->mod == Article::FULL_CONTENT)
                    $this->content = $blogdata->getContent();
               $this->commi = &$blogdata->getCommi();
               $this->readi = &$blogdata->getReadi();
               $this->datetime = $blogdata->getSubmit_datetime();
               $this->contentx = $blogdata->getContentx();
               $this->author = $blogdata->getUserName();
               $this->title = $blogdata->getTitle();
               unset($blogdata);
          }
     }

     public function wipeCache() {
          $cacheFile = "cache_" . self::getType() . "_" . self::getPath();
          $cachePath = $this->ini[path][artcachepath] . $cacheFile;
          if (file_exists($cachePath))
               unlink($cachePath);
     }

     public function getURL() {
          return $this->url;
     }

     public function setURL($url) {
          $this->url = $url;
     }

     public function getDatetime() {
          return $this->datetime;
     }

     public function setDatetime($datetime) {
          $this->datetime = $datetime;
     }

     private function generContentx($cont) {
          return strip_tags($cont) . '...';
     }

     public function getJsonpath() {
          return $this->jsonpath;
     }

     public function getXmlpath() {
          return $this->xmlpath;
     }

     public function setJsonpath($jsonpath) {
          $this->jsonpath = $jsonpath;
     }

     public function setXmlpath($xmlpath) {
          $this->xmlpath = $xmlpath;
     }

     public function getAuthor() {
          return $this->author;
     }

     public function getContent() {
          return $this->content;
     }

     public function getContentx() {
          return $this->contentx;
     }

     public function setAuthor($author) {
          $this->author = $author;
     }

     public function setContent($content) {
          $this->content = $content;
     }

     public function setContentx($contentx) {
          $this->contentx = $contentx;
     }

     public function getArtid() {
          return $this->artid;
     }

     public function getUid() {
          return $this->uid;
     }

     public function getType() {
          return $this->type;
     }

     public function getPath() {
          return $this->path;
     }

     public function getDate() {
          return $this->date;
     }

     public function getTitle() {
          return $this->title;
     }

     public function getCommi() {
          return $this->commi;
     }

     public function getReadi() {
          return $this->readi;
     }

     public function setArtid($artid) {
          $this->artid = $artid;
     }

     public function setUid($uid) {
          $this->uid = $uid;
     }

     public function setType($type) {
          $this->type = $type;
     }

     public function setPath($path) {
          $this->path = $path;
     }

     public function setDate($date) {
          $this->date = $date;
     }

     public function setTitle($title) {
          $this->title = $title;
     }

     public function getArticleComm() {
         include_once $_SERVER['DOCUMENT_ROOT'] . '/not/COMM/commCaster.class.php';
         $comm = commCaster::getComm($this->blink == 0 ? $this->artid : $this->blink , $this->blink == 0 ? commCaster::TO_ART : commCaster::TO_BLOG);
         return false !== $comm ? $comm : null;
     }

     public function getBlink() {
          return $this->blink;
     }

     public function getStypeWithLink() {
          if ($this->stype != '0') {
               $stype = sbanconv::conv($this->stype);
               $stype = "<a class=\"stype\" href=/art/$this->type-" . $this->stype . "/>[$stype]</a>";
          } else
               $stype = null;
          return $stype;
     }

     public function upReadI() {
          if ($this->blink == 0) {
               self::query("UPDATE artlist SET readi = readi + 1 WHERE id_artlist = $this->artid;");
          } else
               self::query("UPDATE blog_list SET readi = readi + 1 WHERE blogid = $this->blink;");
     }

}

class MysqlIncludeException extends Exception {

}
