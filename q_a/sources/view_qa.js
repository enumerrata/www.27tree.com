window.editor = null;
var answerSubmited = false;
function submitAnswer(_button_node){
    if(answerSubmited)return;
    if(!usercheck()){
        $(_button_node).html('\u8fd8没有登录,你可以 <a href=\"/account/login\">登录</a> / <a href=\"/account/register\">注册</a> 后再进行操作');
    } else if(editor.html() !== ''){
        var loading_node = loadingWapper('submitAns-wapper');
        $(_button_node).html('<img style="display:block;margin-top:6px;" src="/img/loading_19_13.gif"/>');
        $.post("/q_a/postc/cm_answer.php",{
            qid:parseInt($(_button_node).attr('data-qid')),
            content:editor.html()
        },function(res){
            var state = String2Json(res);
            $(loading_node).remove();
            $('#answerSet').hide();
            answerSubmited = true;
            //threadRun(function(){
                //window.location.href=window.location.href;
            //},2000);
            if(state.s == '1'){
                var commi = parseInt($('#vqa-commi').html());
                $('#vqa-commi').html('<span style="color:green;">' + (commi + 1) + "</span>")
                $(loading_node).remove();
                $('#vqa-comm').html(editor.html());
                $('#vqa-commbar').remove();
                //window.location.href=window.location.href;
                //editor.remove();
                //$(_button_node).html('问题回答成功,2秒后刷新');
            } else {
                $(_button_node).html('Sorry,答案提交失败！');
            }
        });
    } else return;
}

function submitVote(_target_node){
    var _voteNum_node = $(_target_node).siblings('.vote-num');
    _voteNum_node.html(parseInt(_voteNum_node.html())+1);
    $.post("/q_a/postc/vote_qa.php",{
        qid:$('#qid').val()
        },function(res){
        debug(res);
    });
}