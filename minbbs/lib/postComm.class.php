<?php

define(ROOT, $_SERVER['DOCUMENT_ROOT']);
if (!@class_exists(Conn_mysql))
    include_once ROOT . "/mod/Conn_mysql.class.php";
if (!@class_exists(G))
    include_once ROOT . "/mod/G.php";
if (!@class_exists(post))
    include_once ROOT . '/minbbs/post.class.php';

class postComm {

    private $psid;
    private $datetime;

    public function __construct($psid) {
        $this->psid = mysql_escape_string($psid);
        $this->datetime = G::getDatetime();
    }

    public function getDatetime() {
        return $this->datetime;
    }

    public function addComm($fuid, $content) {
        $_comm = array();
        $_comm['fu'] = mysql_escape_string($fuid); //uid_from
        $_comm['ct'] = $content; //content
        $_comm['dt'] = $this->datetime; //date_time
        $_comm['pd'] = $this->psid; //post_id

        $_now = G::getDatetime();
        $mysql = Conn_mysql::getInstance();
        $re = mysql_fetch_array($mysql->query("SELECT DATE_FORMAT(post_date,'%Y-%m-%d') AS DATE FROM bbs_posts WHERE postid = $this->psid;"));
        //$commi = intval($re['commi']) + 1;
        $mysql->query("UPDATE `bbs_posts` SET `commi` = `commi` + 1, `lastModify` = '$_now' WHERE `postid`='$this->psid';");
        $postXmlPath = $_SERVER['DOCUMENT_ROOT'] . "/minbbs/lib/$re[DATE]/data_$this->psid" . "_comm.json";
        if (file_exists($postXmlPath)) {
            $data = json_decode(file_get_contents($postXmlPath), true);
        } else
            $data = array();
        array_push($data, $_comm);
        if (file_put_contents($postXmlPath, json_encode($data))) {
            
            include $_SERVER['DOCUMENT_ROOT'] . '/user/data/UserCommand.class.php';
            $USC = new UserCommand($fuid); //积分增加
            $USC->upCredit(1);
            $USC->upExp(1);
            return true;
        } else
            return false;
    }

    public function addRComm($fuid, $content, $index, $actuid) {
        $post = new post($this->psid, true);
        if (!$post->error) {
            if (false !== $jsonF = json_decode(file_get_contents($post->postCommPath), true)) {
                if (!is_array($jsonF[$index]['sub'])) {
                    $jsonF[$index]['sub'] = array();
                }
                $scomm = array(
                    'fu' => $fuid,
                    'fun' => mysql_escape_string($_COOKIE['username']),
                    'ct' => $content,
                    '2u' => $actuid,
                    '2un' => G::getUserName($actuid),
                    'dt' => $this->datetime
                );
                array_push($jsonF[$index]['sub'], $scomm);
                if (file_put_contents($post->postCommPath, json_encode($jsonF))) {
                    include $_SERVER['DOCUMENT_ROOT'] . '/user/data/dy_controlor.php';

                    require_once ROOT . '/minbbs/data/bbs_stat_commander.class.php';
                    $Bsc = new bbs_Stat_command();
                    $Bsc->update_BSMData(bbs_Stat_command::BSM_DT_REP);
                    //更新统计数据

                    $dy = new dy_controlor($actuid);
                    $post = new post($this->psid);
                    // "%e6%b8%b8%e5%ae%a2" 表示游客，如果是游客，写入uid=0。
                    @$dy->pushAmpDy($fuid == '游客' ? 0 : $fuid, dy_controlor::AMP_BBS, $this->psid, $post->getTitle(), $post->getURL(), $content, $this->datetime);
                    //更新个人中心动态
                    return array('s' => true, '2un' => $scomm['2un']);
                } else
                    return false;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}

?>
