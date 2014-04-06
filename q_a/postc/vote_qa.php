<?php

if ($_POST) {
    include dirname(__FILE__) . '/../class/Qa_command.class.php';
    $qam = new Qa_command();
    if ($qam->voteQa($_POST['qid'], $_COOKIE['_uid'])) {
        print_r(json_encode(array('s' => 1)));
    } else {
        print_r(json_encode(array('s' => 0)));
    }
}
?>
