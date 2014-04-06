<?php

require $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/uc_secure_helper.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/blog_controller.class.php';
$uid = (int) mysql_escape_string($_COOKIE['_uid']);
#var_dump($_POST);
if ($_POST['tc_val_code'] == uc_secure_helper::gen_tc_val_code(mysql_escape_string($uid))) {
    $bc = new blog_control();
    $_return = $bc->add_Blog($uid, $_POST['title'], $_POST['content'], $_POST['type'], $_POST['origin']);
    if ($_return['s'] == 1) {
        print_r(json_encode(array(
                    "s" => 1,
                    "href" => $_return['url']
                )));
    } else {
        print_r(json_encode(array(
                    "s" => 0
                )));
    }
} else {
    print_r(json_encode(array(
                "s" => 0
            )));
}
?>
