<?php
if (!isset($_COOKIE['_uid']) || !isset($_COOKIE['username'])) {
    header("location:/log/?furl=" . $_SERVER['REQUEST_URI']);
}
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('M_OWNER', 0);
define('M_VISITER', 1);

global $G_mod;

include ROOT . '/mod/con_mysql_query.php';
include ROOT . '/mod/G.php';
include ROOT . '/mod/validate_cookie.class.php';
include ROOT . '/user/data/mod/mod_switching.php';
include ROOT . '/user/data/nickconv.class.php';
include ROOT . '/user/data/userInfo.class.php';
include ROOT . '/user/ucenter_controler.php';
include ROOT . '/user/data/includes/FriendLinker.class.php';
include ROOT . '/user/data/includes/ShuoShuoc.php';
include './index_controller.class.php';
$P_uid = mysql_real_escape_string(isset($_GET['uid']) ? $_GET['uid'] : $_COOKIE['_uid']);
if ($P_uid == $_COOKIE['_uid'])
    $G_mod = M_OWNER;
else
    $G_mod = M_VISITER;
$GLOBALS['G_mod'] = $G_mod;
$GLOBALS['G_PUID'] = $P_uid;
$idc = new index_controller($P_uid);
$P_headimg = G::getHeadimg($P_uid);
$usr = new userInfo($P_uid);
$P_username = $usr->getUsername();
$mysql = Conn_mysql::getInstance();
$inGameCheck_re = mysql_fetch_object($mysql->query("SELECT COUNT(uid) AS check_count FROM `app_codersale_inga` WHERE `uid` = $P_uid"));
if ($inGameCheck_re->check_count == 0) {
    //echo '第一次玩';
} else {
    
}
