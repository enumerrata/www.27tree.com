<?php

class uc_mytc extends uc_Controller {

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
        
        $mysql = parent::getMySQL();
        
        $SQL = sprintf("SELECT sid,content,datetime FROM shuoshuo WHERE uid = %s ORDER BY datetime DESC;",  mysql_escape_string($this->PARAM['uid']));
        
        $res = $mysql->query($SQL);
        
        $ss_list = array();
        
        if(false !== $res){
            while($_data_set = mysql_fetch_array($res)){
                $_data_set['datetime'] = G::tTimeFormat_vs($_data_set['datetime']);
                
                array_push($ss_list,$_data_set);
            }
        }
        
        // $Smarty->assign('dy_list', tpl_helper::gen_dy_list_tpl($this->PARAM['uid'], 0, $Smarty)); 
        $Smarty->assign('ss_list',$ss_list);
        parent::display($this->action);
    }

}

?>
