<?php

$ROOT = &$_SERVER['DOCUMENT_ROOT'];
include $ROOT . '/user/data/leaveword.class.php';
include $ROOT . '/mod/con_mysql_query.php';
include $ROOT . '/mod/validate_cookie.class.php';
include $ROOT . '/user/data/dy_controlor.php';
$taruid = mysql_real_escape_string($_POST['uidr']);
$content = str_replace("{amp}", "&", $_POST['content']);
$uid_from = mysql_real_escape_string(isset($_COOKIE['_uid']) && isset($_COOKIE['username']) && !empty($_COOKIE['_uid']) && !empty($_COOKIE['username']) ? $_COOKIE['_uid'] : "%e6%b8%b8%e5%ae%a2");
$leave = Leaveword::getInstance($taruid);
$return = array();
$res = $leave->pushSlevword($uid_from, $_POST['target'], $content, $_POST['index']);
if ($res['s']) {
    $return['s'] = 1;
    $return['ld'] = $leave->getLastid();
    $return['hd'] = G::getHeadimg($_POST['fu']);
    $return['2un'] = $res['2un'];
} else {
    $return['s'] = 0;
}
print_r(json_encode($return));
?>
