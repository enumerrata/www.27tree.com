<?php

/*
  update dy_acc set type = 0 where type = 'ss'
  update dy_acc set type = 6 where type = 'blogsub'
  update dy_acc set type = 2 where type = 'comm-bla'
  update dy_acc set type = 3 where type = 'comm-book'
  delete from dy_acc where type LIKE 'amp%';
  update dy_acc set fuid = 0 where fuid = -1;
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/user/Auth/Auth.php';

class Param_uid_Exception extends Exception {
    # uid 参数错误
}

/**
 * Description of dynamics
 * @desc 个人中心动态处理 添加动态 删除动态 获取动态
 * @author koodo@qq.com
 */
class Dy {

    private $uid;
    private $Auth;
    private $Auth_check = false;
    private $PDO;

    /**
     * 用户发吐槽了
     */

    const DYTYPE_TC = 0;

    /**
     * !吐槽被评论了
     */
    const DYTYPE_COMMTC = 1;

    /**
     * 博客被评论了
     */
    const DYTYPE_COMMBLOG = 2;

    /**
     * 分享的书被评论了
     */
    const DYTYPE_COMMBOOK = 3;

    /**
     * !提问有新回答了
     */
    const DYTYPE_ANSQS = 4;

    /**
     * !分享了一本书
     */
    const DYTYPE_SHAREBOOK = 5;

    /**
     * 发表了博客
     */
    const DYTYPE_SMBLOG = 6;

    /**
     * 发表了新问题
     */
    const DYTYPE_SMQS = 7;

    public function __construct($uid) {
        /**
         * 构造方法
         * @param int $uid
         */
        if (!filter_var($uid, FILTER_VALIDATE_INT)) {
            throw new Param_uid_Exception;
        } else {
            $this->uid = $uid;
            $this->Auth = Auth::getInstance($uid);
            $this->Auth_check = $this->Auth->validate($_COOKIE['fky']);
            $this->PDO = Conn_mysql::getInstance(Conn_mysql::bulid_pdo);
        }
    }

    public function Del($aid) {
        /**
         * 删除指定动态
         * @param int $aid
         */
        if ($this->Auth_check && (!filter_var($aid, FILTER_VALIDATE_INT))) {
            $stm = $this->PDO->prepare("DELETE FROM `dy_acc` WHERE `acid`=?;");
            $stm->bindValue(1, $aid, PDO::PARAM_INT);
            return $stm->execute();
        } else {
            return FALSE;
        }
    }

    public function Get($page = 0) {
        /**
         * 获取动态
         * @param int $uid
         * @param int $page
         */
        $_qc_config = include $_SERVER['DOCUMENT_ROOT'] . '/user/config/uc_config.php';
        // 块分页
        $LIMIT = sprintf(' LIMIT %s,%s', $page * $_qc_config['dy_page_lite'], $_qc_config['dy_page_lite']);

        $SQL = "SELECT
	dy.*,usn1.username AS musn,usn2.username AS usn
FROM
	client_link_friend cl #get follows uid list
RIGHT JOIN dy_acc AS dy on dy.uid = cl.target OR dy.uid = :uid
LEFT JOIN client AS usn1 ON usn1.uid = dy.uid #get main usn
LEFT JOIN client AS usn2 ON usn2.uid = dy.fuid #get sub usn
WHERE
	cl.uid = :uid AND (dy.uid = :uid OR (dy.uid <> :uid AND dy.type IN(0,5,6,7)))
GROUP BY dy.time DESC$LIMIT;";

        /*$SQL = "SELECT
	e.*, musn2.username AS usn,
	musn.username AS musn
FROM
	dy_acc AS e
LEFT JOIN client AS musn ON musn.uid = e.uid
AND (
	musn.uid IN (
		SELECT
			target AS uid
		FROM
			client_link_friend
		WHERE
			uid = :uid
	)
	OR musn.uid = :uid
)
LEFT JOIN client AS musn2 ON e.fuid <> 0 AND musn2.uid = e.fuid
WHERE
	(
		musn.uid <> :uid && e.type IN (0, 7)
	)
OR (musn.uid = :uid)
GROUP BY
	e.time DESC$LIMIT;";*/
        // MYSQL_QUERY RETURNS : usn, musn ...

        $stm = $this->PDO->prepare($SQL);
        $stm->bindParam(':uid', $this->uid, PDO::PARAM_INT);
        #echo $stm->queryString;
        $stm->execute();

        $Result = $stm->fetchAll();

        foreach ($Result AS &$sub) {
            if ($sub['type'] == self::DYTYPE_COMMTC) {
                // 如果是吐槽 获取吐槽内容
                $result = $this->PDO->query(sprintf('SELECT `content` FROM `shuoshuo` WHERE `sid` = %s;', $sub['artid']));
                foreach ($result as $row) {
                    $sub['tcontent'] = $row['content'];
                }
            }
        }

        return $Result;
    }

