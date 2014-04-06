<?php
//error_reporting(0);
class Control extends Conn_mysql{

     private $conf;

     private function __construct() {
          $this->conf = parse_ini_file("./mod/config_itsrcs.php.ini", true);
          parent::getInstance();
     }

     public static function getInstance() {
          return new Control();
     }

     public function getFontCacheL() {
          return $this->conf['cache']['font-cacheL'];
     }

     public function push_artnum_today() {
          $fd = date("Y-m-d");
          $result = mysql_fetch_array(self::query("SELECT count(*) as count FROM artlist WHERE date_artlist = '$fd';"));
          echo "<a style='font-size:15px;' href='/not/newArticleToday.php'>", $result['count'], "</a>&nbsp;个";
          unset($result);
     }

     public function push_newest_user() {
          $result = mysql_fetch_array(self::query("SELECT uid,username FROM client GROUP BY uid DESC LIMIT 0,1"));
          echo "<a style='font-size:15px;' href='/user/$result[uid]'>$result[username]</a>";
          unset($result);
     }

     public function push_new_sector($type) {
          $result = mysql_fetch_array(self::query("SELECT id_artlist AS id FROM artlist WHERE type_artlist = '$type' GROUP BY lastModify DESC LIMIT 1"));
          $art = new Article($result['id']);
          $return = array();
          $return['title'] = $art->getTitle();
          $return['contx'] = $art->getContentx();
          $return['url'] = $art->getURL();
          $return['author'] = $art->getAuthor();
          $return['datetime'] = $art->getDatetime();
          $return['uid'] = $art->getUid();
          $return['headimg'] = G::getHeadimg($art->getUid());
          $return['comm'] = $art->getArticleComm();
          return $return;
     }

     public function push_newest_art() {
          $result = mysql_fetch_array(self::query("SELECT id_artlist FROM artlist GROUP BY id_artlist DESC LIMIT 0,1"));
          $_a = new Article($result['id_artlist'],  Article::DESC);
          echo "<a style='font-size:15px;' href='".$_a->getURL()."'>".$_a->getTitle()."</a>&nbsp;&nbsp;&nbsp;&nbsp;";
          unset($result);
          unset($date);
          unset($json);
          unset($f);
          unset($path);
     }

     public function push_news($type, $maxnum) {
          if (!isset($maxnum))
               $maxnum = 5;
          if ($type == '') {
               echo "type not set!";
               return false;
          }
          //echo "SELECT artcon,newstype,title FROM news WHERE newstype='$this->type' LIMIT $maxnum;";
          $result = self::query("SELECT artcon,newstype,title FROM news WHERE newstype='$type' LIMIT $maxnum;");
          while (@$row = mysql_fetch_array($result, MYSQL_BOTH)) {
               echo "<li><a href='" . DOMAIN . "/art/$row[newstype]/content/$row[artcon].html'>$row[title]</a></li>";
          }
     }

     public function push_readi_desc_arts($num = 12) {
          $lastWeek = G::getLastWeekDate();
          $result = self::query("SELECT type_artlist,readi,path_artlist,date_artlist FROM artlist WHERE date_artlist >='$lastWeek' ORDER BY readi DESC LIMIT " . $num . ";");
          if (!isset($result))
               die('null');
          while (@$row = mysql_fetch_array($result)) {
               $path = "./not/file/$row[type_artlist]/$row[date_artlist]/$row[path_artlist].json";
               if (!file_exists($path))
                    continue;
               $f = file_get_contents($path);
               $json = json_decode($f, true);
               $href = DOMAIN . "/art/$row[type_artlist]/content/$row[date_artlist]/$row[path_artlist].html";
               echo "<li><span class='li-title hiddenc'>($row[readi])<a href='" . $href . "' title=$json[title]>$json[title]</a></span>";
               echo "<input type=hidden  name=path value='" . $row['path_artlist'] . "'/></li>";
          }
     }

