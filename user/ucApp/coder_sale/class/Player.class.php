<?php
class Player{
    
    private $uid;
    private $username;
    
    private $MY_SQL;
    
    private $asset;
    private $cash;
    private $status;
    
    public function __construct($uid) {
        $this->uid = $uid;
        $this->MY_SQL = Conn_mysql::getInstance();
        $this->loadData();
    }
    
    public function getAsset(){
        return $this->asset;
    }
    
    private function loadData(){
        $_re = $this->MY_SQL->query("SELECT * FROM `app_codersale_stat` WHERE `uid` = $this->uid;");
        if(false !== $_re){
            $Slave = mysql_fetch_object($_re);
        }
    }
}
?>
