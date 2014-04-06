<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of safe
 *
 * @author Administrator
 */
class safe {

    private static $getfilter = "'|\\b(and|or)\\b.+?(>|<|=|\\bin\\b|\\blike\\b)|\\/\\*.+?\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT|UPDATE.+?SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE).+?FROM|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";
    private static $postfilter = "\\b(and|or)\\b.{1,6}?(=|>|<|\\bin\\b|\\blike\\b)|\\/\\*.+?\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT|UPDATE.+?SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE).+?FROM|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";
    private static $cookiefilter = "\\b(and|or)\\b.{1,6}?(=|>|<|\\bin\\b|\\blike\\b)|\\/\\*.+?\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT|UPDATE.+?SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE).+?FROM|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";

    public static function defend_string($str) {
        if (preg_match("/" . self::$postfilter . "/is", $str) == 1) {
            return false;
        } else
            return true;
    }

    public static function defend_post($post) {
        foreach ($post as $key => $value) {
            if (self::StopAttack($key, $value, self::$postfilter))
                return false;
        }
        return true;
    }

    public static function defend_cookie($cookie) {
        foreach ($cookie as $key => $value) {
            if (self::StopAttack($key, $value, self::$cookiefilter))
                return false;
        }
        return true;
    }

    private static function StopAttack($StrFiltKey, $StrFiltValue, $ArrFiltReq) {
        $StrFiltValue = arr_foreach($StrFiltValue);
        if (preg_match("/" . $ArrFiltReq . "/is", $StrFiltValue) == 1) {
            return false;
        }
        if (preg_match("/" . $ArrFiltReq . "/is", $StrFiltKey) == 1) {
            return false;
        }
        return true;
    }

    //put your code here
}

?>
