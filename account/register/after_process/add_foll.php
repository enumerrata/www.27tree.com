<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'];

require $ROOT . '/inc/Smarty/Smarty.class.php';
require $ROOT . '/mod/Conn_mysql.class.php';
require $ROOT . '/mod/G.php';

$tpl_config = include $ROOT . '/inc/Smarty/config.php';
$reg_config = include $ROOT . '/account/register/config_reg.php';

$tpl_name = str_replace('.php', '.tpl', basename(__FILE__));

$Smarty = new Smarty;
$mysql = Conn_mysql::getInstance();
$Smarty->template_dir = '../templates/';
$Smarty->compile_dir = '../templates_c/';

// 获取推荐列表
function getSuggList() {
    $mysql = Conn_mysql::getInstance();
    $pre_usr = array(2, 201, 19, 32, 73, 66, 29, 78, 22);
    $uid_list = implode(',', $pre_usr);
    $SQL = sprintf('SELECT cl.uid,cl.username AS usn,cl.job,cl.address FROM client cl WHERE cl.uid IN(%s);', $uid_list);

    $q_re = $mysql->query($SQL);

    if (false !== $q_re) {
        $return = array();
        // 遍历数据集合
        while ($_w = mysql_fetch_array($q_re)) {
            // 打包
            $_w['address'] = str_replace('/', ' / ', $_w['address']);
            $_w['ush'] = G::getHeadimg($_w['uid'], 64);
            array_push($return, $_w);
        }
        return $return;
    } else {
        return false;
    }
}

$Smarty->assign('PATH', array('nav_path' => $tpl_config['nav_path'], 'stat_path' => $ROOT . '/templates/stat_code.php'));
$Smarty->assign('sugg_list', getSuggList());
$Smarty->assign('UID', (int) mysql_escape_string($_COOKIE['_uid']));
$Smarty->display($tpl_name);
?>