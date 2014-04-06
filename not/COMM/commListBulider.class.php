<?php

include dirname(__FILE__) . '/commListBulider.php';
include dirname(__FILE__) . '/commCaster.class.php';

class commListBulider implements commListBuliderx {

    public static function loadCommList($id, $targetType, $maxCommentNumber = -1) {
        $commlist = commCaster::getComm($id, $targetType);
        if(!$commlist) return false;
        $commTemplate = $_SERVER['DOCUMENT_ROOT'] . '/not/templates/Grobal_comm_list.phtml';
        foreach ($commlist as $index => $_comm) {
            if ($maxCommentNumber !== -1 && $index == $maxCommentNumber - 1)
                break;
            $params = array(
                'fuid' => &$_comm['fuid'],
                'headimg' => G::getHeadimg($_comm['fuid']),
                'username' => urldecode($_comm['un']),
                'content' => G::article_content_conv($_comm['ct']),
                'datetime' => G::tTimeFormat_vs($_comm['dt']),
                'sub' => is_array($_comm['sub']) ? $_comm['sub'] : false,
                'placex' => G::CommPlaceConv($index + 1),
                'index' => $index
            );
            include $commTemplate;
        }
    }

}

?>
