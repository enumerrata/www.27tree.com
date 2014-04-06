<?php

/*
 * Return data list:
 * @parm UPDATE_SUCCESS
 * @parm <PUSH>.json
 * @parm ERROR_1 Cookie_Validate_Failed
 *
 */

class UserInfoCast {

   private $mod = "";
   private $con;
   private $validate;

   public function __construct($mod) {
      $this->validate = new validate_cookie();
      $this->con = new con_mysql_query();
      $this->mod = $mod;
   }

   public function __toString() {
      return $this->mod;
   }

   //@mod1:change
   private function update() {
      if (!$this->validate->check($_COOKIE['username'], $_COOKIE['_uid']))
         die("ERROR_1");
      /* @paramType <POST>:
       * @param qqnumber
       * @param ages
       * @param sex
       * @param job
       * @param address_<prov.city
       * @param selfinfo
       * -----------------
       * @paramType <COOKIE>:
       * @param _uid
       */

      //$username = mysql_real_escape_string($_COOKIE['username']);
      $uid = mysql_real_escape_string($_COOKIE['_uid']);
      $qq = mysql_real_escape_string($_POST['qqnumber']);
      $ages = mysql_real_escape_string($_POST['ages']);
      $sex = mysql_real_escape_string($_POST['sex']);
      $job = mysql_real_escape_string($_POST['job']);
      $address = mysql_real_escape_string($_POST['prov']) . "/" . mysql_real_escape_string($_POST['city']); //split by "/"
      $selfinfo = mysql_real_escape_string($_POST['conv']);
      $sql = "UPDATE client SET qq=$qq, ages=$ages, sex='$sex', job='$job', address='$address', user_info_data='$selfinfo' WHERE uid=" . $uid;
      if ($this->con->query($sql))
         echo "UPDATE_SUCCESS";
   }

   //@mod2:get
   private function pushdata() {
      $sql = "SELECT c.username,c.sex,c.ages,c.qq,c.job,c.address,c.language,c.inc,c.user_info_data,e.art_c,e.ban_c,c.reg_date FROM client c
		INNER JOIN client_link e ON c.uid=e.uid
		WHERE c.uid=$_REQUEST[uid];";
      //echo $sql;
      $data = mysql_fetch_array($this->con->query($sql));
      $arr = array(
          'sex' => $data['sex'],
          'username' => $data['username'],
          'ages' => $data['ages'],
          'qq' => $data['qq'],
          'job' => $data['job'],
          'address' => $data['address'],
          'lan' => $data['language'],
          'conv' => $data['user_info_data'],
          'inc' => $data['inc'],
          'art_c' => $data['art_c'],
          'ban_c' => $data['ban_c'],
          'reg' => $data['reg_date']
      );
      $json = json_encode($arr);
      return $json;
   }

   public function cast() {
      if (!$this->validate->uidcheck($_REQUEST['uid']))
         die("ERROR_1");
      switch ($this->mod) {
         case "change":
            $this->update();
            break;
         case "get":
            return $this->pushdata();
            break;
         default:
            die("unknown");
      }
   }

}

?>