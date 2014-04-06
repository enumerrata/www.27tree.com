<?php

class bookTypeManager {

    public $config;

    public function __construct() {
        $this->config = include dirname(__FILE__) . '/../config/config_booktype.php';
    }

    public function getBookTypeDesc($key){
        return $this->config[$key]['desc'];
    }

    public function getBookListNav($tpl = '<a class="BookTypesItem" href="/bookLib/%s/1.html">%s</a>') {
        $return = '';
        foreach ($this->config as $k => $data) {
            $return .= sprintf($tpl, $k, $data['desc']);
        }
        return $return;
    }

}