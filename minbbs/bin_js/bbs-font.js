var editor;
var $_LOCK = {};
$_LOCK.tips_editorloading = false;
$_LOCK.editor_showed = false;
var tpl_post_list_items = '<div class="ps-list-items"><a class="headwapper" href="${uurl}"><img src="${ush}" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div class="ps-lt-wapp-l"><span class="block"><a class="ps-lt-title" href="${url}">${title}</a></span><span class="Gray">由 <a href="${uurl}">${usn}</a> 发布于 刚刚</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">0</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">0</b>回复</span></div></div></div>';

dojo.addOnLoad(function(){
    dojo.query("#ps-newpost-btn").on("click", function(e){
        var PostSmWapper = dojo.query('#ps-sm-wapper');
        var EvtBtn = dojo.byId('ps-newpost-btn');
        debug(EvtBtn);
        //dojo.byId('ps-submit-btn').parentNode.style.display = 'none';
        if(editor == null && !$_LOCK.tips_editorloading){
            //编辑器未加载
            $_LOCK.tips_editorloading = true; // 加锁
            EvtBtn.innerHTML = '<img src="/img/loading_19_13.gif"/>';
            loadKindEditor('ps-editor',{
                height:'400px'
            },function(e){
                editor = e; // 全局编辑器句柄绑定
                $_LOCK.tips_editorloading = false;// 解锁
                PostSmWapper.style('display','block');
                $_LOCK.editor_showed = true;
                EvtBtn.innerHTML = '返回';
            });
        } else if(!$_LOCK.editor_showed){
            //编辑器已加载，直接show
            PostSmWapper.style('display','block');
            $_LOCK.editor_showed = true;
            EvtBtn.innerHTML = '返回';
        } else {
            $_LOCK.editor_showed = false;
            EvtBtn.innerHTML = '发表帖子';
            dojo.query('#ps-sm-wapper').style('display','none');
        }
    });

    // 马上发表 按钮绑定
    dojo.query('#ps-submit-btn').on("click",function(e){
        var SID = parseInt(dojo.byId('sid').value);
        switch(SID){
            case 0:
                ps_submit_ques();
                break;
            default:
                ps_submit_default();
        }
    });
//dojo.query("#ps-newpost-btn")[0].click();
});

function ps_submit_default(){
    var PostData = {};
    PostData.title = dojo.byId('post-sm-title').value;
    PostData.content = editor.html();
    PostData.type = null;
    PostData.sid = dojo.byId("sid").value;
    PostData.cache_id = dojo.byId("cache_id").value;

    if(PostData.title != '' && PostData.content != ''){
        //上传loading
        var loading_wapp = loadingWapper('ps-sm-wapper');
        $.post("/minbbs/lib/addNewPost.php",PostData,function(res){
            $(loading_wapp).remove();
            var state = String2Json(res);
            if(state.s == 1){
                var tpl_node = dojo.toDom(templates_replace(tpl_post_list_items,{
                    uid:getCookie('_uid'),
                    uurl:'/user/' + getCookie('_uid'),
                    usn:getCookie('username'),
                    ush:state.img.replace('\/','/'),
                    url:'/minbbs/topic/' + state.psid + '.html',
                    title:PostData.title
                }));
                $('#ps-list').prepend(tpl_node);
                $('#ps-sm-wapper').slideUp(300);
            } else {
            // 错误处理
            }
        });
    } else {
    //@todo
    }
}

function ps_submit_ques(){
    var PostData = {};
    PostData.title = dojo.byId('post-sm-title').value;
    PostData.content = editor.html().replace('\n','');
    PostData.type = '';
    PostData.cache_id = dojo.byId("cache_id").value;

    var loading_wapp = loadingWapper('ps-sm-wapper');
    dojo.xhrPost({
        url : "/q_a/postc/new_question.php",
        postData : dojo.objectToQuery(PostData),
        load :function(res){
            $(loading_wapp).remove();
            var state = String2Json(res);
            debug(state);
            if(state.s == 1){
                var tpl_node = dojo.toDom(templates_replace(tpl_post_list_items,{
                    uid:getCookie('_uid'),
                    uurl:'/user/' + getCookie('_uid'),
                    usn:getCookie('username'),
                    ush:state.ush,
                    url:state.url,
                    title:PostData.title
                }));
                $('#ps-list').prepend(tpl_node);
                $('#ps-sm-wapper').slideUp(300);
            }
        }
    });
}