<?php

if (!class_exists(bbs_G))
     include_once dirname(__FILE__) . '/../bbs_G.php';
if (!class_exists(Conn_mysql))
     include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
if (!class_exists(G))
     include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';

class CommandS extends Conn_mysql {

     private $_xml_command = null;
     private $postUID = null;

     public function __construct($uid) {
          if ($uid == null || $uid < 1)
               die("invalid uid!");
          $this->_xml_command = simplexml_load_file(dirname(__FILE__) . '/../data/PostCommandS.xml');
          self::getInstance();
     }

     public function process($commandCode, $postid, $params) {
          $this->postUID = bbs_G::getPostUID($postid);

          //获取操作序列
          $codeList_tmp = $this->_xml_command->xpath("//command[@code='$commandCode']");

          //@TODO Auth
          if ($codeList_tmp[0] !== NULL) {
               $commandNode = (array) $codeList_tmp[0];
               $commandNode = $commandNode['@attributes'];
               unset($codeList_tmp[0]);
               //调用已注册方法
               $this->$commandNode['func']($postid, $params);
          } else
               return false;
     }

     private function toTop($postid, $params){
          @self::query("UPDATE `bbs_posts` SET `state`= 1 WHERE `postid`='$postid';");
     }

     private function blockUser($postid, $params) {

     }

     private function delPost($postid, $params) {
          if(!class_exists(Post)) include $_SERVER['DOCUMENT_ROOT'] . '/minbbs/post.class.php';
          $_post2Del = new Post($postid);
          $_post2Del->delMyself();
     }

     private function add2Essence($postid, $params) {

     }

     private function highLightPost($postid, $params) {
          /**
           * @param type $postid
           * @param type $params color
           */
          $_re = mysql_fetch_array(self::query("SELECT post_date FROM bbs_posts WHERE postid = $postid;"));
          $_addOnPath = dirname(__FILE__) . "/" . preg_replace("/ \d{2}:\d{2}:\d{2}/i", "", $_re['post_date']) . "/AddOnFor_$postid.json";
          if (file_exists($_addOnPath)) {
               $_Addon = json_decode(file_get_contents($_addOnPath), true);
               //if (isset($_Addon['Render']))
          } else
               $_Addon = array();
          $_Addon['Render'] = $params['color'];
          return file_put_contents($_addOnPath, json_encode($_Addon));
     }

     private function upCredit($postid, $params) {
          /**
           * @param type credits 积分增量
           */
          if ($this->postUID != -1)
               return G::upCredit($this->postUID, $params['increment']) ;
     }

     private function appEssence($postid, $params) {

     }

     private function suggPost($postid, $params) {

     }

     private function reTopPost($postid, $params) {
          //顶帖子
          @self::query("UPDATE bbs_posts SET `lastModify` = now() WHERE postid = $postid;");
     }

}
?>