     public function push_commi_desc_arts($num = 12) {
          $lastWeek = G::getLastWeekDate();
          $result = self::query("SELECT type_artlist,commi,path_artlist,date_artlist FROM artlist WHERE date_artlist >='$lastWeek' ORDER BY commi DESC LIMIT " . $num . ";");
          if (!isset($result))
               die('null');
          while (@$row = mysql_fetch_array($result)) {
               $path = "./not/file/$row[type_artlist]/$row[date_artlist]/$row[path_artlist].json";
               if (!file_exists($path))
                    continue;
               $f = file_get_contents($path);
               $json = json_decode($f, true);
               $href = DOMAIN . "/art/$row[type_artlist]/content/$row[date_artlist]/$row[path_artlist].html";
               echo "<li><span class='li-title hiddenc'>($row[commi])<a href='" . $href . "' title=$json[title]>$json[title]</a></span>";
               echo "<input type=hidden  name=path value='" . $row['path_artlist'] . "'/></li>";
          }
     }

     public function push_arts($type, $num = 12) {
          include_once $this->conf['path']['artinfopath'] . 'sbanconv.class.php';
          $count = self::query("SELECT count(*) as count FROM artlist WHERE type_artlist='" . $type . "';");
          while ($row = mysql_fetch_array($count)) {
               if ($row['count'] > 0) {
                    //echo "<input type='hidden' name='count' value='" . $row['count'] . "'/>";
                    $result = self::query("SELECT id_artlist FROM artlist WHERE type_artlist='" . $type . "' ORDER BY id_artlist DESC LIMIT " . $num . ";");
                    while ($row = mysql_fetch_array($result)) {
                         $_a = new Article($row['id_artlist'],  Article::DESC);
                         $stype = $_a->getStype() == '0' ? "" : "[" . sbanconv::conv($_a->getStype()) . "]";
                         echo "<li><span class=\"stype\">$stype</span><span class='li-title'>\n<a href='" . $_a->getURL() . "' title={$_a->getTitle()}>{$_a->getTitle()}</a>\n</span><input type=hidden  name=path value='" . $_a->getPath() . "'/></li>\n";
                    }
               }
          }
     }

     public function push_newest_blogs($limit = 12) {
          include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';
          $_re = self::query("SELECT * FROM blog_list GROUP BY blogid DESC LIMIT $limit;");
          while ($_row = mysql_fetch_array($_re)) {
               $b = new Blog($_row['blogid']);
               if (!$b->error)
                    echo "<li><a href=\"" . $b->getURL() . "\">" . $b->getTitle() . "</a></li>";
          }
     }

     public function push_art_num($ban) {
          @$ban = mysql_real_escape_string($ban);
          $result = mysql_fetch_array(self::query("SELECT count(id_artlist) as count FROM artlist WHERE type_artlist = '$ban';"));
          echo $result['count'];
          unset($result);
     }

     public function push_sband($type) {
          $dom = new domDocument;
          $dom->load('./mod/gendata/navlist.xml');
          $xml = simplexml_import_dom($dom);
          foreach ($xml->xpath("n[@type='$type']") as $child) {
               foreach ($child->attributes() as $a => $b) {
                    foreach ($child->xpath("sband") as $sband) {
                         $i = 0;
                         foreach ($sband->children() as $band) {
                              if ($i > 4)
                                   break;
                              $attr = $band->xpath("./@name");
                              $imgn = $band->xpath("./@isrc");
                              $url = $band->xpath("./@url");
                              $img = ($imgn[0][isrc]) != "" ? $imgn[0][isrc] : "ban-default-24.png";
                              $url = DOMAIN . "/art/$type-" . $url[0]['url'] . "/";
                              echo "<a href=\"$url\" class=\"borderR10 sband\" style=\"padding:0px 15px;\">", $attr[0][name], "</a>";
                              $i++;
                         }
                    }
               }
          }
     }

     public function pushBookSugg($type) {
          $sign_list = array('java', 'javascript', 'php', 'android','web');
          if (in_array($type, $sign_list)) {
               include_once $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/book.class.php';
               $_re = self::query("SELECT bookid FROM book_list WHERE area = '$type' GROUP BY bookid DESC LIMIT 5;");
               while ($row = mysql_fetch_array($_re)) {
                    $b = new book($row['bookid']);
                    $param['bookid'] = intval($row['bookid']);
                    $param['imgsrc'] = $b->getBookImgURL(230);
                    $param['title'] = $b->getTitle();
                    $param['author'] = $b->getBookAuthor();
                    $param['intro'] = G::blog_summary(G::article_content_conv($b->getIntro()),300);
                    require $_SERVER['DOCUMENT_ROOT'] . '/templates/book_font_sugg.html';
               }
          }
     }

}