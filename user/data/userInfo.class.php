<?php

if (@!class_exists(con_mysql_query))
    include $_SERVER['DOCUMENT_ROOT'] . "/mod/con_mysql_query.php";
if (@!class_exists(nickconv))
    include $_SERVER['DOCUMENT_ROOT'] . "/user/data/nickconv.class.php";

class userInfo extends con_mysql_query {

    /**
     * 这个是我写的最烂的类了
     */
    private $uid;
    private $sex;
    private $username;
    private $nickname;
    private $ages;
    private $qq;
    private $job;
    private $address;
    private $lan;
    private $conv;
    private $inc;
    private $art_c;
    private $ban_c;
    private $reg;
    private $isAdmin;
    private $prolev;
    private $credit;
    private $rawLev;
    private $rawNickName;
    private $exp;

    public function getNickName() {
        return $this->nickname;
    }

    public function getRawNickName() {
        return $this->rawNickName;
    }

    private function setNickName($nickname) {
        $this->nickname = $nickname;
    }

    public function getCredit() {
        return $this->credit;
    }

    private function setCredit($c) {
        $this->credit = $c;
    }

    public function getIsAdmin() {
        return $this->isAdmin;
    }

    public function getProlev() {
        return $this->prolev;
    }

    public function getRawlev() {
        return $this->rawLev;
    }

    public function __construct($uid, $options = NULL) {
        //@TODO check
        parent::__construct();
        if (!self::loadData($uid, $options))
            return false;
    }

    public final function __destruct() {
        self::close();
    }

    private function loadData($uid, $options = NULL) {
        self::setUid($uid);
        if (self::isDefault($options)) {
            //@todo options-
            $sql = "SELECT c.username,c.sex,c.ages,c.qq,c.job,c.address,c.language,c.inc,c.user_info_data,e.art_c,e.ban_c,c.reg_date FROM client c INNER JOIN client_link e ON c.uid=e.uid WHERE c.uid=$uid;";
            $data = @mysql_fetch_array(self::query($sql));
            self::setSex($data['sex']);
            self::setUsername($data['username']);
            self::setAges($data['ages']);
            self::setQq($data['qq']);
            self::setJob($data['job']);
            self::setAddress($data['address']);
            self::setLan($data['language']);
            self::setConv($data['user_info_data']);
            self::setInc($data['inc']);
            self::setArt_c($data['art_c']);
            self::setBan_c($data['ban_c']);
            self::setReg($data['reg_date']);
            $re_exp = @mysql_fetch_array(self::query("SELECT exp,credit FROM client_credit WHERE uid = $uid;"));
            $this->exp = intval($re_exp['exp']);
            self::setCredit(intval($re_exp['credit']));

            $isAdminrs = @mysql_fetch_array(self::query("SELECT COUNT(*) as count FROM common_admin_group WHERE uid = $uid;"));
            if ($isAdminrs['count'] == 1) {
                $this->isAdmin = true;
                $table2Fetch = "common_admin_group";
            } else {
                $this->isAdmin = false;
                $table2Fetch = "common_user_group";
            }
            $nicknameConv = new nickconv();
            if ($this->isAdmin) {
                $levdatars = mysql_fetch_array(self::query("SELECT level FROM $table2Fetch WHERE uid=$uid;"));
                $this->prolev = intval($levdatars['level']);
                $levdatars = mysql_fetch_array(self::query("SELECT level FROM `common_user_group` WHERE uid=$uid;"));
                $this->rawLev = intval($levdatars['level']);
                $this->rawNickName = $nicknameConv->conv($this->rawLev, false);
                self::setNickName($nicknameConv->conv($this->prolev, $this->isAdmin));
            } else {
                $levdatars = mysql_fetch_array(self::query("SELECT level FROM $table2Fetch WHERE uid=$uid;"));
                $this->prolev = $levdatars['level'];
                $this->rawLev = intval($levdatars['level']);
                $this->rawNickName = $nicknameConv->conv($this->rawLev, false);
            }
            unset($levdatars);
        }
        return true;
    }

    private function isDefault($var) {
        return !is_array($var);
    }

    public function getExp() {
        return $this->exp;
    }

    public function getUid() {
        return $this->uid;
    }

    public function getSex() {
        return $this->sex;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getUsn() {
        return $this->username;
    }

    public function getAges() {
        return $this->ages;
    }

    public function getQq() {
        return $this->qq;
    }

    public function getJob() {
        return $this->job;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getLan() {
        return $this->lan;
    }

    public function getConv() {
        return $this->conv;
    }

    public function getInc() {
        return $this->inc;
    }

    public function getArt_c() {
        return $this->art_c;
    }

    public function getBan_c() {
        return $this->ban_c;
    }

    public function getTotalArtNum() {
        $data = mysql_fetch_array(self::query("SELECT COUNT(id_artlist) AS count FROM artlist WHERE uid = " . self::getUid() . ";"));
        return $data['count'];
    }

    public function delArt_c($target) {
        $arr = explode(",", self::getArt_c());
        if (in_array($target, $arr)) {
            unset($arr[array_search($target, $arr)]);
            $arr = array_values($arr);
            self::setArt_c(implode(",", $arr));
            if (self::updateArt_c(self::getArt_c())) {
                //@G::upCredit($author_uid, -1);
                return true;
            }
        } else
            return false;
    }

    public function delBan_c($target) {
        $arr = explode(",", self::getBan_c());
        if (in_array($target, $arr)) {
            unset($arr[array_search($target, $arr)]);
            $arr = array_values($arr);
            self::setBan_c(implode(",", $arr));
            if (self::updateBan_c(self::getBan_c()))
                return true;
        } else
            return false;
    }

    private function updateArt_c($new) {
        if (self::query("UPDATE client_link SET art_c='$new' WHERE uid=$this->uid;"))
            return true;
    }

    private function updateBan_c($new) {
        if (self::query("UPDATE client_link SET ban_c='$new' WHERE uid=$this->uid;"))
            return true;
    }

    public function getReg() {
        return $this->reg;
    }

    /**
     * @param field_type $uid
     */
    public function setUid($uid) {
        $this->uid = $uid;
    }

    /**
     * @param field_type $sex
     */
    public function setSex($sex) {
        $this->sex = $sex;
    }

    /**
     * @param field_type $username
     */
    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * @param field_type $ages
     */
    public function setAges($ages) {
        $this->ages = $ages;
    }

    /**
     * @param field_type $qq
     */
    public function setQq($qq) {
        $this->qq = $qq;
    }

    /**
     * @param field_type $job
     */
    public function setJob($job) {
        $this->job = $job;
    }

    /**
     * @param field_type $address
     */
    public function setAddress($address) {
        $this->address = $address;
    }

    /**
     * @param field_type $lan
     */
    public function setLan($lan) {
        $this->lan = $lan;
    }

    /**
     * @param field_type $conv
     */
    public function setConv($conv) {
        $this->conv = $conv;
    }

    /**
     * @param field_type $inc
     */
    public function setInc($inc) {
        $this->inc = $inc;
    }

    /**
     * @param field_type $art_c
     */
    public function setArt_c($art_c) {
        $this->art_c = $art_c;
    }

    /**
     * @param field_type $ban_c
     */
    public function setBan_c($ban_c) {
        $this->ban_c = $ban_c;
    }

    /**
     * @param field_type $reg
     */
    public function setReg($reg) {
        $this->reg = $reg;
    }

}

?>
