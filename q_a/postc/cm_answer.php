<?php

if ($_POST) {
    include dirname(__FILE__) . '/../class/Qa_ndl_command.class.php';
    if (Qa_ndl_command::answerQuestion($_POST['qid'], $_COOKIE['_uid'], $_POST['content'])) {
        print_r(json_encode(array('s' => 1)));
    } else {
        print_r(json_encode(array('s' => 0)));
    }
}
?>
