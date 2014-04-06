<?php
class bookTypeConv {
     public static function conV($type){
          $xml = simplexml_load_file(dirname(__FILE__) . '/booktype.xml');
          $node = $xml->xpath("//b[@type='$type']");
          return (string)$node[0]['desc'];
     }
}

?>
