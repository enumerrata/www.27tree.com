<?php

//var_dump($_POST);
function flush_error() {
    print_r(json_encode(array('s' => 0)));
}

if ($_POST) {
    $include = $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/';
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
    include $include . 'uc_secure_helper.php';
    include $include . 'sns/follow_manager.php';
    $check = false;

    // process 
    $foll_man = new follow_manager();

    $target = (int) mysql_escape_string($_POST['target']);
    $uid = (int) mysql_escape_string($_POST['uid']);

    print_r(json_encode($foll_man->del_follow($uid, $target)));
} else {
    flush_error();
}
?>
