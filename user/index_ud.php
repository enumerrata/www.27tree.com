<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>koodo的个人中心 - IT人的社交网络</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/user/sources/css/main_style1.css?v=4-1" />
        <script src="/jss/dojo/dojo.js"></script>
        <script src="/jss/jquery-min.js"></script>
        <script src="/sources-gz/coref.js.php"></script>
        <script src="/jss/com.x.js"></script>
        <script src="/user/data/js/Collogic.js"></script>
        <script src="/sources-gz/user.main.js.php"></script>
    </head>
    <body>
        <div class="Shadow" id="navWapper">
            <div class="sdCenter nav-v3">
                <div style="float:left;">
                    <a class="logo-v3" href="/" title="返回首页"></a>
                    <div id="nav">
                        <ul>
                            <li><a href="/">首页</a></li>
                            <li><a href="/blog/index.html">博客广场</a></li>
                            <li><a href="/bookLib/">好书分享</a></li>
                            <li><a href="/minbbs/tech/">技术分享</a></li>
                            <li style="border:none;"><a href="/minbbs/ques/">技术问答</a></li>
                        </ul>
                    </div>
                </div>
                <div id="nav-right">
                    <div class="borderR15 tsearch-wapp">
                        <input type="text" class="borderR15" value="" id="search-inp"
                               onfocus="$(this).css('width','105px').attr('placeholder','&#35831;&#36755;&#20837;&#25628;&#32034;&#20869;&#23481;');"
                               onblur="$(this).css('width','35px').attr('placeholder','&#25628;&#32034;');"
                               placeholder="&#25628;&#32034;"
                               onkeydown="search_enter(event);"/>
                        <a class="tsearch-btn borderR10" href="javascript:;" onclick="Search($('#search-inp').val())"></a>
                    </div>
                    <div id="top-menu-wapp">
                        <a class="next-cp top-bm" id="gb-reg" href="/account/register/" style="color:green;">&#27880;&#20876;</a>&nbsp;
                        <a class="next-cp top-bm" id="gb-log" href="/account/login/">&#30331;&#38470;</a>&nbsp;
                        <div id="top-menu-bar">
                            <div id="top-menu">
                                <div class="top-menu-in">
                                    <a class="top-menu-btn" id="gb-ucc">个人中心</a>
                                    <a class="top-menu-btn" id="gb-usm">发表文章</a>
                                    <a class="top-menu-btn" id="gb-usa">个人设置</a>
                                    <a class="top-menu-btn" id="gb-ext" href="javascript:;">退出账号</a>
                                </div>
                            </div>
                            <span style="display:inline-block;cursor:pointer;color:#444;" id="gb-usn"><a style="width:19px;height:13px;background:url('/img/loading_19_13.gif') bottom center no-repeat;display:inline-block;"></a></span>
                            <span style="display:inline-block;width:10px;height:10px;background:url('/img/arrd-1.png') center no-repeat;" id="gb-arr"></span>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="sdCenter">
            <div class="borderR10 Shadow" style="width:600px;background:#fefefe;border:1px solid #ccc;height:300px;margin:40px auto;font-size:30px;text-align:center;color:#666;line-height:300px;">
                个人中心正在升级，预计明天开通。
            </div>
        </div>
    </body>
</html>