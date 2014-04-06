<?php
if (isset($_POST['target']) && !empty($_POST['target'])) {
    if (ctype_digit($_POST['target'])) {
        include $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/FriendLinker.class.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/mod/validate_cookie.class.php';
        $validator = new validate_cookie();
        if ($validator->check($_COOKIE['username'], $_COOKIE['_uid'])) {
            if (FriendLinker::app_friend($_COOKIE['_uid'], $_POST['target'])) {
                print_r(json_encode(array("s" => 1)));
            } else {
                print_r(json_encode(array("s" => 0)));
            }
        } else {
            print_r(json_encode(array("s" => 0)));
        }
    } else {
        print_r(json_encode(array("s" => 0)));
    }
} else {
    print_r(json_encode(array("s" => 0)));
}
?>
