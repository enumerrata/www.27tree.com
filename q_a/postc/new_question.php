<?php

if (isset($_POST)) {
    include dirname(__FILE__) . '/../class/Qa_ndl_command.class.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
    if (is_array($_return = Qa_ndl_command::newQuestion($_COOKIE['_uid'], $_POST['title'], $_POST['content'], ''))) {
        print_r(json_encode(array('s' => 1, 'url' => $_return['url'], 'ush' => G::getHeadimg($_COOKIE['_uid']))));
    } else {
        print_r(json_encode(array('s' => 0)));
    }
}
?>
