<?php

include $_SERVER['DOCUMENT_ROOT'] . '/mod/helper/POST.php';

try {
    /**
     * post 参数
     * @param tc / oc 个人中心内 / 个人中心外
     * @param tcval / ocval 对应验证码
     * @param uid 
     * @param target 
     */
    $POST = new POST(POST::POST_AUTH);
    $include = $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/';
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
    include $include . 'uc_secure_helper.php';
    include $include . 'sns/follow_manager.php';
    $check = false;

    $p_tcval = $POST->getParam('tcval', POST::POST_STRING);
    $p_md = $POST->getParam('md', POST::POST_STRING);
    $p_target = $POST->getParam('target', POST::POST_INT);

    if ($p_md == 'tc') {
        $check = $p_tcval == uc_secure_helper::gen_tc_val_code($_COOKIE['_uid']);
        $uid = (int) mysql_escape_string($_COOKIE['_uid']);
    } else if ($p_md == 'oc') {
        $p_ocval = $POST->getParam('ocval', POST::POST_STRING);
        $uid = (int) mysql_escape_string($_POST['uid']);

        $check = $p_ocval == uc_secure_helper::gen_oc_val_code($p_target);
    }

    if ($check) {
        $foll_man = new follow_manager();
        $add_result = $foll_man->add_follow($uid, $p_target);
        $POST->pushJson($add_result);
        //var_dump($foll_man->add_follow($uid, $target));
    } else {
        $POST->pushErrorJson();
    }
} catch (POST_XSS_DEFEND $psd) {
    echo $psd;
} catch (POST_AUTH_FAILED $pae) {
    echo $pae;
}