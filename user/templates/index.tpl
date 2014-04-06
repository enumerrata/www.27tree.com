<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{$top_data.usn}的个人中心 - IT人的社交网络</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <link rel="stylesheet" type="text/css" href="/user/sources/css/main_style{$conf.usr_theme}.css" />
        <script src="/jss/dojo/dojo.js"></script>
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js"></script>
        <script src="/user/data/js/Collogic.js"></script>
        <script src="/user/data/js/main.js"></script>
    </head>
    <body>
        {include file=$PATH.nav_path}
        <div class="sdCenter" id="usr-main-wapper">
            <input type="hidden" value="0" id="dy-pl"/>
            <input type="hidden" value="{$conf.tc_val_code}" id="tc-val"/>
            <div style="width:190px;float:left;padding-top:25px;">
                <div style="background:url('/img/br_l.png') repeat-y right center #fefefe;padding:10px;border:1px solid #ddd;border-right:none;">
                    <div class="marginBtn10">
                        <!--usr-head--><img src="{$top_data.ush}" class="block Shadow borderR3" width="170px" height="170px" alt="{$top_data.usn}的个人头像"/><!--@usr-head-->
                        <!--usn--><span class="block sn-usn">{$top_data.usn}</span><!--@usn-->
                    </div>

                    <!--levf-nav-->
                    {include file='../left_nav.tpl'}
                    <!--@levf-nav-->

                </div>
            </div>
            <div style="margin-left:189px;">

                <!--Main_body-->
                <div id="main_body">
                    <!--editor-->
                    <div id="sn-editor">
                        <!--ed-tip-->
                        <div>
                            <div style="float:left;width:175px;height:27px;">
                                <img src="/user/sources/img/usr-tuc.png" width="175px" height="27px"/>
                            </div>
                            <div style="float:right;height:27px;line-height:27px;color:#808080;">
                                发言请不要过于鸡冻，<span id="ss-ovs">还可以输入</span> <span id="ss-nc">120</span> 字
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!--@ed-tip-->
                        <!--ed-input-->
                        <div id="sn-ed-inp-wapp" class="borderR3">
                            <div contenteditable="true" id="shuoshuoTx" onpaste="ss_handle_prase(this);" oncontextmenu="javascript:window.event.returnValue=false;"></div>
                        </div>
                        <!--@ed-input-->
                        <!--ed-act-->
                        <div style="margin-top:8px;height:36px;">
                            <div style="float:right;width:80px;border:1px solid #ccc;height:30px;background:#fff;" class="borderR3">
                                <a href="javascript:;" id="etc-btn" class="etc-btn-dis" title="马上吐槽吧！">发表</a>
                            </div>
                        </div>
                        <!--@ed-act-->
                    </div>
                    <!--@editor-->

                    <!--Dy_list-->
                    <div style="border-top:1px dashed #ddd;margin-top:5px;padding-top:5px;">
                        <div id="uc-dy-list">{$dy_list}</div>
                        <div class="uc-btn-wapper">
                            <a class="uc-btn" href="javascript:;" id="uc-loadmore-btn">加载更多</a>
                        </div>
                    </div>
                    <!--@Dy_list-->

                </div>
            </div>
            <!--@Main_body-->

            <div style="margin-left:839px;padding-top:25px;">
                <div style="background:url('/img/br_r.png') repeat-y #fefefe;border:1px solid #ddd;border-left:none;padding:10px;">

                    <!--AD 198 x 120 -->
                    <div style="border:1px solid #ccc;" class="bottom10">
                        <img src="/img/ad-178-120.png" width="198px" height="120px"/>
                    </div>
                    <!--@AD 198 x 120 -->

                    <div class="uc-btn-wapper bottom10">
                        <a class="uc-btn" href="/user/{$conf.uid}/admin/index.html">管理面板</a>
                    </div>

                    <div class="bottom10">
                        <span class="RedBar">
                            <span class="RedBar-in" style="padding-left:20px;background:url('/user/sources/img/Magic Wand.png') left 3px no-repeat;">社区热点</span>
                        </span>
                        {section loop=$hot_posts_list name=pi}
                            <a class="sn-hot-items Elipsis" href="{$hot_posts_list[pi].href}" target="_blank">{$hot_posts_list[pi].title}</a>
                        {/section}
                    </div>

                    <div class="bottom10">
                        <span class="RedBar">
                            <span class="RedBar-in" style="padding-left:20px;background:url('/user/sources/img/help.png') left 3px no-repeat;">最新问答</span>
                        </span>
                        {section loop=$newest_Qa_list name=qi}
                            <a class="sn-hot-items Elipsis" href="{$newest_Qa_list[qi].href}" target="_blank">{$newest_Qa_list[qi].title}</a>
                        {/section}
                    </div>

                    <div class="bottom10">
                        <span class="RedBar">
                            <span class="RedBar-in" style="padding-left:20px;background:url('/user/sources/img/Yellow Lego.png') left 3px no-repeat;">社区应用</span>
                        </span>
                        <a href="/user/ucApp/hold_18/" style="padding:2px;padding-left:37px;height:32px;line-height:32px;font-size:14px;background:url('/user/sources/img/design-bump.png') left center no-repeat;display:block;">
                            是男人就坚持18秒
                        </a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        </div>
    </body>
</html>