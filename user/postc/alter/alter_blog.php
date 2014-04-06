<?php

include $_SERVER['DOCUMENT_ROOT'] . '/mod/helper/POST.php';
include $_SERVER['DOCUMENT_ROOT'] . '/user/Auth/Auth.php';
include $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/blog_controller.class.php';

try {
    $POST = new POST();
    $BLOGC = new blog_control();
    $Auth = Auth::getInstance($_COOKIE['_uid']);

    if ($Auth->validate($_COOKIE['fky'])) {
        if ($BLOGC->Alter_Blog($POST->getParam('bid'), array('title' => $POST->getParam('title'), 'content' => $POST->getParam('content')))) {
            $POST->pushJson(array('s' => 1));
        } else {
            $POST->pushJson(array('s' => 0, 'm' => 2));
        }
    } else {
        $POST->pushJson(array('s' => 0, 'm' => 3));
    }
} catch (POST_XSS_DEFEND $psd) {
    echo $psd;
} catch (POST_AUTH_FAILED $pae) {
    echo $pae;
}