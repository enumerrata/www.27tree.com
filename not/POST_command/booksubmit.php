<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/S_book_control.php';

$_return = S_book_control::submitBook(
                $_COOKIE['_uid']
                , $_POST['bookname']
                , $_POST['bookauthor']
                , $_POST['bookinfo']
                , $_POST['booktype']
                , $_POST['filetype']
                , $_POST['bookimgname']
                , $_POST['downloadpage']
);
if (false !== $_return) {
     print_r(json_encode(array(
                 's' => '1',
                 'bookid' => $_return['bookid']
             )));
} else
     print_r(json_encode(array('s' => '0')));
?>
