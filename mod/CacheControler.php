<?php
define("ROOT",$_SERVER['DOCUMENT_ROOT']);
class CacheControler {
    public static function wipeUserMainCache($uid){
        @unlink(ROOT . '/user/data/cache/cache_Dy_' . $uid);
    }
}
?>
