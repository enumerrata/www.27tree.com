<?php

if (isset($_COOKIE['_uid']) && isset($_COOKIE['username']) && isset($_POST['postid'])) {
    define("ROOT", $_SERVER['DOCUMENT_ROOT']);
    include ROOT . '/minbbs/lib/postComm.class.php';
    $postC = new postComm($_POST['postid']);
    if (false !== $_return = $postC->addRComm($_COOKIE['_uid'], $_POST['content'], $_POST['index'], $_POST['actuid'])) {
        print_r(json_encode(array(
                    "s" => '1',
                    'headimg' => G::getHeadimg($_COOKIE['_uid']),
                    '2un' => $_return['2un'])
                ));
    }
}
?>
