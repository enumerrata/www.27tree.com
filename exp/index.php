<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'];
require $ROOT . "/mod/G.php";
require $ROOT . "/inc/Smarty/Smarty.class.php";
$Smarty = new Smarty;
$Smarty->assign('PATH', array('nav_path' => $ROOT . '/templates/nav_v3.php', 'stat_path'=>$ROOT . '/templates/stat_code.php'));
$Smarty->display('index.tpl');
?>
