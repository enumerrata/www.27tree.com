<?php

if (!class_exists(Conn_mysql))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';

class salve_sp_command {

    const AC_writeCode = 0;
    const AC_doAnyview = 1;
    const AC_suffInBar = 2;
    const MT_hap = 3;
    const MT_ams = 4;

    public static function doTorture($uid, $target, $tType) {
        $uid = mysql_real_escape_string($uid);
        $target = mysql_real_escape_string($target);
        if (isset($tType)) {
            $mysql = Conn_mysql::getInstance();
            $sta_pric = null;
            echo $tType;
            switch ($tType) {
                case salve_sp_command::AC_writeCode:
                    $sta_pric = 1;
                    break;
                case salve_sp_command::AC_doAnyview:
                    $sta_pric = 40;
                    break;
                case salve_sp_command::AC_suffInBar:
                    $sta_pric = 2;
                    break;
            }
            if ($mysql->query("UPDATE `app_codersale_stat` SET cash = cash + $sta_pric WHERE uid = $uid;")) {
                $sta_pric = intval($sta_pric * 0.5);
                if ($mysql->query("UPDATE `app_codersale_stat` SET cash = cash + $sta_pric WHERE uid = $target;")) {
                    $mysql->query("UPDATE `app_codersale_stat` SET status = status + $tType WHERE uid = $target;");
                    $mysql->query("UPDATE `app_codersale_stat` SET status = status + $tType WHERE uid = $uid;");
                    include dirname(__FILE__) . '/class/salve_dy_cmd.class.php';
                    salve_dy_cmd::flushDy($uid, $target, $tType);
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}

?>