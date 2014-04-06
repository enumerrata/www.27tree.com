<?php

class uc_Controller {

    protected $Smarty;
    private $action_mod;
    private $cacheLite;

    const action_mod_rm = 'rm';
    const action_mod_am = 'am';

    public $root_path = null;

    public function __construct($smarty, $action_mod = self::action_mod_rm) {
        ini_set('include_path', $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/');
        $this->Smarty = $smarty;

        #$this->cacheLite = new Cache_M($_SERVER['DOCUMENT_ROOT'] . '/user/cache/');

        /*if ($this->cacheLite->is_cached('45')) {
            $this->cacheLite->read_cache_file('45');
        } else {
            $this->cacheLite->cache_start('45');
            echo 'cache_test';
            $this->cacheLite->cache_end();
        }*/

        $this->root_path = $_SERVER['DOCUMENT_ROOT'] . '/user/';
        if ($action_mod != self::action_mod_am && $action_mod != self::action_mod_rm) {
            $this->action_mod = self::action_mod_rm;
        } else {
            $this->action_mod = $action_mod;
        }
    }

    protected function getMySQL() {
        return Conn_mysql::getInstance();
    }

    protected function getRootPath() {
        return $this->root_path;
    }

    protected function getSmarty() {
        return $this->Smarty;
    }

    protected function display($tpl) {
        $path = sprintf($_SERVER['DOCUMENT_ROOT'] . '/user/templates/split/%s/', $this->action_mod);
        $this->Smarty->display($path . $tpl . '.tpl');
    }

    protected function getCacheLite() {
        return $this->cacheLite;
    }

    protected function fliter_page($pg) {
        if ($pg == NULL || $pg < 1)
            return 1;
        else
            return $pg;
    }

}