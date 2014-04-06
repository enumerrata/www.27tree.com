<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/con_mysql_query.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/blog_control.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
$bc = new blog_control();

$fuid = $_POST['vis'] == '1'? -1 : $_COOKIE['_uid'];

if ($bc->Comment_Blog($fuid, $_POST['comment'], $_POST['blogid'])) {
     print_r(json_encode(array(
         's' => '1',
         'head-img' => G::getHeadimg($fuid)
         )));
}
?>
