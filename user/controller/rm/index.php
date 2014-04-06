<?php

class uc_index extends uc_Controller {

    /**
     * @desc 个人中心首页 控制器
     */
    private $action;
    private $PARAM;

    public function __construct($smarty, $action, $action_mod, $PARAM) {
        $this->PARAM = $PARAM;
        $this->action = $action;
        parent::__construct($smarty, $action_mod);
    }

    public function display() {
        // 在这里导入包
        #require ROOT . '/user/data/includes/sns/sns_stat.php';
        require_once ROOT . '/user/data/includes/sns/Dy.class.php';
        require_once ROOT . '/user/data/includes/data_modules/rm_index.module.php';

        // 获取MySQL链接句柄
        #$mysql = parent::getMySQL();

        // 获取父对象Smarty句柄
        $Smarty = parent::getSmarty();

        // 注册动态列表
        $dy_acc = tpl_helper::gen_dy_list_tpl($this->PARAM['uid'], 0, $Smarty);
        $Smarty->assign('dy_list', $dy_acc['data']);

        // 判断是否显示 加载更多按钮
        $Smarty->assign('show_loadmore_btn', $dy_acc['count'] >= $this->PARAM['uc_config']['dy_page_lite']);

        // 模板渲染
        parent::display($this->action);
    }

}

?>
