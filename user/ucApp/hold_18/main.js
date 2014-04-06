function postRecord(){
    if(!usercheck()){
        $('#record_submit_btn').html('还没有登录,你可以 <a href=\"/log/\">登录</a> / <a href=\"/log/signprom.php\">注册</a> 后再进行操作');
        return;
    }
    var re = $('#countTime').html();
    $.post("/user/ucApp/hold_18/postc/submitRecord.php",{
        record:re
    },function(res){
        debug(res);
    });
}