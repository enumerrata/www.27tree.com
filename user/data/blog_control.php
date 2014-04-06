<?php
/*文件已经废弃*/

include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';

interface Blog_controlor {

    public function add_Blog($uid, $title, $content, $type);

    public function delete_Blog($blogid);

    public function Alter_Blog();

    public function Map_to_Font($blogid);
}

class blog_control extends Conn_mysql implements Blog_controlor {

    /**
     * 所有博客逻辑在此完成
     * @author koodo
     */
    public function __construct() {
        parent::getInstance();
    }

    private function RefreshBlogNum($uid) {
        self::query("UPDATE client_link set art_num = (SELECT count(blogid) from blog_list WHERE uid = $uid) WHERE uid = $uid;");
    }

    public function add_Blog($uid, $title, $content, $type) {
        /**
         * 新增博客
         *
         */
        include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/dy_controlor.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/user/data/UserCommand.class.php';

        $_date = G::getDate();

        $SQL = sprintf('INSERT INTO `blog_list` (`uid`, `lastModify`, `datetime`, `type`) VALUES (%s, NOW(), NOW(), %s);', $uid, $type);

        $contentx = mb_substr(strip_tags($content), 0, 120, 'utf-8');

        if (!self::query($SQL))
            return false;

        $_re = mysql_fetch_array(self::query("SELECT blogid AS lastId FROM blog_list ORDER BY blogid DESC LIMIT 1;"));
        $blogId = intval($_re['lastId']);
        $path = $_SERVER['DOCUMENT_ROOT']
                . DIRECTORY_SEPARATOR
                . 'not'
                . DIRECTORY_SEPARATOR
                . 'blog_file'
                . DIRECTORY_SEPARATOR
                . $_date;

        if (!is_dir($path))
            mkdir($path, 0744);

        $path .= DIRECTORY_SEPARATOR . sprintf('blog_%s.xml', $blogId);

        $xml = new XMLWriter();

        $xml->openURI($path);
        $xml->setIndentString("  ");
        $xml->setIndent(true);
        $xml->startDocument("1.0", "UTF-8");
        $xml->startElement("root");

        $xml->startElement("title");
        $xml->writeRaw("<![CDATA[" . $title . "]]>");
        $xml->endElement(); //title

        $xml->startElement("content");
        $xml->writeRaw("<![CDATA[" . $content . "]]>");
        $xml->endElement(); //content

        $xml->startElement("contentx");
        $xml->writeRaw("<![CDATA[" . $contentx . "]]>");
        $xml->endElement(); //content

        $xml->startElement("tags");
        $xml->writeRaw("_null_"); // @ TODO
        $xml->endElement(); //tags

        $xml->startElement("parseVersion");
        $xml->writeRaw("1.1"); // @ TODO
        $xml->endElement(); //tags

        $xml->endElement(); //root
        $xml->endDocument(); //document

        @$xml->flush();

        @self::query("UPDATE client_stat SET blog_count = blog_count + 1 WHERE uid = $_re[uid];");

        $dy = new dy_controlor($uid);
        $dy->pushBlogSubmitDy($blogId, $title, $contentx, date("Y-m-d H:i:s"), "/blog/$_date/content_$blogId.html");

        $USC = new UserCommand($uid);
        $USC->upCredit(10, UserCommand::HIS_NBLOG);
        $USC->upExp(2);
        return array(
            's' => 1,
            'url' => "/blog/$_date/content_$blogId.html",
            'blogid' => $blogId
        );
    }

    public function delete_Blog($blogid) {
        /**
         * @param int $blogid 博客id
         * @return boolean
         * @TODO 文件删除优化
         */
        $_blog = new Blog($blogid);
        $path = $_blog->getPath();

        @self::query("DELETE FROM blog_list WHERE blogid = $blogid;");
        @self::query("UPDATE client_stat SET blog_count = blog_count - 1 WHERE uid = $_re[uid];");
        @unlink($path);

        return TRUE;
    }

    public function Alter_Blog() {

    }

    public function Comment_Blog($fuid, $content, $blogid) {
        $_comm = array();
        $_comm['fu'] = $fuid; //uid_from
        $_comm['ct'] = $content; //content
        $_comm['dt'] = G::getDatetime();
        //$_comm['pd'] = $blogid; //post_id

        $_blog = new Blog($blogid);
        $_path = str_replace(".xml", ".json", $_blog->getPath());

        G::setCommI($blogid, intval($_blog->getCommi()) + 1, 1);

        if (file_exists($_path)) {
            $data = json_decode(file_get_contents($_path), true);
        } else
            $data = array();

        array_push($data, $_comm);

        if (file_put_contents($_path, json_encode($data)))
            return true;
        else
            return false;
    }

    public function Map_to_Font($blogid) {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';

        $b = new Blog($blogid);
        $path = G::genArtRandId();
        $_now = G::getDatetime();
        $sql = "INSERT INTO artlist (path_artlist, type_artlist, uid, date_artlist, stype_artlist, lastModify, blink)
                  VALUES ('$path', '" . $b->getType() . "', " . $b->getUid() . ", '" . $_now . "', '" . $b->getStype() . "', '" . $_now . "', $blogid);";

        self::query($sql);

        G::upCredit($b->getUid(), 5);

        $json_data = array(
            "author" => G::getUserName($b->getUid()),
            "uid" => $b->getUid(),
            "type" => $b->getType(),
            "stype" => $b->getStype(),
            "date" => $b->getSubmit_datetime(),
            "lastModify" => $b->getLastModify(),
            "title" => $b->getTitle(),
            "path" => $path . ".xml",
            "contentx" => $b->getContentx(),
            "from_url" => ""
        );

        $json = json_encode($json_data);

        $path_log = $_SERVER['DOCUMENT_ROOT']
                . DIRECTORY_SEPARATOR . 'not'
                . DIRECTORY_SEPARATOR . 'file'
                . DIRECTORY_SEPARATOR . $b->getType()
                . DIRECTORY_SEPARATOR . $b->getSubmit_date()
                . DIRECTORY_SEPARATOR;

        if (!is_dir($path_log))
            mkdir($path_log, 0755);

        //file_put_contents($path_log . $path . '.json', $json);

        $doc = new DOMDocument();
        $doc->formatOutput = true;
        $doc->load($_SERVER['DOCUMENT_ROOT'] . '/not/file/sample.xml');
        $doc->getElementsByTagName('title')->item(0)->firstChild->nodeValue = $b->getTitle();
        $doc->getElementsByTagName('content')->item(0)->firstChild->nodeValue = $b->getContent();
        $doc->getElementsByTagName('json-link')->item(0)->firstChild->nodeValue = "$path_log$path.json";
        //$doc->save($path_log . $path . '.xml');

        self::query("UPDATE `blog_list` SET `upfont`=1 WHERE `blogid`='$blogid';");
    }

}

?>
