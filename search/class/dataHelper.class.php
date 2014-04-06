<?php

class dataHelper {

    public static function splitPages($total, $pageLite) {
        $pages = round(($total - 1) / $pageLite + 0.5);
        if ($total <= $pageLite)
            return false;
        else
            return $pages;
    }

    public static function packQueryURL($arr = array()) {
        //重新打包URL
        $query_str = array();
        $TMP_GET = $_GET;
        if (!empty($arr)) {
            foreach ($arr as $key => $query) {
                if (key_exists($key, $TMP_GET)) {
                    $TMP_GET[$key] = $query;
                } else {
                    array_push($query_str, $key . '=' . $query);
                }
            }
        }
        foreach ($TMP_GET as $key => $query) {
            array_push($query_str, $key . '=' . $query);
        }
        unset($TMP_GET);//释放数组
        return '/search/?' . implode('&', $query_str);
    }

}

?>
