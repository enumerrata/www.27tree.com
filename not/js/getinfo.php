<?php
require("../../mod/con_mysql_query.php");
$mysql    = new con_mysql_query();
$uid = $_POST['uid'];
switch($_POST['type'])
{
    case "banc":
    	$type="ban_c";
    	break;
    case "art":
    	$type="art_c";
    	break;
    default: die("-1");
}
$data = mysql_fetch_array($mysql->query("SELECT $type FROM client_link WHERE uid=$uid;"));
echo $data[$type];