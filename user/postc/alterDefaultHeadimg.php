<?php
include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/mod/validate_cookie.class.php';
$val = new validate_cookie();
if ($val->check($_COOKIE['username'], $_COOKIE['_uid'])) {
    $headimgpath = $_SERVER['DOCUMENT_ROOT'] . '/user/data/head-img/';
    @unlink($headimgpath . $_COOKIE['_uid'] . '_head.jpg');
    @unlink($headimgpath . $_COOKIE['_uid'] . '_head_default.em');
    file_put_contents($headimgpath . $_COOKIE['_uid'] . '_head_default.em', $_POST['imgname']);
    print_r(json_encode(array("s" => "1")));
} else {
    print_r(json_encode(array("s" => "0")));
}
?>
