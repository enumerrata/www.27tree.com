<?php

header("Content-Type: application/rss+xml");

define(ROOT, $_SERVER['DOCUMENT_ROOT']);
require './includes/RSS_items.php';
require ROOT . '/mod/Conn_mysql.class.php';
require ROOT . '/mod/G.php';

$rss_info = require './includes/config_rss_info.php';
$channel_type = key_exists($_GET['type'], $rss_info) ? $_GET['type'] : 'blogs';
$channel = $rss_info[$channel_type];
$now = date("D, d M Y H:i:s T");
$xml = new XMLWriter();
$Rss_items = new RSS_items($channel_type);

$xml->openMemory();
$xml->setIndentString("  ");
$xml->setIndent(true);

$xml->startDocument("1.0", "gb2312");

$xml->startElement("rss");
$xml->writeAttribute('version', '2.0');

$xml->startElement('channel');

$xml->startElement('title');
$xml->writeCdata($channel['title']);
$xml->endElement(); // @title

$xml->startElement('description');
$xml->writeCdata($channel['description']);
$xml->endElement(); // @description

$xml->startElement('language');
$xml->writeRaw('zh-cn');
$xml->endElement(); // @language

$xml->startElement('pubDate');
$xml->writeRaw($now);
$xml->endElement(); // @pubDate

$xml->startElement('lastBuildDate');
$xml->writeRaw($now);
$xml->endElement(); // @lastBuildDate

$xml->startElement('docs');
$xml->writeRaw('www.27tree.com');
$xml->endElement(); // @docs

$xml->startElement('managingEditor');
$xml->writeRaw($channel['managingEditor']);
$xml->endElement(); // @managingEditor

$xml->startElement('webMaster');
$xml->writeRaw($channel['webMaster']);
$xml->endElement(); // @webMaster
// --- ITEMS
$xml->writeRaw($Rss_items->genItemElements());
// <<< ITEMS
$xml->endElement(); // @channel
$xml->endElement(); // @rss
$xml->endDocument(); // @xml

echo $xml->outputMemory();
?>