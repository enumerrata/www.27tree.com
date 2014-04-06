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
        <title>图书分享 - 二叉树社区</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
        <script src="/jss/jUploader.min.js"></script>
        <script src="/not/mybook/jsforBook/book-share.js"></script>
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <link rel="stylesheet" type="text/css" href="/not/mybook/sources/css/book.css" />
        <link rel="stylesheet" type="text/css" href="/not/mybook/sources/css/b-share.css" />
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav_v3.php' ?>
        <div class="sdCenter">
            <div style="float:right;width:550px;margin-right:150px;background:#fefefe;border:1px solid #ccc;padding:25px;" class="Shadow">
                <div id="book-share-successpage">
                    <img src="/not/mybook/img/bs_success.png" style="margin:55px auto;display:block;"/>
                    <a class="next-cp" style="margin:15px 150px;" href="/not/mybook/share/">还要分享一本书</a>
                </div>
                <div id="data-wapper">
                    <input type="hidden" value="" id="book-img-name" />
                    <div class="Gray" style="font-size:15px;margin:10px 0;">*书名：<span class="sm-tip">请使用最简书名</span></div>
                    <span class="sdText">
                        <input type="text" id="book-name"/>
                    </span>
                    <div class="Gray" style="font-size:15px;margin:10px 0;">*作者：<span class="sm-tip">使用逗号分隔多个作者</span></div>
                    <span class="sdText">
                        <input type="text" id="book-author"/>
                    </span>
                    <div class="Gray" style="font-size:15px;margin:10px 0;">*分类：</div>
                    <select style="font-size:15px;" id="book-type">
                        <option value="java">JAVA开发技术</option>
                        <option value="php">PHP开发技术</option>
                        <option value="cocpp">C/C++</option>
                        <option value="csharp">C#/.NET</option>
                        <option value="android">Android</option>
                        <option value="py">Python</option>
                        <option value="web">Web开发</option>
                        <option value="ios">IOS开发</option>
                        <option value="nosql">NoSQL</option>
                        <option value="algo">算法技巧</option>
                        <option value="database">数据库技术</option>
                        <option value="system">操作系统</option>
                        <option value="hp">汇编语言</option>
                        <option value="other">其他</option>                    
                    </select>
                    <div class="Gray" style="font-size:15px;margin:10px 0;">*下载链接：<span class="sm-tip">推荐使用金山快盘,也可以连接到其他网站。</span></div>
                    <span class="sdText">
                        <input type="text" id="down-load-page"/>
                    </span>
                    <div class="Gray" style="font-size:15px;margin:10px 0;">介绍信息：<span class="sm-tip">排版漂亮点哦</span></div>
                    <textarea id="book-desc" style="width:99.7%;overflow-y:visible;" rows="12" name="book-info">编辑器加载中...</textarea>
                    <a class="next-cp" id="cf-share-btn" href="javascript:;">确认分享</a>
                </div>
            </div>
            <div style="margin-right:750px;padding-top:15px;">
                <div id="alert-bar"></div>
                <div style="border:1px solid #ccc;background:url('/img/br_l.png') repeat-y right center #fefefe;padding:15px;">
                    <img id="book-img-view" class="block Shadow" src="/img/nopic.png" style="margin:10px auto;width:256px;border:1px solid #ccc;"/>
                    <a class="next-cp" id="img-ul-btn" href="javascript:;" style="width:256px;margin:0px auto;"><b id="img-ul-btn-tiptext">上传一个封面</b></a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        </div>
        <span style="display:none;"><script src="http://s25.cnzz.com/stat.php?id=4085403&web_id=4085403" type="text/javascript"></script><span>
    </body>
</html>