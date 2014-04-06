<?php

/**
 * Description of RSS_items
 *
 * @author 27tree.com
 */
class RSS_items {

    private $type;
    private $limit;
    private $mysql;
    private $stat = '<span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>';

    public function __construct($type, $limit = 15) {
        $this->type = $type;
        $this->limit = $limit;
        $this->mysql = Conn_mysql::getInstance();
    }

    public function genItemElements() {
        /**
         * @param int $limit 数量限制
         * @return string/xml
         */
        $fun = 'get' . ucfirst($this->type) . 'Data';
        $data = $this->genXMLdata($this->$fun());
        return $data;
    }

    private function getBlogsData() {
        /**
         * @return array
         */
        require ROOT . '/not/class/blog.class.php';
        $SQL = sprintf("SELECT blogid FROM blog_list ORDER BY lastModify DESC LIMIT 0,%s;", $this->limit);
        $re = $this->mysql->query($SQL);
        $data = array();
        while ($row = mysql_fetch_array($re)) {
            $b = new Blog($row['blogid']);
            if ($b->error)
                continue;
            $tpl_data = array(
                'title' => G::article_content_conv($b->getTitle()),
                'description' => $b->getContent(),
                'link' => 'http://www.27tree.com' . $b->getURL()
            );
            array_push($data, $tpl_data);
        }
        return $data;
    }

    private function genXMLdata($array) {
        /**
         * @param array $array
         */
        /**
         * @sample
         * <item>
         * <title></title>
         * <link></link>
         * <description></description>
         * </item>
         */
        $xml = new XMLWriter();

        $xml->openMemory();
        $xml->setIndentString("  ");
        $xml->setIndent(true);

        foreach ($array as $v) {
            $xml->startElement('item');

            $xml->startElement('title');
            $xml->writeCdata($v['title']);
            $xml->endElement();

            $xml->startElement('link');
            $xml->writeRaw($v['link']);
            $xml->endElement();

            $xml->startElement('description');
            $xml->writeCdata($v['description']);
            $xml->endElement();

            $xml->endElement(); // @title
        }
        return $xml->outputMemory();
    }

}

?>
