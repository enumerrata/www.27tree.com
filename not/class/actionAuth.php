<?php
class actionAuth {
    private $uid;
    private $fuid;
    public function __construct($uid,$fuid) {
        $this->uid = mysql_real_escape_string($uid);
        $this->fuid = $fuid == NULL ? 0 : mysql_real_escape_string($fuid);
    }
}

?>
