<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'];

include $ROOT . '/user/Auth/Auth.php';

$Auth = new Auth($_COOKIE['_uid']);
//$Auth->login('koodo', '613158');

var_dump($Auth->validate($_COOKIE['fky']));
