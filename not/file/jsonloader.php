<?php
$strs = file_get_contents('./c/s.json');
//$strs = iconv("GB2312","UTF-8",$strs);
$json = json_decode($strs,true);
$json['title'] = iconv("GB2312","UTF-8","ÄãÃÃ°¡°¡gbk×ªutf8²Ùµ°");
$json['path'] = "xxss.xml";
$json['readInfo'] = "10*15";
$json['date'] = "2012-3-8-12:54";
$json = json_encode($json);
file_put_contents('./c/s.json',$json);
?>



