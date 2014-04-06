<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/mod/Auth.php';
  $A = new Auth($_COOKIE['_uid']);
  $_return = array();
     if(!$A->ArticleAccess()){
          //TODO Auth page
          $_return['s'] = '0'; // auth
     } else {
          include 'con_mysql_query.php';
          include 'article.class.php';
          $art = new Article($_POST['artid']);

          $_return['s'] = '1';
          $_return['c'] = $art->getContent();
     }
     print_r(json_encode($_return));
