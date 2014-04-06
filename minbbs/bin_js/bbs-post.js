/**
 * @author koodo
 * @desc 帖子 / 回帖 / 多级评论 / 功能
 */
var editor;
var Rcomm_area = null;

// 定义ria模板
var TMPLATES_subcomm = '<div class="sub-comm-item"><tx></tx><t></t><em class="ct-t-whw"><img src="${ush}" width="32px"></em><div style="margin-left:42px;line-height:18px;"><a href="${uurl}">${usn}</a> @<a href="${amp}">${amn}</a>&nbsp;：${ct}<span class="Gray block">刚刚</span></div></div>';
var TMPLATES_commCaster = "<div class=\"commAddOnCast\"><span class=\"sdText\"><textarea></textarea></span><div class=\"commAddOnCast-bar\"><em class=\"mo-button\"></em><a class=\"concbtn\" href=\"javascript:;\">发表</a><em class=\"clear\"></em></div></div>";
var TMPLATES_comm = '<div class="vps-wapper"><a class="headwapper"><img src="${ush}" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray"><a href="${uurl}">${usn}</a> / 刚刚</div>${ct}</div></div>';

//dojo模板加载
dojo.require("dojo.fx");

//异步锁对象
var $_LOCK = {};
$_LOCK.tips_editorloading = false;


dojo.addOnLoad(function(){
    var COMA = dojo.byId("COMA")
    if(null !== COMA){
        require(["dojo/dom-attr"], function(domAttr){ 
            if(domAttr.get(COMA, "rel") == 1){
                dojo.query(".delPostCommButton").onclick(function(evt){
                    if(!confirm("你确定要删除这个跟贴吗?"))return;
                    dojo.xhrPost({
                        url : "/minbbs/postCommand/delComm.php",
                        postData : "postid=" + dojo.byId("postid").value + "&index=" + domAttr.get(evt.srcElement,"rel"),
                        load : function(response){
                            var obj = dojo.fromJson(response);
                            if(obj['s'] == 1){
                                dojo.fx.Toggler({
                                    node: evt.srcElement.parentNode,
                                    showDuration: 350,
                                    showFunc: dojo.fx.wipeOut
                                }).show();
                            }
                        }
                    });
                });
            }
        });
    }
    dojo.query("#loadEditor").onclick(function(evt){
        // 点击发表回复按钮 - 加载编辑器
        var newTipButton = evt.srcElement || evt.currentTarget
        if(!usercheck()) {
            $(newTipButton).html('还没有登录,你可以 <a href=\"/log/\">登录</a> / <a href=\"/log/signprom.php\">注册</a> 后再进行操作');
            return;
        } else {
            if(editor != null) {
                dojo.byId('ps-editor-wapper').style.display = "block";
                return;
            } else {
                $(newTipButton).html('编辑器加载中');
                if(!$_LOCK.tips_editorloading){
                    $_LOCK.tips_editorloading = true;
                    loadKindEditor("ps-editor",{
                        heightx:"350px",
                        items : 1
                    },function(editor){
                        $(newTipButton).hide();
                        window.editor = editor;
                        dojo.byId('ps-editor-wapper').style.display = "block";
                    });
                }
            }
        }
    });
    
    dojo.query("#editBack").onclick(function(){
        $("#postMainContent").show();
        $("#back2List").show();
        $(this).hide();
        $("#title").show();
        $("#editTitle").hide();
        $("#savePostChange").hide();
        $(".ke-container").hide();
    });

    dojo.query("#tipsub-back").onclick(function(){
        dojo.byId("edit-area").style.display = 'none';
        dojo.byId("tips-submit-cast").style.display = 'block';
    });
    
    dojo.query("#editPost-button").onclick(function(_button){
        //编辑帖子
        var editor_editpost = null;
        loadKindEditor("editPost-area",{
            height:"346px"
        },function(editor_editpost){
            $("#postMainContent").hide();
            $("#back2List").hide();
            $("#editBack").show();
            editor_editpost.html("loading");
            $.post("/minbbs/postCommand/getRawPostData.php",{
                postid:$("#postid").val()
            },function(res){
                $("#title").hide();
                $("#editTitle").show();
                $("#savePostChange").show();
                dojo.style(_button.srcElement,"display","none");
                editor_editpost.html(res.html_specialchars_back());
                dojo.query("#savePostChange").onclick(function(evt){
                    var btn = this;
                    $.post("/minbbs/postCommand/changePost.php",{
                        postid : $('#postid').val(),
                        title : $('#editTitle>input').val().html_specialchars(),
                        content : editor_editpost.html().html_specialchars(),
                        postdate : $('#postdate').val()
                    },function(Res){
                        var jn_state = String2Json(Res);
                        if(jn_state['s'] == '1'){
                            dojo.style(btn,"display","none");
                            dojo.style(dojo.byId("editBack"),"display","none");
                            dojo.style(dojo.byId("back2List"),"display","block");
                            $("#title").html($("#editTitle>input").val()).show();
                            $("#editTitle").hide();
                            $("#postMainContent").show().html(editor_editpost.html().html_specialchars_final());
                            editor_editpost.remove();
                            $("#editPost-area").hide();
                            dojo.query("pre[name='code']",dojo.query("#postMainContent")[0]).forEach(function(node) {
                                dojo.query(node).attr('name','codeLast');
                            });
                            dp.SyntaxHighlighter.HighlightAll("codeLast");
                        } else {
                            alert("保存失败");
                        }
                    });
                });
            });
        });
    });

    dojo.query("#ps-submit-btn").onclick(function(evt){
        var newTipButton = evt.srcElement;
        if(!usercheck()) {
            //木有登录
            $(newTipButton).html("还没有登录,你可以 <a href=\"/log/\">登录</a> / <a href=\"/log/signprom.php\">注册</a> 后再进行操作");
            return;
        } else {
            
            var content = editor.html();
            $.post("/minbbs/lib/addNewComm.php",{
                psid : dojo.byId("postid").value,
                content : content
            },function(response){
                var Obj_rep = String2Json(response);
                if(Obj_rep.s==1){
                    // 服务器返回成功信息 , 记得解url编码 , cookie 里面的用户名是编码的
                    // 变换效果用jQ实现
                    var _node_data = dojo.toDom(templates_replace(TMPLATES_comm,{
                        ush : Obj_rep.img,
                        uurl : '/user/'+getCookie("_uid"),
                        usn : decodeURI(getCookie("username")),
                        ct : editor.html()
                    }));
                    $('#vps-comm-wapper').append(_node_data);
                    $(_node_data).hide();
                    //后处理 - 代码段格式化
                    dojo.query("pre[name='code']",_node_data).forEach(function(node) {
                        dojo.query(node).attr('name','codeLast');
                    });
                    dp.SyntaxHighlighter.HighlightAll("codeLast");
                
                    //加载节点 隐藏编辑器
                    $(_node_data).fadeIn(300);
                    dojo.byId('ps-editor-wapper').style.display = 'none';
                } else {
                    //错误处理 懒得做了
                    return;
                }
            });
        }
    });
});

