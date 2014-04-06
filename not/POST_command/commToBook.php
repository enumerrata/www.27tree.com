<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/not/mybook/S_book_control.php';
if (isset($_POST['bookid']) && isset($_POST['content']) && isset($_POST['fuid'])) {
     if (S_book_control::commBook($_POST['bookid'], $_POST['fuid'], $_POST['content'])) {
          print_r(json_encode(array("s" => '1',"headimg"=>G::getHeadimg($_POST['fuid']))));
     } else print_r(json_encode(array("s" => '0')));
}
?>
