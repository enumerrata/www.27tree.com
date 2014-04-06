<?php
error_reporting(0);
function flush_error() {
    print_r(json_encode(array('s' => 0)));
}

function flush_success() {
    print_r(json_encode(array('s' => 1)));
}

if ($_POST) {
    $ROOT = $_SERVER['DOCUMENT_ROOT'];
    include $ROOT . '/user/data/includes/uc_secure_helper.php';
    if ($_POST['uc_valicode'] == uc_secure_helper::gen_tc_val_code($_COOKIE['_uid'])) {

        $USH_ROOT = $ROOT . '/user/data/head-img/';
        //var_dump($_POST);
        // >> do resize action
        $scale = $_POST['al-scale'];
        $x = $_POST['x'] * $scale;
        $y = $_POST['y'] * $scale;
        $w = $_POST['w'] * $scale;
        $h = $_POST['h'] * $scale;
        $src = $ROOT . $_POST['al-src'];
        $pi = pathinfo($src);

        $target = imagecreatetruecolor($w, $h)
                or die("Cannot Initialize new GD image stream");

        $source = imagecreatefromstring(file_get_contents($src));

        imagecopy($target, $source, 0, 0, $x, $y, $w, $h);

        unlink($src);

        $file = sprintf("/user/data/head-img/%s", (int) $_COOKIE['_uid'] . "_head.jpg");
        $di_file = $ROOT . $file; // 头像文件绝对路径
        $usr_default_ush = $USH_ROOT . $_COOKIE['_uid'] . "_head_default.em";

        if (is_file($di_file))
            unlink($di_file);
        if (is_file($usr_default_ush))
            unlink($usr_default_ush);

        if (imagejpeg($target, $di_file, 100)) {
            // success !
            print_r(json_encode(array('s' => 1, 'newush' => urldecode($file))));
        } else {
            flush_error();
        }
        // 产生文件
        // >> 自定义头像写入完成 ， 文件上传至又拍云

        require_once($_SERVER['DOCUMENT_ROOT'] . '/mod/upyun.class.php');

        $upyun = new UpYun("itsrcs", "koodo", "613158");
        $fh = fopen($di_file, 'r'); // 只读打开
        $upyun->writeFile("/headimg/" . (int) $_COOKIE['_uid'] . "head.jpg", $fh);

        fclose($fh);
    } else {
        flush_error();
    }
} else {
    flush_error();
}
?>
