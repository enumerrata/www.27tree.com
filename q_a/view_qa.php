<?php
require './class/Qa.class.php';
require './Qa_grobal.php';
require '../mod/G.php';
require './view_qa_controller.class.php';
$Qa = new Qa($_GET['pid'], Qa::WITH_CT);
$Ush = G::getHeadimg($_COOKIE['_uid'], 45);
$Cc = new view_qa_controller($_GET['pid']);
Qa_G::upReadi($_GET['pid']);
//var_dump($Qa);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $Qa->title; ?>_Qa在线问答</title>
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/q_a/sources/style.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/mod/kd/SyntaxHighlighter/Styles/SyntaxHighlighter.css" />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
        <script src="/q_a/sources/view_qa.js?v=4-15"></script>
    </head>
    <body>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/nav_v3.php'; ?>
        <div class="sdCenter" id="main-wapp">
            <div class="vqa-left">
                <div id="vqa-left-body" class="Shadow borderR3">

                    <div id="vqa-left-body-head">
                        <input type="hidden" id="qid" value="<?php echo $Qa->qid; ?>" />

                        <!--<a class="headwapper" href="/user/visit/<?php echo $Qa->uid; ?>">
                            <img src="<?php echo G::getHeadimg($Qa->uid, 64); ?>" width="64px" height="64px"/>
                        </a>-->

                        <div id="vqa-left-title">
                            <h1 id="vqa-title" class="block"><?php echo $Qa->title; ?></h1>
                            <a class="headwapper"id="vqa-ush" href="/user/visit/<?php echo $Qa->uid; ?>">
                                <img src="<?php echo G::getHeadimg($Qa->uid, 32); ?>" width="32px" height="32px"/>
                            </a>
                        </div>

                        <div class="clear"></div>

                    </div>

                    <!-- 问题描述 -->
                    <div id="vqa-content">
                        <?php echo G::article_content_conv($Qa->cont, 1.1) ?>
                    </div>
                    <!-- @问题描述 -->

                    <!--<div style="padding-top:10px;border-top:1px dashed #ccc;">
                        由 <a href="/user/<?php echo $Qa->uid; ?>">
                    <?php echo urldecode($Qa->usn); ?>
                        </a>
                        提问于 <?php echo G::tTimeFormat_vs($Qa->datetime); ?>  [ <?php echo $Qa->ansi; ?>回 / <?php echo $Qa->readi; ?>阅 ]
                    </div>-->

                    <!-- answerdesc -->
                    <div style="text-align:right;font-size:12px;">
                        <a class="Gbtn btn-mini" href="javascript:;"><b><?php echo urldecode($Qa->usn); ?></b></a>
                        <a class="Gbtn btn-mini" href="javascript:;"><?php echo G::tTimeFormat_vs($Qa->datetime); ?></a>
                    </div>
                    <!-- @answerdesc-->

                    <!-- Qs_list -->
                    <div>
                        <span class="RedBar">
                            <span class="RedBar-in"><b id="vqa-commi"><?php echo $Qa->ansi; ?></b> Answers</span>
                        </span>


                        <div class="vqa-answer-list">
                            <a class="headwapper" href="/user/visit/<?php echo $_COOKIE['_uid']; ?>">
                                <img src="<?php echo $Ush; ?>" width="45px" height="45px" />
                            </a>
                            <div class="vqa-answer-list-right">
                                <div class="vqa-answer-usn"><?php echo urldecode($_COOKIE['username']); ?> <span>&gt;&gt;</span></div>
                                <div class="vqa-answer-ct" id="vqa-comm">
                                    <textarea id="answerSet" style="width:99.75%;display:none;"></textarea>
                                </div>
                            </div>
                            <div id="vqa-commbar"><a class="Gbtn inline-block" href="javascript:;" data-qid="<?php echo $_GET['pid']; ?>" onclick="javascript:submitAnswer(this);">走你</a></div>
                            <div class="clear"></div>
                        </div>

                        <?php $Cc->pushCommList() ?>
                    </div>
                    <!-- @Qs_list -->

                </div>


                <!--<div style="margin-top:10px;" id="submitAns-wapper">
                    <div id="alert-bar">编辑器加载中</div>
                    <textarea id="answerSet" style="width:99.75%;display:none;"></textarea>
                    <a class="next-cp" href="javascript:;" data-qid="<?php echo $_GET['pid']; ?>" style="margin-top:10px;" onclick="javascript:submitAnswer(this);">提交我的答案</a>
                </div>-->
            </div>

            <div class="vqa-right">
                <div class="Shadow" style="background:url('/img/br_r.png') repeat-y #fff;margin-bottom:10px;border:1px solid #ccc;padding:10px;border-top:3px solid #88AB11;">
                    <span class="RedBar">
                        <span class="RedBar-in">More Question</span><span class="Gray RedBar-in-mr">助人为乐</span>
                    </span>
                    <div>
                        <?php $Cc->pushRelQuestion(); ?>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

        </div>
        <script src="/mod/kd/SyntaxHighlighter/Scripts/shCore.js"></script>
        <script src="/mod/kd/SyntaxHighlighter/Scripts/shBrush.js"></script>
        <script language="javascript">
            $(function() {
                var alert_bar = $("#alert-bar");
                alert_bar.css('display','block');
                loadKindEditor("answerSet",{height:"100px"},function(_editor){
                    editor = _editor;
                    editor.html("");
                    alert_bar.hide();
                    free(alert_bar);
                });
                dp.SyntaxHighlighter.ClipboardSwf = '/mod/kd/SyntaxHighlighter/Scripts/clipboard.swf';
                dp.SyntaxHighlighter.HighlightAll("code");
            });
        </script>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/stat_code.php' ?>
    </body>
</html>