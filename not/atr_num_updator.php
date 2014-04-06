<?php
require_once('../mod/con_mysql_query.php');
/**
 * @author KOODO
 *
 */
class Atr_num_updator
{
	private $type;
	public $xml_path="./info/atr_num.xml";
	public function __construct($type_to_update)
	{
		$this->type=$type_to_update;
	}
	public function update()
	{
		unlink("../cache/index_font.html");
		$mysql=new con_mysql_query();
		$result_count=$mysql->query("SELECT COUNT(*) AS count FROM artlist WHERE type_artlist='".$this->type."';");
		while(@$row_count = mysql_fetch_array($result_count)) $count=$row_count['count'];
		$doc=new DOMDocument();
    $doc->formatOutput=true;
    $doc->load($this->xml_path);
    $doc->getElementsByTagName($this->type)->item(0)->firstChild->nodeValue=$count;
    $doc->save($this->xml_path);
	}
}
?>