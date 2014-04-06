<?php
include $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
if (G::is_login() || G::is_bot()) {
    // Ua来自爬行蜘蛛 | 已经登陆的用户
    include './index_um.php';
} else {
    // 未登陆用户
    include './index_pm.php';
}