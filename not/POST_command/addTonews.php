<?php

if ($_POST['bid'] && $_POST['nt']) {
    include dirname(__FILE__) . '/../news/class/newsAdder.class.php';
    if (newsAdder::add($_POST['bid'], $_POST['nt'])) {
        print_r(json_encode(array('s' => 1)));
    } else {
        print_r(json_encode(array('s' => 0)));
    }
}
?>
