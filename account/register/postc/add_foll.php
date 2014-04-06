<?php

if ($_POST) {

    include $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/sns/follow_manager.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';

    $uid = $_COOKIE['_uid'];
    $uid_list = explode('|', $_POST['data']);

    $foll_man = new follow_manager();

    foreach ($uid_list as $target) {
        $return = $foll_man->add_follow($uid, $target);
        //echo $target . ' > ' . $return['s'] . ' ';
    }

    print_r(json_encode(array('s' => 1)));
}
?>
