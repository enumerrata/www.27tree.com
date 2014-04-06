var editor = null;
$(function()
{
    $('.more-item').hover(function(){
        $(this).css("border","1px solid #aaa");
    },function(){
        $(this).css("border","1px solid #eee");
    });
});

function loadStype()
{
    $.get("/not/submitType.php",function(data){
        $("#submittype").html(data).show();
        selectC($("#arttype").val());
        selectS($("#arttype").val());
        $("#loadst").hide(500);
    });
}

function loadmore()
{
    $.post("/not/loadmore.php",{
        rawdata : $("#sugglist").val()
    },
    function(data){
        var json = eval("("+data+")");
        var str="";
        $.each(json,function(index,value){
            str += "<div class='more-item borderR5'><div class='more-item-p'><img class='more-author-p borderR5' src='"+value['headimg']+"' height='45px' width='45px'></img></div><div class='more-item-content'>"
            +"<a href='"+value['href']+"'>"+value['title']+"</a>"
            +"<span>&#x53D1;&#x8868;&#x4E8E;："+value['date']+"</span>"
            +"<div class='clear'></div></div><div class='clear'></div></div>";
        });
        $("#line").after($("<div id='line'>"+str+"<div class='clear'></div></div>"));
        //$(".more").append($("<div id='line'>"+str+"<div class='clear'></div></div>"));
        free(json);
        free(str);
    });
}

function editOk() {
    $("#edit-top,#edit-bottom").html("&#x975E;&#x5E38;&#x52AA;&#x529B;&#x5730;&#x4E0A;&#x8F7D;&#x4E2D;|Uploading...");
    var cl = new Array();
    cl.push("ct");
    cl.push("ctx");
    var options = {
        artid : $("#artid").val(),
        ct : editor.html().html_specialchars(),
        ctx : editor.text().substr(0,180)
    };

    /*if($("#edit-h1").val() != $("#art-title").html()){
          cl.push("ct");
          cl.push("ctx");
          options.tt = $("#edit-h1").val();
     }*/
    // TODO 编辑器内容改变之后才上传文章，减少传输量
    if($("#edit-h1").val() != $("#art-title").html()){
        cl.push("tt");
        options.tt = $("#edit-h1").val();
    }
    if($("#submittype").html()!=''){
        cl.push("cgt");
        options.cgt = $("#type_s").val() + "," + $("#stype_s").val();
    }
    options.cl = cl.join(",");
    $.post("/mod/changeart.php",
        options,
        function(data){
            console.log(data);
            switch(data)
            {
                case '1'://success!
                    Interface_show();
                    break;
                case '0'://falied!
            }
        });
}

function loadKd(_nodeId)
{
    var link = "<link rel='stylesheet' type='text/css' href='/mod/kd/themes/default/default.css' />"
    + "<script charset='utf-8' src='/mod/kd/lang/zh_CN.js'></script>"
    + "<script charset='utf-8' src='/mod/kd/plugins/code/prettify.js'></script>";
    $.getScript('/mod/kd/kindeditor-min.js', function(){
        $.post('/mod/getArtRawData.php',{
            artid : $('#artid').val()
        },
        function(data) {
            var json = String2Json(data);
            if(json['s'] == '0') return;
            else if(json['s'] == '1') {
                $("body").append($(link));
                KindEditor.basePath = '/mod/kd/';
                $(_nodeId).css('display','block');
                editor = KindEditor.create(_nodeId,{
                    pasteType : 1,
                    cssPath : ['/mod/kd/plugins/code/prettify.css'],
                    pluginsPath : "/mod/kd/plugins/",
                    items : ['bold','italic','insertorderedlist','insertunorderedlist','preview','quickformat','hr','source', 'code', 'link', 'image','justifyleft', 'justifycenter', 'justifyright', 'fontsize', 'fullscreen']
                });
                editor.html(json['c'].html_specialchars_back());
                // Interface switching
                Interface_hiding();
                link = null;
            }
        }
        );
    });
}

function Interface_hiding()
{
    $("#loadmore-button").hide();
    $("#edit-ok-span").fadeIn(500);
    $("#edit-del-span").fadeIn(500);
    $("#edit-back-span").fadeIn(500);
    $(".art-content").fadeOut(500);
    $("#like-this").hide();
    $("#bdshare").hide();
    $("#edit-enter-span").hide();
    $("#state-d").html("&#x7F16;&#x8F91;&#x6587;&#x7AE0;");
    $("#edit-h1").show();
    $("#loadst").show();
    $("#art-title").parent("h1").hide();
    $("#tit_div>h5,#tit_div>span").hide();
    $(".more").hide();
    $("#left-bottom").hide();
    $("#ad-right").hide();
    $('#edit-top,#edit-bottom').slideDown(500);
}

