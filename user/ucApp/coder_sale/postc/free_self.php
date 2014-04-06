<?php
if ($_POST) {
    include dirname(__FILE__) . '/../salve_command_logic.class.php';
    $re = salve_command_logic::freeSelf($_COOKIE['_uid']);
    var_dump($re);
}
?>
