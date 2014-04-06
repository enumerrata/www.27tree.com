<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{$tc_data.usn} 的吐槽</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/user/vistc/main.css?v=v" />
        <script src="/jss/dojo/dojo.js"></script>
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
        <script src="/user/vistc/main.js"></script>
    </head>
    <body>
        {include file=$PATH.nav_path}
        <div class="sdCenter Shadow borderR5" style="width:708px;border:1px solid #ccc;background:#fdfdfd;padding:30px;">
            <div style="float:left;width:400px;border-left:1px solid #ccc;background:#fdfdfd;margin-left:40px;margin-top:40px;">
                <input type="hidden" id="commi" value="{$commi}" />
                <input type="hidden" id="tcmom" value="{$tcmom}" />
                <div class="tc-wapp">
                    <div class="Shadow tc-head">
                        <a href="/user/visit/{$tc_data.uid}" title="{$tc_data.usn}"><img src="{$tc_data.ush}" width=80px height=80px alt="{$tc_data.usn}"/></a>
                    </div>
                    <div class="tc-content">
                        {$tc_data.content}
                        <div class="tc-dt"><a href="/user/visit/{$tc_data.uid}" >{$tc_data.usn}</a> >> {$tc_data.datetime}</div>
                    </div>
                </div>

                <div class="tc-swapp" id="comm_editor">
                    <div class="Shadow tc-shead">
                        <a href="javascript:;"><img src="{$my_data.ush}" width=50px height=50px/></a>
                    </div>
                    <div class="tc-scontent" style="margin-left:10px;">
                        <div style="margin-bottom:5px;">
                            <div id="tc-editor" data-lock="1" contenteditable="true" style="min-height:25px;border:1px solid transparent;outline:none;text-indent:0;color:#888;">说几句吧...</div>
                        </div>
                        <a class="next-cp" id="tc-cm-btn" href="javascript:;">发表评论</a>
                    </div>
                </div>

                <!-- commlist -->
                {strip}
                    <div id="comm_list_wapper">
                        {section loop=$comm_list name=ci}
                            <div class="tc-swapp">
                                <div class="Shadow tc-shead">
                                    <a href="/user/visit/{$comm_list[ci].uid}" title="{$comm_list[ci].usn}"><img src="{$comm_list[ci].ush}" width=50px height=50px/></a>
                                </div>
                                <div class="tc-scontent">
                                    {$comm_list[ci].content}
                                    <div class="tc-dt"><a href="/user/visit/{$comm_list[ci].uid}" >{$comm_list[ci].usn}</a> >> {$comm_list[ci].datetime}</div>
                                </div>
                            </div>
                        {/section}
                    </div>
                {/strip}
                <!-- @commlist -->

            </div>
            <div class="clear"></div>
        </div>
        <span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>
    </body>
</html>