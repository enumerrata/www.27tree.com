<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $TPL['usn']; ?>的个人中心 - IT人的社交网络</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/core.css" />
        <link rel="stylesheet" type="text/css" href="/user/css/user.css" />
        <link rel="stylesheet" type="text/css" href="/user/sources/css/main_style1.css" />
        <script src="/jss/templates.js" type="text/javascript"></script>
        <script src="/user/data/js/Collogic.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include $TPL['path_root'] . '/templates/nav_v3.php' ?>
        <div class="sdCenter" id="usr-main-wapper">
            <div style="width:190px;float:left;padding-top:25px;">
                <div style="background:url('/img/br_l.png') repeat-y right center #fefefe;padding:10px;border:1px solid #ddd;border-right:none;z-index:0;">
                    <div class="marginBtn10">
                        <img src="<?php echo $TPL['ush']; ?>" class="block" width="170px"/>
                        <span class="block" style="line-height:25px;font-size:15px;font-weight:bold;text-align:center;padding:5px 0;border-bottom:1px dashed #ddd;">
                            <?php echo $TPL['usn']; ?>
                        </span>
                    </div>
                    <a href="javascript:;" class="left-nav-btn left-nav-btn-ac">
                        个人主页
                    </a>
                    <a href="javascript:;" class="left-nav-btn">
                        提到我的
                    </a>
                    <a href="javascript:;" class="left-nav-btn">
                        站内消息
                    </a>
                </div>
            </div>
            <div style="margin-left:189px;">

                <!--Main_body-->
                <div id="main_body">
                    <!--editor-->
                    <div style="">

                        <!--ed-tip-->
                        <div>
                            <div style="float:left;width:175px;height:27px;">
                                <img src="/user/sources/img/usr-tuc.png" width="175px" height="27px"/>
                            </div>
                            <div style="float:right;height:27px;line-height:27px;color:#808080;">
                                发言请不要过于鸡冻，还可以输入 <span style="font-size:25px;font-weight:bold;font-family:Constantia, Georgia;">120</span> 字
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!--@ed-tip-->

                        <!--ed-input-->
                        <div style="margin-top:10px;background:#fff;border:1px solid #ccc;
                             -moz-box-shadow:2px 2px 2px rgba(5,5,5,0.1) inset;              
                             -webkit-box-shadow:2px 2px 2px rgba(5,5,5,0.1) inset;           
                             box-shadow:2px 2px 2px rgba(5,5,5,0.1) inset;" 
                             class="borderR3">
                            <div contenteditable="true" style="height:50px;padding:7px;font-size:15px;">
                                发言请不要过于鸡冻，还可以输入
                            </div>
                        </div>
                        <!--@ed-input-->

                        <!--ed-act-->
                        <div style="margin-top:10px;height:36px;">
                            <div style="float:right;width:80px;border:1px solid #ccc;height:30px;background:#fff;" class="borderR3">
                                <a href="javascript:;" id="etc-btn" title="马上吐槽吧！">
                                    发表
                                </a>
                            </div>
                        </div>
                        <!--@ed-act-->

                    </div>
                    <!--@editor-->

                    <!--Dy_list-->
                    <div style="border-top:1px dashed #ddd;margin-top:5px;padding-top:5px;">

                    </div>
                    <!--@Dy_list-->

                </div>
            </div>
            <!--@Main_body-->

            <div style="margin-left:861px;padding-top:25px;">
                <div style="height:300px;background:url('/img/br_r.png') repeat-y #fefefe;border:1px solid #ddd;border-left:none;">

                </div>
            </div>

            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        </div>
    </body>
</html>