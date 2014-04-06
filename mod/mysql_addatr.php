<?php
class mysql_addatr
{
	private $con;
	private $ini;
	public function __construct()
	{
		$this->ini=parse_ini_file('config_itsrcs.php.ini');
		$this->con = mysql_connect($this->ini['host'],$this->ini['user'],$this->ini['password']);
		mysql_query("SET NAMES 'UTF8'");
		if (!$this->con)die('Could not connect: ' . mysql_error());
	}
	public function query($sql)
	{
		mysql_select_db($this->ini['dbname'],$this->con);
		mysql_query($sql);
		mysql_close($this->con);
	}
}
?>