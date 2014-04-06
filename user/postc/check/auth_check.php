<?php

function pushJson($arr = array()) {
    print_r(json_encode($arr));
}

include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/user/Auth/Auth.php';
$Auth = Auth::getInstance($_COOKIE['_uid']);

if ($Auth->validate($_COOKIE['fky'])) {
    $Auth->goLogin(FALSE);
    pushJson(array('s' => '1'));
} else {
    $Auth->goLogin(FALSE);
    pushJson(array('s' => '0'));
}
?>
