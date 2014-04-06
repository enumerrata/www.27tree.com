<?php
if ($_POST) {
    include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';
    $mysql = Conn_mysql::getInstance();
    $re = $mysql->query("SELECT blogid FROM blog_list GROUP BY blogid DESC LIMIT $_POST[pagelite];");
    while ($row = mysql_fetch_array($re)) {
        $b = new Blog($row['blogid']);

        @$templates = array(
            'headimg' => G::getHeadimg($b->getUid()),
            'username' => G::getUserName($b->getUid()),
            'title' => G::article_content_conv($b->getTitle()),
            'contentx' => $b->getContentx(),
            'uid' => $b->getUid(),
            'href' => $b->getURL(),
            'bid' => $row['blogid'],
            'option-blogprom' => $_POST['option_blogprom'] == 1 ? true : false,
            'commi' => $b->getCommi(),
            'readi' => $b->getReadi()
        );

        include $_SERVER['DOCUMENT_ROOT'] . '/not/templates/blog_items.phtml';
    }
}
?>
