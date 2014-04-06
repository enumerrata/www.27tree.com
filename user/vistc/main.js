var tpl = '<div class="tc-swapp" style="display:none;"><div class="Shadow tc-shead"><a href="/user/visit/${uid}" title="${usn}"><img src="${ush}" width=50px height=50px/></a></div><div class="tc-scontent">${content}<div class="tc-dt"><a href="/user/visit/${uid}" >${usn}</a> >> 刚刚</div></div></div>';
$(function(){
    $('#tc-editor').focus(function(){
        if('1' == $(this).attr('data-lock')) $(this).html('').css('color','#444').attr('data-lock','0');
    });
    if(!usercheck()) $('#tc-cm-btn').html('先登陆').attr('href','/account/login');
    if($('#commi').val() == 0) {
        $('#tc-editor').html('沙发,还不快抢!');
        $('#tc-cm-btn').html('抢沙发');
    }
    $('#tc-cm-btn').click(function(){
        var editor = $('#tc-editor');
        var content = $('#tc-editor').text();
        if(editor.attr('data-lock') != '1' && content != ''){
            $.post('/user/api/comm/comm_tc.php',{
                tcmom : $('#tcmom').val(),
                content : content
            },function(res){
                var R = String2Json(res);
                if(R.s == 1){
                    var _node = $(templates_replace(tpl,{
                        uid:getCookie('_uid'),
                        usn:decodeURI(getCookie('username')),
                        ush:decodeURI(getCookie('ush')),
                        content:content
                    }));
                    $('#comm_editor').hide();
                    $('#comm_list_wapper').prepend(_node);
                    _node.fadeIn(300);
                } else {

                }
            });
        } else {
            return;
        }
    });
})