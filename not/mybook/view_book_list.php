<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'];

require $ROOT . '/mod/Conn_mysql.class.php';
require $ROOT . '/not/mybook/book.class.php';
require $ROOT . "/inc/Smarty/Smarty.class.php";
require $ROOT . '/not/mybook/bookTypeConv.php';
require $ROOT . '/not/mybook/class/bookTypeManager.php';

require './GForBook.php';
require './view_book_list_controllerx.php';

$param_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$param_type = !isset($_GET['libtype']) ? 'java' : $_GET['libtype'];

$_v_index = new view_book_list_controller($param_type, $param_page);

$config = require $ROOT . '/not/mybook/config/config_mybook.php';
$bookTypeMgr = new bookTypeManager();

$reged = GForBook::getBookLibAccessArr();
if (key_exists($_GET['libtype'], $bookTypeMgr->config)) {
    $Smarty = new Smarty;
    $Smarty->assign('PATH', array('nav_path' => $ROOT . '/templates/nav_v3.php', 'conf_path' => $ROOT . '/not/mybook/templates/booklib_conf.conf'));
    $Smarty->assign('book_rank', $_v_index->getClickRank(10));
    $Smarty->assign('left_nav', $bookTypeMgr->getBookListNav());
    $Smarty->assign('book_list', $_v_index->getBookList());
    $Smarty->assign('book_area', $bookTypeMgr->getBookTypeDesc($param_type));
    $Smarty->assign('Pages', $_v_index->generate_page_bar());
    $Smarty->display('v_booklist.tpl');
} else
    G::Fush404();
?>