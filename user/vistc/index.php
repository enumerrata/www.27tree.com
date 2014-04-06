<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'];
require $ROOT . "/inc/Smarty/Smarty.class.php";
require $ROOT . "/mod/Conn_mysql.class.php";
require $ROOT . "/mod/G.php";
require $ROOT . "/user/data/includes/shuoshuo.class.php";
require $ROOT . "/user/data/includes/ShuoShuoc.php";

try {
    $sid = (int) $_GET['s'];

    if ($sid < 0 || !filter_var($sid, FILTER_VALIDATE_INT))
        throw new TcInitException;

    $Tc = new Shuoshuo($sid); // init

    $Smarty = new Smarty;
    $Smarty->assign('PATH', array('nav_path' => $ROOT . '/templates/nav_v3.php', 'stat_path' => $ROOT . '/templates/stat_code.php'));
    $Smarty->assign('tcmom', base64_encode('_m1dk2_' . $_GET['s']));
    $Smarty->assign('commi', ShuoShuoC::getCommi($sid));
    $Smarty->assign('comm_list', ShuoShuoC::get_tc_comm($Tc->getSid()));
    $Smarty->assign('tc_data', array(
        'uid' => $Tc->getUID(),
        'ush' => G::getHeadimg($Tc->getUID()),
        'usn' => $Tc->getUserName(),
        'content' => $Tc->getContent(),
        'datetime' => G::tTimeFormat_vs($Tc->getDateTime())
    ));
    $Smarty->assign('my_data', array(
        'usn' => urldecode($_COOKIE['username']),
        'ush' => G::getHeadimg($_COOKIE['_uid']),
    ));
    $Smarty->template_dir = '../templates/vistc/';
    $Smarty->compile_dir = '../templates_c/';
    $Smarty->display('index.tpl');
} catch (TcInitException $e) {
    // 404
    header('HTTP/1.0 404 Not Found');
    header('Location: /404.php');
}