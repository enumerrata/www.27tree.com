function submit_log() {
    if(usercheck()) {
        var _block =  getCookie(getCookie('_uid')+"_comment_block")
        if( _block == "_block") {
        //alert('请休息一会再发表评论吧！');
        //return;
        }
    }
    var contentx  = $('#comment-content').val().html_specialchars();
    if(contentx=="" && contentx==null){
        $("#next-cp-comm").html("&#x7A7A;&#x7684;&#x8BC4;&#x8BBA;&#x600E;&#x4E48;&#x884C;&#x5462;");
        return;
    } else if(contentx == '输入你的评论...'){
        return;
    }
    $("#next-cp-comm").html("&#x5F88;&#x52AA;&#x529B;&#x5730;&#x63D0;&#x4EA4;&#x4E2D;...");
    $.post("/not/COMM/postc.php", {
        fuid : getCookie("_uid") == "" ? 0 : parseInt(getCookie("_uid")),
        fun : getCookie("username"),
        lev : "0",
        id : $("#COMMID").attr("rel"),
        targetType : $("#COMMTYPE").attr("rel"),
        content : $('#comment-content').val().html_specialchars_rawTextArea()
    },
    function(data){
        var json = eval("("+data+")");
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
                break;
            default:
                debug('unknown');
        }
        free(json);
        free(contentx);
    });
}