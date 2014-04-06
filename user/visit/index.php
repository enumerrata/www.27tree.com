<?php
define("ROOT", $_SERVER['DOCUMENT_ROOT'] . '/');
define("stat_code", ROOT . '/templates/stat_code.php');
$uid = (int) mysql_escape_string($_GET['u']);

include './class/visit_history.class.php';
include './view_blog_cm_controller.class.php';
include ROOT . 'user/data/userInfo.class.php';
include ROOT . 'user/data/includes/uc_secure_helper.php';

$vbcc = new view_blog_cm_controller($uid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php $vbcc->pushUsn(); ?>的博客专栏</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/user/visit/style.css?v=5-7" />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js?v=4-1"></script>
        <script src="/user/visit/main.js"></script>
    </head>
    <body>
        <?php include ROOT . 'templates/nav_v3.php' ?>
        <input type="hidden" value="<?php echo uc_secure_helper::gen_oc_val_code($uid); ?>" id="ocval" />
        <div id="uvs-wapp">
            <!-- main_wapper -->
            <div id="uvs-tbg"><a id="uvs-tbg-set"></a></div>

            <div id="uvs-info-wapp">

                <div class="Shadow" style="width:160px;height:160px;border:1px solid #ccc;float:left;margin-top:-85px;margin-left:30px;padding:2px;background:#fff;">
                    <img src="<?php echo G::getHeadimg($uid); ?>" width="160px" height="160px" style="display:block;"/>
                </div>

                <div style="margin-left:225px;margin-top:8px;">
                    <div>
                        <span style="font-size:24px;"><?php $vbcc->pushUsn(); ?></span>
                        <a style="display:inline-block;margin-top:-20px;text-indent:15px;" href="http://27tree.com/user/visit/<?php echo $uid; ?>">http://27tree.com/user/visit/<?php echo $uid; ?></a>
                    </div>
                    <div class="Shadow" style="margin-top:16px;border:1px solid #ccc;padding:1px;background:#FFF;float:left;">
                        <div style="background:#f1f1f1;padding:3px 10px;">
                            <?php $vbcc->pushInfo(); ?>
                            <?php if(isset($_COOKIE['_uid']) && isset($_COOKIE['username'])){?>|
                            <a href="javascript:;" id="add-follow-btn" rel="<?php echo $_GET['u']; ?>">关注TA</a>
                            <?php }?>
                        </div>
                    </div>
                </div>

                <cl class="clear"></cl><!--clear-fix-->
            </div>

            <div style="border-top:1px dashed #ccc;margin-left:30px;">

                <div style="float:left;width:630px;margin:20px 0;padding-bottom:15px;padding-right:15px;">
                    <?php $vbcc->pushNewsBlogs(); ?>
                </div>

                <div style="height:300px;margin:15px 10px;margin-left:660px;">
                    <div>
                        <span class="RedBar">
                            <span class="RedBar-in">最近访客</span>
                        </span>
                        <div style="margin-top:8px;">
                            <?php $vbcc->pushLVisitor()?>
                        </div>
                    </div>
                </div>

                <cl class="clear"></cl><!--clear-fix-->
            </div>

        </div>
        <?php include stat_code; ?>
    </body>
</html>