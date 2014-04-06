<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';

class account_manager {

    const SIGN_OPEN = 0;
    const SIGN_NORM = 1;

    private $mysql;

    public function __construct() {
        $this->mysql = Conn_mysql::getInstance(Conn_mysql::bulid_pdo);
    }

    public function open_sign($openid, $access_token, $usn, $email, $ush = false) {

        # $rm array('s'=>true/false,'uid'=>@int)
        $rm = $this->sign($usn, '', $email);

        if ($rm['s'] === true) {
            $open_inst = $this->mysql->prepare("INSERT INTO `client_openid` (`uid`, `access_token`, `openid`) VALUES (?,?,?);");

            $open_inst->bindValue(1, $rm['uid'], PDO::PARAM_INT);
            $open_inst->bindValue(2, $access_token, PDO::PARAM_STR);
            $open_inst->bindValue(3, $openid, PDO::PARAM_STR);
            $open_inst->execute();

            $ush && file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/user/data/head-img/' . $rm['uid'] . '_head.fromqq', $_SESSION['open_ush']);

            return true;
        } else {
            return false;
        }
    }

    public function sign($usn, $pas, $email) {
        /**
         * @desc 常规注册接口 使用开放平台进行注册 请使用 function >> open_sign
         * @param pas 明文密码
         * @return array $return
         */
        $return = array('s' => false);
        $usn = trim(urldecode($usn));

        $passwordx = self::genCypassword($pas, $usn);

        # 注册到client表
        $ins_stat = $this->mysql->prepare("INSERT INTO client (`username`, `passwordx`, `email` ,reg_date) VALUES (?, ?, ?, CURRENT_DATE());");

        $ins_stat->bindValue(1, $usn, PDO::PARAM_STR);
        $ins_stat->bindValue(2, $passwordx, PDO::PARAM_STR);
        $ins_stat->bindValue(3, $email, PDO::PARAM_STR);

        if ($ins_stat->execute()) {
            $uid = (int) $this->mysql->lastInsertId();

            $return['uid'] = $uid;

            # transaction >>>>>
            $this->mysql->beginTransaction();

            $this->mysql->exec("INSERT INTO client_link (uid) VALUES ($uid);");
            $this->mysql->exec("INSERT INTO sns_stat (uid) VALUES ($uid);");
            $this->mysql->exec("INSERT INTO client_credit (uid) VALUES ($uid);");
            $this->mysql->exec("INSERT INTO client_stat (uid) VALUES ($uid);");
            $this->mysql->exec("INSERT INTO common_user_group (uid) VALUES ($uid);");

            $this->mysql->commit();
            # transaction >>>>>

            # 自动登陆
            require_once $_SERVER['DOCUMENT_ROOT'] . '/user/Auth/Auth.php';
            $Auth = Auth::getInstance($uid);
            $Auth->login($usn, $pas);
            $return['s'] = true;
        } else {
            $return['s'] = false;
        }

        return $return;
    }

    private static function genCypassword($password, $usn) {
        return md5(md5($password) . $usn);
    }

}
