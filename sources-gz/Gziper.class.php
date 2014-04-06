<?php

class Gziper {

    const ENCODING_UTF8 = 'utf-8';
    const ENCODING_GB2312 = 'gb2312';

    public function __construct($encoding = self::ENCODING_UTF8) {
        if (extension_loaded('zlib')) {
            ob_start('ob_gzhandler');
            header("content-type: text/css; charset: $encoding");
        } else {
            self::ERROR('');
        }
    }

    public static function ERROR($msg){

    }

}
