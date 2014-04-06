<?php

if (isset($_POST['target']) && !isset($_POST['t_code'])) {
    include dirname(__FILE__) . '/../salve_sp_command.class.php';
    if (salve_sp_command::doTorture($_COOKIE['_uid'], $_POST['target'], $_POST['tcode'])) {
        print_r(json_encode(array('s' => 1)));
    } else {
        
    }
}
?>
