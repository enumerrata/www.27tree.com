<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/Blog.php';

interface Blog_controlor {

    /**
     * @desc 接口声明 修改参数记得修改接口参数列表 否则出错!
     */
    public function add_Blog($uid, $title, $content, $type);

    public function delete_Blog($blogid);

    public function Alter_Blog($bid, $newParam = array());

    public function Map_to_Font($blogid);
}

class blog_control extends Conn_mysql implements Blog_controlor {
    /**
     * 所有博客逻辑在此完成
     * @author koodo
     */

    const BLOG_ORIGIN = 1;
    const BLOG_TRANSFER = 0;

    public function __construct() {
        parent::getInstance();
    }

    private function RefreshBlogNum($uid) {
        self::query("UPDATE client_link set art_num = (SELECT count(blogid) from blog_list WHERE uid = $uid) WHERE uid = $uid;");
    }

    public function add_Blog($uid, $title, $content, $type, $origin = self::BLOG_TRANSFER) {
        /**
         * 新增博客
         * @param int $uid
         * @param string $title
         * @param text $content
         * @param int $type
         */
        include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/sns/Dy.class.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/UserCommand.class.php';

        $uid = intval($uid);
        $_date = G::getDate();

        // todo PDO
        $SQL = sprintf('INSERT INTO `blog_list` (`uid`, `lastModify`, `datetime`, `type`, `origin`) VALUES (%s, NOW(), NOW(), %s, %s);', $uid, $type, $origin);

        $contentx = trim(mb_substr(strip_tags($content), 0, 120, 'utf-8'));

        if (!self::query($SQL))
            return false;

        $_re = mysql_fetch_array(self::query("SELECT blogid AS lastId FROM blog_list ORDER BY blogid DESC LIMIT 1;")); // todo pdo last insert
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

        $URL = "/blog/$_date/content_$blogId.html";

        // 动态推送
        $dy = new Dy($uid); // 个人中心动态管理类
        $dy->Push(Dy::DYTYPE_SMBLOG, array(
            'blogid' => $blogId,
            'content' => $contentx,
            'title' => $title,
            'url' => $URL
        ));

        $USC = new UserCommand($uid);
        $USC->upCredit(10, UserCommand::HIS_NBLOG);
        $USC->upExp(2);
        return array(
            's' => 1,
            'url' => $URL,
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

    public function Alter_Blog($bid, $newParam = array()) {
        /**
         * @desc 修改博客文章
         * @param int $bid
         * @param array $newParam
         * @return boolean TRUE | FLASE
         */
        $SQL = sprintf("SELECT `datetime` FROM `blog_list` WHERE `blogid` = %s;", $bid);

        $re_datetime = self::query($SQL);

        if (FALSE !== $re_datetime) {
            $Datetime = mysql_fetch_array($re_datetime);
            $Datetime = preg_replace("/ \d{2}:\d{2}:\d{2}/i", "", $Datetime['datetime']);

            $FilePath = Blog::Get_blogFilePath($Datetime, $bid);
            if (is_file($FilePath)) {
                $xml = simplexml_load_file($FilePath);
                $query = $xml->xpath('//root');

                # Data Alternation
                $newParam['title'] !== NULL && $query[0]->title = $newParam['title'];
                $newParam['content'] !== NULL && $query[0]->content = $newParam['content'];
                $newParam['content'] !== NULL && $query[0]->contentx = mb_substr(strip_tags($newParam['content']), 0, 120, 'utf-8');

                # save Blog Xml File
                return $xml->asXML($FilePath);
            } else
                return FALSE;
        } else {
            return FALSE;
        }
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

    public function getBlogList_byUID($uid, $pgi = 0, $pgl = 15) {
        /**
         * @param int $uid 用户id
         * @param int $pgi 页码
         * @param int $pgl 每页显示基数
         */
        $uid = (int) mysql_escape_string($uid);

        // 越界检查
        $pgl < 1 && $pgl = 1;
        $pgi < 0 && $pgi = 0;

        $limit = sprintf('%s,%s', $pgi * $pgl, $pgl);
        $SQL = sprintf('SELECT blogid FROM blog_list WHERE uid = %s ORDER BY blogid DESC LIMIT %s;', $uid, $limit);

        $re = self::query($SQL);

        $data_re = array();

        while ($row = mysql_fetch_array($re)) {
            $_b = new Blog($row['blogid']);
            if ($_b->error)
                continue;
            array_push($data_re, array(
                'bid' => $row['blogid'],
                'title' => $_b->getTitle(),
                'datetime' => $_b->getDatetime(true),
                'url' => $_b->getURL(),
                'ctx' => mb_substr(strip_tags($_b->getContentx()), 0, 100, 'utf-8')
            ));
        }

        return $data_re;
    }

}

?>
