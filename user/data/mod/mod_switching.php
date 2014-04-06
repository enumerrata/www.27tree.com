<?php
/**
 * @author Cboss itsrcs <koodo@qq.com>
 */
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';

class mod_ucenter {

     private $mod = 4;
     private $conf;
     private $mysql;
     private $isAdmin = false;

     public function __construct() {
          $this->conf = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/mod/config_itsrcs.php.ini");
          $this->mysql = Conn_mysql::getInstance();
          $admin_check_result = @mysql_fetch_array($this->mysql->query("SELECT COUNT(*) as count FROM common_admin_group WHERE uid=$_COOKIE[_uid];"));
          if ($admin_check_result['count'] == 1)
               $this->isAdmin = true;
     }

     /**
      * @param type $mod
       mod 1:user
       mod 2:admin
       mod 3:vister
       mod 4:unknow
       mod 5:logerror
       mod 6:admin_ucenter
      */

     public function getIsAdmin() {
          return $this->isAdmin;
     }

     public function getMod() {
          $target_uid = $_GET['uid'];
          $from_uid = $_COOKIE['_uid'];
          $target_username = G::getUserName($_GET['uid']);
          $from_username = $_COOKIE['username'];
          $validate = new validate_cookie();
          if ($target_uid == "" || $from_uid == "" || $target_uid != $from_uid) {
               if ($this->isAdmin)
                    return 2;
               else
                    return 3;
          } else {
               $target_uid = mysql_real_escape_string($target_uid);
               $from_uid = mysql_real_escape_string($from_uid);
               $from_username = mysql_real_escape_string($from_username);
               $target_username = mysql_real_escape_string($target_username);
               if (!$validate->check($from_username, $from_uid))
                    return 5;
               if (!$validate->uidcheck($target_uid) || !$validate->uidcheck($from_uid))
                    return 4;
               if ($target_uid == $from_uid) {
                    if ($validate->check($from_username, $from_uid)) {
                         if ($this->isAdmin)
                              return 6;
                         else
                              return 1;
                    } else {
                         return 4;
                    }
               }
          }
     }

}

?>