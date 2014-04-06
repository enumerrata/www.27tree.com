<?php

if (!class_exists(Conn_mysql))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
if (!class_exists(SessionActor))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/SessionActor.php';

class validate_cookie {

    private $mysql;
    private $conf;

    public function __construct() {
        $this->mysql = Conn_mysql::getInstance();
        //$this->conf = parse_ini_file(dirname(__FILE__) . "/config_itsrcs.php.ini", true);
    }

    public function get_real_ip() {//getIP!
        $ip = false;
        if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode(", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
            if ($ip) {
                array_unshift($ips, $ip);
                $ip = FALSE;
            }
            for ($i = 0; $i < count($ips); $i) {
                if (!eregi("^(10|172\.16|192\.168)\.", $ips[$i])) {
                    $ip = $ips[$i];
                    break;
                }
            }
        }
        return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
    }

    public function check($_username, $_uid) {
        return true;
        $_key = $this->md5conv(mysql_real_escape_string($_username));
        $result = $this->mysql->query("SELECT openid,session_key FROM session_cookie WHERE session_uid=".mysql_real_escape_string($_uid).";");
        //echo "SELECT openid,session_key FROM session_cookie WHERE session_uid=".mysql_real_escape_string($_uid).";";
        if (mysql_num_rows($result) != 0) {
            while ($row = mysql_fetch_array($result)) {
                if ($row['openid'] != '0') {
                    $_re_openid = mysql_fetch_array($this->mysql->query("SELECT openid FROM client WHERE uid = $_uid;"));
                    if (strcmp($row['openid'], $_re_openid['openid']) == 0)
                        return true;
                    else
                        return false;
                }
                if ($row['session_key'] == $_key)
                    return true;
                else {
                    $_RE_IGnoreList = @mysql_fetch_array($this->mysql->query("SELECT DATEDIFF(exp,CURRENT_DATE()) as DATECMP FROM ignore_ip WHERE uid = $_uid;"));
                    if ($_RE_IGnoreList['DATECMP'] != 0) {
                        //若在忽略ip变化排除列表中。
                        if (intval($_RE_IGnoreList['DATECMP']) > 0) {
                            //若没有过期,返回正常。
                            return true;
                        } else {
                            @$this->mysql->query("DELETE FROM ignore_ip WHERE uid = $_uid;");
                            //过期了?你懂的
                            return false;
                        }
                    } else {
                        //录入ip异常记录表
                        @$this->mysql->query("INSERT INTO ipchanged_uid_list(uid) VALUES ($_uid);");
                        return false;
                    }
                    //setcookie('ipchange',"IP_MODIFY",time()+259200,'/'); @deprecated
                }
            }
        } else {
            return false;
        }
    }

    public function md5conv($_username) {
        return md5($_username + md5($this->get_real_ip()));
    }

    public function uidcheck($uid) {
        try {
            $result = mysql_fetch_array($this->mysql->query("SELECT COUNT(uid) as count FROM client WHERE uid=$uid"));
            switch ($result['count']) {
                case 1:
                    return 1;
                    break;
                case 0:
                    return 0;
                    break;
                default:
                    throw new Exception("Wrong!");
                    return -1;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}