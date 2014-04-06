<?php
class Convertit
{
  private $list;
  public function __construct($list='')
  {
	$this->list=$list;
  }
  public function conv($str)
  {
  	$xmlDoc = new DOMDocument();
  	$xmlDoc->load($this->list);
  	$x = $xmlDoc->documentElement;
    foreach ($x->childNodes as $item)
    {
    	if(strcmp($str,iconv("UTF-8","GB2312",$item->nodeValue))==0)
    	{
    		return $item->nodeName;
    	}
    }
  }
}
?>