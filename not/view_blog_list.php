<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'];

include_once $ROOT . '/inc/mCache/CacheLite.php';

$Cache = new Cache_M();
$Cache->setCacheLifeTime(2);

$page = isset($_GET['page']) && $_GET['page'] > 0 ? (int) $_GET['page'] : 1;
$ckey = 'bl-' . $page;

if ($Cache->is_cached($ckey)) {
    $Cache->read_cache_file($ckey, true);
    exit(0);
} else {
    $Cache->cache_start($ckey);
    require $ROOT . "/inc/Smarty/Smarty.class.php";
    require $ROOT . '/not/controllers/view_blog_list.php';
    require $ROOT . '/mod/Conn_mysql.class.php';
    require $ROOT . '/user/data/Blog.php';
    require $ROOT . '/minbbs/include/Page_bar.php';

    $Smarty = new Smarty;

    $config = array(
        'pagelite' => 15,
        'blogM' => 8,
        'sugg' => array(
            'jobs' => array(412, 397, 321, 307, 359),
            'tech' => array(408, 286, 283, 259, 400)
        )
    );

    $mysql = Conn_mysql::getInstance();
    $CTR = new view_blog_list($mysql);
    $CTR->cur_page = $page;

    $Smarty->assign('PATH', array('nav_path' => $ROOT . '/templates/nav_v3.php', 'stat_path' => $ROOT . '/templates/stat_code.php'));
    $Smarty->assign('PAGES', $CTR->getPageB());
    $Smarty->assign('Opt_blogprom', @$CTR->option['blogprom'] ? 1 : 0);
    $Smarty->assign('ClickRank', $CTR->getClickRank());
    $Smarty->assign('BlogM', $CTR->getBlogM($config['blogM']));
    $Smarty->assign('Config', $config);
    $Smarty->assign('sugg_tech', $CTR->getSuggBlog($config['sugg']['tech']));
    $Smarty->assign('sugg_jobs', $CTR->getSuggBlog($config['sugg']['jobs']));
    $Smarty->assign('main_BlogList', $CTR->getBlogList($page));

    $Smarty->display('view_blog_list.tpl');

    $Cache->cache_end();
}
?>