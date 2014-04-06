<?php
if(isset($_POST['postid']) && $_POST['postid'] !=='' && isset($_COOKIE['_uid'])){
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/SessionActor.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
    include dirname(__FILE__) . '/../post.class.php';
    $SAC = new SessionActor();
    $post = new post($_POST['postid']);
    $SAC->disctorySESSION("getRawPostDatavarify");
    $SAC->writeSESSION("getRawPostDatavarify", crypt($_POST['postid'] + $_COOKIE['_uid'], CRYPT_STD_DES));
    echo $post->getContent();
}
?>
