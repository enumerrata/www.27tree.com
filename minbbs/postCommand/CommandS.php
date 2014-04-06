<?php
include dirname(__FILE__) . '/../lib/CommandS.class.php';
if(isset($_COOKIE['_uid']) && isset($_COOKIE['username'])){
     $commandS = new CommandS($_COOKIE['_uid']);
     $commandS->process($_POST['commandCode'],$_POST['postid'],&$_POST);
     print_r(json_encode(array('s'=>'1')));
} else {
     print_r(json_encode(array('s'=>'0')));
}
?>