function Interface_show()
{
    $("#loadmore-button").show();
    $("#submittype").hide();
    $("#edit-ok-span").hide();
    $("#edit-del-span").hide();
    $("#edit-back-span").hide();
    $("#edit-enter-span").show();
    $("#bdshare").show();
    $("#loadst").hide();
    $(".art-content").html(editor.html().html_specialchars().html_specialchars_final());
    dp.SyntaxHighlighter.HighlightAll("code");
    editor.remove();
    $("#editarea").hide();
    $(".art-content").fadeIn(500);
    if($("#colok").val()!="false") $("#like-this").fadeIn(500);
    $("#state-d").html("\u6b63文");
    $("#edit-h1").hide();
    $("#art-title").html($("#edit-h1").val()).parent("h1").show();
    $("#tit_div>h5,#tit_div>span").show();
    $(".more").show();
    $("#left-bottom").show();
    $("#ad-right").show();
    $('#edit-top,#edit-bottom').hide();

}

function newtrf() {
    var id=parseInt($("#artrawid").val());
    var type = $("#art-type").val();
    var title = $("#art-title").html();
    $.post("/not/js/newtrf.php", {
        id : id,
        type: type,
        title : title
    },
    function(data) {
        alert(data);
    });
}

function submit_comm() {
    alert('asd');
    if(usercheck()) {
        var _block =  getCookie(getCookie('_uid')+"_comment_block")
        if( _block == "_block") {
        //alert('请休息一会再发表评论吧！');
        //return;
        }
    }
    var hex = new Hex_session();
    hex.callback=function(data) {
        switch(data) {
            case "1":
                break;
            case "0":
                break;
            default:
                debug("Unknown!");
        }
        //process->
        //var $type     = $("#art-type").val();
        var path      = encodeURI($('#path_hidden').val());
        var contentx  = $('#comment-content').val();
        contentx  = contentx.html_specialchars();
        if(contentx=="" || contentx==null){
            $("#next-cp-comm").html("&#x7A7A;&#x7684;&#x8BC4;&#x8BBA;&#x600E;&#x4E48;&#x884C;&#x5462;");
            return;
        }

        $("#next-cp-comm").html("&#x5F88;&#x52AA;&#x529B;&#x5730;&#x63D0;&#x4EA4;&#x4E2D;...");
        /*$.post("/not/comm_blog.php", {
               vis : usercheck() ? "0":"1",
               comment : contentx,
               path : path,//path of xmlfile
               url : window.location.href,
               title : $('#tit_div h1').html(),
               blogid : $('#blogid').val()
          },*/
        $.post("/not/COMM/postc.php", {
            fuid : getCookie("_uid") == "" ? -1 : parseInt(getCookie("_uid")),
            fun : getCookie("username"),
            lev : "0",
            id : $("#COMMID").attr("rel"),
            targetType : $("#COMMTYPE").attr("rel"),
            content : $('#comment-content').val().html_specialchars_rawTextArea()
        },
        function(data) {
            debug(data);
            var json = eval("("+data+")");
            switch(json['s']) {
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
                    var html=
                    "<div class='comment-list' style=\"display:none;\">"+
                    "<div class='comment-author-p'><img src='"+json['head-img']+"' width=\"100%\" height=\"100%\"/></div>"+
                    "<div class='comment-content borderR5'>"+
                    "<div class='comment-info borderR5'>&nbsp;<span class='comment-info-place'>"+$placex+"</span>&nbsp;<span class='comment-info-author'></span>&nbsp;&nbsp;&nbsp;<span class='comment-info-date'></span></div>"+
                    "<div class='comment-content-in'></div>"+
                    "<div class='clear'></div><s></s><i></i></div><div class='clear'></div>"+
                    "</div>";
                    var HTML=$(html);
                    var userlink = !usercheck()?"游客" : "<a href='/user/?uid="+getCookie("_uid")+"'>"+decodeURI(getCookie("username"))+"</a>";
                    HTML.find('.comment-info-author').html(userlink);
                    HTML.find('.comment-content-in').html(decodeURI(contentx));
                    HTML.find('.comment-info-date').html(new Date().format("yyyy-MM-dd hh:mm:ss")+"&nbsp;&nbsp;");
                    $('#comment-cast').after(HTML).slideUp(800);
                    HTML.slideDown(800);
                    $("#left-bottom>span.tipS").slideUp(500);
                    $('#comment-content').val("");
                    $("#next-cp-comm").html("点我发表文章评论");
                    $("#tip-ems").html($("#text_max_num").val());
                    free(html);
                    free(HTML);
                    free($placex);
                    break;
                default:
                    alert("Unknown!");
            }
            free(json);
            free(path);
            free(contentx);
        });
    }
    hex.check();
}

