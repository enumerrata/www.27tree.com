<?php

class view_article_controlor extends Conn_mysql {

    public function __construct() {
        parent::getInstance();
    }

    public function pushRandBook() {
        if (!class_exists(book))
            include dirname(__FILE__) . '/mybook/book.class.php';
        $_re = self::query("SELECT bookid FROM book_list ORDER BY rand() LIMIT 8;");
        if (mysql_num_rows($_re)) {
            while ($row = mysql_fetch_array($_re)) {
                $_book = new book($row['bookid']);
                echo "<li class=\"Elipsis\"><a href=\"{$_book->getURL()}\">《{$_book->getTitle()}》</a></li>";
            }
        }
    }

    public function pushRandBBsPost() {
        include_once dirname(__FILE__) . '/../minbbs/post.class.php';
        //include_once dirname(__FILE__) . '/../minbbs/bbs_G.php';
        $_re = self::query("select postid from bbs_posts order by rand() LIMIT 10;");
        while ($p = mysql_fetch_array($_re)) {
            $post = new Post($p['postid']);
            if ($post->error)
                continue;
            echo <<<POST_LI
               <li class="Elipsis">&nbsp;<a href="{$post->getURL()}">{$post->getTitle()}</a></li>
POST_LI;
        }
    }

    public function pushComm($art) {
        $COMM = $art->getArticleComm();
        if (null != $COMM) {
            $COMM = @array_reverse($COMM);
            $place = count($COMM);
            foreach ($COMM as $ever) {
                $placex = G::CommPlaceConv($place--);
                $author = $ever['un'];
                $date = $ever['dt'];
                $conf = G::article_content_conv($ever['ct']);
                $uid = $ever['fu'];
                $headimg = G::getHeadimg($ever['fu']);
                require './templates/comment_list.html';
            }
        }
    }

    public function pushNews() {
        $_re = self::query("SELECT id_artlist FROM artlist WHERE type_artlist = 'news' ORDER BY date_artlist DESC LIMIT 10;");
        while ($row = mysql_fetch_array($_re)) {
            $art = new Article($row['id_artlist']);
            if ($art->error)
                continue;
            echo "<li class=\"Elipsis\">&nbsp;<a href=\"{$art->getURL()}\">{$art->getTitle()}</a></li>";
        }
    }

}

?>
