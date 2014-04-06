<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';

class view_blog_controlor extends Conn_mysql {

    private $uid;
    private $blogid;

    public function __construct($uid, $blogid) {
        $this->uid = $uid;
        $this->blogid = $blogid;
        self::getInstance();
    }

    public function pushNewUserBlog() {
        $_Re = self::query("SELECT blogid FROM blog_list WHERE uid = $this->uid AND blogid <> $this->blogid ORDER BY RAND() DESC LIMIT 8;");
        while ($row = mysql_fetch_array($_Re)) {
            $_blog = new Blog($row['blogid']);
            if (!$_blog->error) {
                echo "<li><a href=\"{$_blog->getURL()}\">{$_blog->getTitle()}</a></li>";
            }
        }
    }

    public function pushBlog_newsApp() {
        include_once ROOT . 'not/news/class/newsAdapter.php';
        $na = new newsAdapter();
        if ($na->is_news_Maped($this->blogid))
            if ($this->uid == $_COOKIE['_uid']) {
                include './templates/news_app_btn.phtml';
            } else if (isset($_COOKIE['_uid']) && ctype_digit($_COOKIE['_uid'])) {
                include $_SERVER['DOCUMENT_ROOT'] . '/user/data/mod/Auth.php';
                $Auth = new Auth($_COOKIE[_uid]);
                if ($Auth->getIsAdmin()) {
                    include './templates/news_app_btn.phtml';
                }
            }
    }

}

?>
