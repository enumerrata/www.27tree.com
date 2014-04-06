<?php

include dirname(__FILE__) . '/class/newsAdapter.php';
if (!class_exists(Blog))
    include $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';

class news_index_controller {

    private $adp;
    
    //config goes here
    private $todayHead_id = 217;
    private static $headL_pageOffset = 6;
    //config ended

    const Nt_SoftPublish = 'swp';
    const Nt_CoderSuff = 'cds';
    const Nt_Internet_of_things = 'iot';
    const Nt_Electronic_Commerce = 'ece';
    const Nt_HL = 'hlt';

    public function __construct() {
        $this->adp = new newsAdapter();
    }

    public function pushTodayHead() {
        $HeadBlog = new Blog($this->todayHead_id);
        $params['title'] = $HeadBlog->getTitle();
        $params['contentx'] = G::article_content_conv($HeadBlog->getContentx(),1.1);
        $params['url'] = $HeadBlog->getURL();
        include './templates/headToday.phtml';
    }

    public function pushRandImgNews($limit = 3) {
        
    }

    public function pushRandNewsSugg() {
        
    }

    public function pushMoreHeadNew($pageLite) {
        $news_list = $this->adp->getNews(newsAdapter::nA_NORMAL, news_index_controller::Nt_HL, sprintf("%s,%s", $pageLite * self::$headL_pageOffset, self::$headL_pageOffset));
        foreach ($news_list as $n) {
            echo sprintf("<li><a href=\"%s\">%s</a></li>", $n->href, $n->title);
        }
    }

    public function pushNews($nType, $limit = 6) {
        $news_list = $this->adp->getNews(newsAdapter::nA_NORMAL, $nType, $limit);
        foreach ($news_list as $n) {
            echo sprintf("<li><a href=\"%s\">%s</a></li>", $n->href, $n->title);
        }
    }

}

?>
