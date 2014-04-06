<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/G.php';
if (!isset($_COOKIE['ipchange']) || $_COOKIE['ipchange'] != "IP_MODIFY") {
     //G::Fush404();
}
?>
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
          <script src="/jss/coref.js"></script>
          <script src="/log/md5.js"></script>
          <script type="text/javascript">
               $(function(){
                    $("#vailcodeimgs").attr("src","/log/valicode.php?r"+Math.random());
                    $("#submitReLog").click(function(){
                         var passwordNod = $('#password');
                         var nameNod     = $('#username');
                         if(nameNod.val()=="" || passwordNod.val()=="") {
                              alert('用户名或密码不能为空！');
                              return;
                         }
                         passwordNod.val(hex_md5(hex_md5(passwordNod.val())+nameNod.val()));
                         $.post("/log/log2.php", {
                              username:nameNod.val(),
                              password:passwordNod.val(),
                              valicode:$("#valicode").val(),
                              neverAsk : $("#neverAsk")[0].checked ? '1':'0'
                         }, function(data) {
                              switch(data) {
                                   case '0':
                                        if(window.location.href != document.referrer){
                                             window.location.href = document.referrer;
                                        } else {
                                             window.location.href = "/";
                                        }
                                        break;
                                   case '2':
                                        alert("您的密码输入有误，请检查！");
                                        break;
                                   case '1':
                                        alert("用户名输入错误，或没有这个用户名！");
                                        break;
                                   case '3':
                                        $("#code").val("");
                                        alert("验证码错误！");
                                        break;
                                   default:
                              }
                              passwordNod.val("");
                         });
                    });
               });
          </script>
     </head>
     <body>
          <div id="header1">
               <div id="logo"></div>
               <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/nav.html'; ?>
               <div class="clear"></div>
          </div>
          <div class="clear"></div>
          <?php require $_SERVER['DOCUMENT_ROOT'] . '/mod/header2.php'; ?>
          </div>
          <div class="atr" style="width:678px;background:#fff;"><div class="atr-bac-left"></div>
               <div style="margin:50px 80px;border-bottom:2px solid #ccc;padding-bottom:30px;*padding-bottom:0;">
                    <em style="float:left;display:block;"><img src="/img/talkc.png" /></em>
                    <h1 style="float:left;margin-left:20px;color:#666;font-size:18px;height:0px;">兄台，你的IP地址已改变，请重新登录。</h1>
                    <span class="clear"></span>
               </div>
               <div style="margin:50px 80px;">
                    <span style="display:block;margin:5px 100px;">
                         <span style="display:block;font-size:13px;margin-bottom:5px;color:#777;">帐号：</span>
                         <input id="username" type="text" style="width:100%;font-size:15px;" value="" />
                    </span>
                    <span style="display:block;margin:5px 100px;">
                         <span style="display:block;font-size:13px;margin-bottom:5px;color:#777;">密码：</span>
                         <input id="password" type="password" style="width:100%;font-size:15px;" value="" />
                    </span>
                    <span style="display:block;margin:5px 100px;">
                         <span style="display:block;font-size:13px;margin-bottom:5px;color:#777;">验证码：</span>
                         <input id="valicode" type="text" style="width:70%;font-size:15px;" value="" maxlength="5"/>
                         <img id="vailcodeimgs" src="" align="absmiddle" style="margin-top:-5px;width:27.8%;*width:26%;"/>
                    </span>
                    <span style="display:block;margin:5px 100px;">
                         <input id="neverAsk" type="checkbox">一周内不再提醒</input>
                    </span>
                    <a class="next-cp" id="submitReLog" style="margin:15px 110px;padding-top:6px;padding-bottom:6px;font-size:16px;" href="javascript:;">登录</a>
               </div>
          </div>
     </body>
</html>