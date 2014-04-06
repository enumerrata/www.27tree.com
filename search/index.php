<?php
/**
 * @author 27tree.com
 */
error_reporting(0);
//缓存头
define(ROOT, $_SERVER['DOCUMENT_ROOT']);
require ROOT . '/inc/Cache/Lite.php';
require ROOT . '/inc/Cache/Lite/Output.php';
$cache = new Cache_Lite_Output(Cache_Lite::getSrcsOptions());
$cache->setLifeTime(1);

$ch_url_handle = parse_url($_SERVER['REQUEST_URI']);
if ($cache->start(preg_replace("/&|=/is", '', urlencode($ch_url_handle['query']))))
    exit(0);
//@TODO 缓存文件分级
//end 缓存
include './gs_function.php';
include './class/css.class.php';
include './class/dataHelper.class.php';

$P_QUERY = mysql_escape_string($_GET['q']); // 搜索关键字
$P_TYPE = (int) mysql_escape_string($_GET['t']);
include './tpl/main_search_head.php'; // 加载页面头部
// 进行云搜索
try {
    $css_api = new CloudSearchApi();
    $param_type = array('book', 'blog', 'art', 'bbs', 'qa'); // 索引列表
    $indexName = key_exists($P_TYPE, $param_type) ? $param_type[(int) $_GET['t']] : $param_type[0]; // load索引列表 添加参数过滤
    $index = $css_api->getIndex($indexName);
    $P_PAGES_LITE = isset($_GET['pl']) ? (int) $_GET['pl'] : 15; //设置每页显示结果数
    $P_CUR_PAGES = isset($_GET['p']) ? (int) $_GET['p'] !== 0 ? (int) $_GET['p'] : 1  : 1; //GET参数过滤
    $results = $index->search('q=' . $P_QUERY, $P_CUR_PAGES, $P_PAGES_LITE); //云端执行搜索，下面是结果处理

    if (isset($results["result"]["total"]) && $results["result"]["total"] != 0) {
        //搜索返回大于0个结果 正常显示
        $R_searchtime = $results["result"]['searchtime'];
        $R_total = $P_PAGES_TOTAL = $results["result"]['total'];
        $P_SP = dataHelper::splitPages($P_PAGES_TOTAL, $P_PAGES_LITE); //获取分页总数
        //print_r($results);
        include './tpl/main_search_result.php';
        $cache->end();
    } else {
        //没结果 显示错误页面
    }
} catch (Exception $e) {
    //#TODO 添加用户自己的失败处理逻辑
}
?>