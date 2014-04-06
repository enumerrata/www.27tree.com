<?php

class uc_ampme extends uc_Controller {

    //put your code here
    private $action;
    private $PARAM;
    
    public function __construct($smarty, $action, $action_mod,$PARAM) {
        $this->PARAM = $PARAM;
        $this->action = $action;
        parent::__construct($smarty, $action_mod);
    }

    public function display() {
        $Smarty = parent::getSmarty();
        $Smarty->assign('dy_list', tpl_helper::gen_dy_list_tpl($this->PARAM['uid'], 0, $Smarty)); // 初始动态页数 0
        parent::display($this->action);
    }

}

?>
