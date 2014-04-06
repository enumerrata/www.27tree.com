<?php

define("SP", DIRECTORY_SEPARATOR);
define(ROOT, $_SERVER['DOCUMENT_ROOT']);

include_once ROOT . '/mod/G.php';
include_once ROOT . '/mod/Conn_mysql.class.php';
include dirname(__FILE__) . '/../Qa_grobal.php';

/**
 * 处理问题发布，问题修改，答案提交。各种数据逻辑
 */
class Question_manager {

    public static function newQuestion($uid, $title, $content, $type) {
        /**
         * @desc 发表问题
         * @param int $uid
         * @param string $title
         * @param string $content
         * @prarm int $type
         */
        include_once ROOT . '/mod/safe.php';
        include_once ROOT . '/minbbs/include/bbs_stat.php';
        include_once ROOT . '/user/data/includes/sns/Dy.class.php';

        if (!safe::defend_string($title))
            return false;

        $mysql = Conn_mysql::getInstance();
        $sql = sprintf("INSERT INTO `qa_question_list` (`uid`, `title`, `datetime`, `tags`) VALUES (%s, '%s', %s, '%s');", $uid, $title, "NOW()", $type);
        #echo $sql;
        if (false !== $mysql->query($sql)) {
            // xml-w 文件写入
            $Qid = (int) $mysql->getLastId();
            $addon_id = Qa_G::getQa_ssd($Qid);
            $base_path = $_SERVER['DOCUMENT_ROOT'] . SP . 'q_a' . SP . 'data' . SP;
            if (!is_dir($base_path . $addon_id))
                mkdir($base_path . $addon_id, 0744);
            $xml = new XMLWriter();
            $xml->openURI($base_path . $addon_id . SP . "$Qid.xml");
            $xml->setIndentString("  ");
            $xml->setIndent(true);
            $xml->startDocument("1.0", "UTF-8");
            $xml->startElement("root");

            $xml->startElement("title");
            $xml->writeCData($title);
            $xml->endElement(); //title

            $xml->startElement("content");
            $xml->writeCData($content);
            $xml->endElement(); //content

            $xml->startElement("tags");
            $xml->writeRaw($type);
            $xml->endElement(); //tags

            $xml->startElement("parseVersion");
            $xml->writeRaw("1.1"); // @ TODO
            $xml->endElement(); //tags

            $xml->endElement(); //root
            $xml->endDocument(); //document

            $xml->flush(); //输出xml文件

            bbs_stat::upCountData_bySID(0);
            $url = '/q_a/question/' . $addon_id . '-' . $Qid . '.html';
            $dy = new Dy($uid); // 个人中心动态管理类
            $dy->Push(Dy::DYTYPE_SMQS, array(
                'qid' => $Qid,
                'content' => trim(mb_substr(strip_tags($content), 0, 120, 'utf-8')),
                'title' => $title,
                'url' => $url
            ));
            return array('url' => $url);
        } else
            return false;
    }

    public static function answerQuestion($qid, $fuid, $content) {
        /**
         * @desc 发表问题回复
         * @param int $qid
         * @param int $fuid
         * @param string $content
         */

        include $_SERVER['DOCUMENT_ROOT'] . '/mod/safe.php';

        if (!safe::defend_string($qid))
            return false;
        if (!safe::defend_string($fuid))
            return false;
        if (!safe::defend_string($content))
            return false;

        $fusn = G::getUserName($fuid);
        $SSid = Qa_G::getQa_ssd($qid);
        $ans_Json_path = $_SERVER['DOCUMENT_ROOT'] . SP . 'q_a' . SP . 'data' . SP . $SSid . SP . "ansi_$qid.json";
        if (is_file($ans_Json_path)) {
            $Ans_data = json_decode(file_get_contents($ans_Json_path), true);
        } else {
            $Ans_data = array();
        }

        $_data = array('uid' => $fuid, 'usn' => $fusn, 'content' => $content, 'dt' => G::getDatetime());
        array_push($Ans_data, $_data); //入栈
        //保存数据
        if (file_put_contents($ans_Json_path, json_encode($Ans_data))) {
            Qa_G::upAnsi($qid);

            // 动态推送
            include_once $_SERVER['DOCUMENT_ROOT'] . '/user/data/includes/sns/Dy.class.php';

            $mysql = Conn_mysql::getInstance();
            $Data = @mysql_fetch_array($mysql->query(sprintf("SELECT `title`,`uid` FROM qa_question_list WHERE id = %s;", mysql_escape_string($qid))));

            if ($fuid != $Data['uid']) {
                $dy = new Dy($Data['uid']); // 个人中心动态管理类
                $dy->Push(Dy::DYTYPE_ANSQS, array(
                    'fuid' => $fuid,
                    'qid' => $qid,
                    'answer' => $content,
                    'title' => $Data['title'],
                    'url' => "/q_a/question/$SSid.html"
                ));
            }

            return true;
        } else
            return false;
    }

}
