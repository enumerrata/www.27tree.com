<?php

if (!class_exists('Conn_mysql'))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
if (!class_exists('G'))
    include $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';

class dy_controlor extends Conn_mysql {
    /**
     * @desc 个人中心动态处理 添加动态 删除动态 获取动态
     */

    private $uid;
    private $fuid;

    const LEV = 0;
    const COMM = 1;
    const AMP_BLA = "amp-bla";
    const AMP_BOOK = "amp-book";
    const AMP_UCENTER = "amp-uc";
    const AMP_BBS = "amp-bbs";
    const COMM_BLA = "comm-bla";
    const COMM_BOOK = "comm-book";
    const DY_ALL = 0;
    const DY_VIS = 1;

    public function getUid() {
        return $this->uid;
    }

    public function getFuid() {
        return $this->fuid;
    }

    public function __construct($uid) {
        date_default_timezone_set('PRC');
        $this->uid = $uid;
        parent::getInstance();
    }

    public function sdDelDy($dyid) {
        if (self::query("DELETE FROM `dy_acc` WHERE `acid`='$dyid';")) {
            return true;
        } else
            return false;
    }

    public function delDy($dyid) {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/validate_cookie.class.php';

        $validate = new validate_cookie();

        if ($validate->check($_COOKIE['username'], $_COOKIE['_uid'])) {
            $_return = array();
            if (self::query("DELETE FROM `dy_acc` WHERE `acid`='$dyid';")) {
                $_return['s'] = '1';
            } else
                $_return['s'] = '0';
        } else
            $_return['s'] = '0';
        unset($validate);
        print_r(json_encode($_return));
    }

    public function del_allDys() {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/validate_cookie.class.php';
        $validate = new validate_cookie();

        if ($validate->check($_COOKIE['username'], $_COOKIE['_uid'])) {
            $_return = array();
            if (self::query("DELETE FROM `dy_acc` WHERE `uid`='$_COOKIE[_uid]';")) {
                $_return['s'] = '1';
            } else
                $_return['s'] = '0';
        } else
            $_return['s'] = '0';
        unset($validate);
        print_r(json_encode($_return));
    }

