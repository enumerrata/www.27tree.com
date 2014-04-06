<?php
class GForBook {
     public static function getBookLibAccessArr(){
          $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/not/mybook/booktype.xml');
          $arr = array();
          foreach ($xml->xpath('//b[@type]') as $key) {
               array_push($arr, (string)$key['type']);
          }
          return $arr;
     }

     public static function upClick($bookid,$verify = false){
          $mysql = Conn_mysql::getInstance();
          $table = $verify?'book_list_verify':'book_list';
          $mysql->query("UPDATE `$table` SET `click` = `click` + 1 WHERE `bookid` = $bookid;");
     }
}
