<?php

//include_once $_SERVER['DOCUMENT_ROOT'] . '/user/config/config_const_class.php';

/**
 * Description of uc_mode_getter
 *
 * @author koodo
 * 
 * 
  const MOD_owner = 1;
  const MOD_admin = 2;
  const MOD_vister = 3;
  const MOD_unknow = 4;
  const MOD_logerror = 5;
 * 
 */
class uc_mode_getter {

    public static function getMod($_GET_UID) {
        /**
         * @desc 获取个人中心进入模式
         * @return uc_mod:MOD_$$
         * @todo ..
         */
        $UID['target'] = mysql_escape_string($_GET_UID);
        $UID['cookie'] = mysql_escape_string($_COOKIE['_uid']);
        $USN['cookie'] = mysql_escape_string($_COOKIE['username']);
        // 参数入口

        $target_uid = $_GET_UID;
        $from_uid = $_COOKIE['_uid'];

        function logIned() {
            // todo 严格安全
            if (isset($_COOKIE['_uid']) && isset($_COOKIE['username']) && $_COOKIE['username'] != '' && $_COOKIE['_uid'] != '')
                return true;
            else
                return false;
        }

        if (logIned()) {
            // 非游客
            $_Validate = new validate_cookie();
            if ($_Validate->check($USN['cookie'], $UID['cookie'])) {
                //登录验证成功
                if ($UID['cookie'] == $UID['target']) {
                    return uc_mod::MOD_owner;
                } else {
                    return uc_mod::MOD_vister;
                }
            } else {
                //登录验证失败
                return uc_mod::MOD_logerror;
            }
        } else {
            // 游客
            return uc_mod::MOD_vister;
        }
    }

}
