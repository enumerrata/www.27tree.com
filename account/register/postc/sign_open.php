<?php

session_save_path($_SERVER['DOCUMENT_ROOT'] . '/account/session');
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/mod/helper/POST.php';

try {
    $POST = new POST();

    include $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/ShuoShuoc.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/user/Auth/Auth.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/uc_secure_helper.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/account/class/account_mgr.class.php';

    $usn = urldecode($POST->getParam('usn'));
    #$psw = base64_decode($POST->getParam('psw'));
    $email = strtolower($POST->getParam('email'));
    $access_token = $_SESSION['access_token'];
    $openid = $_SESSION['openid'];

    $account_mgr = new account_manager();

    if ($account_mgr->open_sign($openid, $access_token, $usn, $email, $_SESSION['open_ush'])) {
        $POST->pushJson(array('s' => '1'));
    } else {
        $POST->pushJson(array('s' => '0'));
    }
} catch (POST_XSS_DEFEND $psd) {
    echo $psd;
} catch (POST_AUTH_FAILED $pae) {
    echo $pae;
}