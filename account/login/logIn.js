$(function(){
    var lock_login = false;
    $('#signProm').hide(500);
    $("#vailcodeimgs").attr("src","/account/valicode.php");
    $("#login-btn").click(function(){
        var passwordNod = $('#password');
        var nameNod     = $('#username');
        if(nameNod.val()=="" || passwordNod.val()=="") {
            alert('用户名或密码不能为空！');
            return;
        }
        var option = {};
        option.username = nameNod.val();
        option.password = crypt(passwordNod.val());
        option.valicode = $("#login-val").val();
        
        var loading_wapp = loadingWapper('data-wapper');
        $.post("/account/login/login_handle.php",option,function(data) {
            debug(data);
            $(loading_wapp).remove();
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
                    window.location = '/account/login/';
                    break;
                default:
            }
            passwordNod.val("");
        });
    });
    var listen = false;
    var i_x = 0;
    // 滑动解锁脚本
    $('#dp-lock-btn').mousedown(function(){
        if(!lock_login) listen = true;
        document.onmousemove = function(e){
            if(listen){
                var x = getMouseX(e);
                if(i_x == 0) i_x = x;
                var ml = x - i_x;
                ml = ml > 0 ? ml > 400 ? 400 : ml : 0;
                $('#dp-lock-btn').css('margin-left',ml + 'px');
                // ML == 400 时完成解锁
                if(ml == 400) {
                    lock_login = true;
                    listen = false;
                    $('#login-btn').slideDown().css('display','block');
                }
            }
        }
        $(document).mouseup(function(){
            listen = false;
        });
    });
    
    function getMouseX(ev){
        ev=ev || window.event;
        if($.browser.mozilla) return ev.layerX + document.body.scrollLeft;
        if(ev.pageX){
            return ev.pageX;
        }
        return ev.clientX + document.body.scrollLeft - document.body.clientLeft
    }
});
function crypt(str)
{
    var returnVal, i, len;
    var c1, c2, c3;
    var base64EncodeChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
    var base64DecodeChars = new Array(
        -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
        -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
        -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, 63,
        52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1, -1, -1, -1, -1, -1,
        -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
        15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, -1, -1, -1, -1, -1,
        -1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40,
        41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, -1, -1, -1, -1, -1);
    len = str.length;
    i = 0;
    returnVal = "";
    while(i < len)
    {
        c1 = str.charCodeAt(i++) & 0xff;
        if(i == len)
        {
            returnVal += base64EncodeChars.charAt(c1 >> 2);
            returnVal += base64EncodeChars.charAt((c1 & 0x3) << 4);
            returnVal += "==";
            break;
        }
        c2 = str.charCodeAt(i++);
        if(i == len)
        {
            returnVal += base64EncodeChars.charAt(c1 >> 2);
            returnVal += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
            returnVal += base64EncodeChars.charAt((c2 & 0xF) << 2);
            returnVal += "=";
            break;
        }
        c3 = str.charCodeAt(i++);
        returnVal += base64EncodeChars.charAt(c1 >> 2);
        returnVal += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
        returnVal += base64EncodeChars.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >>6));
        returnVal += base64EncodeChars.charAt(c3 & 0x3F);
    }
    return returnVal;
}