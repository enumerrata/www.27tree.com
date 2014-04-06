<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/con_mysql_query.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/art_Controlor.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
$ac = art_Controlor::getInstance();
if (isset($_POST['vis']) && isset($_POST['content']) && isset($_POST['title'])) {

     $fuid = $_POST['vis'] == '1' ? -1 : $_COOKIE['_uid'];

     if ($ac->commArt($_POST['artid'], $fuid, $_POST['content'], $_POST['title'])) {
          print_r(json_encode(array(
                      's' => '1',
                      'head-img' => G::getHeadimg($fuid)
                  )));
     }
}
?>
