<?php
//error_reporting(0);
include_once './postComm.class.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';

$comm = new postComm($_POST['psid']);
if($comm->addComm($_COOKIE['_uid'], str_replace("_%5c_", "\\", $_POST['content'])))
{
     $_return = array();
     $_return['img'] = G::getHeadimg($_COOKIE['_uid']);
     $_return['s'] = '1';
     $_return['date'] = $comm->getDatetime();
} else $_return['s'] = '0';

print_r(json_encode($_return));

?>
