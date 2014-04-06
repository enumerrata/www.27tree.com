<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'];
include_once $ROOT . '/inc/Smarty/Smarty.class.php';
$Smarty = new Smarty;
if (isset($_GET['loginfrom'])) {
    $Smarty->assign('open_login', true);
    #tencent
    if ($_GET['loginfrom'] == 'tencent') {
        # session
        session_save_path($_SERVER['DOCUMENT_ROOT'] . '/account/session');
        session_start();

        include_once $ROOT . '/mod/SessionActor.php';
        require_once $ROOT . "/account/open_tencent/API/qqConnectAPI.php";

        # open_data
        $access_token = $_SESSION['access_token'];
        $openid = $_SESSION['openid'];

        # @class tencent_openAPI
        $qc = new QC($access_token, $openid);

        # user_info
        $user_info = $qc->get_user_info();

        $_SESSION['open_ush'] = $user_info['figureurl_2'];
        # test_data
        /* $user_info = array(
          'ret' => 0,
          'nickname' => 'KOODO0.',
          'figureurl_2' => 'http://qzapp.qlogo.cn/qzapp/100330589/1FB7668A5586117104BDEB76525F7428/100',
          'gender' => '男',
          'vip' => 0,
          'level' => 0,
          'is_yellow_year_vip' => 0
          ); */

        $Smarty->assign('open_info', $user_info);
    }
} else {
    $Smarty->assign('open_login', false);
}

$tpl_config = include $ROOT . '/inc/Smarty/config.php';
$reg_config = include $ROOT . '/account/register/config_reg.php';

$Smarty->assign('PATH', array('nav_path' => $tpl_config['nav_path'], 'stat_path' => $ROOT . '/templates/stat_code.php'));
$Smarty->assign('codex', $reg_config['py']);
$Smarty->display('index_open.tpl');
?>