    public function Push($dyType = self::DYTYPE_TC, $param = array()) {
        /**
         * 添加动态
         * @test 测试文件 >> /test/tc/getDy.php
         * @param int $dyType
         * @param array $param
         */
        switch ($dyType) {

            # 新吐槽 用户动态 @ 4-7 22:22 测试通过
            case self::DYTYPE_TC:
                /**
                 * @param int artid -> $sid 吐槽id
                 * @param String $content 吐槽内容
                 */
                $SQL = "INSERT INTO `dy_acc` (`uid`, `fuid`, `type`, `artid`, `content`, `time`)
                    VALUES (:uid,0,:type,:artid,:content,NOW());";
                $stm = $this->PDO->prepare($SQL);

                $stm->bindParam(':artid', $param['sid'], PDO::PARAM_INT);
                $stm->bindParam(':content', $param['content'], PDO::PARAM_STR);
                break;

            # 吐槽被评论 用户动态 @ 4-7 22:51 测试通过
            case self::DYTYPE_COMMTC:
                /**
                 * @param int artid -> $sid 吐槽id
                 * @param String $comm_content 评论内容
                 * @param int $fuid 评论者uid
                 */
                $SQL = "INSERT INTO `dy_acc` (`uid`, `fuid`, `type`, `artid`, `content`, `time`)
                    VALUES (:uid,:fuid,:type,:artid,:content,NOW());";
                $stm = $this->PDO->prepare($SQL);

                $stm->bindParam(':fuid', $param['fuid'], PDO::PARAM_INT);
                $stm->bindParam(':artid', $param['sid'], PDO::PARAM_INT);
                $stm->bindParam(':content', $param['content'], PDO::PARAM_STR);
                break;

            # 博客和分享的书 被评论 用户动态 @ 4-8 0:18 测试通过
            case self::DYTYPE_COMMBLOG:
            case self::DYTYPE_COMMBOOK:
                /**
                 * @param int artid 文章/书 id
                 * @param String $comm_content 评论内容
                 * @param int $fuid 评论者uid
                 * @param String $title 文章/书 标题
                 * @param String $url 文章/书 URL
                 */
                $SQL = "INSERT INTO `dy_acc` (`uid`, `fuid`, `type`, `artid`, `content`, `time`, `art_title`, `art_url`)
                    VALUES (:uid,:fuid,:type,:artid,:content,NOW(),:title,:url);";
                $stm = $this->PDO->prepare($SQL);

                $stm->bindParam(':fuid', $param['fuid'], PDO::PARAM_INT);
                $stm->bindParam(':artid', $param['id'], PDO::PARAM_INT);
                $stm->bindParam(':content', $param['content'], PDO::PARAM_STR);
                $stm->bindParam(':title', $param['title'], PDO::PARAM_STR);
                $stm->bindParam(':url', $param['url'], PDO::PARAM_STR);
                break;

            # 发表的问题有新回答 4-8 0:29 测试通过
            case self::DYTYPE_ANSQS:
                /**
                 * @param int artid -> $qid 问题
                 * @param String $answer 答案
                 * @param int $fuid 回答者uid
                 * @param String $url 问题链接
                 * @param String $title 问题标题
                 */
                $SQL = "INSERT INTO `dy_acc` (`uid`, `fuid`, `type`, `artid`, `content`, `time`, `art_title`, `art_url`)
                    VALUES (:uid,:fuid,:type,:artid,:content,NOW(),:title,:url);";
                $stm = $this->PDO->prepare($SQL);

                $stm->bindParam(':fuid', $param['fuid'], PDO::PARAM_INT);
                $stm->bindParam(':artid', $param['qid'], PDO::PARAM_INT);
                $stm->bindParam(':content', $param['answer'], PDO::PARAM_STR);
                $stm->bindParam(':title', $param['title'], PDO::PARAM_STR);
                $stm->bindParam(':url', $param['url'], PDO::PARAM_STR);
                break;

            # 分享了一本书 未测试
            case self::DYTYPE_SHAREBOOK:
                /**
                 * @param int artid -> $bid 书id
                 * @param String $title 书标题
                 * @param String $url 书图片
                 *
                 */
                $SQL = "INSERT INTO `dy_acc` (`uid`, `fuid`, `type`, `artid`, `content`, `time`, `art_title`, `art_url`)
                    VALUES (:uid,0,:type,:artid,'',NOW(),:title,:url);";
                $stm = $this->PDO->prepare($SQL);

                $stm->bindParam(':artid', $param['bid'], PDO::PARAM_INT);
                $stm->bindParam(':title', $param['title'], PDO::PARAM_STR);
                $stm->bindParam(':url', $param['url'], PDO::PARAM_STR);
                break;

            # 发了一博客 未测试
            case self::DYTYPE_SMBLOG:
                $SQL = "INSERT INTO `dy_acc` (`uid`, `fuid`, `type`, `artid`, `content`, `time`, `art_title`, `art_url`)
                    VALUES (:uid,0,:type,:artid,:content,NOW(),:title,:url);";
                $stm = $this->PDO->prepare($SQL);

                $stm->bindParam(':artid', $param['blogid'], PDO::PARAM_INT);
                $stm->bindParam(':title', $param['title'], PDO::PARAM_STR);
                $stm->bindParam(':content', $param['content'], PDO::PARAM_STR);
                $stm->bindParam(':url', $param['url'], PDO::PARAM_STR);

                #echo $stm->queryString;

                break;

            # 发表新问题 未测试
            case self::DYTYPE_SMQS:
                $SQL = "INSERT INTO `dy_acc` (`uid`, `fuid`, `type`, `artid`, `content`, `time`, `art_title`, `art_url`)
                    VALUES (:uid,0,:type,:artid,:content,NOW(),:title,:url);";
                $stm = $this->PDO->prepare($SQL);

                $stm->bindParam(':artid', $param['qid'], PDO::PARAM_INT);
                $stm->bindParam(':title', $param['title'], PDO::PARAM_STR);
                $stm->bindParam(':content', $param['content'], PDO::PARAM_STR);
                $stm->bindParam(':url', $param['url'], PDO::PARAM_STR);

                #echo $stm->queryString;

                break;

            # 不明类型 返回FALSE
            default :
                return FALSE;
        }

        $stm->bindParam(':uid', $this->uid, PDO::PARAM_INT);
        $stm->bindParam(':type', $dyType, PDO::PARAM_INT);

        return $stm->execute();
    }

}