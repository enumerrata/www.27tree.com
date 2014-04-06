<?php

/**
 * @author KOODO
 *
 */
class con_mysql_query {

     private $con;
     private $ini;
     private $lastid;

     public function __construct() {
          $this->ini = parse_ini_file('config_itsrcs.php.ini');
          $this->con = @mysql_connect($this->ini['host'], $this->ini['user'], $this->ini['password']);
          mysql_query("SET NAMES 'UTF8'");
          if (!$this->con)
               die('Could not connect: ' . mysql_error());
     }

     public function query($sql) {
          mysql_select_db($this->ini['dbname'], $this->con);
          $result = @mysql_query($sql);
          $this->lastid = mysql_insert_id($this->con);
          return $result;
     }

     public function getLastId() {
          return $this->lastid;
     }

     public function close() {
          mysql_close($this->con);
     }

}