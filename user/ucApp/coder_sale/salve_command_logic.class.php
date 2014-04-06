<?php

class salve_command_logic {

    const DT_asset = 0;
    const DT_cash = 1;
    const DT_status = 2;

    public static function freeSelf($uid) {
        /**
         * @error code : 
         * 0:is_already_free
         * 1:no_much_money
         * 2:
         */
        $uid = mysql_real_escape_string($uid);
        $_return = array();
        if (!salve_command_logic::isFree($uid)) {
            $mysql = Conn_mysql::getInstance();
            $_re_ = mysql_fetch_object($mysql->query("SELECT `cash`,`status` FROM `app_codersale_stat` WHERE uid = $uid"));
            $_cash = intval($_re_->cash);
            $_status = intval($_re_->status);
            $_re_ = mysql_fetch_object($mysql->query("SELECT `master` AS uid FROM `app_codersale_link` WHERE uid = $uid"));
            $_master_uid = $_re_->uid;
            if ($_cash >= $_status) {
                $mysql->query("DELETE FROM `app_codersale_link` WHERE `uid` = $uid;");
                $mysql->query("INSERT INTO `app_codersale_free` (uid) VALUES ($uid);");
                $mysql->query("UPDATE `app_codersale_stat` SET cash = cash - $_status , status = status + 2 WHERE uid = $uid;");
                $_status = intval($_status * 0.75);
                $mysql->query("UPDATE `app_codersale_stat` SET status = status - $_status WHERE uid = $_master_uid;");
                $_return['s'] = true;
            } else {
                $_return['s'] = false;
                $_return['e'] = 1;
            }
        } else {
            $_return['s'] = false;
            $_return['e'] = 0;
        }
        return $_return;
    }
    
    public static function buySalve($uid, $target) {
        $uid = mysql_real_escape_string($uid);
        $target = mysql_real_escape_string($target);
        $_return = array();
        include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/validate_cookie.class.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
        $validate = new validate_cookie();
        $mysql = Conn_mysql::getInstance();
        if ($validate->check($_COOKIE['username'], $uid)) {
            //check_process
            $_subtract_re = mysql_fetch_object($mysql->query("SELECT r.cash - l.status AS subR,l.status FROM `app_codersale_stat` l LEFT JOIN `app_codersale_stat` r ON 1=1 WHERE l.uid = $target AND r.uid = $uid;"));
            if (intval($_subtract_re->subR) >= 0) {
                if (salve_command_logic::inGame($target, $mysql) && salve_command_logic::isFree($target, $mysql)) {
                    if ($mysql->query("INSERT INTO `app_codersale_link` (`uid`, `master`) VALUES ($target, $uid);")) {
                        @$mysql->query("DELETE FROM `app_codersale_free` WHERE `uid` = $target;");
                        @$mysql->query("UPDATE `app_codersale_stat` SET `cash` = `cash` - $_subtract_re->status WHERE `uid` = $uid;");
                        $_return['code'] = 1;
                        $_return['mess'] = 'success';
                    }
                } else {
                    $_return['code'] = 0;
                    $_return['mess'] = 'valid2buy_check_failed:notIngame';
                }
            } else {
                $_return['code'] = 3;
                $_return['mess'] = 'valid2buy_check_failed';
            }
        } else {
            $_return['code'] = 0;
            $_return['mess'] = 'validate_cookie_failed';
        }
        return $_return;
    }

    public static function sellSalve($uid, $target) {
        
    }

    public static function freeSalve($uid, $target) {
        /**
         * 
         * @param int $uid :: master
         * @param int $target :: slave
         * @param mysql_handle $mysql
         * @return boolean
         */
        //执行之前 必须经过 uccs_G::hasRelation 检查

        $mysql = Conn_mysql::getInstance();
        if ($mysql->query("DELETE FROM `app_codersale_link` WHERE `uid` = $target AND `master` = $uid;")) {
            if ($mysql->query("INSERT INTO `app_codersale_free` (`uid`) VALUES ($target);")) {
                return true;
            } else
                return false;
        } else
            return false;
    }

    public static function inGame($uid, $mysql = false) {
        if (false == $mysql) {
            include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
            $mysql = Conn_mysql::getInstance();
        }
        $_re = mysql_fetch_object($mysql->query("SELECT COUNT(uid) AS count FROM `app_codersale_inga` WHERE `uid` = $uid;"));
        if (intval($_re->count) == 1)
            return true;
        return false;
    }

    public static function isFree($uid, $mysql = false) {
        if (false == $mysql) {
            include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
            $mysql = Conn_mysql::getInstance();
        }
        $_re = mysql_fetch_object($mysql->query("SELECT COUNT(uid) AS count FROM `app_codersale_free` WHERE `uid` = $uid;"));
        if (intval($_re->count) == 1)
            return true;
        return false;
    }

    public static function dataGen($uid, $dataType) {
        switch ($dataType) {
            case salve_command_logic::DT_asset:
                break;
            case salve_command_logic::DT_cash:
                break;
            case salve_command_logic::DT_status:
                break;
            default:
                
        }
    }

}

?>
