<?php

if (!class_exists(Conn_mysql))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
if (!class_exists(G))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';

class salve_dy_cmd {

    public static function flushDy($uid, $target, $code) {
        $codeHash = array('抓去写一万行代码', '抓去做AnyView', '带去网吧上网');
        $mysql = Conn_mysql::getInstance();
        $usn1 = G::getUserName($target);
        $usn2 = G::getUserName($uid);
        if ($mysql->query("INSERT INTO `app_codersale_dycc` (`uid`, `usn`, `fuid`, `fusn`, `ct`, `datetime`) VALUES ($target, '$usn1', $uid, '$usn2', '" . $codeHash[intval($code)] . "', NOW());")) {
            return true;
        } else {
            return false;
        }
    }

    public static function flushCommonDy($uid, $target, $code) {
        $codeHash = array('抓去写一万行代码', '抓去做AnyView', '带去网吧上网');
        $mysql = Conn_mysql::getInstance();
        $usn1 = G::getUserName($target);
        $usn2 = G::getUserName($uid);
        if ($mysql->query("INSERT INTO `app_codersale_dycc` (`uid`, `usn`, `fuid`, `fusn`, `ct`, `datetime`) VALUES ($target, '$usn1', $uid, '$usn2', '" . $codeHash[intval($code)] . "', NOW());")) {
            return true;
        } else {
            return false;
        }
    }

}

?>
