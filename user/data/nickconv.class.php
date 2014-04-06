<?php
class nickconv {

     private function loadXML($type) {
          $dom = new domDocument;
          $dom->load(dirname(__FILE__) . "/info/$type" . "_group_convlist.xml");
          return simplexml_import_dom($dom);
     }

     public static function conv($num,$isAdmin) {
          if(true === $isAdmin)
               return self::admin_conv($num);
          else return self::user_conv($num);
     }

     private function admin_conv($num) {
          $xml = self::loadXML("admin");
          $node = $xml->xpath("ag[@lev='$num']");
          return $node[0]['name'];
     }

     private function user_conv($num) {
          $xml = self::loadXML("user");
          $node = $xml->xpath("ug[@lev='$num']");
          return $node[0]['name'];
     }

}

?>
