<?php

class uc_fans extends uc_Controller {

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
        $SQL = sprintf('SELECT cf.uid, cl.username AS usn, st.fans_nums, st.follows_nums
            FROM `client_link_friend` cf
            LEFT JOIN client cl ON cl.uid = cf.uid
            LEFT JOIN sns_stat st ON cf.uid = st.uid
            WHERE cf.target = %s LIMIT 0,100;', $this->PARAM['uid']);
        // 限制100个
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
