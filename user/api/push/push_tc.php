<?php
include $_SERVER['DOCUMENT_ROOT'] . '/mod/helper/POST.php';

try {
    $POST = new POST();

    include $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/ShuoShuoc.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/user/Auth/Auth.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/uc_secure_helper.php';

    $Auth = Auth::getInstance($_COOKIE['_uid']);

    if ($Auth->validate($_COOKIE['fky'])) {
        if (ShuoShuoC::pushNewShuoShuo($_COOKIE['_uid'], $_POST['content'])) {
            if ($_POST['param_with_ush'] == '1') {
                // class G has been included !
                $POST->pushJson(array('s' => '1', 'ush' => G::getHeadimg($_COOKIE['_uid'])));
            } else {
                $POST->pushJson(array('s' => '1', 'm' => 1));
            }
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