    public function getDys($mod = dy_controlor::DY_ALL, $page = 0) {
        $_return = array();
        $_qc_config = include $_SERVER['DOCUMENT_ROOT'] . '/user/config/uc_config.php';
        // 块分页
        $LIMIT = sprintf(' LIMIT %s,%s', $page * $_qc_config['dy_page_lite'], $_qc_config['dy_page_lite']);

        if ($mod == dy_controlor::DY_ALL) {
            // 这sql写得累死
            $sql = str_replace('@uid', self::getUid(), "SELECT DISTINCT e.*,musn2.username AS usn,musn.username AS musn FROM dy_acc AS e
INNER JOIN client AS musn ON musn.uid = e.uid AND (musn.uid IN (SELECT target AS uid FROM client_link_friend WHERE uid = @uid) OR musn.uid = @uid)
LEFT JOIN client AS musn2 ON e.fuid <> 0 AND e.fuid IS NOT NULL AND musn2.uid = e.fuid
WHERE (musn.uid <> @uid && e.type IN ('ss','blogsub')) OR (musn.uid = @uid) GROUP BY e.time DESC$LIMIT;");
            //echo $sql;
        } else {
            $sql = "
               SELECT e.*,
               CASE
                 WHEN e.fuid IS NOT NULL THEN
                     (SELECT c.username FROM client AS c WHERE c.uid = e.fuid)
                 ELSE '_null_'
               END username,(SELECT cx.username FROM client AS cx WHERE cx.uid = e.uid) AS mUsn
               FROM dy_acc AS e WHERE (e.uid = " . self::getUid() . ") AND (e.type = 'ss' OR e.type = 'lev' OR e.type = 'blogsub') GROUP BY e.time DESC$LIMIT;";
        }
        $res = self::query($sql);
        if (mysql_num_rows($res) == 0) {
            return $_return;
        }
        while ($row = mysql_fetch_array($res)) {
            $tmpa = array();
            $tmpa['uid'] = $row['uid'];
            $tmpa['fuid'] = $row['fuid'];
            $tmpa['type'] = $row['type'];
            $tmpa['dy-id'] = $row['acid'];
            $tmpa['time'] = $row['time'];
            $tmpa['usn'] = $row['usn'];
            $tmpa['musn'] = $row['musn'];
            switch ($row['type']) {
                case Dy::DYTYPE_TC://说说发表
                    $tmpa['usn'] = $row['musn'];
                    $tmpa['uid'] = $row['uid'];
                    $tmpa['content'] = $row['content'];
                    break;
                case 'lev'://留言
                    $tmpa['fusn'] = $row['fuid'] == -1 ? '游客' : $row['usn'];
                    $tmpa['fuid'] = $row['fuid'];
                    $tmpa['content'] = G::article_content_conv($row['content']);
                    break;
                case 'artsub'://发表文章 @todo
                    $tmpa['url'] = $row['art_url'];
                    $tmpa['artid'] = $row['artid'];
                    $tmpa['art_title'] = $row['art_title'];
                    $tmpa['content'] = $row['content'];
                    break;
                case 'blogsub'://发表博客
                    $tmpa['musn'] = $row['musn'];
                    $tmpa['url'] = $row['art_url'];
                    $tmpa['artid'] = $row['artid'];
                    $tmpa['art_title'] = $row['art_title'];
                    $tmpa['content'] = $row['content'];
                    break;
                case 'amp-bbs'://被@到
                case 'amp-uc':
                case 'amp-bla':
                case 'amp-book':
                    $tmpa['fusn'] = $row['fuid'] == -1 ? '游客' : $row['usn'];
                    $tmpa['fuid'] = $row['fuid'];
                    $tmpa['url'] = $row['art_url'];
                    $tmpa['artid'] = $row['artid'];
                    $tmpa['art_title'] = $row['art_title'];
                    $tmpa['content'] = G::article_content_conv($row['content']);
                    break;
                case 'comm-bla':
                case 'comm-book'://书评论
                    $tmpa['url'] = $row['art_url'];
                    $tmpa['art_title'] = $row['art_title'];
                    $tmpa['fusn'] = $row['fuid'] == -1 ? '游客' : $row['usn'];
                    $tmpa['fuid'] = $row['fuid'];
                    $tmpa['content'] = G::article_content_conv($row['content']);
                    break;
                case 'fapp':
                    $tmpa['fuid'] = $row['fuid'];
                    $tmpa['fusn'] = $row['fuid'] == -1 ? '游客' : $row['usn'];
                    break;
                case 'newf':
                    $tmpa['usn'] = $row['musn'];
                    $tmpa['fusn'] = $row['fuid'] == -1 ? '游客' : $row['usn'];
                    break;
            }
            array_push($_return, $tmpa);
        }
        return $_return;
    }

    public function pushCommTc($fuid, $sid, $content, $time) {
        if (self::query("INSERT INTO `dy_acc` (`uid`, `fuid`, `type`, `content`, `time`) VALUES ($this->uid, $fuid, 'lev', '$content', '$time');"))
            return true;
        else
            return false;
    }

    public function pushLevDy($fuid, $content, $time) {
        if (self::query("INSERT INTO `dy_acc` (`uid`, `fuid`, `type`, `content`, `time`) VALUES ($this->uid, $fuid, 'lev', '$content', '$time');"))
            return true;
        else
            return false;
    }

    public function pushAmpDy($fuid, $ampType, $relid, $title, $url, $content, $time) {
        if (self::query("INSERT INTO `dy_acc` (`uid`, `fuid`, `type`, `artid`, `content`, `time`, `art_title`, `art_url`) VALUES ($this->uid, $fuid, '$ampType', $relid, '$content', '$time', '$title', '$url');"))
            return true;
        else
            return false;
    }

    public function pushShuoShuoDy($content, $time) {
        if (self::query("INSERT INTO `dy_acc` (`uid`, `fuid`, `type`, `content`, `time`) VALUES ($this->uid, 0, 'ss', '$content', '$time');"))
            return true;
        else
            return false;
    }

    public function pushCommDy($fuid, $commType, $artid, $arttitle, $url, $content, $time) {
        if (self::query("INSERT INTO `dy_acc` (`uid`, `fuid`, `type`, `artid`, `content`, `time`, `art_title`, `art_url`) VALUES ($this->uid, $fuid, '$commType', $artid, '$content', '$time', '$arttitle', '$url');"))
            return true;
        else
            return false;
    }

    public function pushFriendAppDy($fuid, $time) {
        if (self::query("INSERT INTO `dy_acc` (`uid`, `fuid`, `type`,`time`) VALUES ($this->uid, $fuid, 'fapp', '$time');"))
            return true;
        else
            return false;
    }

    public function pushArtSubmitDy($artid, $arttitle, $contentx, $time, $url) {
        $contentx = strip_tags($contentx);
        if (self::query("INSERT INTO `dy_acc` (`uid`, `type`, `artid`, `content`, `time`, `art_title`, `art_url`) VALUES ($this->uid,'artsub', $artid, '$contentx', '$time', '$arttitle', '$url');"))
            return true;
        else
            return false;
    }

    public function pushBlogSubmitDy($artid, $arttitle, $contentx, $time, $url) {
        $contentx = strip_tags($contentx);
        $SQL = "INSERT INTO `dy_acc` (`uid`, `type`, `artid`, `content`, `time`, `art_title`, `art_url`) VALUES ($this->uid,'blogsub', $artid, '$contentx', '$time', '$arttitle', '$url');";
        if (self::query($SQL))
            return true;
        else
            return false;
    }
}

