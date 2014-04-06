<?php

define("ROOT", "../../search/");
include ROOT . "class/dataManager.class.php";
$dm = new dataManager();
$dm->pushData("test", array(
    "id" => "123", "title" => "adasdasd", "body" => "xxxxxxxxxxxxxxxx", "url" => "http://www.27tree.com/search/?p=2&q=html", "author" => "dasdasd", "thumbnail" => "http://css.aliyun.com/static/css/images/logo.gif?104"
));
?>
