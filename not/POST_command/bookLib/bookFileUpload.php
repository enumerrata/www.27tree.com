<?php

if (!empty($_FILES)) {

    $dirname = "/not/mybook/data/book_file/tmp/";
    $tempFile = $_FILES['jUploaderFile']['tmp_name'];
    $targetPath = $_SERVER['DOCUMENT_ROOT'] . $dirname;
    $namex = explode(".", $_FILES['jUploaderFile']['name']);
    // @rename
    $targetFileName = md5($_COOKIE['_uid'] . time()) . '.' . $namex[1];
    $targetFile = str_replace('//', '/', $targetPath) . $targetFileName;

    $state = move_uploaded_file($tempFile, $targetFile) ? 1 : 0;
    chmod($targetFile, 0777);

    # KuaiPan File UpLoading
    include $_SERVER['DOCUMENT_ROOT'] . '/kuaipan/sdk/kuaipan.class.php';
    $config = $_SERVER['DOCUMENT_ROOT'] . '/kuaipan/config.inc.php';
    $kp = new Kuaipan ( $config ['consumer_key'], $config ['consumer_secret'] );

    var_dump($kp->getAccessToken());

} else {
    $state = 0;
}
$arr = array(
    "s" => $state,
    "pic" => $dirname . $targetFileName,
    "imgn" => $targetFileName,
);

$json = json_encode($arr);
print_r($json);
?>