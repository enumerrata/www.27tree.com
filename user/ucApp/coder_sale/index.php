<?php include './index_head.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>码农买卖_亿柿网</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <link rel="stylesheet" type="text/css" href="/user/css/user.css?i=0.34" />
        <link rel="stylesheet" type="text/css" href="./cos.css" />
        <script src="/jss/dojo/dojo.js" type="text/javascript"></script>
        <script src="/jss/jquery-min.js" type="text/javascript"></script>
        <script src="/jss/coref.js"></script>
        <script src="/user/ucApp/coder_sale/sources/coder_sale_logic.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav_v2.html' ?>
        <div class="atr" style="text-align:center;font-size:14px;line-height:30px;border-top:4px solid #BF0A10;width:1200px;padding:0 10px;">该应用正在内测，想参加的朋友请到论坛发贴。</div>
        <div class="atr borderR5" style="width:1200px;"><div class="atr-bac-left"></div>
            <div id="user-left">
                <div class='comment-author-px'>
                    <img src="<?php echo $P_headimg ?>"/>
                    <div id="username">
                        <?php echo $P_username; ?>
                        <input type=hidden id="Gmod" value="<?php echo $G_mod; ?>" />
                        <input type=hidden id="mod" value="<?php echo $mod; ?>" />
                        <input type=hidden id="uidr" value="<?php echo $P_uid; ?>" />
                    </div><!--#endof #username-->
                </div><!--#endof .comment-author-px-->
                <span class="bstip" style="margin-top:5px;cursor:default;">拥有奴隶 :<span id="info-Slavenum"><?php $idc->pushSlaveNum(); ?></span></span>
                <span class="bstip" style="margin-top:5px;cursor:default;">身价 :<span id="my-price"><?php $idc->pushPrice(); ?></span></span>
                <span class="bstip" style="margin-top:5px;cursor:default;">资产 :<span id="my-price"><?php $idc->pushAsset(); ?></span></span>
                <span class="bstip" style="margin-top:5px;cursor:default;">现金 :<span id="my-price"><?php $idc->pushCash(); ?></span></span>
            </div><!--#endof #user-left-->

            <div id="user-body">
                <div class="tip-side" style="display:none;border-bottom:1px dashed #aaa;cursor:default;position:relative;margin:0px;background:#fdb933;font-size:14px;color:#fff;font-weight:bold;line-height:20px;text-align:center;">
                    <span>你刚刚购买了一个奴隶</span>
                    <a style="display:block;position:absolute;top:-1px;right:5px;" href="javascript:;" onclick="javascript:$(this).parent().slideUp(300);">x</a>
                </div>
                <?php $idc->pushMaster(); ?>
                <div style="margin:10px 15px;">
                    <span class="sdH"><?php if ($G_mod == M_OWNER) echo '我'; else echo '他'; ?>的奴隶</span>
                    <div style="padding-top:5px;" id="sector-my_slave">
                        <?php $idc->pushMySlaves(); ?>
                        <div class="sl-command-tab Shadow" style="display:none;width:46.8%;position:relative;border:1px solid #ccc;float:right;line-height:25px;padding:5px;padding-bottom:0;margin-left:5px;text-align:center;background:#fafafa;margin-bottom:10px;">
                            <?php $idc->pushCommandList(); ?>
                            <s style="border-right-color:#ccc;"></s><i style="border-right-color:#fafafa;"></i>
                        </div>
                        <span class="clear"></span>
                    </div>
                    <a id="show-all-btn" class="show-all-btn">&or;显示所有</a>
                </div>
                <?php if ($G_mod == M_OWNER) include './templates/salve_free_sector.php'; ?>
                <div style="margin:10px 15px;" id="sector-dy">
                    <span class="sdH">最新动态</span>
                    <?php $idc->pushCommandDy(); ?>
                    <a class="show-all-btn" style="margin-top:-3px;">&or;显示更多</a>
                </div>                
            </div>
            <div id="user-right">
                <div style="background:#fff;border:1px solid #ccc;">
                    <span class="sdH">身价排行榜</span>
                    <?php $idc->pushPriceRankList(); ?>
                </div>
            </div><!--#endof #user-right-->
            <div class="clear"></div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.html'; ?>
    </body>
</html>