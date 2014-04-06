<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>发表问题 - 在线问答 - 二叉树社区</title>
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <link rel="stylesheet" type="text/css" href="/q_a/qa_data_sources/style.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js?v=1.0"></script>
        <script src="/q_a/qa_data_sources/main_qa.js"></script>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav_v3.php' ?>
        <div style="border:none;margin:35px auto;width:1060px;position:relative;"><div class="atr-bac-left"></div>
            <div class="Shadow" style="background:#fff;float:left;width:760px;border:1px solid #ccc;">
                <div style="margin:20px;position:relative;">
                    <div id="afterSet" style="text-align:center;display:none;">
                        <strong style="display:block;font-size:25px;color:#777;margin:0 10px;border-bottom:1px dashed #ccc;padding-bottom:15px;cursor:default;">
                            <img src="/img/em43.png" align="absmiddle"/>问题发表成功！</strong>
                        <h1><a id="sm-success-title"></a></h1>
                        <div id="sm-success-content" style="text-indent:3em;line-height:20px;"></div>
                        <div style="margin-top:20px;padding:0 150px;">
                            <a class="borderR10 next-cp" id="sm-success-url" href="javascript:;" style="font-size:17px;background:#f1f1f1;display:inline-block;width:48.5%;height:50px;line-height:50px;">查看问题</a>
                            <a class="borderR10 next-cp" href="/q_a/" style="font-size:17px;background:#f1f1f1;display:inline-block;width:48.5%;height:50px;line-height:50px;">去回答问题</a>
                        </div>
                    </div>
                    <div id="beforeSet">
                        <div id="tit_div" wapper="asub-title">
                            <input type="text"
                                   id="title_sub"
                                   autocomplete="none"
                                   placeholder="你有什么问题,请在这里输入"
                                   onfocus="javascript:if(this.value=='你有什么问题,请在这里输入')this.value='';"
                                   onblur="javascript:if(this.value=='')this.value='你有什么问题,请在这里输入';"
                                   value="你有什么问题,请在这里输入"
                                   style="width:99.2%;text-align:center;color:#666;"class="sdText"/>
                            <div style="border:1px solid #ccc;margin:5px 0;width:100%;padding:5px 0;background:whitesmoke">
                                <span style="display:inline-block;margin-left:10px;">
                                    <label>问题分类：</label>
                                    <select id="qa_type_1" onchange="javascript:qa_selectChange(1,this)">
                                        <?php
                                        $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/q_a/qa_data_sources/qa_type.xml');
                                        foreach ($xml->xpath("//root/sp") as $c)
                                            echo "<option value=\"$c[desc]\">$c[desc]</option>";
                                        ?>
                                    </select>
                                </span>
                                <span class="sl-1-addon" style="display:inline-block;margin-left:10px;">
                                    <label>二级分类：</label>
                                    <select id="qa_type_2" onchange="javascript:qa_selectChange(2,this)">
                                        <?php
                                        foreach ($xml->xpath("//root/sp") as $c) {
                                            $i = 0;
                                            foreach ($c->xpath("band") as $sc) {
                                                echo "<option value=\"$sc[type]\">$sc[type]</option>";
                                                $i++;
                                            }
                                        }
                                        ?>
                                    </select>
                                </span>
                                <span class="sl-1-addon" style="display:inline-block;margin-left:10px;">
                                    <label>三级分类：</label>
                                    <select id="qa_type_3">
                                        <?php
                                        foreach ($xml->xpath("//band") as $c) {
                                            $i = 0;
                                            foreach ($c->xpath("sband") as $sc) {
                                                echo "<option value=\"$sc[type]\">$sc[type]</option>";
                                                $i++;
                                            }
                                        }
                                        ?>
                                    </select>
                                </span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div id="alert-bar">编辑器加载中</div>
                        <textarea autocomplete="none" id="text_sub" style="width:100%;display:none;"></textarea>
                        <a class="next-cp" style="width:100%;margin-top:5px;" href="javascript:;" onclick="javascript:submitQuestion(this);">发表问题</a>
                    </div>
                </div>
            </div>
            <div style="margin-left:770px;">
                <div class="Shadow" style="background:#fff;border:1px solid #ccc;margin-bottom:10px;">
                    <b style="display:block;border-bottom:1px dashed #ccc;font-size:15px;margin:5px;text-align:center;line-height:25px;color:#555;">提问和发帖必读</b>
                    <div>
                        <ol class="sdULPatch" style="line-height:25px;">
                            <li>上传真实头像，可使问题获更好排位</li>
                            <li>模糊或过于简单的标题会被降低排位</li>
                            <li>提问1小时后且有人回答即不允许修改和删除</li>
                            <li>点击工具栏上的  可插入代码</li>
                            <li>图片上传请勿超过200K</li>
                            <li>请勿在此处发布招聘信息</li>
                        </ol>
                    </div>
                </div>
                <a class="next-cp borderR5" href="/q_a/">返回问题列表</a>
            </div>
            <div class="clear"></div>
        </div>
        <script type="text/javascript">
            $(function(){
                var alert_bar = $("#alert-bar");
                alert_bar.css('display','block');
                loadKindEditor("text_sub",{height:"400px"},function(_editor){
                    editor = _editor;
                    editor.html("");
                    alert_bar.hide();
                });
            });
        </script>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/stat_code.php' ?>
    </body>
</html>