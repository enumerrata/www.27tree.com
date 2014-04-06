<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'];
require $ROOT . "/inc/Smarty/Smarty.class.php";
$Smarty = new Smarty;
$Smarty->caching = true;
if (!$Smarty->isCached('index.tpl')) {
    require $ROOT . "/mod/G.php";
    require $ROOT . "/mod/Conn_mysql.class.php";
    require $ROOT . "/not/mybook/index.class.php";
    require $ROOT . "/not/mybook/class/bookTypeManager.php";
    require $ROOT . "/not/mybook/book.class.php";
    $conf = require dirname(__FILE__) . '/config/config_mybook.php'; //读取配置文件
    $bookTypeMgr = new bookTypeManager();
    $index = new Index($conf);
    $Smarty->assign('PATH', array('nav_path' => $ROOT . '/templates/nav_v3.php', 'conf_path' => $ROOT . '/not/mybook/templates/booklib_conf.conf', 'stat_path' => $ROOT . '/templates/stat_code.php'));
    //$Smarty->assign('Rank', $index->getClickRank(5));
    $Smarty->assign('left_nav',$bookTypeMgr->getBookListNav());
    $Smarty->assign('Dy', $index->getBookShare_dy(5));
    $Smarty->assign('SEC', array(
        'java' => $index->getBookSector('java'),
        'cocpp' => $index->getBookSector('cocpp'),
        'database' => $index->getBookSector('database'),
        'nosql' => $index->getBookSector('nosql'),
        'web' => $index->getBookSector('web'),
        'sugg' => $index->getBookSugg()
    ));
    $Smarty->assign('cont', $index->getContUsrList());
}

$Smarty->display('index.tpl');
?>