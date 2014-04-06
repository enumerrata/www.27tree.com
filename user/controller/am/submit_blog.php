<?php

class uc_submit_blog extends uc_Controller {

    //put your code here
    private $action;
    private $PARAM;
    
    public function __construct($smarty, $action, $action_mod,$PARAM) {
        $this->PARAM = $PARAM;
        $this->action = $action;
        parent::__construct($smarty, $action_mod);
    }

    public function display() {
        $root_path = parent::getRootPath();
        //$blog_type = include $root_path . 'config/blog_type.php';
        $Smarty = parent::getSmarty();
        $Smarty->assign('blog_type',include $root_path . 'config/blog_type.php');
        //$Smarty->assign('dy_list', tpl_helper::gen_dy_list_tpl($this->PARAM['uid'], 0, $Smarty)); // 初始动态页数 0
        parent::display($this->action);
    }

}

?>
