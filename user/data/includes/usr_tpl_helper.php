<?php

require_once ROOT . "/user/data/includes/ShuoShuoc.php";

class tpl_helper {

    public static function getFusn($fuid, $fusn) {
        if ($fuid != 0) {
            return sprintf("<a href='/user/visit/%s'>%s</a>", $fuid, $fusn);
        } else
            return "一位" . $fusn;
    }

    private static function getUSH($uid, $stack) {
        if (!key_exists($uid, $stack))
            $stack[$uid] = G::getHeadimg($uid, 45);
        return $stack[$uid];
    }

    public static function gen_dy_list_tpl($uid, $page, $Smarty = false) {
        /**
         * @author koodo
         * @desc 产生用户动态列表 建议传入Smarty对象句柄
         */
        !$Smarty && $Smarty = new Smarty;

        $Smarty->template_dir = $_SERVER['DOCUMENT_ROOT'] . '/user/templates/';
        $Smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'] . '/user/templates_c/';

        // 下面是数据处理
        $Dy = new Dy($uid);
        # $u_dyc = new dy_controlor($uid); // 动态数据控制器
        # $dy_list = $u_dyc->getDys(dy_controlor::DY_ALL, $page);
        $dy_list = $Dy->Get($page);
        $ush_stack = array();
        foreach ($dy_list as &$_s_list) {
            #$_s_list['duid'] = $_s_list['fuid'] == 0 ? $_s_list['uid'] : $_s_list['fuid'];
            if ($_s_list['fuid'] != 0) {
                // 有来源uid
                $_s_list['ush'] = self::getUSH($_s_list['fuid'], $ush_stack);
                $_s_list['usn'] = sprintf("<a href='/user/visit/%s'>%s</a>", $_s_list['fuid'], $_s_list['usn']);
                $_s_list['musn'] = sprintf("<a href='/user/visit/%s'>%s</a>", $_s_list['uid'], $_s_list['musn']);
            } else {
                // 无来源uid 游客或单人动态
                if (in_array($_s_list['type'], array(Dy::DYTYPE_COMMBLOG, Dy::DYTYPE_COMMBOOK, Dy::DYTYPE_COMMTC))) {
                    $_s_list['ush'] = self::getUSH(0, $ush_stack);
                    $_s_list['usn'] = "一位游客";
                } else {
                    // 单人动态
                    $_s_list['musn'] = sprintf("<a href='javascript:;'>%s</a>", $_s_list['musn']);
                    $_s_list['ush'] = self::getUSH($_s_list['uid'], $ush_stack);
                    $_s_list['usn'] = NULL;
                }
            }
            #$_s_list['ush'] = self::getUSH($_s_list['uid'], &$ush_stack);
            $_s_list['time'] = G::tTimeFormat_vs($_s_list['time']);
            $_s_list['tpl'] = tpl_helper::getDy_hash_tpl($_s_list['type']);
            #echo $_s_list['tpl'] . "<br>";
            if ($_s_list['type'] == 6) {
                $_s_list['content'] = strip_tags($_s_list['content']);
            }
            if ($_s_list['type'] == 0) {
                $_s_list['comm'] = ShuoShuoC::get_tc_comm($_s_list['artid'], array('page_lite' => 5));
                $_s_list['artid'] = Uc_secure::gen_tc_val_id($_s_list['artid']);
            }
        }
        $Smarty->assign('dy_list', $dy_list);
        return array('count' => count($dy_list), 'data' => $Smarty->fetch('dy_main_engine.tpl'));
    }

    public static function getDy_hash_tpl($dy_type) {
        #echo $dy_type . '|';
        static $tpl_hash = array(
    Dy::DYTYPE_TC => "./dylist/DYTYPE_TC.tpl",
    Dy::DYTYPE_COMMTC => "./dylist/DYTYPE_COMMTC.tpl",
    Dy::DYTYPE_COMMBLOG => "./dylist/DYTYPE_COMMBLOG.tpl",
    Dy::DYTYPE_COMMBOOK => "./dylist/DYTYPE_COMMBOOK.tpl",
    Dy::DYTYPE_ANSQS => "./dylist/DYTYPE_ANSQS.tpl",
    Dy::DYTYPE_SHAREBOOK => "./dylist/DYTYPE_SHAREBOOK.tpl",
    Dy::DYTYPE_SMBLOG => "./dylist/DYTYPE_SMBLOG.tpl",
    Dy::DYTYPE_SMQS => "./dylist/DYTYPE_SMQS.tpl"
        );
        return $tpl_hash[$dy_type];
        /*
          switch ($dy_type) {
          case Dy::DYTYPE_TC:
          return "./dy_s_i/DYTYPE_TC.tpl";
          case 'blogsub':
          return sprintf($tpl_root_path, 'main_artsub.tpl');
          case 'amp-bbs':
          return sprintf($tpl_root_path, 'main_amp-bbs.tpl');
          case 'comm-bla':
          return sprintf($tpl_root_path, 'main_comm.tpl');
          case 'comm-book':
          return sprintf($tpl_root_path, 'main_comm-book.tpl');
          case 'amp-bla':
          return sprintf($tpl_root_path, 'main_amp-bla.tpl');
          case 'amp-book':
          return sprintf($tpl_root_path, 'main_amp-book.tpl');
          } */
    }

    public static function compress_html($string) {
        $string = str_replace("\r\n", '', $string); //清除换行符
        $string = str_replace("\n", '', $string); //清除换行符
        $string = str_replace("\t", '', $string); //清除制表符
        $pattern = array(
            "/> *([^ ]*) *</", //去掉注释标记
            "/[\s]+/",
            "/<!--[^!]*-->/",
            "/\" /",
            "/ \"/",
            "'/\*[^*]*\*/'"
        );
        $replace = array(
            ">\\1<",
            " ",
            "",
            "\"",
            "\"",
            ""
        );
        return preg_replace($pattern, $replace, $string);
    }

}