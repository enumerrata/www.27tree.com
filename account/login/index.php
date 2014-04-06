<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'];
require $ROOT . '/inc/Smarty/Smarty.class.php';

$tpl_config = include $ROOT . '/inc/Smarty/config.php';
include $ROOT . '/mod/G.php';
//$reg_config = include $ROOT . '/account/register/config_reg.php';
include $ROOT . '/user/data/includes/uc_secure_helper.php';

$Smarty = new Smarty;
$Smarty->assign('PATH', array('nav_path' => $tpl_config['nav_path'], 'stat_path' => $tpl_config['stat_path']));

// 验证密钥和ip地址混合加密
if (isset($_COOKIE['relogin'])) {
    # setcookie('relogin', '-', time() - 1, '/account/');
    $Smarty->assign('relogin', true);
} else {
    $Smarty->assign('relogin', false);
}
$Smarty->assign('val_code', uc_secure_helper::gen_login_valcode(G::get_real_ip()));
$Smarty->display('index.tpl');
?>