<?php

include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';
$mysql = Conn_mysql::getInstance();
$re = $mysql->query("SELECT * FROM new_norm_list;");
while ($row = mysql_fetch_array($re)) {
    $b = new Blog($row['bid']);
    $sql = sprintf("UPDATE  `new_norm_list` SET  `desc` =  '%s' WHERE  `id` = %s;", mb_substr(strip_tags($b->getContentx()),0,350,'utf-8'), $row['id']);
    echo $sql . '<br />';
    var_dump($mysql->query($sql));
    echo '<br />';
    //var_dump($row);
}
?>
