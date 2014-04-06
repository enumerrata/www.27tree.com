
var tpl_ss = '<div class="f-newshuoshuo"><a class="headwapper" href="/user/${uid}"><img src="${ush}" width="45px" height="45px"/></a><div style="margin-left:60px;line-height:25px;"><a href="/user/${uid}">${usn}</a> : ${ct}<span class="block Gray">刚刚</span></div></div>';

function pushShuoShuo(){
    var alert_bar = $('#alert-bar');
    var _content = $('#f-ss-tra').val();
    if(!usercheck()){
        alert_bar.html("请先 <a href='/log'>登录</a> / <a href='/log/signprom.php'>注册</a>").show();
        threadRun(function(){
            alert_bar.hide();
        },15000);
    } else if(_content != '' && _content !='我也来一段') {
        var Loading_obj = loadingWapper('wapper_push_ss'); 
        $.post('/user/postc/addShuoshuo.php',{
            content : _content,
            param_with_ush : 1
        },function(res){
            var State = String2Json(res);
            if(State.s == 1){
                $(Loading_obj).remove();
                $('#wapper_push_ss').slideUp(300);
                var tpl_node = $(templates_replace(tpl_ss,{
                    uid:getCookie('_uid'),
                    usn:getCookie('username'),
                    ush:State.ush,
                    ct:_content
                }));
                $('#wapper_ss_set').prepend(tpl_node);
                goTop(0.1,5);
            } else {
                alert_bar.html('发表失败!').show();
                threadRun(function(){
                    alert_bar.hide();
                },1000);
            }
        });
    } else {
        alert_bar.html('请输入内容').show();
        threadRun(function(){
            alert_bar.hide();
        },1000);
    }
}