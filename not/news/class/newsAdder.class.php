<?php

if (!class_exists(Conn_mysql))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
if (!class_exists(Blog))
    include $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';

class newsAdder {

    public static function addImgNew($nid, $img) {
        $mysql = Conn_mysql::getInstance(Conn_mysql::bulid_pdo);
        $anw = $mysql->prepare("INSERT INTO `new_hash_wimg` (`nid`,`imgpath`) VALUES (?,?);");
        $anw->bindValue(1, $nid, PDO::PARAM_INT);
        $anw->bindValue(2, $img, PDO::PARAM_STR);
        return FALSE !== $anw->execute() ? true : false;
    }

    public static function add($bid) {
        $mysql = Conn_mysql::getInstance();
        $blog = new Blog($bid);
        $sql = sprintf("INSERT INTO `new_norm_list_app` (`bid`, `title`, `uid`, `usn`, `href`, `desc`, `sdate`) VALUES (%s, '%s', %s, '%s', '%s', '%s', NOW());", $bid, $blog->getTitle(), $blog->getUid(), $blog->getUserName(), $blog->getURL(), $blog->getContentx());
        #echo $sql;
        if ($mysql->query($sql)) {
            return array(
                'appid' => $mysql->getLastId(),
                'blogClass' => $blog
            );
        }return false;
    }

    public static function addOffical($bid) {
        $mysql = Conn_mysql::getInstance();
        $bid = mysql_real_escape_string($bid);
        $sql = sprintf("INSERT `new_norm_list` (`bid`,`title`,`uid`,`usn`,`href`,`desc`,`sdate`) (SELECT `bid`,`title`,`uid`,`usn`,`href`,`desc`,NOW() FROM `new_norm_list_app` WHERE `id` = %s);", $bid);

        if (false !== $mysql->query($sql)) {
            if (false !== $mysql->query("DELETE FROM `new_norm_list_app` WHERE `id` = $bid;")) {
                return true;
            } else
                return false;
        }return false;
    }

}

?>
