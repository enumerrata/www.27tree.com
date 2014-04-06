<?php

include $_SERVER['DOCUMENT_ROOT'] . '/mod/SessionActor.php';
if (isset($_POST['postid'])) {
    $SAC = new SessionActor();
    if ($SAC->getSESSION("getRawPostDatavarify") == crypt($_POST['postid'] + $_COOKIE['_uid'], CRYPT_STD_DES)) {
        $postxmlPath = dirname(__FILE__) . '/../lib/' . $_POST['postdate'] . '/data_' . $_POST['postid'] . '.xml';
        if (is_file($postxmlPath)) {
            $doc = new DOMDocument();
            $doc->formatOutput = true;
            $doc->load($postxmlPath);
            $doc->getElementsByTagName('title')->item(0)->firstChild->nodeValue = str_replace("_%5c_", "\\" ,$_POST['title']);
            $doc->getElementsByTagName('content')->item(0)->firstChild->nodeValue = str_replace("_%5c_", "\\" ,$_POST['content']);
            if ($doc->save($postxmlPath)) {
                print_r(json_encode(array("s" => '1')));
            } else
                print_r(json_encode(array("s" => '01')));
        } else
            print_r(json_encode(array("s" => '02')));
    } else
        print_r(json_encode(array("s" => '03')));
}else
    print_r(json_encode(array("s" => '04')));
?>
