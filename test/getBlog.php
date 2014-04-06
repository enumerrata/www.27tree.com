<?php
error_reporting(0);
include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';
$blog = new Blog(288);
print_r(json_encode(array(
            'title' => $blog->getTitle(),
            'content' => $blog->getContent()
        )));
?>
