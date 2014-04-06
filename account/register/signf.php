<?php
/**
 * @desc 用户注册处理
 * @author koodo
 * @todo 各种安全处理
 */
$ROOT = $_SERVER['DOCUMENT_ROOT'];
require($ROOT . "/mod/Conn_mysql.class.php");
require($ROOT . "/mod/validate_cookie.class.php");

$hex = new validate_cookie();
$mysql = Conn_mysql::getInstance();
$username = $_POST['username_s'];
$passwordx = $_POST['password_x'];
$email = strtolower($_POST['email_s']);

$result = $mysql->query("SELECT count(uid) as count FROM client WHERE username='" . $username . "'");
while (@$row = mysql_fetch_array($result)) {
    if ($row['count'] == 0) {
        try {
            date_default_timezone_set('PRC');
            $regdate = date("Y-m-d");
            $mysql->query("INSERT INTO client (username, passwordx, email ,reg_date) VALUES ('$username', '$passwordx', '$email', '$regdate');");
            $uid = $mysql->getLastId();
            setcookie('username', $username, time() + 7200, '/');
            setcookie('_uid', $uid, time() + 7200, '/');
            $_key = $hex->md5conv($_POST['username']);

            $mysql->query("INSERT INTO client_link (uid) VALUES ($uid);");
            $mysql->query("INSERT INTO sns_stat (uid) VALUES ($uid);");
            $mysql->query("INSERT INTO client_credit (uid) VALUES ($uid);");
            $mysql->query("INSERT INTO common_user_group (uid) VALUES ($uid);");
            $mysql->query("INSERT INTO session_cookie (session_key, session_date, session_expiry, session_uid) VALUES ('" . $_key . "', " . time() . ", 7200, " . $uid . ");");
            //@todo 事务安全处理

            require_once $_SERVER['DOCUMENT_ROOT'] . '/minbbs/data/bbs_stat_commander.class.php';
            $Bsc = new bbs_Stat_command();
            if ($Bsc->update_BSMData(bbs_Stat_command::BSM_DT_USR)) {
                // bbs 用户注册统计

                echo 'SIGN_SUCCESS';
            }
            else
                echo 'SIGN_FAILED:2';
        } catch (Exception $e) {
            
        }
    } else {
        echo 'SIGN_FAILED:1';
    }
}