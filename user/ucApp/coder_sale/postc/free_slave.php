<?php

function pushS($state) {
    if ($state) {
        print_r(json_encode(array('s' => 1)));
    } else
        print_r(json_encode(array('s' => 0)));
}

if ($_POST) {
    include dirname(__FILE__) . '/../uccs_G.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
    $uid = mysql_real_escape_string($_COOKIE['_uid']);
    $target = mysql_real_escape_string($_POST['target']);
    if (uccs_G::hasRelation($uid, $target)) {
        include dirname(__FILE__) . '/../salve_command_logic.class.php';
        if (salve_command_logic::freeSalve($uid, $target))
            pushS(true);
        else
            pushS(false);
    } else {
        pushS(false);
    }
}
?>
