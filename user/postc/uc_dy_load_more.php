<?php

if ($_POST) {
    if (isset($_POST['tc_val_code']) && isset($_COOKIE['_uid'])) {
        require $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/uc_secure_helper.php';
        if ($_POST['tc_val_code'] == uc_secure_helper::gen_tc_val_code(mysql_escape_string($_COOKIE['_uid']))) {
            // check
            #include $_SERVER['DOCUMENT_ROOT'] . '/user/data/dy_controlor.php';
            include $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
            include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
            include $_SERVER['DOCUMENT_ROOT'] . '/user/Auth/Auth.php';
            include $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/sns/Dy.class.php';
            include $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/usr_tpl_helper.php';
            include $_SERVER['DOCUMENT_ROOT'] . '/inc/Smarty/Smarty.class.php';

            $dy_acc = tpl_helper::gen_dy_list_tpl($_COOKIE['_uid'], (int) $_POST['page'], new Smarty);

            echo tpl_helper::compress_html($dy_acc['data']);
        } else {
            // unvalid
            echo 0;
        }
    }
}
?>
