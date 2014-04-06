<?php

if (!class_exists('Qa'))
    include $_SERVER['DOCUMENT_ROOT'] . '/q_a/class/Qa.class.php';

require ROOT . "/minbbs/bbs_font_controlor.php";

$c = new bbs_font_controlor($data_sid, $page_lite);

$Smarty->assign('P_DATA', $Data_loader->loadQa_Data());

$Smarty->assign('HOT_DATA', $c->get_hot_post($data_sid, 8));

#$Smarty->assign('Pages', $c->generate_page_bar($page_lite, 5));

$Smarty->display('./templates/index/qa.tpl');