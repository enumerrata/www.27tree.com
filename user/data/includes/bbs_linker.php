<?php

class bbs_linker {

    public static function get_usrPosts($uid, $cur_pg, $pagelite) {
        if (!class_exists('Post'))
            @include_once $_SERVER['DOCUMENT_ROOT'] . '/minbbs/post.class.php';
        $uid = (int) mysql_escape_string($uid);
        $limit = sprintf('%s ,%s', $cur_pg * $pagelite, $pagelite);
        $SQL = sprintf("SELECT postid FROM bbs_posts WHERE uid = %s ORDER BY lastModify DESC LIMIT %s;", $uid, $limit);
        $mysql = Conn_mysql::getInstance();
        $_re = $mysql->query($SQL);
        $_data = array();
        if (false !== $_re) {
            while ($idr = mysql_fetch_array($_re)) {
                $_p = new Post($idr['postid']);
                if ($_p->error)
                    continue;
                array_push($_data, array(
                    'title' => $_p->getTitle(),
                    'url' => $_p->getURL(),
                    'ctx' => mb_substr(strip_tags($_p->getContent()), 0, 150, 'utf-8'),
                    'datetime' => $_p->getDatetime(true)
                ));
            }
            return $_data;
        } else {
            return false;
        }
    }

}

?>
