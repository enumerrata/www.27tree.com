<?php

require('../../mod/con_mysql_query.php');
require('../../mod/validate_cookie.class.php');
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
        /* @parmType <POST>:
         * @parm qqnumber
         * @parm ages
         * @parm sex
         * @parm job
         * @parm address_<prov.city
         * @parm selfinfo
         * -----------------
         * @parmType <COOKIE>:
         * @parm _uid
         */

        //$username = mysql_real_escape_string($_COOKIE['username']);
        $uid = mysql_real_escape_string($_COOKIE['_uid']);
        $qq = $_POST['qqnumber'] == '' ? 0 : intval(mysql_real_escape_string($_POST['qqnumber']));
        $ages = $_POST['ages'] == '' ? 0 : intval(mysql_real_escape_string($_POST['ages']));
        $sex = mysql_real_escape_string($_POST['sex']);
        $lang = $_POST['lan'];
        $job = mysql_real_escape_string($_POST['job']);
        $address = mysql_real_escape_string($_POST['prov']) . "/" . mysql_real_escape_string($_POST['city']);
        $selfinfo = mysql_real_escape_string($_POST['conv']);
        $inc = mysql_real_escape_string($_POST['inc']);
        $sql = "UPDATE client SET qq='$qq', ages='$ages', sex='$sex', job='$job', inc='$inc', language='$lang', address='$address', user_info_data='$selfinfo' WHERE uid=" . $uid;
        //echo $sql;
        if ($this->con->query($sql))
            print_r(json_encode(array(
                        's' => 1,
                        'sc' => 'UPDATE_SUCCESS'
                    )));
    }

    //@mod2:get
    private function pushdata() {
        $sql = sprintf("SELECT sex,ages,qq,job,address,language,user_info_data,inc FROM client WHERE uid=%u AND username='%s';", $_COOKIE['_uid'], urldecode($_COOKIE['username']));
        $data = mysql_fetch_array($this->con->query($sql));
        $arr = array(
            'sex' => $data['sex'],
            'ages' => $data['ages'],
            'qq' => $data['qq'],
            'job' => $data['job'],
            'lang' => $data['language'],
            'address' => $data['address'],
            'conv' => $data['user_info_data'],
            'inc' => $data['inc']
        );
        $json = json_encode($arr);
        print_r($json);
    }

    public function cast() {
        /*if (!$this->validate->check($_COOKIE['username'], $_COOKIE['_uid'])) {
            print_r(json_encode(array(
                        's' => 0,
                        'sc' => 'ERROR_1'
                    )));
            exit();
        }*/
        switch ($this->mod) {
            case "change":
                $this->update();
                break;
            case "get":
                $this->pushdata();
                break;
            default:
                print_r(json_encode(array(
                            's' => 0,
                            'sc' => 'unkonwn'
                        )));
                exit();
        }
    }

}

/* * ********control********* */
$cast = new UserInfoCast($_POST['mod']);
//echo $cast;
$cast->cast();
?>