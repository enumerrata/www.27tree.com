<?php

@define(ROOT, $_SERVER['DOCUMENT_ROOT']);
if (!isset($_GET['type'])) {
    header('HTTP/1.0 404 Not Found');
    exit(0);
} else {
    $Stype = include './config/config_stype.php';

    $Fram = key_exists($_GET['type'], $Stype) ? $_GET['type'] : 'ques';
    $page_lite = (isset($_GET['page']) && !empty($_GET['page'])) ? (int) mysql_escape_string($_GET['page']) : 1;

    require ROOT . "/inc/Smarty/Smarty.class.php";
    $Smarty = new Smarty;
    $Smarty->caching = true;
    $Smarty->cache_id = $Fram . $page_lite . 'head';
    $Smarty->cache_lifetime = 60;

    $tpl = array(
        'head' => './templates/index/split_head.tpl',
        'body' => './templates/index/split_body.tpl'
    );

    if (!$Smarty->isCached($tpl['head'])) {
        $Stype = $Stype[$Fram];
        $Smarty->assign('cache_id', base64_encode($Smarty->cache_id));
        $Smarty->assign('INDEX', $Stype['index']);
        $Smarty->assign('PATH', array('nav_path' => ROOT . '/templates/nav_v3.php', 'stat_path' => ROOT . '/templates/stat_code.php'));
        $Smarty->assign('TYPE', $Stype['desc']);
    }
    $Smarty->display($tpl['head']);

    $Smarty->cache_id = $Fram . $page_lite . 'body';

    if (!$Smarty->isCached($tpl['body'])) {
        require ROOT . "/mod/Conn_mysql.class.php";
        require ROOT . "/mod/G.php";
        require ROOT . "/minbbs/include/Data_loader.php";
        require ROOT . "/minbbs/include/bbs_stat.php";
        require ROOT . "/minbbs/include/Page_bar.php";
        require ROOT . "/minbbs/controller/bs_Controller.php";

        $MySQL = Conn_mysql::getInstance();
        #$Data_loader = new Data_loader($page_lite, $MySQL);

        $Smarty->assign('URL', $_SERVER['REQUEST_URI']);

        $Smarty->assign('REMARK', $Stype['remark'][rand(0, 2)]);
        $Smarty->assign('EDITOR', $Fram == 'ques' ? './editor/ques_editor.tpl' : './editor/default_editor.tpl');
        $Smarty->assign('guss_path', './sm_guss/' . $Fram . '.tpl');

        include './controller/1/' . $Fram . '_cont.php';

        $ctr_name = $Fram . '_cont';

        $ctr = new $ctr_name($Smarty, $MySQL, $Fram, $page_lite);
        $ctr->display();
    } else {
        #$Smarty->display($tpl['body']);
    }
}