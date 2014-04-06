<?php

include dirname(__FILE__) . '/../mybook/BookDownLoadPage.class.php';
$BookDownload = new BookDownLoadPage($_POST['bookid']);
$page = $BookDownload->getBookDownloadpage();
if ($page != "javascript:;") {
    include $_SERVER['DOCUMENT_ROOT'] . '/user/data/UserCommand.class.php';
    $usm = new UserCommand($_COOKIE['_uid']);
    if ($usm->getCredit() < 2) {
        print_r(json_encode(array(
                    's' => '2'
                )));
    } else if ($usm->dropCredit(2)) {
        print_r(json_encode(array(
                    's' => '1',
                    'page' => $page
                )));
    }
} else {
    print_r(json_encode(array('s' => '0')));
}
