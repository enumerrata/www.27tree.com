<?php

class uc_alter_head extends uc_Controller {

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
        $head_list = '';
        for ($i = 0; $i <= 34; $i++) {
            $head_list .= <<<HEADIMG
        <div class="am-df-hwp">
            <img class="am-df-hi" src="/minbbs/default/headimg/default$i.jpg" width="91px" height="91px"/>
            <a href="javascript:;" class="am-df-btn" imgname="default$i.jpg">选我做头像</a>
        </div>
HEADIMG;
        }
        $Smarty->assign('head_list', $head_list);
        parent::display($this->action);
    }

}

?>
