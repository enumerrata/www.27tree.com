var alertBar = null;
var psw_check = false;
var usn_exist = false;
var open_login = 0;
$(function() {
    
    open_login = parseInt($('#open_login').val());
    
    if(open_login){
        alertBar = $('.or-alert');
        validate($('#data-usn').val(),0);
        cusn_ex();
    } else {
        alertBar = $('#alert-bar');
    }
    
    $('#sign-btn').click(sign_click);
    
    $('#data-usn').blur(cusn_ex);
});

function cusn_ex(){
    var usn = $('#data-usn').val();
    if(usn.length <= 10 && usn.length >= 3){
        $.post('/account/register/postc/check_usn.php',{
            usn:$('#data-usn').val()
        },function(re){
            if(re == 1){
                // 用户名存在
                usn_exist = true;
            } else {
                // 用户名不存在
                usn_exist = false;
            }
            validate(usn,0);
        });
    } else {
            
    }
}

function validate(value,_t){
    switch(_t){
        case 0:
            //usn
            if(usn_exist){
                show_alert('用户名已存在！');
                error_sign($('#data-usn'));
                return false;
            } else {
                if(!validate_usn(value)){
                    show_alert('请输入合法的用户名！');
                    error_sign($('#data-usn'));
                    return false;
                }
                if(value.length > 10 || value.length < 3){
                    show_alert('请输入3到10个字符的用户名！');
                    error_sign($('#data-usn'));
                    return false;
                }
                right_sign($('#data-usn'));
            }
            break;
        case 1:
            //psw
            if(!validate_psw(value)){
                show_alert('请输入最小长度为6的密码,密码只能由数字和字母组成！');
                error_sign($('#data-psw'));
                psw_check = false;
                return false;
            } else psw_check = true;
            right_sign($('#data-psw'));
            if(false === validate($('#data-psws').val(),2)) return false;
            break;
        case 2:
            //psws
            if($('#data-psw').val() !== value || !psw_check){
                error_sign($('#data-psw'));
                error_sign($('#data-psws'));
                if(!psw_check) 
                    show_alert('请输入最小长度为6的密码,密码只能由数字和字母组成！');
                else 
                    show_alert('两次输入的密码不同!');
                return false;
            }
            right_sign($('#data-psw'));
            right_sign($('#data-psws'));
            break;
        case 3:
            if(!isEmail(value)){
                error_sign($('#data-email'));
                show_alert('请输入正确的电子邮箱！');
                return false;
            }
            right_sign($('#data-email'));
            //email
            break;
        case 4:
            //code
            if(value !== $('#data-code-x').val()){
                error_sign($('#data-code'));
                show_alert('程序题答案不对哦');
                return false;
            }
            right_sign($('#data-code'));
            break;
    }
    hide_alert();
    return true;
}

function validate_usn(value){
    return validate_username_check(value);
}

function validate_psw(value){
    return /[a-zA-Z0-9]{6,}/i.test(value);
}
function show_alert(_str){
    alertBar.html(_str).show();
}

function hide_alert(){
    alertBar.hide();
}

function right_sign(_node){
    $(_node).css('background',"url('/img/vali-r.png') right center no-repeat");
    $(_node).parent().css('border-color','green');
}

function error_sign(_node){
    $(_node).css('background',"url('/img/vali-w.png') right center no-repeat");
    $(_node).parent().css('border-color','#900');
}

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

function sign_click(){
    var data = {};
    
    data.email = $('#data-email').val();
    data.usn = $('#data-usn').val();
    
    var post_path = '/account/register/postc/';
    post_path += !open_login ? 'sign_normal.php' : 'sign_open.php';
    
    if(!open_login){
        // 普通注册
        data.psw = $('#data-psw').val();
        data.code = $('#data-code').val();
    }
    
    var post_data = new Object();
    
    if(!open_login){
        if(validate(data.usn,0) && validate(data.psw,1) && validate(data.email,3) && validate(data.code,4)){
            post_data = {
                psw:crypt(data.psw),
                usn:encodeURI(data.usn),
                email:data.email
            };
        } else {
            return false;
        }
    } else {
        if(validate(data.usn,0) && validate(data.email,3)){
            post_data = {
                usn:encodeURI(data.usn),
                email:data.email
            };
        } else {
            return false;
        }
    }
    
    var loading_node = loadingWapper('data-wapper');
    
    $.post(post_path,post_data,
        function(data){
            var R = String2Json(data);
            $(loading_node).remove();
            if(R.s == 1){
                window.location.href='/account/register/info';
            } else {
            //注册失败 todo 
            }
        });
}

function switchLang(type){
    $.post('/account/register/postc/switch_code.php',{
        key:type
    },function(code){
        $('#data-code-x').val(code);
        $('#ts-img').attr('src','./testimg/ts-'+type+'.png');
        validate($('#data-code').val(),4);
    });
}

//signSuccess();

function signSuccess(){
    $('#succ-wapper').show();
    $('#img-sign').attr('src','./testimg/signups.png');
    $('#data-wapper').hide();
    $('#usrc').attr('href','/user/' + getCookie('_uid'));
//debug(data);
}
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