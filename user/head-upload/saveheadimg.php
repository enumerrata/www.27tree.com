<?php

$file = $_SERVER['DOCUMENT_ROOT'] . "/user/data/head-img/tmp/$_COOKIE[_uid]_head.jpg";
if (is_file($file)) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/mod/G.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/mod/upyun.class.php');
    $officFile = str_replace("tmp/", "", $file);
    $fileName = $_COOKIE['_uid'] . "_head.jpg";
    if (is_file($officFile))
        @unlink($officFile);
    rename($file, $officFile);
    @unlink($_SERVER['DOCUMENT_ROOT'] . IMG_PATH_LOCAL_USER . $_COOKIE['_uid'] . "_head_default.em");

    $upyun = new UpYun("itsrcs", "koodo", "613158");
    $fh = fopen($officFile, 'r');
    $upyun->writeFile("/headimg/" . str_replace("_", "", $fileName), $fh);
    fclose($fh);
}
?>
