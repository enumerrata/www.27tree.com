window.editor = null;
var answerSubmited = false;
function submitAnswer(_button_node){
    if(answerSubmited)return;
    if(!usercheck()){
        $(_button_node).html('还没有登录,你可以 <a href=\"/log/\">登录</a> / <a href=\"/log/signprom.php\">注册</a> 后再进行操作');
    } else if(editor.html() !== ''){
        var loading_node = loadingWapper('submitAns-wapper');
        $.post("/q_a/postc/cm_answer.php",{
            qid:parseInt($(_button_node).attr('data-qid')),
            content:editor.html()
        },function(res){
            var state = String2Json(res);
            editor.remove();
            $('#answerSet').hide();
            answerSubmited = true;
            threadRun(function(){
                window.location.href=window.location.href;
            },2000);
            if(state.s == '1'){
                $(loading_node).remove();
                //todo No refresh
                $(_button_node).html('问题回答成功,2秒后刷新');
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