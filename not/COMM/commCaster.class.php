<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'];
include_once $ROOT . '/mod/G.php';
include_once $ROOT . '/mod/Conn_mysql.class.php';
include_once dirname(__FILE__) . '/commCaster.php';
#include_once $ROOT . '/user/data/dy_controlor.php';
include_once $ROOT . '/user/data/includes/sns/Dy.class.php';
include_once $ROOT . '/user/data/UserCommand.class.php';

class commCaster implements commCasterx {
    /**
     *
     * @param type $id
     * @param type $targetType
     * @param type $fuid
     * @param type $content
     * @return boolean
     */

    const TO_BLOG = "blog";
    const TO_BOOK = "book";
    const TO_ART = "art";

    public static function newComm($id, $targetType, $fuid, $fusername, $content, $lev, $targetAmd = false, $index = false) {
        /**
         * @param $fuid 来源uid
         * @param $fusername 来源用户名
         * @param $content 内容
         * @param $lev 留言层级
         * @param $index 二级留言索引
         */
        $_comm = array();
        //游客默认为fuid = 0
        $_comm['fuid'] = $fuid; //uid_from
        $_comm['un'] = $fusername;
        //内容在上传前已经通过js脚本转义
        $_comm['ct'] = $content; //content
        $_comm['dt'] = G::getDatetime();
        $_comm['lev'] = $lev;
        if ($lev == '0') {
            $_comm['sub'] = array();
        }
        if ($lev == '2' && false !== $targetAmd && is_array($targetAmd)) {
            $_comm['touid'] = $targetAmd['toUID'];
            $_comm['tousn'] = $targetAmd['toUSN'];
        }
        $fuid != 0 && $USC = new UserCommand($_COOKIE['_uid']);

        switch ($targetType) {
            case self::TO_BLOG :
                //comment to blog
                $targetFilePath = $_SERVER['DOCUMENT_ROOT'] . '/not/COMM/lib/blog/commF_';
                include $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';
                $_BForDy = new Blog($id);

                // 动态推送
                if ($fuid != $_BForDy->getUid())
                    if ($lev == 0) {
                        $fuid > 0 && $USC->upCredit(2, UserCommand::HIS_BCOMM);
                        $dy = new Dy($_BForDy->getUid()); // 个人中心动态管理类
                        $dy->Push(Dy::DYTYPE_COMMBLOG, array(
                            'fuid' => $fuid,
                            'id' => $id,
                            'content' => $content,
                            'title' => $_BForDy->getTitle(),
                            'url' => $_BForDy->getURL()
                        ));
                        #$dy->pushCommDy($fuid, dy_controlor::COMM_BLA, $id, $_BForDy->getTitle(), $_BForDy->getURL(), $content, $_comm['dt']);
                    } else {
                        #$dy->pushAmpDy($fuid, dy_controlor::AMP_BLA, $id, $_BForDy->getTitle(), $_BForDy->getURL(), $content, $_comm['dt']);
                    }

                break;
            case self::TO_BOOK:
                //comment to book
                include $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/book.class.php';
                $_commx = array();
                $_book = new book($id);

                $_commx['fu'] = $fuid; //uid_from
                $_commx['ct'] = $content; //content
                $_commx['dt'] = G::getDatetime(); //date_time
                $_commx['un'] = G::getUserName($fuid); //username
                $_commx['bt'] = $_book->getTitle();
                $_commx['bl'] = $_book->getURL();

                // 动态推送
                if ($fuid != $_book->getSuid())
                    if ($lev == 0) {
                        $dy = new Dy($_book->getSuid()); // 个人中心动态管理类
                        $dy->Push(Dy::DYTYPE_COMMBOOK, array(
                            'fuid' => $fuid,
                            'id' => $id,
                            'content' => $content,
                            'title' => $_book->getTitle(),
                            'url' => $_book->getURL()
                        ));
                        #$dy->pushCommDy($fuid, dy_controlor::COMM_BOOK, $id, $_book->getTitle(), $_book->getURL(), $content, $_comm['dt']);
                    } else {
                        //$dy->pushAmpDy($fuid, dy_controlor::AMP_BOOK, $id, $_book->getTitle(), $_book->getURL(), $content, $_comm['dt']);
                    }

                $_path_ncomm = $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/newEstComm2Book.json';
                $_ncommData = array_reverse(array_slice(array_reverse(file_exists($_path_ncomm) ? json_decode(file_get_contents($_path_ncomm), true) : array()), 0, 9));
                array_push($_ncommData, $_commx);
                file_put_contents($_path_ncomm, json_encode($_ncommData));
                $targetFilePath = $_SERVER['DOCUMENT_ROOT'] . '/not/COMM/lib/book/commF_';
                break;
            case self::TO_ART:
                // do nothing
                break;
        }
        //文件处理段
        $targetFilePath .= $id . '.json';
        if (file_exists($targetFilePath)) {
            $data = json_decode(file_get_contents($targetFilePath), true);
        } else
            $data = array();
        switch ($lev) {
            case '0'://第一级评论
                array_push($data, $_comm);
                break;
            case '1'://第二级评论
            case '2'://@级评论 1~2级评论 参数 @index , 2级参数 @amp(uid)
                array_push($data[$index]['sub'], $_comm);
                break;
        }

        if (file_put_contents($targetFilePath, json_encode($data))) {
            commCaster::upCommi($id, $targetType); //评论计数
            print_r(json_encode(array(
                        "s" => "1",
                        "head-img" => G::getHeadimg($fuid)
                    )));
            return true;
        } else {
            print_r(json_encode(array(
                        "s" => "0"
                    )));
            return false;
        }
    }

    public static function upCommi($id, $targetType) {
        switch ($targetType) {
            case commCaster::TO_BLOG :
                $sql = "UPDATE blog_list SET `commi` = `commi` + 1 WHERE blogid = $id";
                break;
            case commCaster::TO_BOOK:
                $sql = "UPDATE booklist SET `commi` = `commi` + 1 WHERE bookid = $id";
                break;
            case commCaster::TO_ART:
                $sql = "UPDATE artlist SET `commi` = `commi` + 1 WHERE id_artlist = $id";
                break;
        }
        $mysql = Conn_mysql::getInstance();
        @$mysql->query($sql);
    }

    public static function getComm($id, $targetType) {
        $filePath = $_SERVER['DOCUMENT_ROOT'] . '/not/COMM/lib/' . $targetType . '/commF_' . $id . '.json';
        if (!is_file($filePath))
            return false;
        else {
            // 返回数组
            return json_decode(file_get_contents($filePath), true);
        }
    }

}

?>
