<?php

class uc_follows extends uc_Controller {

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
        //$SQL = sprintf('SELECT cf.target AS uid,cl.username AS usn from `client_link_friend` cf LEFT JOIN client cl on cl.uid = cf.target WHERE cf.uid = %s;', $this->PARAM['uid']);
        $SQL = sprintf('SELECT cf.target AS uid, cl.username AS usn, st.fans_nums, st.follows_nums
            FROM `client_link_friend` cf
            LEFT JOIN client cl ON cl.uid = cf.target
            LEFT JOIN sns_stat st ON cf.target = st.uid
            WHERE cf.uid = %s;', $this->PARAM['uid']);
        $mysql = parent::getMySQL();
        $_re = $mysql->query($SQL);

        $fans_list = array();
        if (false !== $_re) {
            while ($_r = mysql_fetch_array($_re)) {
                array_push($fans_list, array(
                    'usn' => $_r['usn'],
                    'uid' => $_r['uid'],
                    'ush' => G::getHeadimg($_r['uid'], 45),
                    'fans' => $_r['fans_nums'],
                    'follows' => $_r['follows_nums']
                ));
            }
        }

        $Smarty->assign('fans_list', $fans_list);
        parent::display($this->action);
    }

}

?>
