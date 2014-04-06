<?php
class conver_convlist{
	public function conv($node) {
		$node=strtolower($node);
		$xml_info = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/not/info/convlist.xml');
		$type=$xml_info->xpath("sp[@stype='$node']");
		return (string)$type[0]['desc'];
	}
}