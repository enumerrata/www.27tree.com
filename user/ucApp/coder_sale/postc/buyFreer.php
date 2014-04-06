<?php

/**
 * @params target
 */
//exit(0);
if (isset($_POST['target']) && !empty($_POST['target'])) {
    include dirname(__FILE__) . '/../salve_command_logic.class.php';
    $_re = salve_command_logic::buySalve($_COOKIE['_uid'], $_POST['target']);
    //var_dump($_re);
    if ($_re['code'] == 1) {
        //loadMoreOne
        /*include $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
        $mysql = Conn_mysql::getInstance();
        $_re = $mysql->query("SELECT sf.uid,st.status FROM `app_codersale_free` sf INNER JOIN `app_codersale_stat` st on sf.uid = st.uid WHERE sf.uid NOT IN (" . $_POST['exclude'] . ") ORDER BY RAND() LIMIT 1;");
        if (mysql_num_rows($_re) !== 0) {
            while ($Slave = mysql_fetch_object($_re)) {
                $params['uid'] = $Slave->uid;
                $params['usn'] = urldecode(G::getUserName($Slave->uid));
                $params['ush'] = G::getHeadimg($Slave->uid);
                $params['status'] = $Slave->status;
                ob_start();
                include dirname(__FILE__) . '/../templates/slave_free_items.phtml';
                $Tpl = ob_get_contents();
                ob_end_clean();
            }
        }*/
        $Tpl = '';
        print_r(json_encode(array('s' => 1, 'tpl' => $Tpl)));
    } else {
        print_r(json_encode(array('s' => 0)));
    }
}
?>
