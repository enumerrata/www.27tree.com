<?php
require('../con_mysql_query.php');
require("../validate_cookie.class.php");
$check_module = new validate_cookie();
echo $check_module->check($_POST['username'],$_POST['uid'])? 1:0;
?>