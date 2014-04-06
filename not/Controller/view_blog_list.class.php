<?php

class view_blog_list {

    private $mysql;
    public $option = array();

    const BlogList_PAGES = 20;

    public $cur_page;

    public function __construct($mysql = null) {
        if (null !== $mysql) {
            $this->mysql = $mysql;
        } else {
            $this->mysql = Conn_mysql::getInstance();
        }
        if (isset($_COOKIE['_uid']) && isset($_COOKIE['username'])) {
            require $_SERVER['DOCUMENT_ROOT'] . '/user/data/mod/Auth.php';
            $A = new Auth($_COOKIE['_uid']);
            $this->option['blogprom'] = $A->getIsAdmin() ? true : false;
        }
    }

    public function getClickRank($limit = 10) {
        /**
         * 输出排行榜数据
         */
        date_default_timezone_set('PRC');
        $now = date("Y-m-d H:i:s");

        $_RE_HOT = $this->mysql->query(sprintf('SELECT blogid FROM blog_list WHERE DATEDIFF(\'%s\',`datetime`) < 30 ORDER BY readi DESC LIMIT %s;', $now, $limit));

        $data = array();
        while ($row = mysql_fetch_object($_RE_HOT)) {
            $b = new Blog($row->blogid);
            array_push($data, array('url' => $b->getURL(), 'title' => $b->getTitle()));
            unset($b);
        }
        return $data;
    }

    public function getBlogM($limit = 5) {
        $data = array();
        $re = $this->mysql->query("SELECT DISTINCT
	bcm.uid AS uid,
	bcm.readi AS readi,
	(
		SELECT
			bls.blogid
		FROM
			blog_list bls
		WHERE
			bcm.uid = bls.uid
		ORDER BY
			lastModify DESC
		LIMIT 1
	) AS blogid,
	cl.username AS usn
FROM
	blog_cm_stat bcm
LEFT JOIN client cl ON bcm.uid = cl.uid
GROUP BY
	bcm.uid DESC
ORDER BY
	bcm.readi DESC
LIMIT $limit;");
        while ($row = mysql_fetch_array($re)) {
            if ($row['blogid'] == NULL)
                continue;
            $b = new Blog($row['blogid']);
            $row['ush'] = G::getHeadimg($row['uid'], 45);
            $row['title'] = $b->getTitle();
            $row['href'] = $b->getURL();
            array_push($data, $row);
        }
        unset($re);
        unset($row);
        return $data;
    }

    public function getBlogList($page = 1) {
        /**
         * 输出博客 主列表
         * @todo 单一查询
         */
        $limit = sprintf('%s,%s', ($page - 1) * self::BlogList_PAGES, self::BlogList_PAGES);
        $SQL = "SELECT blogid FROM blog_list ORDER BY lastModify DESC LIMIT $limit;";
        $re = $this->mysql->query($SQL);
        $data = array();
        while ($row = mysql_fetch_array($re)) {
            $b = new Blog($row['blogid']);
            if ($b->error)
                continue;
            $tpl_data = array(
                'ush' => G::getHeadimg($b->getUid(), 64),
                'usn' => G::getUserName($b->getUid()),
                'title' => G::article_content_conv($b->getTitle()),
                'contentx' => $b->getContentx(),
                'uid' => $b->getUid(),
                'href' => $b->getURL(),
                'bid' => $row['blogid'],
                'time' => $b->getDatetime(true),
                'commi' => $b->getCommi(),
                'readi' => $b->getReadi(),
                'origin' => $b->origin
            );
            array_push($data, $tpl_data);
            unset($b);
        }
        return $data;
    }

    public function getSuggBlog($data_list = array()) {
        $return = array();
        foreach ($data_list as $bid) {
            $_blog = new Blog($bid);
            if ($_blog->error)
                continue;
            $return[] = array(
                'title' => G::article_content_conv($_blog->getTitle()),
                'contentx' => mb_substr($_blog->getContentx(), 0, 100, 'utf-8'),
                'href' => $_blog->getURL()
            );
            unset($_blog);
        }
        return $return;
    }

    public function getPageB() {
        $Pager = new PageBar('/blog/%s.html');
        $blog_list_count = @mysql_fetch_object($this->mysql->query("SELECT count FROM `blog_list_stat` LIMIT 1;"));
        return $Pager->gen($this->cur_page, $blog_list_count->count, self::BlogList_PAGES);
        #var_dump($Pager);
    }

}

?>
