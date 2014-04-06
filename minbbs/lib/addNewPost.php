<?php

include $_SERVER['DOCUMENT_ROOT'] . '/mod/helper/POST.php';

try {
    $POST = new POST(POST::POST_AUTH);
    
    include './psc.class.php';
    $psc = new psc($_COOKIE['_uid']);

    $TITLE = $POST->getParam('title', POST::POST_STRING);
    $CONTENT = $POST->getParam('content', POST::POST_STRING);
    $CONTENT = str_replace("_%5c_", "\\", $CONTENT);
    $SID = $POST->getParam('sid', POST::POST_INT);
    
    if ($psc->addPost($TITLE, $CONTENT, $SID, 0)) {
        $_return = array();
        $_return['img'] = G::getHeadimg($_COOKIE['_uid']);
        $_return['s'] = 1;
        $_return['psid'] = $psc->getPostid();
        
        $POST->pushJson($_return);
    } else {
        $POST->pushErrorJson();
    }
} catch (POST_XSS_DEFEND $psd) {
    echo $psd;
} catch (POST_AUTH_FAILED $pae) {
    echo $pae;
}
exit(0);
if ($_POST) {
    include './psc.class.php';
    $psc = new psc($_COOKIE['_uid']);
    $content = str_replace("_%5c_", "\\", $_POST['content']);
    if ($psc->addPost($_POST['title'], $content, $_POST['sid'], 0)) {
        $_return = array();
        $_return['img'] = G::getHeadimg($_COOKIE['_uid']);
        $_return['s'] = 1;
        $_return['psid'] = $psc->getPostid();
        print_r(json_encode($_return));
    } else {
        print_r(json_encode(array("s" => "0")));
    }
}
?>
