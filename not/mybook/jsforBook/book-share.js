/**
 *@Author koodo
 *@lastModify 2013-1-4
 */
var editor = null;
﻿$(function() {
    var link = "<link rel='stylesheet' type='text/css' href='/mod/kd/themes/default/default.css' />"
    + "<script charset='utf-8' src='/mod/kd/lang/zh_CN.js'></script>"
    + "<script charset='utf-8' src='/mod/kd/plugins/code/prettify.js'></script>";
    $.getScript('/mod/kd/kindeditor-min.js', function() {
        $('head').append($(link));
        KindEditor.basePath = '/mod/kd/';
        editor = KindEditor.create("#book-desc",{
            height : "400px",
            uploadJson : '/not/mybook/share/upload_json.php',
            pasteType : 1,
            cssPath : ['/mod/kd/plugins/code/prettify.css'],
            pluginsPath : "/mod/kd/plugins/",
            items : ['bold','italic','insertorderedlist','image','insertunorderedlist','preview','quickformat','link','justifyleft', 'justifycenter', 'justifyright', 'fontsize', 'fullscreen']
        });
        editor.html("");
        free(link);
    });

    $.jUploader({
        button: 'img-ul-btn',
        action: '/not/POST_command/bookLib/bookImageUpload.php',
        onComplete: function (fileName, response) {
            $('#book-img-name').val(response.imgn);
            $('#book-img-view').attr('src',response.pic);
            $('#img-ul-btn-tiptext').html('换一张');
            return;
        }
    });

    $('#btn-sf-file').click(function(){
        $.get('/not/POST_command/bookLib/share_getKpAuth.php',function(AuthUri){
            if(0!=AuthUri){
                var wd =
                window.open(AuthUri,'newwindow','height=410,width=760,top=0,left=0,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no');
                while(wd){
                    
                }
            }
            else ;
        });
    });

    /*$.jUploader({
        button: 'btn-sf-file',
        action: '/not/POST_command/bookLib/bookFileUpload.php',
        onComplete: function (fileName, response) {
            debug(response);
            return;
        }
    });*/

    /*$("#fileToUpload").change(function(evt){
        $.ajaxFileUpload ({
            url:'/not/POST_command/bookimgupload.php',
            secureuri:false,
            fileElementId:'fileToUpload',
            dataType: 'json',
            success:function (data){
                if(parseInt(data['size']['width'])>=498) $("#book-img-view").css("width","90%");
                $("#fileToUploadwapp").hide();
                $("#confirm-share").show();
                $("#book-img-view").attr("src",data['pic']);
                $("#book-img-name").val(data['imgn']);
            }
        })
    });*/

    $('#btn-input-addr').click(function(){
        $('#dp-add-wapp').slideUp(200);
        $('#down-load-page-p').show().css('display','block');
        $('#down-load-page').focus();
    });

    $("#cf-share-btn").click(function(){
        var option = {};

        option.bookname = $("#book-name").val();
        option.bookauthor = $("#book-author").val();
        option.bookinfo = editor.html();
        option.booktype = $("#book-type").val();
        //option.filetype = $("#file-type").val();
        option.filetype = 'pdf';
        option.bookimgname = $("#book-img-name").val();
        option.downloadpage = $("#down-load-page").val();

        //后处理

        if('' == option.bookname) {
            alert('书名不能为空!');
            return;
        }
        if('' == option.bookauthor) {
            alert('作者名不能为空!');
            return;
        }

        if('' == option.bookimgname)
            if(!confirm('你确定不上传封面了么,管理员会很忙的哦?')) return;

        debug(option);
        var loading_node = loadingWapper('data-wapper');
        $.post("/not/POST_command/booksubmit.php",
            option,
            function(Response){

                var _json = String2Json(Response);
                debug(_json);
                switch(_json['s']){
                    case '1':
                        $(loading_node).remove();
                        $("#data-wapper").hide();
                        $("#book-share-successpage").slideDown(200);
                        break;
                    default:
                        break;
                }
            });
    });

});