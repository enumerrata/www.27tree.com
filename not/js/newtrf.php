<?php
require("../../mod/validate_cookie.class.php");
require("../../mod/con_mysql_query.php");

$validate = new validate_cookie();
$mysql    = new con_mysql_query();

/**
 * @param ERROR_1 log_error
 * @param ERROR_2 exit
 */
if(!$validate->check($_COOKIE['username'],$_COOKIE['_uid']))
	die("ERROR_1");
$count_result = mysql_fetch_array($mysql->query("SELECT COUNT(*) AS count FROM news WHERE artcon=$_POST[id];"),MYSQL_BOTH);
if($count_result['count'] == 0)
{
	if(!$mysql->query("INSERT INTO news (newstype, artcon, title) VALUES ('$_POST[type]', $_POST[id], '$_POST[title]');")) die("ERROR_2");
}
