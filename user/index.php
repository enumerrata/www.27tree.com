<?php
if (mysql_escape_string($_GET['uid']) != $_COOKIE['_uid']) {
    # 非空间用户跳转
    header('location:/user/visit/' . mysql_escape_string($_GET['uid'])) && exit(0);
}

define(ROOT, $_SERVER['DOCUMENT_ROOT']);

# Auth check
require ROOT . '/user/Auth/Auth.php';
require ROOT . '/mod/Conn_mysql.class.php';

try {
    $Auth = Auth::getInstance($_COOKIE['_uid']);
    if ($Auth->validate($_COOKIE['fky'])) {
        # 验证成功
        //$Auth->goLogin();
    } else {
        # 失败
        $Auth->goLogin();
    }
} catch (Auth_Param_uid_Exception $aue) {

}
# Auth check

require ROOT . '/user/controller/uc_controller.class.php'; // 载入主控制器类

#require ROOT . '/user/data/includes/cache_lite/CacheLite.php'; // 载入缓存类

require ROOT . '/user/data/includes/uc_secure_helper.php'; // 载入安全类

require ROOT . '/user/data/includes/usr_tpl_helper.php';

require ROOT . '/mod/G.php';

require './router.class.php'; // 载入路由类

require ROOT . "/inc/Smarty/Smarty.class.php"; // 载入 Smarty 模板引擎

require ROOT . "/inc/User/Uc_secure.php";

require ROOT . '/user/data/includes/data_modules/index.module.php';

require ROOT . '/user/data/userInfo.class.php';

#require ROOT . '/mod/validate_cookie.class.php';

#require ROOT . '/user/data/dy_controlor.php';

include ROOT . '/user/data/includes/sns/sns_stat.php';

$Router = new uc_router($_GET['action']); // 实例化路由

$Router->process(); // 启动路由分发
