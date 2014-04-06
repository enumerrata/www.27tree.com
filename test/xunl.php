<?php

$url = 'http://dynamic.cloud.vip.xunlei.com/interface/check_union_url?callback=checkunionurl&from_type=union_mid&url=thunder%3A%2F%2FQUFmdHA6Ly90Z2J1c19uZHM6ZUV2QWZTWGl0WnZ5VHcwY1pyY1dMNVp2bUA2MC4xNzIuMjI4LjI0NDo5OTIxL25kcy81ODAxLTU5MDAvNTgwNS56aXBaWg%3D%3D&tcache=1364222244841';
$purl = parse_url($url, PHP_URL_QUERY);

$url_F = NULL;
parse_str($purl, $url_F);

$request_url = sprintf('http://dynamic.cloud.vip.xunlei.com/interface/check_union_url?callback=checkunionurl&from_type=union_mid&url=%s&tcache=%s', $url_F['url'], time());

$request_header = array('
Accept: */*
User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22
Accept-Encoding: gzip,deflate,sdch
Accept-Language: zh-CN,zh;q=0.8
Accept-Charset: GBK,utf-8;q=0.7,*;q=0.3
Cookie: lx_login=; __xltjbr=1364222199630; _xltj=34a1364222228115b1c; _s34=1365036427517b1364222228115b2bhttp%3A//lixian.vip.xunlei.com/lixian_login.html%3Freferfrom%3Dunion%26ucid%3D32919; lx_referfrom=union; ucid=32919');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $request_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $request_header);

$outp = curl_exec($ch);
$res = explode(',', $outp);
$result_url = str_replace('\'', '', $res[1]);
echo $result_url;
?>