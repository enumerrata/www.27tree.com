<?php

class uc_alter_info extends uc_Controller {

    //put your code here
    private $action;
    private $PARAM;

    public function __construct($smarty, $action, $action_mod, $PARAM) {
        $this->PARAM = $PARAM;
        $this->action = $action;
        parent::__construct($smarty, $action_mod);
    }

    public function display() {
        $Smarty = parent::getSmarty();
        $Smarty->assign('language_list', self::get_language_list());
        parent::display($this->action);
    }

    public static function get_language_list() {
        $_xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/account/data/lang.xml');
        $_xml_p = $_xml->xpath('//l');
        $language_list = '';
        foreach ($_xml_p as $l)
            $language_list .= "<a class=\"borderR5 s-pages-i lga\" href=\"javascript:void(0);\">$l</a>";
        return $language_list;
    }

}

?>
