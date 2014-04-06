<?php

class SessionActor {

    private $ini;

    public function __construct($session_path = null, $session_id = null) {
        if (null !== $session_path) {
            //自定义session文件存储目录 必须完整路径！
            session_save_path($session_path);
        } else {
            //默认session储存路径
            $this->ini = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/mod/config_itsrcs.php.ini", true);
            session_save_path($this->ini['path']['session_save_path']);
        }
        if (null != $session_id)
            session_id($session_id);
        session_start();
    }

    public function writeSESSION($key, $content) {
        $_SESSION[$key] = $content;
    }

    public function getSESSION($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else
            return false;
    }

    public function disctorySESSION($key) {
        unset($_SESSION[$key]);
    }

}
