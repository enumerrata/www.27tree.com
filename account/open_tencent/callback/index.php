<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'];
require_once $ROOT . '/mod/SessionActor.php';
$Sa = new SessionActor($ROOT . '/account/session/');

require_once "../API/qqConnectAPI.php";
require_once $ROOT . "/mod/Conn_mysql.class.php";

$qc = new QC();
$access_token = $qc->qq_callback();
$openid = $qc->get_openid();
$mysql = Conn_mysql::getInstance();

$SQL_check = sprintf("SELECT COUNT(*) AS `ct` FROM `client_openid` WHERE `openid` = '%s';", $openid);

$re_1 = mysql_fetch_array($mysql->query($SQL_check));

if ($re_1['ct'] == 0) {
    # 未注册
    $Sa->writeSESSION('access_token', $access_token);
    $Sa->writeSESSION('openid', $openid);
    # 跳转到注册页面 ? loginfrom 参数必须
    header('location:/account/register/index_open.php?loginfrom=tencent');
} else {
    # 已经注册 直接登陆
    require_once $_SERVER['DOCUMENT_ROOT'] . '/user/Auth/Auth.php';
    $Auth = Auth::getInstance();
    $ret = $Auth->open_login($openid);
    if ($ret['s']) {
        header('location:/user/' . $ret['uid']);
    } else {
        # todo
    }
}
