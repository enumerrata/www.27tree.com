<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <script src="/jss/jquery-min.js"></script>
        <link rel="stylesheet" type="text/css" href="/not/news/sources/style.css" />
        <script src="/jss/coref.js"></script>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/nav_v2.html' ?>
        <div class="atr"><div class="atr-bac-left"></div>
            <div style="margin:20px;" class="art-item" id="art-item-submitarticle">
                <form id="upload-form">
                    <!-- 文章标题 -->
                    <div id="tit_div" wapper="asub-title">
                        <input type="text"
                               id="title_sub"
                               autocomplete="none"
                               class="sdText" style="width:99.5%;text-align:center;"/>
                        <div style="border:1px solid #ccc;margin:5px 0;width:100%;padding:5px 0;background:whitesmoke">
                            <span class="asub-select-wapper">
                                <label>&nbsp;文章分类：</label>
                                <select name="type_sub"
                                        id="type_s"
                                        onchange="selectC(this.value)">
                                            <?php
                                            $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/not/info/convlist.xml');
                                            foreach ($xml->xpath("//root/sp") as $c)
                                                echo "<option value=\"$c[stype]\">$c[desc]</option>";
                                            ?>
                                </select>
                            </span>
                            <span class="asub-select-wapper">
                                <label>&nbsp;子分类：</label>
                                <select name="type_s_sub"
                                        id="stype_s">
                                            <?php
                                            foreach ($xml->xpath("//root/sp") as $c) {
                                                $i = 0;
                                                foreach ($c->xpath("band") as $sc) {
                                                    echo "<option value=\"$sc[url]\" class=\"sl_$c[stype]\" id=\"sl_$c[stype]_$i\">$sc[type]</option>";
                                                    $i++;
                                                }
                                                unset($i);
                                                unset($xml);
                                            }
                                            ?>
                                </select>
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- 文章内容 kindeditor编辑器 -->
                    <textarea autocomplete="none" id="text_sub" style="width:100%">编辑器加载中...</textarea>
                    <a class="next-cp" href="javascript:;" onclick="javascript:submit_news_app();">确认投稿</a>
                </form>
                <div class="clear"></div>
            </div>
        </div>
        <script type="text/javascript">
            var editor
            $(function(){
                loadKindEditor("text_sub",{height:"420px"},function(_editor){
                    editor = _editor;
                    editor.html("");
                });
            });
            function submit_news_app(){
                
            }
        </script>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.html'; ?>
    </body>
</html>