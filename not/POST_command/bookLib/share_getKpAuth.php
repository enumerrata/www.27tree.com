<?php
#error_reporting(0);
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/kuaipan/sdk/kuaipan.class.php';
$config = include $_SERVER['DOCUMENT_ROOT'] . '/kuaipan/config.inc.php';

$kp = new Kuaipan($config ['consumer_key'], $config ['consumer_secret']);
$authorization_uri = $kp->getAuthorizationUri('http://'.$_SERVER['SERVER_NAME'] . '/kuaipan/callback.php?act=cb');

if (false === $authorization_uri) {
    echo 0;
} else {
    echo $authorization_uri;
}
