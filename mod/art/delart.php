<?php

$conf = parse_ini_file("../config_itsrcs.php.ini", true);
set_include_path(get_include_path() . ";" . $conf['class_setting']['mod_include_path']);
include 'con_mysql_query.php';
include 'article.class.php';
include 'art_Controlor.php';
/**
 * @return success: 's' = 1, 'e' = 0;
 * @return haft_falied,full_falied 's' = 0, 'e' = error_art_list
 * @return uid_falied 's' = 0, 'e' ='_1';
 * @return dellist_falied 's' = 0, 'e' ='_2';
 */
$uid = $_POST['uid'];
$artlist = explode(",", $_POST['dellist']);

$return = array();
$error = array();
if ($uid == '' || !isset($uid)) {
   $return['s'] = '0';
   $return['e'] = '_1';
} else if (count($artlist) == 0) {
   $return['s'] = '0';
   $return['e'] = '_2';
} else {
   $ct = art_Controlor::getInstance();
   foreach ($artlist as $art) {
      if (!$ct->deleteArt($art))
         array_push($error, $art);
   }
   if (count($error) == 0) {
      $return['s'] = '1';
      $return['e'] = '0';
   } else {
      $return['s'] = '0';
      $return['e'] = implode(",", $error);
   }
}
@print_r(json_encode($return));
?>
