<?php

if (isset($_POST['target']) && !empty($_POST['target'])) {
    if (ctype_digit($_POST['target'])) {
        include dirname(__FILE__) . '/data/includes/FriendLinker.class.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/mod/validate_cookie.class.php';
        $validator = new validate_cookie();
        if ($validator->check($_COOKIE['username'], $_COOKIE['_uid'])) {
            FriendLinker::bulid_friendShip($_COOKIE['_uid'], $_POST['target']);
        } else {
            
        }
    } else {
        
    }
} else {
    
}
?>
