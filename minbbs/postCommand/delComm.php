<?php

if (isset($_POST['index']) && isset($_POST['postid'])) {
    include dirname(__FILE__) . '/../post.class.php';
    $postid = mysql_real_escape_string($_POST['postid']);
    $mysql = Conn_mysql::getInstance();
    $post = new post($postid, 1);
    $comm = json_decode(file_get_contents($post->postCommPath), true);
    unset($comm[intval($_POST['index'])]);
    $comm = array_values($comm);
    if (file_put_contents($post->postCommPath, json_encode($comm))) {
        $mysql->query("UPDATE bbs_posts SET `commi` = `commi` - 1 WHERE postid = $postid;");
        print_r(json_encode(array('s' => '1')));
    } else {
        print_r(json_encode(array('s' => '0')));
    }
}
?>
