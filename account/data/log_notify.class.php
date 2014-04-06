<?php

/**
 * @author koodo
 * @lastModify 2013-1-16
 */
if (!class_exists(G)) {
    require $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
}
if (!class_exists(SessionActor)) {
    require $_SERVER['DOCUMENT_ROOT'] . '/mod/SessionActor.php';
}

class log_notify {

    private $mysql;

    public function __construct() {
        $this->mysql = Conn_mysql::getInstance();
    }

    public function notify($uid, $username, $session_key, $openid = 0) {
        // todo 错误检查 并发处理
        $time = time();
        $exp = $time + 259200;
        setcookie('username', urlencode($username), $exp, '/');
        setcookie('_uid', $uid, $exp, '/');
        setcookie('ush', G::getHeadimg($uid, 32), $exp, '/'); //写人32px头像地址
        setcookie('usr_cache', 'on', time() + 600, '/'); //usr_bar缓存控制
        
        $this->mysql->query("DELETE FROM ipchanged_uid_list WHERE uid=$uid;");
        $this->mysql->query("DELETE FROM session_cookie WHERE session_uid=$uid;");
        $this->mysql->query("INSERT INTO session_cookie (session_key, session_date, session_expiry, session_uid, openid) VALUES ('" . $session_key . "', " . $time . ", 7200, " . $uid . " ,'" . $openid . "');");
        return true;
    }

}