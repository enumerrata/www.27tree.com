<?php

class uc_secure_helper {

    public static function gen_tc_val_code($uid) {
        return crypt($uid . md5('mod5s1'), CRYPT_EXT_DES);
    }

    public static function gen_oc_val_code($uid) {
        return crypt($uid . md5('17t26.mw'), CRYPT_STD_DES);
    }

    public static function gen_login_valcode($ip) {
        // 与ip绑定
        return sha1(md5($ip) . 'uc5');
    }

}

?>
