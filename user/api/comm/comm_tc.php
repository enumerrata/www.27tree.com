<?php
include $_SERVER['DOCUMENT_ROOT'] . '/inc/User/Uc_secure.php';
include $_SERVER['DOCUMENT_ROOT'] . '/mod/helper/POST.php';
try {
    $POST = new POST();

    include $_SERVER['DOCUMENT_ROOT'] . '/user/Auth/Auth.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/ShuoShuoc.php';

    $Auth = Auth::getInstance($_COOKIE['_uid']);
    if ($Auth->validate($_COOKIE['fky'])) {
        $sid = Uc_secure::dec_tc_val_id($POST->getParam('tcmom'));
        if (ShuoShuoC::comm_tc($_COOKIE['_uid'], $sid, $POST->getParam('content'))) {
            $POST->pushJson(array('s' => '1'));
        } else {
            $POST->pushJson(array('s' => '0', 'm' => 2));
        }
    } else {
        $POST->pushJson(array('s' => '0', 'm' => 3));
    }
} catch (POST_XSS_DEFEND $psd) {
    echo $psd;
} catch (POST_AUTH_FAILED $pae) {
    echo $pae;
}