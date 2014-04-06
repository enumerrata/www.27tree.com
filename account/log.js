var validator1=false;
var validator2=false;
var tip=new Tiptool();
$(function()
{
     $('#signProm').hide(500);

     if($("#vailcode"))
     {
          $("#vailcode").attr("src","valicode.php?r"+Math.random());
     //随机数避免缓存
     }

     if($.browser.webkit || $.browser.safari) {
          $("#fileToUpload").css("display","block");
          console.log("webkit");
     } else if($.browser.mozilla || $.browser.msie){
          $("#fileToUploadwapp").click(function(){
               $("#fileToUpload").click();
          });
          console.log("msie/mozilla");
     }

     $("#savepic").click(function(){
          $.post("/user/head-upload/saveheadimg.php",{
               id:""
          },function(){
               alert("ko");
          });
     });

     $("#fileToUpload").change(function(){
          $(this).parent("#fileToUploadwapp").fadeOut(500);
          $.ajaxFileUpload ({
               url:'/user/head-upload/uploadify.php',
               secureuri:false,
               fileElementId:'fileToUpload',
               dataType: 'json',
               success:function (data){
                    $("#src").val(data['pic']);
                    $("#imgn").val(data['imgn']);
                    $('#imgpre').attr("src",data['pic']);
                    var scale = data['size']['width']/$("#signpro").width();
                    $("#scale").val(scale);
                    $('#imgpre').Jcrop({
                         aspectRatio : 1/1,
                         maxSize : [225/scale,225/scale],
                         minSize : [128/scale,128/scale],
                         onChange:   showCoords,
                         onSelect:   showCoords,
                         onRelease:  clearCoords
                    });
                    $("#signpro").fadeIn(500);
               }
          })
     });

     $("#okcrop").click(function(){
          $(this).fadeOut(500);
          //alert($("#cropdata").serialize());
          $.post("/user/head-upload/imgresize.php",
               $("#cropdata").serialize(),
               function(data){
                    console.log(data);
                    var jsondata = eval("("+data+")");
                    $("#imgok").attr("src",jsondata['src']);
                    $("#savepic").fadeIn(500);
                    $("#signpro").fadeOut(500);
               });
     });

     $("#inputs-sub").click(login_click);
     $("#inputs-sub-sign").click(sign_click);
     jQuery.validator.addMethod("string", function(value, element) {
          return this.optional(element) || validate_username_check(value);
     }, "&#x4E0D;&#x5141;&#x8BB8;&#x5305;&#x542B;&#x7279;&#x6B8A;&#x7B26;&#x53F7;!");
     jQuery.validator.addMethod("qq",function(value, element){
          return this.optional(element) || /^[1-9]\d{5,8}$/.test(value);
     },"&#x8BF7;&#x8F93;&#x5165;&#x6B63;&#x786E;&#x7684;QQ&#x53F7;&#x7801;");
     validator1  = $("#log-form").validate({
          errorPlacement:function(error,element){
               element.siblings(".validate-span").html(error);
          }
     });
     validator2  = $("#log-form2").validate({
          errorPlacement:function(error,element){
               element.siblings(".validate-span").html(error);
          }
     });
});

function enterIn(evt,type){
     var evt=evt?evt:(window.event?window.event:null);
     if (evt.keyCode=='13')
     {
          switch(type)
          {
               case '1':
                    $('#input-sub').click();
                    break;
               case '2':
                    $('#input-sign').click();
          }
     }
}

function showCoords(c)
{
     $('#x1').val(c.x);
     $('#y1').val(c.y);
     $('#x2').val(c.x2);
     $('#y2').val(c.y2);
     $('#w').val(c.w);
     $('#h').val(c.h);
};
function clearCoords()
{
     $('#coords input').val('');
     $('#h').css({
          color:'red'
     });
     window.setTimeout(function(){
          $('#h').css({
               color:'inherit'
          });
     },500);
};

function sign_click()
{
     var nameSubNod = $('#name_s');
     if(!validator2.form()){
          alert('验证未通过，请检查！');
          return;
     }
     //$('#password1').val(hex_md5($('#password1').val()+$('#name_s').val()));
     $.post("signf.php",{
          password_x:hex_md5(hex_md5($('#password1').val())+nameSubNod.val()),
          username_s:nameSubNod.val(),
          email_s:$('#email').val()
     },
     function(data){

          switch(data)
          {
               case 'SIGN_SUCCESS':
                    tip.init(
                         1,
                         "注册成功，欢迎加入ITsrcs.com！您可以：",
                         new Array("/user/" + getCookie("_uid"),"/changeinfo","/user/" + getCookie("_uid"),"/"),
                         new Array("完善个人资料","进入个人中心","返回主页")
                         );
                    tip.show();
                    $('#password1').val('');
                    $('#password2').val('');
                    break;
               case 'SIGN_FAILED:1':
                    if($("#errordisplay"))
                    {
                         var _error_display = $("#errordisplay");
                         _error_display.html("很抱歉，用户名 ["+$("#name_s").val()+"] 已经存在！请修改！");
                         _error_display.css("color","#ff751f");
                         $("#name_s").val('');
                    }
          }
     });
     return;
}

function login_click()
{
     var passwordNod = $('#password');
     var nameNod     = $('#name');
     validator1.valid();
     if(!validator1.form()){
          alert('验证未通过，请检查！');
          return;
     }
     passwordNod.val(hex_md5(hex_md5(passwordNod.val())+nameNod.val()));
     if(nameNod.val()=="" || passwordNod.val()=="")
     {
          alert('用户名或密码不能为空！');
          return;
     }
     $.post("log2.php",
     {
          username:nameNod.val(),
          password:passwordNod.val(),
          valicode:$("#code").val()
     },
     function(data)
     {
          switch(data)
          {
               case '0':
                    tip.init(
                         false,
                         "登录成功，欢迎来到ITsrcs.com！您可以：",
                         new Array("javascript:window.location.href=document.referrer","http://www.itsrcs.com"),
                         new Array("回到刚才的页面","返回主页")
                         );
                    tip.show();
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
}

function signf()
{
     $("#signpro").hide(450);
     $('.form-wapper:last').slideDown(350);
     $('.form-wapper:first').hide(450);
}
function loginf()
{
     $('.form-wapper:last').hide(450);
     $('.form-wapper:first').slideDown(350);
     $("#signpro").slideDown(350);
}