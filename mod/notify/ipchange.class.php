<?php
class IpChange{
     public static function go(){
          $IPCHANGE = true;
          include $_SERVER['DOCUMENT_ROOT'] . '/account/login/index.php';
          exit();
     }
}
?>