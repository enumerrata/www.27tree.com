<?php

//对用户进行权限操作
if (!class_exists('Conn_mysql'))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';

class UserCommand extends Conn_mysql {

    private $uid;
    private $credit;
    private $artNum;
    private $isAdmin;
    private $level;
    private $authorTable;
    private $exp;
    private $rlev;

    const HIS_SS = 0;
    const HIS_BCOMM = 1;
    const HIS_NBLOG = 2;

    public function __construct($uid, $update_only = false) {
        parent::getInstance();

        $this->uid = mysql_escape_string($uid);

        if (!$update_only) {
            $_re = mysql_fetch_array(self::query("SELECT cl.art_num,cc.credit,cl.is_admin,cc.exp FROM client_link cl INNER JOIN client_credit cc ON cl.uid = cc.uid WHERE cl.uid = $uid;"));
            $this->artNum = intval($_re['art_num']);
            $this->credit = intval($_re['credit']);
            $this->isAdmin = $_re['is_admin'] == '1' ? true : false;
            $this->authorTable = $this->isAdmin ? "common_admin_group" : "common_user_group";
            $this->exp = $_re['exp'];
        }
    }

    public function getUID() {
        return $this->uid;
    }

    public function block() {
        //屏蔽会员
    }

    public function unBlock() {
        
    }

    public function getRlevel() {
        if (NULL == $this->rlev) {
            $_re_level = mysql_fetch_array(self::query("SELECT level FROM common_user_group WHERE uid = $this->uid"));
            $this->rlev = intval($_re_level['level']);
            return $this->rlev;
        } else
            return $this->rlev;
    }

    public function getLevel() {
        if (NULL == $this->level) {
            $_re_level = mysql_fetch_array(self::query("SELECT level FROM $this->authorTable WHERE uid = $this->uid"));
            $this->level = intval($_re_level['level']);
            return $this->level;
        } else
            return $this->level;
    }

    public function upCredit($increment = 1, $history = null) {
        if (null !== $history) {
            $SQL_S1 = sprintf("SELECT curr_data FROM `client_credit_history` WHERE `uid` = %s AND `h_type` = %d AND `date` = CURDATE();", $this->uid, $history);
            $_R_re = self::query($SQL_S1);
            if (mysql_num_rows($_R_re) == 0) {
                // 数据不存在,加入数据
                self::query(sprintf("INSERT INTO `client_credit_history` (`uid`,`h_type`,`curr_data`,`date`) VALUES (%s,%s,%s,CURDATE());", $this->uid, $history, $increment));
            } else {
                // 数据存在，进行限值比对
                $history_data_hash = array(
                    UserCommand::HIS_SS => 5, //说说发表 每天最多5积分
                    UserCommand::HIS_BCOMM => 50, //文章被评论 每天最多50积分
                    UserCommand::HIS_NBLOG => 100 //发表文章 每天最多100积分
                );
                $_Data = mysql_fetch_array($_R_re);
                if ((int) $_Data['curr_data'] >= $history_data_hash[$history]) {
                    //超出限制 返回false
                    return false;
                } else {
                    self::query(sprintf("UPDATE `client_credit_history` SET `curr_data` = `curr_data` + %s WHERE `uid` = %s AND `date` = CURDATE() AND `h_type` = %s;", $increment, $this->uid, $history));
                }
            }
        }
        //没有进行积分日限制，直接积分操作
        if (self::query("UPDATE client_credit SET credit = credit + $increment WHERE uid = $this->uid;")) {
            $this->credit += $increment;
            return true;
        }
        else
            return false;
    }

    public function upExp($increment = 1) {
        if (self::query("UPDATE client_credit SET exp = exp + $increment WHERE uid = $this->uid;")) {
            $this->exp += $increment;
            // 积分超值自动升级
            // 高并发将产生大量文件IO，待改进
            $_xml_auth = simplexml_load_file(dirname(__FILE__) . "/info/user_group_convlist.xml");
            $levN = $this->getRLevel() + 1;
            $levelNext = $_xml_auth->xpath("//ug[@lev=$levN]");
            if ($this->exp >= intval($levelNext[0]['creditR'])) {
                $this->levelUp();
            }
            return true;
        }
        else
            return false;
    }

    public function dropExp($decrement = 1) {
        if (self::query("UPDATE client_credit SET exp = exp - $decrement WHERE uid = $this->uid;"))
            return true;
        else
            return false;
    }

    public function dropCredit($decrement = 1) {
        if (self::query("UPDATE client_credit SET credit = credit - $decrement WHERE uid = $this->uid;"))
            return true;
        else
            return false;
    }

    public function setCredit($credit) {
        if (self::query("UPDATE client_credit SET credit = $credit WHERE uid = $this->uid;"))
            return true;
        else
            return false;
    }

    public function getCredit() {
        return $this->credit;
    }

    public function getExp() {
        return $this->exp;
    }

    public function getArtNum() {
        return $this->artNum;
    }

    public function levelUp($inc = 1) {
        if (self::query("UPDATE `common_user_group` SET level = level + $inc WHERE uid = $this->uid;")) {
            if (self::query("UPDATE `client_credit` SET `exp` = 1 WHERE `uid`= $this->uid;")) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function isAdmin() {
        return $this->isAdmin;
    }

}

?>
