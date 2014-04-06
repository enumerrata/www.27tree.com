<?php
if ($_POST) {
    $reg_config = include $_SERVER['DOCUMENT_ROOT'] . '/account/register/config_reg.php';
    echo $reg_config[$_POST['key']];
}
?>
