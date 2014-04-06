<?php

require("../../mod/validate_cookie.class.php");
require("../../mod/con_mysql_query.php");
/*
 * mod:
 * @param banche : 0
 * @param article : 1
 * @param UNKNOWN : -1
 * @param ERROR_1 Cookie_Validate_Failed
 *
 */

class dataPush
{
   public static function push($data,$dataStr)
   {
      if($dataStr == "") return $data;
      $dataStr = explode(",", $dataStr);
      if (!in_array($data, $dataStr))
         array_push($dataStr, $data);
      return implode(",", $dataStr);
   }
}

$validate = new validate_cookie();
$mysql = new con_mysql_query();

$mod = mysql_real_escape_string($_POST['mod']);
$uid = mysql_real_escape_string($_POST['_uid']);

if (!$validate->check($_COOKIE['username'], $_COOKIE['_uid']))
   die("ERROR_1");

//echo $_POST['mod'];
//echo $_POST['banche_id'];
//echo $_POST['article_id'];
//if(!($_POST['article_id'])) echo "lss";
//if(!($_POST['banche_id'])) echo "ls";
switch ($mod) {
   case 1:
      $art = mysql_real_escape_string(intval($_POST['article_id']));
      $data_art = mysql_fetch_array($mysql->query("SELECT art_c FROM client_link WHERE uid=$uid"));
      $data_art = dataPush::push($art, $data_art['art_c']);
      if ($mysql->query("UPDATE client_link SET art_c='$data_art' WHERE uid=$uid;")) {
         echo "1";
      } else {
         echo "0";
      }
      break;
   case 0:
      $banc = mysql_real_escape_string($_POST['banche_id']);
      $data_banc = mysql_fetch_array($mysql->query("SELECT ban_c FROM client_link WHERE uid=$uid"));
      $data_banc = dataPush::push($banc, $data_banc['ban_c']);
      if ($mysql->query("UPDATE client_link SET ban_c='$data_banc' WHERE uid=$uid;")) {
         echo "1";
      } else {
         echo "0";
      }
      break;
   default:
      die("UNKNOWN!");
}