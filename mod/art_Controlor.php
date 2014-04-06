<?php

/**
 * @author cBoss
 * @var art_controlor_interface
 */
interface art_control {

     /**
      * @var #public function
      */
     public function getArtData($ArtId, $mod);

     public function deleteArt($artid);

     public function addArt($array = array());

     public function changeArt($array = array());

     /**
      * @var #public #static function
      */
     public static function getInstance();
}

/**
 * @author cBoss
 * @var art_controlor Class
 */
class art_Controlor implements art_control {

     const GET_RAW = 1;
     const GET_EDIT = 2;
     const GET_PB = 3;
     const GET_ILL = 4;

     private static $instance;
     private static $MatchList = array();

     private function __construct() {

     }

     public static function getInstance() {
          if (empty(self::$instance))
               self::$instance = new art_Controlor();
          if (empty(self::$MatchList))
               self::$MatchList = array("artid", "uid", "type", "path", "date",
                   "title", "author", "content", "contentx", "readInfo");
          return self::$instance;
     }

     private static function modS($mod) {
          switch ($mod) {
               case 1: //@param GET_RAW
               case 2: //@param GET_EDIT
               case 3: //@param GET_PB
                    return GET_ALL;
               case 4: //@param GET_ILL
                    return GET_ILL;
          }
     }

     public function getArtData($ArtId, $mod) {
          /**
           * @param $ArtId the id of article in the db
           * @param $mod [GET_RAW,GET_EDIT,GET_PUBC,GET_ILL]
           * @return JSON(may uses in http[GET,POST])
           */
          // TODO:
          $article = new Article($ArtId, self::modS($mod));
          echo $article->getContent();
     }

     /**
      * @var private function detail
      */
     private function getRandArtNum($max = 100) {
          // TODO: nothing
          return time() + rand(0, $max);
     }

     private function htmlSp($cont) {
          // TODO:
          /* @var $cont String */
          $cont = str_replace("&lt;", "<", $cont);
          $cont = str_replace("&gt;", ">", $cont);
          $cont = str_replace("&amp;lt;", "&lt;", $cont);
          $cont = str_replace("&amp;gt;", "&gt;", $cont);
          $cont = str_replace('\"', '"', $cont);
          $cont = str_replace("&nbsp;", " ", $cont);
          return $cont;
     }

     public function deleteArt($artid) {
          // TODO:
          $at = new Article($artid, GET_ILL);
          if ($at->distory())
               return true;
          else
               return false;
     }

     public function addArt($array = array()) {
          // TODO:
     }

     public function commArt($artid, $fuid, $content, $artTitle) {

          $_now = G::getDatetime();

          $_comm = array();
          $_comm['fu'] = $fuid; //uid_from
          $_comm['ct'] = $content; //content
          $_comm['dt'] = $_now; //date_time
          $_comm['un'] = G::getUserName($fuid); //username

          $mysql = Conn_mysql::getInstance();

          $_re = mysql_fetch_array($mysql->query("SELECT uid,type_artlist,date_artlist,path_artlist,blink FROM artlist WHERE id_artlist = $artid;"));

          if ($_re['uid'] != $fuid) {
               include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/dy_controlor.php';
               $url = "/art/$_re[type_artlist]/content/$_re[date_artlist]/$_re[path_artlist].html";
               $dy = new dy_controlor($_re['uid']);
               $dy->pushCommDy($fuid, $artid, $artTitle, substr($content, 0, 120), $_now, $url);
               unset($dy);
          }

          if ($fuid != -1)
               @G::upCredit($fuid, 1);

          if ($_re['blink'] != 0) {
               $mysql->query("UPDATE `blog_list` SET `commi`=`commi` + 1,`lastModify`= '$_now' WHERE `blogid`='$_re[blink]';");
          } else {
               $mysql->query("UPDATE `artlist` SET `commi`=`commi` + 1,`lastModify`= '$_now' WHERE `id_artlist`='$artid';");
          }
          @unlink($_SERVER['DOCUMENT_ROOT'] . '/not/cache/cache_' .$_re['type_artlist']. '_' . $_re[path_artlist]);
          $postXmlPath = $_SERVER['DOCUMENT_ROOT'] . "/not/file/$_re[type_artlist]/$_re[date_artlist]/comm_for_$_re[path_artlist].json";
          $data = file_exists($postXmlPath) ? json_decode(file_get_contents($postXmlPath), true) : array();
          array_push($data, $_comm);

          if (file_put_contents($postXmlPath, json_encode($data)))
               return true;
          else
               return false;
     }

     public function changeArt($Rq = array()) {
          /**
           * @param commandList
           * @param Title/tt
           * @param id
           * @param Content/ct
           */
          // TODO:typeChange...
          $date = date("Y-m-d H:i:s"); /* @TODO:change datetime */
          $ls = explode(",", $Rq['commandList']);
          $at = new Article($Rq['id'], GET_ALL);

          if (in_array('ct', $ls) && array_key_exists('Content', $Rq))
               $at->setContent(self::backslashEscape($Rq['Content']));
          if (in_array('tt', $ls) && array_key_exists('Title', $Rq))
               $at->setTitle($Rq['Title']);
          if (in_array('ctx', $ls) && array_key_exists('Contentx', $Rq))
               $at->setContentx(strip_tags($Rq['Contentx']) . "...");
          if (in_array('cgt', $ls) && array_key_exists('cType', $Rq)) {
               $at->goChangeType = true;
               $at->changeType = $Rq['cType'];
          }

          $at->wipeCache(); //清缓存，你懂的

          if ($at->saveData())
               return true;
     }

     private function backslashEscape($cont) {
          return str_replace("_%5c_", "\\", $cont);
     }

}
