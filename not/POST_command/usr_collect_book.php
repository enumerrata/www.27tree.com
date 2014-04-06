<?php

include $_SERVER['DOCUMENT_ROOT'] . '/user/data/UserCollect.class.php';
if (isset($_COOKIE['_uid']) && isset($_COOKIE['username'])) {
    $ucb = new UserCollect($_COOKIE['_uid']);
    if ($ucb->collectBook($_POST['bid'])) {
        # 成功
        print_r(json_encode(array('s' => 1)));
    } else {
        # 失败
        print_r(json_encode(array('s' => 0)));
    }
} else {
    # 登录异常
    print_r(json_encode(array('s' => 0)));
}
?>
