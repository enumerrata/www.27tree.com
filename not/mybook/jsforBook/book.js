var downs = false;
$(function() {
    if(window.innerHeight - $('#book-intro-content').height() < 0){
        $('#book-intro-content').height(window.innerHeight);
        $('#book-intro-open').show();
        $('#book-intro-open .Gbtn').click(function(){
            $('#book-intro-content').css('height','auto');
        });
    }

/*if($("#dls").attr("ref") !== "no")
        $("#downLoadButton").click(function(){
            if(downs) return;
            var button = $(this);
            if(false === usercheck()){
                $(this).html("<img src=\"/img/pdf-file-icon.png\"/>" + "请先 <a href=\"/log/\">登录</a>/<a href=\"/log/signprom.php\">注册</a>");
            } else {
                if(confirm("下载将消耗2个柿饼,你确定?")){
                    $.post("/not/POST_command/getBookdownload.php",{
                        bookid:$("#bookid").val()
                    },function(res){
                        debug(res);
                        var s = String2Json(res);
                        switch(s['s']){
                            case '1':
                                downs = true;
                                window.open(s['page'].toString());
                                button.html('<span class=\"cRed\">下载开始</span>');
                                break;
                            case '0':
                                break;
                            case '2':
                                downs = true;
                                button.html('<span class=\"cRed\">对不起，您的柿饼少于2个</span>');
                                break;
                        }
                    });
                }
            }
        });*/
});

function usr_collect_book(bookid,_node){
    if(!usercheck()) {
        $(_node).html('请先注册 / 登录');
        return;
    }
    if(!isInteger(bookid)){
        return;
    } else {
        $.post("/not/POST_command/usr_collect_book.php",{
            bid:bookid
        },function(re){
            var State = String2Json(re);
            if(State.s == 1){
                $(_node).html('收藏成功');
            } else {
                $(_node).html('收藏失败');
            }
        });
    }

}

function submit_log() {
    if(usercheck()) {
        var _block =  getCookie(getCookie('_uid')+"_comment_block")
        if( _block == "_block") {
        //alert('请休息一会再发表评论吧！');
        //return;
        }
    }
    var contentx  = $('#comment-content').val();
    contentx  = contentx.html_specialchars();
    if(contentx=="" || contentx==null){
        $("#next-cp-comm").html("&#x7A7A;&#x7684;&#x8BC4;&#x8BBA;&#x600E;&#x4E48;&#x884C;&#x5462;");
        return;
    } else if(contentx == '输入你的评论...'){
        return;
    }
    $("#next-cp-comm").html("&#x5F88;&#x52AA;&#x529B;&#x5730;&#x63D0;&#x4EA4;&#x4E2D;...");
    $.post("/not/COMM/postc.php", {
        fuid : getCookie("_uid") == "" ? 0 : parseInt(getCookie("_uid")),
        fun : getCookie("username"),
        lev : 0,
        id : $("#COMMID").attr("rel"),
        targetType : $("#COMMTYPE").attr("rel"),
        content : $('#comment-content').val().html_specialchars_rawTextArea()
    },
    function(data){
        var json = String2Json(data);
        switch(json['s'])
        {
            case "1":
                setCookie(getCookie('_uid')+"_upload_block","_block",300);
                var $placex=$('.comment-list').length+1;
                switch($placex)
                {
                    case 1:
                        $placex = '&#x6C99;&#x53D1;';
                        break;
                    case 2:
                        $placex = '&#x677F;&#x51F3;';
                        break;
                    case 3:
                        $placex = '&#x5730;&#x677F;';
                        break;
                    default:
                        $placex=$placex.toString()+'&#x697C;';
                }
                var HTML= '<div class="comment-list"><em class="headwapper"><img src="${ush}" width="45px" height="45px"></em><div class="comment-content"><s></s><i></i><div class="comment-info"><span class="comment-info-date">刚刚</span><em class="editside"></em></div><div class="comment-content-in">${usn} : ${ct}</div></div><div class="clear"></div></div>';
                var userlink = !usercheck()?"游客" : "<a href='/user/?uid="+getCookie("_uid")+"'>"+decodeURI(getCookie("username"))+"</a>";
                var _n = $(templates_replace(HTML,{
                    ush:json['head-img'],
                    ct:decodeURI(contentx),
                    usn:userlink
                }));
                $('#comment-cast').after(_n).hide();
                //HTML.slideDown(800);
                break;
            default:
                alert("Unknown!");
        }
    });
}