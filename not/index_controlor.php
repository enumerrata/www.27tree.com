<?php

if (!class_exists(Conn_mysql))
     include dirname(__FILE__) . '/../mod/Conn_mysql.class.php';

class index_controlor extends Conn_mysql {

     public function __construct() {
          self::getInstance();
     }

     public function pushPageLite($Param_nottype, $Param_stype, $page_lite) {
          $sql_count = false !== $Param_stype ? "SELECT count(*) as count FROM artlist WHERE type_artlist='$Param_nottype' AND stype_artlist = '$Param_stype';" : "SELECT count(*) as count FROM artlist WHERE type_artlist='$Param_nottype';";
          $count = self::query($sql_count);
          while ($row = mysql_fetch_array($count)) {
               $counts = intval($row['count']);
               if ($row['count'] <= $page_lite) {
                    $pages = 1;
                    break;
               } else {
                    $pages = round(($counts - 1) / $page_lite + 0.5);
               }
               echo "<a href='javascript:void(0)' class='next-cp' style='margin-top:5px;'>这么长的下一页，你总能点到的吧，点我下一页。。。</a>";
               echo "<input type=hidden id=max-pages value=$pages />";
               echo "<ul id='slide_ul'>", "<li id='prev-c'><a id='prev-c'><img src='/img/prev.png' align='absmiddle' />&#19978;&#19968;&#39029;</a></li>";
               for ($i = 0; $i < $pages; $i++) {
                    $href = DOMAIN . "/art/$Param_nottype/$i";
                    echo "<li><a href='$href'>" . ($i + 1) . "</a></li>";
               }
               echo "<li id='next-c'><a id='next-c'>&#19979;&#19968;&#39029;<img src='/img/next.png' align='absmiddle' /></a></li>", "<li class='endofli'></li></ul>";
          }
          unset($count);
          unset($counts);
          unset($href);
          unset($pages);
     }

     public function pushMoreRelativeBook($nottype,$type_c){
         $bookType = G::getRelativeBookType($nottype);
         if(false !== $bookType){
             if(!class_exists(book)) include './mybook/book.class.php';
             echo "<div style=\"border:1px solid #ccc;margin:10px 30px;border-top:3px solid #6397CB;background-color:#fff;\">
                    <span class=\"tipS\" style=\"margin:0;border-top:none;\">更多关于&nbsp;<strong>$type_c</strong>&nbsp;的好书</span>";
             $_re_reBook = self::query("SELECT bookid FROM book_list WHERE area = '$bookType' ORDER BY RAND() LIMIT 5;");
             $I = 0;
             while($_row = mysql_fetch_array($_re_reBook)){
                 $_b = new Book($_row['bookid']);
                 $Params = array(
                     'title' => $_b->getTitle(),
                     'URL' => $_b->getURL(),
                     'img' => $_b->getBookImgURL(128)
                 );
                 if($I++ == 4) $contLast = true;
                 include './templates/moreRelativeBook.phtml';
             }
             
             echo "<span class=\"clear\"></span></div>";
             
         }
     }
     
     public function pushSband($Param_nottype) {
          $dom = new domDocument;
          $dom->load('../mod/gendata/navlist.xml');
          $xml = simplexml_import_dom($dom);
          foreach ($xml->xpath("n[@type='$Param_nottype']") as $child) {
               foreach ($child->attributes() as $a => $b) {
                    foreach ($child->xpath("sband") as $sband) {
                         foreach ($sband->children() as $band) {
                              $attr = $band->xpath("./@name");
                              $imgn = $band->xpath("./@isrc");
                              $url = $band->xpath("./@url");
                              $img = ($imgn[0][isrc]) != "" ? $imgn[0][isrc] : "ban-default-24.png";
                              $url = "/art/$Param_nottype-" . $url[0]['url'] . "/";
                              echo "<a href=\"$url\" class=\"borderR15 sband\">", $attr[0][name], "</a>";
                         }
                    }
               }
          }
     }

     public function pushBandInfo($Param_nottype) {
          $dom = new domDocument;
          $dom->load('./info/ban-info.xml');
          $xml = simplexml_import_dom($dom);
          foreach ($xml->children() as $child) {
               foreach ($child->attributes() as $a => $b) {
                    if (strcmp($b, $Param_nottype) == 0) {
                         echo $child;
                         end;
                    }
               }
          }
     }

}

?>
