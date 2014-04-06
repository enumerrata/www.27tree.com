<?php

class rm_index_m {

    private $mysql;

    public function __construct($mysql) {
        $this->mysql = $mysql;
    }

    /**
     * 处理用户中心首页数据逻辑
     */
    public function getFollowSugg($pre_usr) {
        /**
         * @desc 对粉丝少的用户进行关注推荐
         * @param array $_sel 随机用户组
         */
        $_sel = $pre_usr[(int) rand(0, count($pre_usr) - 1)];
        $uid_list = implode(',', $_sel);
        $SQL = sprintf('SELECT cl.uid,cl.username,cl.job AS usn FROM client cl WHERE cl.uid IN(%s);', $uid_list);

        $q_re = $this->mysql->query($SQL);

        if (false !== $q_re) {
            $return = array();
            // 遍历数据集合
            while ($_w = mysql_fetch_array($q_re)) {
                // 打包
                $_w['ush'] = G::getHeadimg($_w['uid'], 45);
                array_push($return, $_w);
            }
            return $return;
        } else {
            return false;
        }
    }

}

?>
