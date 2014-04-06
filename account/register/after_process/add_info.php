<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'];

require $ROOT . '/inc/Smarty/Smarty.class.php';
require $ROOT . '/mod/Conn_mysql.class.php';
require $ROOT . '/mod/G.php';
require $ROOT . '/user/controller/uc_controller.class.php';
require $ROOT . '/user/controller/am/alter_info.php';

$tpl_config = include $ROOT . '/inc/Smarty/config.php';
$reg_config = include $ROOT . '/account/register/config_reg.php';

$tpl_name = str_replace('.php', '.tpl', basename(__FILE__));

$Smarty = new Smarty;
$mysql = Conn_mysql::getInstance();
$Smarty->template_dir = '../templates/';
$Smarty->compile_dir = '../templates_c/';
$Smarty->assign('language_list', uc_alter_info::get_language_list());
$Smarty->assign('PATH', array('nav_path' => $tpl_config['nav_path'], 'stat_path' => $ROOT . '/templates/stat_code.php'));
$Smarty->assign('UID', (int) mysql_escape_string($_COOKIE['_uid']));
$Smarty->display($tpl_name);
?>