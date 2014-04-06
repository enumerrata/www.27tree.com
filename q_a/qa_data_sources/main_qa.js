var qa_type_2_on = true;
var qa_type_3_on = true;
var alert_bar = null;
window.editor = null;
var loading_wapper = null;
$(function(){
    alert_bar = $('#alert-bar');
})
function submitQuestion(_btn_node){
    var data_title = $('#title_sub').val();
    if(!usercheck()){
        $(_btn_node).html('\u8fd8没有登录,你可以 <a href=\"/log/\">登录</a> / <a href=\"/log/signprom.php\">注册</a> 后再进行操作');
        return;
    }
    if(data_title == "" || data_title == "\u4f60有什么问题,请在这里输入"){
        barAlert('\u8bf7输入问题!');
        return;
    } else {
        if(data_title.length < 6){
            barAlert('\u6807题太短啦!');
            return;
        }
        if(editor.text().length < 10){
            barAlert('\u8bf7输入至少10个字的问题描述!');
            return;
        }
        var StringBuilder = [];
        StringBuilder.push($('#qa_type_1').val());
        if(qa_type_2_on) StringBuilder.push($('#qa_type_2').val());
        if(qa_type_3_on) StringBuilder.push($('#qa_type_3').val());
        var data_qa_type = StringBuilder.join('|');
        var data_content = editor.html();
        var loading_node = loadingWapper('beforeSet');
        $.post("/q_a/postc/new_question.php",{
            title:data_title,
            type:data_qa_type,
            content:data_content
        },function(res){
            var s = String2Json(res);
            if(s['s'] == '1'){
                $('#afterSet').show();
                $('#beforeSet').hide();
                $('#sm-success-title').html(data_title).attr('href',s['url']);
                $('#sm-success-content').html(data_content);
                $('#sm-success-url').attr('href',s['url']);
                $(loading_node).remove();
            } else {
                alert('Sorry,\u95ee题发表失败,我们将尽快修复!');
                //window.location.href='/q_a/'
            }
        });
    }
}

function qa_selectChange(num,_select_node){
    var s_index = $(_select_node)[0].selectedIndex;
    switch(num){
        case 1:
            qa_type_2_on = s_index == 0 ? true : false;
            if(s_index == 0){
                $('.sl-1-addon').fadeIn(500);
            } else {
                qa_type_2_on = false;
                qa_type_3_on = false;
                $('.sl-1-addon').hide();
            }
            break;
        case 2:
            qa_type_2_on = true;
            qa_type_3_on = true;
            break;
    }
}

function barAlert(_str){
    alert_bar.html(_str);
    alert_bar.show().css('display','block');
    threadRun(function(){
        alert_bar.slideUp(300);
    },1500);
}