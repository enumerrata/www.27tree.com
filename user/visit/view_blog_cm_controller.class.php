<?php

class view_blog_cm_controller {

    private $uid;
    private $visit_his;

    public $usrObj;
    public $readi;

    public function __construct($uid) {
        $this->uid = intval(mysql_escape_string($uid));
        $this->usrObj = new userInfo($this->uid);
        $this->upBlogReadi();
        $this->visit_his = new VisitHistory();
        if (G::is_login() && $_COOKIE['_uid'] != $uid) {
            $this->visit_his->set($_COOKIE['_uid'], $this->uid);
        }
    }

    public function pushUsn() {
        echo $this->usrObj->getUsername();
    }

    public function pushInfo() {
        $info = '';
        $tmp = array();
        $this->usrObj->getAddress() != "" && array_push($tmp, str_replace('/', ' ', $this->usrObj->getAddress()));
        $this->usrObj->getInc() != "" && array_push($tmp, $this->usrObj->getInc());
        $this->usrObj->getJob() != "" && array_push($tmp, $this->usrObj->getJob());
        echo implode(' | ', $tmp);
    }

    public function getAddress() {
        return str_replace('/', ' ', $this->usrObj->getAddress());
    }

    public function getCompany() {
        return $this->usrObj->getInc();
    }

    private function upBlogReadi() {
        if (ctype_digit($this->uid)) {
            $mysql = Conn_mysql::getInstance();
            $SQL = sprintf("SELECT `readi` FROM `blog_cm_stat` WHERE `uid` = %s;", $this->uid);
            if (false !== $_Re = $mysql->query($SQL)) {
                unset($SQL);
                if (mysql_num_rows($_Re) == 0) {
                    // 没有数据 初始化一行咯
                    $SQL_2 = sprintf("INSERT INTO `blog_cm_stat` SELECT %s,%s;", $this->uid, 1);
                    $mysql->query($SQL_2);
                    return false;
                } else {
                    // 有数据 进行 存储、+1操作
                    $Readi_Obj = mysql_fetch_object($_Re);
                    $this->readi = (int) $Readi_Obj->readi;
                    $mysql->query(sprintf("UPDATE `blog_cm_stat` SET `readi` = `readi` + 1 WHERE `uid` = %s", $this->uid));
                }
            } else {
                // 出错，我也不知道为什么会出错哈哈
                return false;
            }
        } else {
            // 非法uid
            return false;
        }
    }

    public function getJob() {
        return $this->usrObj->getJob();
    }

    public function pushNewsBlogs($limit = 5) {
        $mysql = Conn_mysql::getInstance();
        $SQL = sprintf("SELECT blogid FROM `blog_list` WHERE uid = %s ORDER BY `blogid` DESC LIMIT %s;", $this->uid, $limit);
        $_Re = $mysql->query($SQL);
        unset($SQL);
        if (mysql_num_rows($_Re) !== 0) {
            include $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';
            while ($blogId = mysql_fetch_object($_Re)) {
                $b = new Blog($blogId->blogid);
                $p['title'] = $b->getTitle();
                $p['contentx'] = $b->getContentx();
                $p['url'] = $b->getURL();
                include './templates/view_blog_cm_bloglist.php';
            }
        } else {
            echo "<b class='blog-empty'>这家伙太懒了，什么都没发表。</b>";
        }
    }

    public function pushLVisitor(){
        $visit_list = $this->visit_his->get($this->uid);
        foreach($visit_list as $visitor){
            echo "<a class='headwapper h-visitor' href='/user/visit/$visitor[uid]'><img src='$visitor[ush]' height='45px' width='45px'/></a>";
        }
    }

    public function pushBooksCollected($limit = 2) {
        include $_SERVER['DOCUMENT_ROOT'] . '/user/data/UserCollect.class.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/book.class.php';
        $ucb = new UserCollect($this->uid);
        $BookIdArr = $ucb->getBookCollected(2);
        if (NULL !== $BookIdArr) {
            foreach ($BookIdArr as $index => $bid) {
                $_book = new book($bid);
                $_p['title'] = $_book->getTitle();
                $_p['url'] = $_book->getURL();
                $_p['img'] = $_book->getBookImgURL(150);
                include './templates/view_blog_cm_books.php';
            }
        }
    }

}

?>
