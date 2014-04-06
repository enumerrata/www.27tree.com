<?php

//error_reporting(0);
class index_controller {

    private $uid;
    private $_MYSQL_HANDER;
    private $price;
    private $state;
    private $status;
    private $cash;
    private $asset;

    const db_table_pre = 'app_codersale_';

    public function __construct($uid) {
        $this->uid = $uid;
        $this->MYSQL_HANDER = Conn_mysql::getInstance();
        $this->loadData();
    }

    private function loadData() {
        $_re = mysql_fetch_object($this->MYSQL_HANDER->query("SELECT state,status,cash,asset FROM `app_codersale_stat` WHERE uid = $this->uid;"));
        $this->state = $_re->state;
        $this->price = $_re->status;
        $this->cash = $_re->cash;
        $this->asset = $_re->asset;
    }

    public function pushAsset() {
        echo $this->asset;
    }

    public function pushCash() {
        echo $this->cash;
    }

    public function pushState() {
        echo self::stateConv($this->state);
    }

    public function pushPrice() {
        echo $this->price;
    }

    public function pushSlaveNum() {
        $num = mysql_fetch_object($this->MYSQL_HANDER->query("SELECT COUNT(*) AS count FROM `app_codersale_link` WHERE `master` = $this->uid;"));
        echo intval($num->count);
    }

    public function pushMaster() {
        $Master_uid = $this->hasMaster();
        if (false !== $Master_uid) {
            $myMaster = mysql_fetch_object($this->MYSQL_HANDER->query("SELECT * FROM `app_codersale_stat` WHERE `uid` = $Master_uid;"));
            //var_dump($myMaster);
            $params['uid'] = $Master_uid;
            $params['usn'] = $myMaster->usn;
            $params['ush'] = G::getHeadimg($Master_uid);
            $params['master_asset'] = $myMaster->asset;
            include './templates/my_master.phtml';
        } else {
            
        }
    }

    public function pushCommandList() {
        $xml = simplexml_load_file(dirname(__FILE__) . '/sources/command-list.xml');
        foreach ($xml->xpath('//command') as $command) {
            echo '<a class="block sl-command-btn" href="javascript:;" cmc="', $command['cn'], '" style="border:1px solid #ccc;background:#FFF;margin-bottom:5px;">', (string) $command, '</a>';
        }
        echo '<a class="block sl-back-btn2" href="javascript:;" style="border:1px solid #ccc;background:#FFF;margin-bottom:5px;">返回</a>';
    }

    private static function stateConv($statNum) {
        $s_ARR = array('自由人', '奴隶');
        return $s_ARR[$statNum];
    }

    public function pushPriceRankList() {
        $_re = $this->MYSQL_HANDER->query("SELECT uid,status FROM `app_codersale_stat` ORDER BY status DESC LIMIT 14;");
        if (mysql_num_rows($_re) !== 0) {
            while ($Slave = mysql_fetch_object($_re)) {
                $params['uid'] = $Slave->uid;
                $params['usn'] = urldecode(G::getUserName($Slave->uid));
                $params['ush'] = G::getHeadimg($Slave->uid);
                $params['pos'] = $Slave->status;
                include './templates/rankList-item.phtml';
            }
        }
    }

    public function pushMySlaves() {
        $_re = $this->MYSQL_HANDER->query("SELECT al.uid,ac.status FROM `app_codersale_link` al INNER JOIN `app_codersale_stat` ac ON al.uid = ac.uid WHERE al.master = $this->uid ORDER BY ac.status DESC;");
        if (mysql_num_rows($_re) !== 0) {
            while ($Slave = mysql_fetch_object($_re)) {
                $params['uid'] = $Slave->uid;
                $params['usn'] = urldecode(G::getUserName($Slave->uid));
                $params['ush'] = G::getHeadimg($Slave->uid);
                $params['spc'] = $Slave->status;
                include './templates/my_slave.phtml';
            }
        }
    }

    public function pushSlavesFrees() {
        $_re = $this->MYSQL_HANDER->query("SELECT sf.uid,st.status FROM `app_codersale_free` sf INNER JOIN `app_codersale_stat` st on sf.uid = st.uid WHERE sf.uid <> $this->uid ORDER BY RAND() LIMIT 13;");
        if (mysql_num_rows($_re) !== 0) {
            while ($Slave = mysql_fetch_object($_re)) {
                $params['uid'] = $Slave->uid;
                $params['usn'] = urldecode(G::getUserName($Slave->uid));
                $params['ush'] = G::getHeadimg($Slave->uid);
                $params['status'] = $Slave->status;
                include './templates/slave_free_items.phtml';
            }
        }
    }

    public function pushCommandDy() {
        $_re = $this->MYSQL_HANDER->query("SELECT * FROM `app_codersale_dycc` WHERE `fuid` = $this->uid ORDER BY datetime DESC LIMIT 8;");
        if (mysql_num_rows($_re)) {
            while ($row = mysql_fetch_object($_re)) {
                $params['uid'] = $row->uid;
                $params['usn'] = $row->usn;
                $params['ct'] = $row->ct;
                $params['ush'] = G::getHeadimg($row->uid);
                $params['time'] = G::tTimeFormat_vs($row->datetime);
                include './templates/command_dy.phtml';
            }
        }
    }

    private function hasMaster() {
        $_re = $this->MYSQL_HANDER->query("SELECT COUNT(uid) AS count,master FROM `app_codersale_link` WHERE `uid` = $this->uid GROUP BY master;");
        if (false == $_re || mysql_num_rows($_re) == 0) {
            return false;
        } else {
            $_re = mysql_fetch_array($_re);
            //var_dump($_re);
            if (intval($_re['count']) == 1) {
                return intval($_re['master']);
            } else
                return false;
        }
    }

}

?>
