<?php
class add_news_comment
{
	private $xml="./file/comment_news_";
	public function __construct()
	{}
	public function add($type,$com_author,$com_date,$com_content)
	{
		$doc=new DOMDocument();
		$doc->formatOutput=true;
		$doc->load($this->xml.$type.".xml");
		 $count=$doc->getElementsByTagName('num')->item(0)->firstChild->nodeValue;
		 if($count<6) $doc->getElementsByTagName('num')->item(0)->firstChild->nodeValue=$count+1;
		$comment_list=$doc->getElementsByTagName('c')->item(0);
		 $lock=$comment_list->getElementsByTagName('locked')->item(0)->firstChild->nodeValue;
		$newNode=$comment_list->cloneNode(true);
		if($count==6) $comment_list->parentNode->removeChild($comment_list);
		if(strcmp($lock,"true")==0) $comment_list->parentNode->removeChild($comment_list);
		$newNode->getElementsByTagName('locked')->item(0)->firstChild->nodeValue="false";
		$newNode->getElementsByTagName('author-c')->item(0)->firstChild->nodeValue=$com_author;
		$newNode->getElementsByTagName('date-c')->item(0)->firstChild->nodeValue=$com_date;
		$newNode->getElementsByTagName('conf-c')->item(0)->firstChild->nodeValue=$com_content;
		$newNode->getElementsByTagName('url-c')->item(0)->firstChild->nodeValue=$_POST['url'];
		$newNode->getElementsByTagName('title-c')->item(0)->firstChild->nodeValue=$_POST['title'];
		$pend=$doc->getElementsByTagName('comment-list')->item(0);
		$pend->appendChild($newNode);
		$doc->save($this->xml.$type.".xml");
	}
}
?>