function rep(evt,mod){
    var index = null;
    var actuid = null;
    require(["dojo/dom-attr"], function(domAttr){
        index = parseInt(domAttr.get(evt,"rel"));
        actuid = parseInt(domAttr.get(evt,"actuid"));
    });
    var Tmp = dojo.toDom(TMPLATES_commCaster);
    
    if(mod == 1){
        dojo.style(evt.parentNode,"display","none");
        dojo.place(Tmp,dojo.query(".vps-wapper-i")[index]);
        dojo.style(Tmp,"margin-left","0");
    } else if(mod == 2) {
        dojo.style(evt,"display","none");
        dojo.place(Tmp,evt.parentNode.parentNode);
        dojo.style(Tmp,"margin-left","62px");
    }
    
    dojo.query("textarea",Tmp)[0].focus();
    dojo.query(".concbtn",Tmp).onclick(function(evt){
        $.post("/minbbs/lib/postRcomm.php",{
            index : index,
            postid : dojo.byId("postid").value,
            content : dojo.query(".commAddOnCast textarea")[0].value.html_specialchars_rawTextArea(),
            actuid : actuid
        },function(res){
            var s = String2Json(res);
            if(s['s'] == '1'){
                var tpl_node = dojo.toDom(templates_replace(TMPLATES_subcomm,{
                    uid:getCookie('_uid'),
                    uurl:'/user/' + getCookie('_uid'),
                    usn:getCookie('username'),
                    ush:s['headimg'] + "_32x",
                    amp : "/user/"+ actuid,
                    amn : s['2un'],
                    ct : dojo.query(".commAddOnCast textarea")[0].value
                }));
                dojo.place(tpl_node,dojo.query(".cms")[index]);
                $(tpl_node).hide().slideDown();
                dojo.style(Tmp,"display","none");
            }
        });
    });
}