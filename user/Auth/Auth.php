<?php

class Auth_Param_uid_Exception extends Exception {
    # uid 参数错误
}

class Auth_Login_password_fali extends Exception {
    # 密码验证错误
}

class Auth_openLogin_openid_uncheck extends Exception {
    # openid 不存在
}

include dirname(__FILE__) . '/Session_helper.php';

class Auth {

    /**
     * 用户验证类
     * @author koodo@qq.com
     */
    private $Session_h = NULL;
    private $uid;
    private $usn;
    protected static $_instance = NULL;

    const LOGIN_PASS_RAW = 0;
    const LOGIN_PASS_CRY = 1;

    private function __construct($uid = null) {
        if ($uid == null) {
            // 置空,用作登陆操作
        } else {
            if (!filter_var($uid, FILTER_VALIDATE_INT)) {
                throw new Auth_Param_uid_Exception;
            }
            $this->uid = $uid;
            $this->Session_h = new Session_helper($uid);
        }
    }

    public static function getInstance($uid = null) {
        if (!self::$_instance instanceof self || self::$_instance->getUID != $uid) {
            self::$_instance = new Auth($uid);
        }
        return self::$_instance;
    }

    public function logout() {
        // 进行用户登出
    }

    public function open_login($openid) {
        /**
         * @desc 支持开放平台 使用openid作为唯一标识登陆
         * @param String $openid
         * @return Array $return
         */
        $return = array('s' => false);
        require_once $_SERVER['DOCUMENT_ROOT'] . "/mod/Conn_mysql.class.php";
        $mysql = Conn_mysql::getInstance();

        $openid = mysql_real_escape_string($openid, $mysql->getConnectionHandle());

        $SQL = sprintf("SELECT co.uid,cl.username AS usn,cl.passwordx FROM `client_openid` co LEFT JOIN `client` cl ON co.uid = cl.uid WHERE co.`openid` = '%s' LIMIT 1;", $openid);

        $data = mysql_fetch_object($mysql->query($SQL));

        if ($data) {
            # $data obj usn uid passwordx
            $return['s'] = true;
            $return['uid'] = $data->uid;
            $this->login($data->usn, $data->passwordx, Auth::LOGIN_PASS_CRY);
        } else {
            throw new Auth_openLogin_openid_uncheck;
        }
        return $return;
    }

    public function login($usn, $password, $passmod = self::LOGIN_PASS_RAW) {
        /*
         * @desc进行用户登陆
         * @param $uid
         * @param $usn
         * @param $openid
         * $param $password 明文密码
         * 密码算法 (hex_md5( hex_md5(password) + name ))
         */
        require_once $_SERVER['DOCUMENT_ROOT'] . "/mod/G.php";
        require_once $_SERVER['DOCUMENT_ROOT'] . "/mod/Conn_mysql.class.php";
        $mysql = Conn_mysql::getInstance();

        # 登陆账户验证
        # 生成密码 / 明文密码或密文密码
        $passwordx = $passmod == self::LOGIN_PASS_RAW ? md5(md5($password) . $usn) : $password;

        $SQL1 = sprintf("SELECT COUNT(`uid`) AS `count`,`uid` FROM `client` WHERE `username`='%s' AND `passwordx` = '%s' GROUP BY `uid`", $usn, $passwordx);

        $result = mysql_fetch_object($mysql->query($SQL1));

        if ($result->count == 1) {
            # 密码校对成功 下面进行后续操作

            $this->uid = $result->uid;
            NULL == $this->Session_h && $this->Session_h = new Session_helper($this->uid);

            $time = time();
            $exp = $time + 259200;

            $key_l = $this->genLeftKey();
            $key_r = $this->genRightKey();
            $key_m = $this->genMainKey($key_l, $key_r);

            // @deprecated
            setcookie('username', urlencode($usn), $exp, '/');
            setcookie('_uid', $this->uid, $exp, '/');
            // @deprecated
            # 写入32px头像地址
            setcookie('ush', G::getHeadimg($this->uid, 32), $exp, '/');

            # usr_bar缓存控制
            setcookie('usr_cache', 'on', $time + 7200, '/');

            # 主密钥
            setcookie('fky', $key_m, $exp, '/');

            # 删除重新登陆标记 setcookie('relogin', '');
            setcookie('relogin', '', time() - 12000, '/account/');

            $this->Session_h->writeData($key_l, $key_r);
            return true;
        } else {
            throw new Auth_Login_password_fali;
        }
    }

    private function genLeftKey() {
        return '_' . $this->uid; // session key 不能为数字 !!!!
    }

    private function genRightKey() {
        return (string) md5(($this->uid % 5) . $this->usn);
    }

    public function genMainKey($key_l, $key_r) {
        return crypt($key_l . 'sl' . $key_r, CRYPT_SALT_LENGTH);
    }

    public function validate($key_m) {
        /**
         * @desc 验证合法性
         * @param $key 由genMainKey()生成
         * @return array
         */
        $key_l = $this->genLeftKey();

        $key_r = $this->Session_h->getData($key_l);

        if ($key_m == $this->genMainKey($key_l, $key_r)) {
            return true;
        } else {
            return false;
        }
    }

    public function goLogin($with_header = true) {
        setcookie('relogin', '-', time() + 600, '/account/');
        $with_header && header('location:/account/login');
    }

    private function getUID() {
        return $this->uid;
    }

}

