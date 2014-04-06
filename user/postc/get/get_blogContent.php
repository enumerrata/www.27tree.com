<?php
error_reporting(0);
include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';
$blog = new Blog((int) mysql_escape_string($_GET['id']));
echo $blog->getContent();