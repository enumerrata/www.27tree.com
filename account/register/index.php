<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'];

require $ROOT . '/inc/Smarty/Smarty.class.php';

$tpl_config = include $ROOT . '/inc/Smarty/config.php';
$reg_config = include $ROOT . '/account/register/config_reg.php';

$Smarty = new Smarty;
$Smarty->assign('PATH', array('nav_path' => $tpl_config['nav_path'], 'stat_path' => $ROOT . '/templates/stat_code.php'));
$Smarty->assign('codex', $reg_config['py']);
$Smarty->display('index.tpl');
?>