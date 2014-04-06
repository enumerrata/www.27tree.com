<?php

interface conv {
   public static function conv($rawdata);
   // @return String
}
class sbanconv implements conv {
   public static function conv($rawdata) {
      $dom = new domDocument;
      $dom->load($_SERVER['DOCUMENT_ROOT'] . '/not/info/convlist.xml');
      $xml = simplexml_import_dom($dom);
      $node = $xml->xpath("//band[@url = '$rawdata']");
      return $node[0]['type'];
   }
}
?>
