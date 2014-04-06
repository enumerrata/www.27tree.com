<?php
// @TODO Auth
define('ROOT', '../../');
include_once "./commCaster.class.php";
include_once ROOT . 'mod/G.php';
include_once ROOT . 'mod/Conn_mysql.class.php';
include_once ROOT . 'mod/validate_cookie.class.php';
$regedA = array("art", "blog", "book");
if (in_array($_POST['targetType'], $regedA)) {
    if ($_POST['fuid'] != 0) {
        $username = mysql_escape_string($_POST['fun']);
    } else if ($_POST['fuid'] == 0) {
        $username = "游客"; // 用户名转义
    }
    if ($_POST['lev'] == 0) {
        // 第一级评论
        commCaster::newComm($_POST['id'], $_POST['targetType'], $_POST['fuid'], $username, $_POST['content'], $_POST['lev']);
    } else if ($_POST['lev'] == 1) {
        // 第二级评论
        commCaster::newComm($_POST['id'], $_POST['targetType'], $_POST['fuid'], $username, $_POST['content'], $_POST['lev'], false, $_POST['index']);
    } else if ($_POST['lev'] == 2) {
        // @级
        $amp = array(
            "toUID" => mysql_real_escape_string($_POST['touid']),
            "toUSN" => mysql_real_escape_string($_POST['tousn'])
        );
        commCaster::newComm($_POST['id'], $_POST['targetType'], $_POST['fuid'], $username, $_POST['content'], $_POST['lev'], $amp, $_POST['index']);
    }
}
?>
