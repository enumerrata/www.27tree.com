<?php

if (!class_exists(Conn_mysql))
    require $_SERVER ['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
if (!class_exists(UserCommand))
    require $_SERVER ['DOCUMENT_ROOT'] . '/user/data/UserCommand.class.php';
if (!class_exists(Shuoshuo))
    require $_SERVER ['DOCUMENT_ROOT'] . '/user/data/includes/shuoshuo.class.php';

class ShuoShuoC {

    const tc_comm_pageLite = 15;

    public static function pushNewShuoShuo($uid, $content) {
        /**
         * @desc
         * @todo usn_free
         * @param int $uid
         * @param string $content LIMIT 120 UTF-8
         * @return boolean
         */
        $mysql = Conn_mysql::getInstance(Conn_mysql::bulid_pdo);

        $content = mb_substr(stripslashes($content), 0, 120, 'utf-8');

        $usn = urldecode($_COOKIE ['username']);

        // PDO
        $sta = $mysql->prepare("INSERT INTO `shuoshuo` (`uid`, `usn`, `content`, `datetime`, `lev`) VALUES (?,?,?, NOW(),0);");

        $sta->bindValue(1, $uid, PDO::PARAM_INT);
        $sta->bindValue(2, $usn, PDO::PARAM_STR);
        $sta->bindValue(3, $content, PDO::PARAM_STR);

        if (FALSE !== $sta->execute()) {
            include_once $_SERVER ['DOCUMENT_ROOT'] . '/user/data/includes/sns/Dy.class.php';
            $dy = new Dy($uid);
            $dy->Push(Dy::DYTYPE_TC, array('sid' => $mysql->lastInsertId(), 'content' => $content));
            $usc = new UserCommand($uid);
            $usc->upExp(1);
            $usc->upCredit(5, UserCommand::HIS_SS);
            return true;
        } else {
            return false;
        }

        /* if ($mysql->query("INSERT INTO `shuoshuo` (`uid`, `usn`, `content`, `datetime`, `lev`) VALUES ($uid, '$usn','$content', NOW(), 0);")) {
          include $_SERVER ['DOCUMENT_ROOT'] . '/user/data/dy_controlor.php';
          date_default_timezone_set('PRC');
          $dy = new dy_controlor($uid);
          $dy->pushShuoShuoDy($content, date("Y-m-d H:i:s"));
          $usc = new UserCommand($uid);
          $usc->upExp(1);
          $usc->upCredit(5, UserCommand::HIS_SS);
          return ture;
          } else
          return false; */
    }

    public static function getShuoShuos($uid, $limit = 10) {
        /**
         * @param int $uid
         * @param int $limit
         */
        $mysql = Conn_mysql::getInstance();
        $_Re = $mysql->query("SELECT sid FROM shuoshuo WHERE uid = $uid ORDER BY datetime DESC LIMIT $limit;");
        if (false !== $_Re && mysql_num_rows($_Re) !== 0) {
            $arr = array();
            if ($limit == 1) {
                $row = mysql_fetch_array($_Re);
                return new Shuoshuo($row ['sid']);
            } else {
                while (@$row = mysql_fetch_array($_Re)) {
                    array_push($arr, new Shuoshuo($row ['sid']));
                }
            }
            return $arr;
        } else
            return null;
    }

    public static function comm_tc($uid, $sid, $content) {
        /**
         * @param int $uid 评论者
         * @param int $sid 吐槽ID
         * @param string $content 评论内容
         * @return boolean
         *
         * @TODO param check !!
         *
         */
        $uid = intval(mysql_escape_string($uid));
        $sid = intval(mysql_escape_string($sid));
        $mysql = Conn_mysql::getInstance(Conn_mysql::bulid_pdo);

        $p_cmtc = $mysql->prepare("INSERT INTO `ss_comment` (`sid`, `uid`, `content`, `datetime`) VALUES (?,?,?,NOW());");

        $p_cmtc->bindValue(1, $sid, PDO::PARAM_INT);
        $p_cmtc->bindValue(2, $uid, PDO::PARAM_INT);
        $p_cmtc->bindValue(3, $content, PDO::PARAM_STR);

        if (FALSE !== $p_cmtc->execute()) {
            $re_uid = $mysql->query("SELECT uid FROM shuoshuo WHERE sid = $sid;");
            $re_uid = $re_uid->fetch(PDO::FETCH_ASSOC);
            if ($re_uid['uid'] != $uid) {
                include_once $_SERVER ['DOCUMENT_ROOT'] . '/user/data/includes/sns/Dy.class.php';
                $dy = new Dy($re_uid['uid']);
                $dy->Push(Dy::DYTYPE_COMMTC, array('sid' => $sid, 'fuid' => $uid, 'content' => $content));
            }
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public static function get_tc_comm($sid, $param = array()) {
        /**
         * @param int $sid
         * @param int $page'
         * @return boolean
         */
        if ($sid < 0 || !filter_var($sid, FILTER_VALIDATE_INT))
            return FALSE;

        $param['page'] = isset($param['page']) ? $param['page'] < 0 ? 0 : $param['page']  : 0;

        $param['ush_dem'] = isset($param['ush_dem']) ? 45 : $param['ush_dem'];

        $param['page_lite'] = isset($param['page_lite']) ? $param['page_lite'] : self::tc_comm_pageLite;

        $mysql = Conn_mysql::getInstance();

        $SQL = sprintf("SELECT
	sm.cid,
	sm.uid,
	sm.content,
	sm.datetime,
	cl.username AS usn FROM ss_comment sm LEFT JOIN client cl ON cl.uid = sm.uid WHERE sid = %s LIMIT %s;", $sid, sprintf('%s,%s', $param['page'] * $param['page_lite'], $param['page_lite']));

        $result = $mysql->query($SQL);

        if (FALSE !== $result) {
            $_return = array();
            while ($row = mysql_fetch_array($result)) {
                $row['ush'] = G::getHeadimg($row['uid'], $param['ush_dem']);
                $row['datetime'] = G::tTimeFormat_vs($row['datetime']);
                array_push($_return, $row);
            }
            return $_return;
        } else {
            return FALSE;
        }
    }

    public static function getCommi($sid) {

        if ($sid < 0 || !filter_var($sid, FILTER_VALIDATE_INT))
            return FALSE;

        $mysql = Conn_mysql::getInstance();
        $SQL = "SELECT COUNT(*) AS count FROM ss_comment WHERE sid = $sid;";

        $result = $mysql->query($SQL);

        if (FALSE !== $result) {
            $result = mysql_fetch_object($result);
            return (INT) $result->count;
        } else {
            return FALSE;
        }
    }

}