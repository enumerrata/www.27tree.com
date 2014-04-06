<?php

if (isset($_POST['acc'])) {
    require $_SERVER['DOCUMENT_ROOT'] . '/mod/validate_cookie.class.php';
    $val = new validate_cookie();
    if ($val->check($_COOKIE['username'], $_COOKIE['_uid'])) {
        require $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/FriendLinker.class.php';
        if (FriendLinker::bulid_friendShip($_COOKIE['_uid'], $_POST['fuid'], $_POST['dyId'])) {
            print_r(json_encode(array('s' => 1)));
        } else {
            print_r(json_encode(array('s' => 0)));
        }
    } else {
        print_r(json_encode(array('s' => 2)));
    }
}
?>
