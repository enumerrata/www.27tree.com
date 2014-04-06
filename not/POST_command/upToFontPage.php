<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
$mysql = Conn_mysql::getInstance();

if ($mysql->query("INSERT INTO blog_up_font_verify (blogid,submit_uid) VALUES ($_POST[targetBlogId],$_POST[commanderUid]);")) {
     print_r(json_encode(array(
                 's' => 1
             )));
} else
     print_r(json_encode(array(
                 's' => 0
             )));
?>
