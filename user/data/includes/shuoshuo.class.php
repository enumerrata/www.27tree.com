<?php

class TcInitException extends Exception {

}

class Shuoshuo {

    private $sid;
    private $uid;
    private $content;
    private $datetime;
    private $usn;
    private $ampuid;

    public function __construct($sid, $mysql = false) {
        if ($this->sid < 0 || !filter_var($sid, FILTER_VALIDATE_INT))
            throw new TcInitException;

        $this->sid = $sid;

        $_mysql = $mysql instanceof Conn_mysql ? $mysql : Conn_mysql::getInstance();

        $query_cn = $_mysql->query("SELECT ss.content,ss.uid,cl.username AS usn,ss.datetime FROM shuoshuo ss LEFT JOIN client cl ON ss.uid = cl.uid WHERE sid = $sid;");

        if (FALSE !== $query_cn) {
            $_Re = mysql_fetch_object($query_cn);
            $this->uid = $_Re->uid;
            $this->content = $_Re->content;
            $this->datetime = $_Re->datetime;
            $this->usn = $_Re->usn;
        } else {
            throw new TcInitException;
        }
    }

    public function getSid() {
        return $this->sid;
    }

    public function getContent() {
        return $this->content;
    }

    public function getDateTime() {
        return $this->datetime;
    }

    public function getUserName() {
        return $this->usn;
    }

    public function getUID() {
        return $this->uid;
    }

}