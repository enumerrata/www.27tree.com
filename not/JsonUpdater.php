<?php
class JsonUpdater
{
	private $json_path;
	public function __construct($json_path='')
	{
		$this->json_path = $json_path;
	}
	public function update($node,$str,$patten)
	{
		$f=file_get_contents($this->json_path);
		$json=json_decode($f,true);
		switch($patten)
		{
			case '0':
			$json[$node] = iconv("GB2312","UTF-8",$str);
			break;
			case '1':
			$infos=explode('*',$json[$node]);
			$infos[1]=iconv("GB2312","UTF-8",$str);
			$infos=implode('*',$infos);
			$json[$node]=$infos;
			break;
		}
    $json = json_encode($json);
    file_put_contents($this->json_path,$json);
	}
}
?>