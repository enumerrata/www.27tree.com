<?php

//error_reporting(0);
if ($_POST) {
    $ROOT = $_SERVER['DOCUMENT_ROOT'];
    // 检查val_code
    require_once $ROOT . "/mod/Conn_mysql.class.php";
    include $ROOT . '/user/data/includes/uc_secure_helper.php';
    include $ROOT . '/mod/G.php';

    if (uc_secure_helper::gen_login_valcode(G::get_real_ip()) != $_POST['valicode']) {
        echo '3';
        //exit(0);
    } else {
        require_once $ROOT . "/user/Auth/Auth.php";
        $mysql = Conn_mysql::getInstance();

        $usn = mysql_real_escape_string($_POST['username'], $mysql->getConnectionHandle());
        $psw = base64_decode(mysql_real_escape_string($_POST['password'], $mysql->getConnectionHandle()));

        try {
            $Auth = Auth::getInstance();
            if ($Auth->login($usn, $psw)) {
                echo '0'; //Login success
            } else {
                echo '1'; //Login failed
            }
        } catch (Auth_Login_password_fali $af) {
            echo '2'; //Login failed > password error
        }
        /*
          require_once $ROOT . "/mod/Conn_mysql.class.php";
          require_once $ROOT . "/mod/validate_cookie.class.php";
          require_once $ROOT . "/account/data/log_notify.class.php";
          $hex = new validate_cookie();
          $log = new log_notify();
          $mysql = Conn_mysql::getInstance();
          $username = mysql_real_escape_string($_POST['username'], $mysql->getConnectionHandle());
          $result = $mysql->query("SELECT passwordx,uid FROM client WHERE username='" . $username . "';");
          if (@$row = mysql_fetch_array($result)) {
          if ($row['passwordx'] == $_POST['password']) {
          $_key = $hex->md5conv($username);
          if ($log->notify($row['uid'], $username, $_key)) {
          if ($_POST['ipchanged'] == '1' && $_POST['neverAsk'] == '1') {
          $mysql->query("insert into ignore_ip values($uid,date_add(current_date(),interval 7 day));");
          }
          echo '0'; //Login success
          }
          } else
          echo '2'; //Login failed > password error
          } else
          echo '1'; //Login failed > no such username */
    }
} else
    echo '-1';
?>