<?php
/**
 * @desc 个人空间路由分发 Very Important !
 * @todo 严密缓存
 */
class uc_router {

    private $action;
    private $uc_config;
    private $Smarty;
    private $UserInfo;
    private $index_module;
    private $PARAM = array();

    public function __construct($action) {
        $this->uc_config = require ROOT . '/user/config/uc_config.php';

        $this->action = isset($action) && in_array($action, $this->uc_config['action']) ? $action : 'index';
        $this->PARAM['uid'] = (int) mysql_escape_string($_GET['uid']);
        $this->Smarty = new Smarty;
        $this->UserInfo = new userInfo($this->PARAM['uid']);
        $this->index_module = new index_module();
        
        $this->PARAM['uc_config'] = &$this->uc_config;
        $this->PARAM['dy_page_lite'] = 15; // 动态初始化显示个数
        $this->PARAM['tc_val_code'] = uc_secure_helper::gen_tc_val_code($this->PARAM['uid']);
        $this->PARAM['count']['fans'] = sns_stat::getFan_nums($this->PARAM['uid']);
        $this->PARAM['count']['foll'] = sns_stat::getFollows_nums($this->PARAM['uid']);
        $this->PARAM['count']['toca'] = sns_stat::getTc_nums($this->PARAM['uid']);
        $this->PARAM['count']['expc'] = $this->index_module->getUserExpCounts($this->UserInfo->getRawlev(), $this->UserInfo->getExp());
        //$this->Smarty->template_dir = ROOT . '/user/templates/';
    }

    public function process() {

        if ($this->action == 'admin') {
            if (in_array($_GET['sub_action'], $this->uc_config['action']['_admin_sub'])) {
                $sub_action = $_GET['sub_action'];
            } else {
                // 非法子操作 直接302跳转
                header(sprintf('location:/user/%s/admin/index.html', $this->PARAM['uid']));
                exit(0);
            }
            //$sub_action = in_array($_GET['sub_action'], $this->uc_config['action']['_admin_sub']) ? $_GET['sub_action'] : $this->uc_config['action']['_admin_sub'][0];
        } else {
            $sub_action = false;
        }

        $this->Smarty->assign('path_root', ROOT);
        $this->Smarty->assign('PATH', array('nav_path' => ROOT . '/templates/nav_v3.php', 'stat_path' => ROOT . '/templates/stat_code.php'));
        $this->Smarty->assign('top_data', array(
            'ush' => G::getHeadimg($this->PARAM['uid'], 100),
            'usn' => $this->UserInfo->getUsername(),
            'count' => $this->PARAM['count']
        ));

        $this->Smarty->assign('conf', array(
            'uid' => $this->PARAM['uid'],
            'dy_page_lite' => $this->PARAM['dy_page_lite'],
            'usr_theme' => 1,
            'tc_val_code' => $this->PARAM['tc_val_code'],
            'action' => $this->action,
            'sub_action' => $sub_action ? $sub_action : NULL
        ));

        $this->Smarty->assign('left_nav_opt', $this->action != 'admin');
        $this->Smarty->display('./split/index_head.tpl');

        // 中继控制器 >>>>>>>>>>>>>>>>>>>>>>>>>>>>
        $uc_c = null; // 初始化控制器句柄

        if ($this->action == 'admin') {
            $uc_config_sub = &$this->uc_config['action']['_admin_sub'];
            $this->action = $sub_action;
            include ROOT . '/user/controller/am/' . $this->action . '.php';
            $class_name = 'uc_' . $this->action;
            $uc_c = new $class_name($this->Smarty, $this->action, uc_Controller::action_mod_am, $this->PARAM);
        } else {
            $uc_config_sub = &$this->uc_config['action'];
            include ROOT . '/user/controller/rm/' . $this->action . '.php';
            $class_name = 'uc_' . $this->action;
            $uc_c = new $class_name($this->Smarty, $this->action, uc_Controller::action_mod_rm, $this->PARAM);
        }

        $uc_c->display();
        // 中继控制器 >>>>>>>>>>>>>>>>>>>>>>>>>>>>

        $this->Smarty->assign('hot_posts_list', $this->index_module->get_hot_posts(5));
        $this->Smarty->assign('newest_Qa_list', $this->index_module->get_newest_question($this->uc_config['qa_number'])); // 数量5
        $this->Smarty->assign('usr_sugg', $this->index_module->getFollowSugg(5));

        $this->Smarty->display('./split/index_footer.tpl');
    }

}