//commentAdd_module
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
        fuid : getCookie("_uid") == "" ? -1 : parseInt(getCookie("_uid")),
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
                var html=
                "<div class='comment-list' style=\"display:none;\">"+
                "<div class='comment-author-p'><img src='"+json['head-img']+"' width=\"100%\" height=\"100%\"/></div>"+
                "<div class='comment-content borderR5'>"+
                "<div class='comment-info borderR5'>&nbsp;<span class='comment-info-place'>"+$placex+"</span>&nbsp;<span class='comment-info-author'></span>&nbsp;&nbsp;&nbsp;<span class='comment-info-date'></span></div>"+
                "<div class='comment-content-in'></div>"+
                "<div class='clear'></div><s></s><i></i></div><div class='clear'></div>"+
                "</div>";
                var HTML=$(html);
                var userlink = !usercheck()?"游客" : "<a href='/user/?uid="+getCookie("_uid")+"'>"+decodeURI(getCookie("username"))+"</a>";
                HTML.find('.comment-info-author').html(userlink);
                HTML.find('.comment-content-in').html(decodeURI(contentx));
                HTML.find('.comment-info-date').html("刚刚&nbsp;&nbsp;");
                $('#comment-cast').after(HTML).slideUp(800);
                HTML.slideDown(800);
                free(html);
                free(HTML);
                free($placex);
                break;
            default:
                alert("Unknown!");
        }
        free(json);
        free(contentx);
    });
    
}
function letter_remain(text)
{
    var _n_content = $("#comment-content");
    var _n_tip = $("#tip-ems");

    var max_num = $("#text_max_num").val();
    var num     = max_num-text.length;
    if(num<0) {
        _n_content.val(text.substr(0,max_num));
        _n_tip.html(0);
    } else {
        _n_tip.html(max_num-text.length);
    }
}

function pages_ref(num)
{
    ul.not('.curr').addClass('hide-li');
    if(num>=5 && num<=length-5) {
        for(var i=0;i<=5;i++) {
            ul.eq(num+i).removeClass('hide-li');
            if(num-i>=0) ul.eq(num-i).removeClass('hide-li');
        }
        i = null;
    } else if(num<5) {
        ul.slice(0, 11).removeClass('hide-li');
    } else if(num>length-5) {
        ul.slice(length-11, length-2).removeClass('hide-li');
    }
}

function loadNewsC()
{
    var $type=$('#type').val();
    var xml_path="/not/file/comment_news_"+$type+".xml";
    $.get(xml_path,function(data) {
        var num   = $(data).find('num').text();
        var num2  = 2;
        var nodes = $("#com-left");
        if(num=='0') {
            return;
        }
        $(data).find('c').each(function(index, ele) {
            var author = $(ele).find('author-c').text();
            var conf   = $(ele).find('conf-c').text();
            var date   = $(ele).find('date-c').text();
            var url    = $(ele).find('url-c').text();
            //var content=$(ele).find('content-c').text();
            var title  = $(ele).find('title-c').text();
            title      = title.substr(1,title.length-2);
            if(num2==-1) {
                nodes=nodes.siblings('ul');
                num2=2;
            }
            conf = conf.replace("&lt;/br&gt;","</br>");
            conf = conf.replace("&amp;nbsp;"," ");
            conf = conf.substr(0,150)+"...";
            $(nodes).find('li').eq(num2).show().find('a').html(title).attr('href',url);
            $(nodes).find('li').eq(num2).find('.com-conf').html(conf);
            $(nodes).find('li').eq(num2).find('.com-author').html(decodeURI(author));
            num2--;
        });
        if(parseInt($('#pages').val())==0)$('#news_com').fadeIn(1500);
        else $('#news_com').css('display','block');
        $('#slide_nm').css('display','block');
    });
}


function like_this(){
    check_login()
    if($("#colok").val()=="false") return;
    var _content = new Boolean(parseInt($("#content:hidden").val()));
    var _banche_id = 0;
    var _article_id = 0;
    var _mod = -1;
    if(_content==true){
        _mod = 1;
        _article_id = parseInt($("#artid:hidden").val());
    } else if(!_content==false){
        _banche_id = $("#type:hidden").val();
        _mod = 0;
    } else {}
    $.post("/not/js/likeit.php", {
        username   : getCookie("username"),
        _uid       : getCookie("_uid"),
        mod        : _mod,
        banche_id  : _banche_id,
        article_id : _article_id
    },
    function(data) {
        switch(parseInt(data)) {
            case 1:
                $("#like-this").fadeOut(500);
                delCookie("baninfo");
                alert("收藏成功！");
                break;
        }
    });
}

function del_ban_coll()
{

}

function load_ban_coll() {
    if(getCookie("username")!="" && getCookie("_uid")!="") {
        var bandCookie;
        bandCookie = getCookie("baninfo");
        if(bandCookie) {
            //Cookie 缓存！
            bandHandle(getCookie("baninfo"));
        } else {
            $.post("/not/js/getinfo.php",{
                uid:getCookie("_uid"),
                type:"banc"
            },bandHandle);
        }
        free(bandCookie);
    }
}

function bandHandle(data) {
    if(!getCookie("baninfo")) setCookie("baninfo",data,7200);
    var match_str=$("#type:hidden").val();
    if(data.match(match_str)) {
    } else {
        $("#like-this").css("display","block");
        $("#colok").val("true");
    }
    free(match_str);
}

