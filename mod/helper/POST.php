<?php

class POST_XSS_DEFEND extends Exception {
    
}

class POST_AUTH_FAILED extends Exception {
    
}

class POST {

    const POST_AUTH = 2;
    const POST_INT = 0;
    const POST_STRING = 1;

    private $postfilter = "\\b(and|or)\\b.{1,6}?(=|>|<|\\bin\\b|\\blike\\b)|\\/\\*.+?\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT|UPDATE.+?SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE).+?FROM|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";

    public function __construct($initAuth = false) {

        function arr_foreach($arr) {
            static $str;
            if (!is_array($arr)) {
                return $arr;
            }
            foreach ($arr as $key => $val) {

                if (is_array($val)) {

                    arr_foreach($val);
                } else {

                    $str[] = $val;
                }
            }
            return implode($str);
        }

        function StopAttack($StrFiltKey, $StrFiltValue, $ArrFiltReq) {
            $StrFiltValue = arr_foreach($StrFiltValue);
            if (preg_match("/" . $ArrFiltReq . "/is", $StrFiltValue) == 1)
                throw new POST_XSS_DEFEND;
            if (preg_match("/" . $ArrFiltReq . "/is", $StrFiltKey) == 1)
                throw new POST_XSS_DEFEND;
        }

        foreach ($_POST as $key => $value) {
            StopAttack($key, $value, $this->postfilter);
        }
    }

    public function getParam($key, $type = self::POST_INT) {
        return $_POST[$key];
    }

    public function pushJson($arr = array()) {
        print_r(json_encode($arr));
    }

    public function pushErrorJson() {
        print_r(json_encode(array('s' => 0)));
    }

}