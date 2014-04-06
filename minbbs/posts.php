<?php
/**
 * @author koodo <koodo@qq.com>
 */
$ROOT = $_SERVER['DOCUMENT_ROOT'];
require $ROOT . "/minbbs/post.class.php";
require $ROOT . "/inc/Smarty/Smarty.class.php";
$Smarty = new Smarty;
$Smarty->caching = true;
$Smarty->cache_lifetime = 120;
$tpl_name = 'view_post.tpl';
if ($Smarty->isCached($tpl_name, $_GET['id'])) {
    $Smarty->display($tpl_name, $_GET['id']);
    Post::upReadi_s($_GET['id']);
    exit(0);
} else {
    require $ROOT . "/user/data/userInfo.class.php";
    require $ROOT . '/minbbs/PostCommandState.class.php';
    $post = new Post($_GET['id']);
    $post->upReadi();
    $usr = new userInfo($post->getUid());
    $post_content = $post->getContent();
    $post_content = str_replace("\\\"", '"', $post_content);
    $post_content = str_replace("\'", "'", $post_content);
    $post_content = str_replace("\\\\", "\\", $post_content);

    function getCommList($path, $pvn) {
        if (!is_file($path)) {
            return NULL;
        } else {
            $data = json_decode(file_get_contents($path), true);
            $re_data = array();
            foreach ($data as $index => $_comm) {
                /**
                 * @author koodo
                 * @desc 遍历帖子回复json文件，流量大的情况将迁移到db。
                 * @note 注意参数请不要使用-作为分界符
                 */
                $template['comment_uid'] = $_comm['fu'];
                $template['comment_usn'] = G::getUserName($_comm['fu']);
                $template['comment_uurl'] = '/user/' . $_comm['fu'];
                $template['comment_date_time'] = G::tTimeFormat_vs($_comm['dt']);
                $template['comment_content'] = G::article_content_conv($_comm['ct'], $pvn);
                $template['comment_ush'] = G::getHeadimg($_comm['fu']);
                $template['index'] = G::CommPlaceConv($index + 1);
                $template['r_index'] = $index;
                if (@is_array($_comm['sub'])) {
                    //检查二级评论
                    $template['has_sub'] = 1;
                    foreach ($_comm['sub'] as $sindex => &$s) {
                        $s['sindex'] = $sindex;
                        $s['dt'] = G::tTimeFormat_vs($s['dt']);
                        $s['ush'] = G::getHeadimg($s['fu'], 32);
                    }
                    $template['sub'] = $_comm['sub'];
                } else {
                    $template['has_sub'] = 0;
                }
                array_push($re_data, $template);
                //require dirname(__FILE__) . '/templates/comm.phtml';
            }
            return $re_data;
        }
    }

    $Smarty->assign('PATH', array('nav_path' => $ROOT . '/templates/nav_v3.php', 'stat_path' => $ROOT . '/templates/stat_code.php'));
    $Smarty->assign('BD', array(
        'title' => $post->getTitle(),
        'uurl' => '/user/' . $post->getUid(),
        'url' => $post->getURL(),
        'ush' => G::getHeadimg($post->getUid()),
        'usn' => $post->getAuthor(),
        'usnik' => $usr->getRawNickName(),
        'time' => $post->getDatetime(true),
        'readi' => $post->getReadi(),
        'commi' => $post->getCommi(),
        'content' => $post_content,
        'comm' => getCommList($post->postCommPath, $post->parseVersion)
    ));
    $Smarty->assign('postid', $post->getPsid());
    $Smarty->assign('SEO', array(
        'desc' => mb_substr(str_replace(' ', '', strip_tags($post_content)), 0, 120, 'utf-8')
    ));
    $Smarty->display($tpl_name, $_GET['id']);
}
?>