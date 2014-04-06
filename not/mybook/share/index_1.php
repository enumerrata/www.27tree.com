<?php
if (!isset($_COOKIE['_uid']) || !isset($_COOKIE['username'])) {
    ob_end_clean();
    header("Location:/account/login");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>程序员必备好书推荐_亿柿网</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
        <script src="/not/mybook/jsforBook/book-share.js"></script>
        <script src="/jss/jUploader.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <link rel="stylesheet" type="text/css" href="/not/mybook/sources/css/book.css" />
        <link rel="stylesheet" type="text/css" href="/not/mybook/sources/css/b-share.css" />
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav_v3.php'?>
        <div class="sdCenter">
            <form id="book-info">
                <div id="book-share-left" class="borderR5 Shadow" style="float:left;margin:15px;border:1px solid #ddd;width:47%;">
                    <div id="book-share-successpage" style="display:none;text-align:center;padding:15px 0;">
                        <h1>《JavaScript DOM 高级程序设计》</h1>
                        <span style="dislpay:block;">作者： Nicholas C. Zakas</span>
                        <div style="margin:15px auto;background:#FFF;font-size:18px;padding:50px 30px;border:1px solid #ccc;margin-left:50px;margin-right:50px;" class="borderR10">
                            <img src="/img/em41.png" align="absmiddle"/>分享成功！请等待管理员审核
                        </div>
                        <span style="dislpay:block;" class="cRed">审核通过后，你将获得2柿饼。</span>
                        <a class="next-cp" style="margin:15px 150px;" href="/not/mybook/share.php">还要分享一本书</a>
                    </div>
                    <div id="book-share-info">
                        <span class="book-share-input-wapper">
                            <span class="tipText">书名:</span>
                            <input type="text" style="width:90%;font-size:16px;text-align:center;" id="book-name" name="book-name" value=""/>
                        </span>
                        <span class="book-share-input-wapper">
                            <span class="tipText">作者:</span>
                            <input type="text" style="width:90%;font-size:16px;text-align:center;" id="book-author" name="book-author" value=""/>
                        </span>
                        <span class="book-share-input-wapper" style="text-align:left;">
                            <span style="color:#999999;margin-left:2px;">&nbsp;书目类型:</span>
                            <select style="font-size:15px;" id="book-type">
                                <?php
                                $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/not/mybook/booktype.xml');
                                foreach ($xml->xpath("/root/b") as $n)
                                    echo "<option value=\"", $n['type'], "\">", $n['desc'], "</option>";
                                unset($xml);
                                unset($n);
                                ?>
                            </select>
                            <span class="tipText">文件类型:</span>
                            <select id="file-type">
                                <option>pdf</option>
                                <option>chm</option>
                            </select>
                        </span>
                        <span class="book-share-input-wapper">
                            <textarea id="book-desc" style="width:98%;overflow-y:visible;" rows="12" name="book-info">编辑器加载中...</textarea>
                        </span>
                        <input type="hidden" name="book-img-name" value="" id="book-img-name" />
                        <span class="book-share-input-wapper">
                            <span class="tipText">下载页面:</span>
                            <input type="text" style="width:85%;font-size:16px;text-align:center;" id="down-load-page" value=""/>
                        </span>
                        <span class="book-share-input-wapper">
                            <?php $template_file_tip_text = '上传一个书皮'; ?>
                            <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/fileButtonAc.html'; ?>
                        </span>
                        <span class="book-share-input-wapper">
                            <a href="javascript:void(0);" class="next-cp" id="confirm-share">确认分享</a>
                        </span>
                    </div>
                </div>
                <div id="book-share-right" class="borderR5 Shadow" style="background-color:#fff;float:right;margin:15px;margin-left:0;border:1px solid #ddd;width:498px;text-align:center;">
                    <img id="book-img-view" class="Shadow" src="/img/nopic.png" style="border:10px solid #fafafa;margin-top:20px;margin-bottom:20px;"/>
                    <span id="uploadsign" style="display:none;background-color:#FF751F;color:#fff;line-height:25px;font-weight:bold;">图片正在上传中</span>
                </div>
                <div class="clear"></div>
            </form>
        </div>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.html'; ?>
    </body>
</html>