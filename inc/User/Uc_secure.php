<?php

class Uc_secure {

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

    public static function gen_tc_val_id($tid) {
        // 吐槽伪id
        return base64_encode('_m1dk2_' . $tid);
    }

    /**
     * 解密吐槽id
     * @param string $str
     * @return boolean / int
     */
    public static function dec_tc_val_id($str){
        $id = str_replace('_m1dk2_', '', base64_decode($str));
        if(ctype_digit($id)){
            return $id;
        } else return FALSE;
    }

}
