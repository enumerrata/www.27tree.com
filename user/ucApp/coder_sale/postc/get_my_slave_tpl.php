<?php
if ($_POST['uid']) {
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
    $mysql = Conn_mysql::getInstance();
    $uid = mysql_real_escape_string($_POST['uid']);
    $_re = $mysql->query("SELECT status FROM `app_codersale_stat` WHERE uid = $uid;");
    if (mysql_num_rows($_re) !== 0) {
        while ($Slave = mysql_fetch_object($_re)) {
            $params['uid'] = $uid;
            $params['usn'] = urldecode(G::getUserName($uid));
            $params['ush'] = G::getHeadimg($$uid);
            $params['spc'] = $Slave->status;
            include dirname(__FILE__) . '/../templates/my_slave.phtml';
        }
    }
}
?>
